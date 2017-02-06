#include <SPI.h>
#include <Ethernet.h>

byte mac[] = {
  0x90, 0xA2, 0xDA, 0x00, 0x9A, 0x60
};

EthernetClient client;

char server[] = "192.168.5.122";

unsigned long lastEventConnectionTime = 0;        // last time you connected to the server, in milliseconds
const unsigned long postingEventInterval = 1000L; // delay between updates, in milliseconds the "L" is needed to use long type numbers

unsigned long lastConnectionTime = 0;        // last time you connected to the server, in milliseconds
const unsigned long postingInterval = 1000L; // delay between updates, in milliseconds the "L" is needed to use long type numbers
String floorNumber = "3";
String currentLine = "";                     // string to hold the text from server
boolean readingRoom = false;                 // if you're currently reading the room
String room = "";                            // string to hold the room
String eventData = "";
int led = 12;

byte segmentLatch = 32;
byte segmentClock = 34;
byte segmentData = 36;

int buzzer1 = 22;
int buzzer2 = 23;
int buzzer3 = 24;
int buzzer4 = 25;
int buzzer5 = 26;
int buzzer6 = 27;
int buzzer7 = 28;
int buzzer8 = 29;
int buzzer0 = 30;


void setup() {
  pinMode(led, OUTPUT);

  Serial.begin(9600);
  while (!Serial) {
    ; // wait for serial port to connect. Needed for native USB port only
  }

  delay(1000);

  pinMode(buzzer1, INPUT_PULLUP);
  pinMode(buzzer2, INPUT_PULLUP);
  pinMode(buzzer3, INPUT_PULLUP);
  pinMode(buzzer4, INPUT_PULLUP);
  pinMode(buzzer5, INPUT_PULLUP);
  pinMode(buzzer6, INPUT_PULLUP);
  pinMode(buzzer7, INPUT_PULLUP);
  pinMode(buzzer8, INPUT_PULLUP);
  pinMode(buzzer0, INPUT_PULLUP);

  pinMode(segmentClock, OUTPUT);
  pinMode(segmentData, OUTPUT);
  pinMode(segmentLatch, OUTPUT);

  digitalWrite(segmentClock, LOW);
  digitalWrite(segmentData, LOW);
  digitalWrite(segmentLatch, LOW);

  Ethernet.begin(mac);

  Serial.print("My IP address: ");
  Serial.println(Ethernet.localIP());

  currentLine.reserve(256);
}

void loop() {

  if (client.available()) {

    char inChar = client.read();
    //Serial.print(inChar);

    currentLine += inChar;

    if (inChar == '\n') {
      currentLine = "";
    }

    if ( currentLine.startsWith("{") && readingRoom == false) {
      readingRoom = true;
      room = "";
    }
    else if (readingRoom) {
      if (inChar == '}') {
        readingRoom = false;
        Serial.println(room);

        postNumber(room.charAt(1), (room.charAt(2) == '+'));
        postNumber(room.charAt(0), false);
        digitalWrite(segmentLatch, LOW);
        digitalWrite(segmentLatch, HIGH);
      }
      else {
        room += inChar;
      }
    }
  }

  if (millis() - lastEventConnectionTime > postingEventInterval) {
    servEvent();
    addEvent();
  }

  if (millis() - lastConnectionTime > postingInterval) {
    getRoom();
  }
}

void servEvent() {
  if (digitalRead(buzzer0) == LOW) {
    eventData = "floor=" + floorNumber;
  }
  else {
    eventData = "";
  }

  if (eventData != "") {
    client.stop();

    Serial.println("serv connecting...");

    if (client.connect(server, 80)) {

      client.println("GET /server/serv_event.php?" + eventData + " HTTP/1.1");
      client.print("Host: "); client.println(server);
      client.println("User-Agent: arduino-ethernet");
      client.println("Connection: close");
      client.println();
      delay(10);
      client.stop();
    }

    lastEventConnectionTime = millis();
  }
}

void addEvent() {
  if (digitalRead(buzzer1) == LOW) {
    eventData = "floor=" + floorNumber + "&room=1";
  }
  else if (digitalRead(buzzer2) == LOW) {
    eventData = "floor=" + floorNumber + "&room=2";
  }
  else if (digitalRead(buzzer3) == LOW) {
    eventData = "floor=" + floorNumber + "&room=3";
  }
  else if (digitalRead(buzzer4) == LOW) {
    eventData = "floor=" + floorNumber + "&room=4";
  }
  else if (digitalRead(buzzer5) == LOW) {
    eventData = "floor=" + floorNumber + "&room=5";
  }
  else if (digitalRead(buzzer6) == LOW) {
    eventData = "floor=" + floorNumber + "&room=6";
  }
  else if (digitalRead(buzzer7) == LOW) {
    eventData = "floor=" + floorNumber + "&room=7";
  }
  else if (digitalRead(buzzer8) == LOW) {
    eventData = "floor=" + floorNumber + "&room=8";
  }
  else {
    eventData = "";
  }

  if (eventData != "") {
    client.stop();

    Serial.println("event connecting...");

    if (client.connect(server, 80)) {

      client.println("GET /server/add_event.php?" + eventData + " HTTP/1.1");
      client.print("Host: "); client.println(server);
      client.println("User-Agent: arduino-ethernet");
      client.println("Connection: close");
      client.println();
      delay(10);
      client.stop();
    }

    lastEventConnectionTime = millis();
  }
}

void getRoom() {
  client.stop();

  if (client.connect(server, 80)) {
    digitalWrite(led, HIGH);

    Serial.println("connecting...");

    client.println("GET /server/get_room.php?floor=" + floorNumber + " HTTP/1.1");
    client.print("Host: "); client.println(server);
    client.println("User-Agent: arduino-ethernet");
    client.println("Connection: close");
    client.println();

    digitalWrite(led, LOW);
  } else {
    Serial.println("connection failed...");
  }

  lastConnectionTime = millis();
}

void postNumber(byte number, boolean decimal)
{
#define a  1<<0
#define b  1<<6
#define c  1<<5
#define d  1<<4
#define e  1<<3
#define f  1<<1
#define g  1<<2
#define dp 1<<7

  byte segments;

  switch (number)
  {
    case '1': segments = b | c; break;
    case '2': segments = a | b | d | e | g; break;
    case '3': segments = a | b | c | d | g; break;
    case '4': segments = f | g | b | c; break;
    case '5': segments = a | f | g | c | d; break;
    case '6': segments = a | f | g | e | c | d; break;
    case '7': segments = a | b | c; break;
    case '8': segments = a | b | c | d | e | f | g; break;
    case '9': segments = a | b | c | d | f | g; break;
    case '0': segments = a | b | c | d | e | f; break;
    case ' ': segments = 0; break;
    case '-': segments = g; break;
    case 'A': segments = a | b | c | e | f | g; break;
    case 'B': segments = c | d | e | f | g; break;
    case 'C': segments = a | d | e | f ; break;
  }

  if (decimal) segments |= dp;

  //Clock these bits out to the drivers
  for (byte x = 0 ; x < 8 ; x++)
  {
    digitalWrite(segmentClock, LOW);
    digitalWrite(segmentData, segments & 1 << (7 - x));
    digitalWrite(segmentClock, HIGH); //Data transfers to the register on the rising edge of SRCK
  }
}

