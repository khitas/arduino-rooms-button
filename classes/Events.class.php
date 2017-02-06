<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Events extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Events';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='events';
	const SQL_INSERT='INSERT INTO `events` (`event_id`,`name`,`floor`,`room`,`active`,`created_on`,`served_on`) VALUES (?,?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `events` (`name`,`floor`,`room`,`active`,`created_on`,`served_on`) VALUES (?,?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `events` SET `event_id`=?,`name`=?,`floor`=?,`room`=?,`active`=?,`created_on`=?,`served_on`=? WHERE `event_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `events` WHERE `event_id`=?';
	const SQL_DELETE_PK='DELETE FROM `events` WHERE `event_id`=?';
	const FIELD_EVENT_ID=-514785771;
	const FIELD_NAME=958503488;
	const FIELD_FLOOR=-358221065;
	const FIELD_ROOM=958636176;
	const FIELD_ACTIVE=1628734843;
	const FIELD_CREATED_ON=-402231669;
	const FIELD_SERVED_ON=991913108;
	private static $PRIMARY_KEYS=array(self::FIELD_EVENT_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_EVENT_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_EVENT_ID=>'event_id',
		self::FIELD_NAME=>'name',
		self::FIELD_FLOOR=>'floor',
		self::FIELD_ROOM=>'room',
		self::FIELD_ACTIVE=>'active',
		self::FIELD_CREATED_ON=>'created_on',
		self::FIELD_SERVED_ON=>'served_on');
	private static $PROPERTY_NAMES=array(
		self::FIELD_EVENT_ID=>'eventId',
		self::FIELD_NAME=>'name',
		self::FIELD_FLOOR=>'floor',
		self::FIELD_ROOM=>'room',
		self::FIELD_ACTIVE=>'active',
		self::FIELD_CREATED_ON=>'createdOn',
		self::FIELD_SERVED_ON=>'servedOn');
	private static $PROPERTY_TYPES=array(
		self::FIELD_EVENT_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_NAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FLOOR=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_ROOM=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ACTIVE=>Db2PhpEntity::PHP_TYPE_BOOL,
		self::FIELD_CREATED_ON=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_SERVED_ON=>Db2PhpEntity::PHP_TYPE_STRING);
	private static $FIELD_TYPES=array(
		self::FIELD_EVENT_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_NAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,255,0,true),
		self::FIELD_FLOOR=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,true),
		self::FIELD_ROOM=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,10,0,true),
		self::FIELD_ACTIVE=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,true),
		self::FIELD_CREATED_ON=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true),
		self::FIELD_SERVED_ON=>array(Db2PhpEntity::JDBC_TYPE_TIMESTAMP,19,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_EVENT_ID=>null,
		self::FIELD_NAME=>null,
		self::FIELD_FLOOR=>null,
		self::FIELD_ROOM=>null,
		self::FIELD_ACTIVE=>null,
		self::FIELD_CREATED_ON=>null,
		self::FIELD_SERVED_ON=>null);
	private $eventId;
	private $name;
	private $floor;
	private $room;
	private $active;
	private $createdOn;
	private $servedOn;

	/**
	 * set value for event_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $eventId
	 */
	public function setEventId($eventId) {
		$this->eventId=$eventId;
	}

	/**
	 * get value for event_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getEventId() {
		return $this->eventId;
	}

	/**
	 * set value for name 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @param mixed $name
	 */
	public function setName($name) {
		$this->name=$name;
	}

	/**
	 * get value for name 
	 *
	 * type:VARCHAR,size:255,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * set value for floor 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @param mixed $floor
	 */
	public function setFloor($floor) {
		$this->floor=$floor;
	}

	/**
	 * get value for floor 
	 *
	 * type:INT,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFloor() {
		return $this->floor;
	}

	/**
	 * set value for room 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @param mixed $room
	 */
	public function setRoom($room) {
		$this->room=$room;
	}

	/**
	 * get value for room 
	 *
	 * type:VARCHAR,size:10,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getRoom() {
		return $this->room;
	}

	/**
	 * set value for active 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @param mixed $active
	 */
	public function setActive($active) {
		$this->active=$active;
	}

	/**
	 * get value for active 
	 *
	 * type:BIT,size:0,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getActive() {
		return $this->active;
	}

	/**
	 * set value for created_on 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $createdOn
	 */
	public function setCreatedOn($createdOn) {
		$this->createdOn=$createdOn;
	}

	/**
	 * get value for created_on 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * set value for served_on 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @param mixed $servedOn
	 */
	public function setServedOn($servedOn) {
		$this->servedOn=$servedOn;
	}

	/**
	 * get value for served_on 
	 *
	 * type:DATETIME,size:19,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getServedOn() {
		return $this->servedOn;
	}

	/**
	 * Get table name
	 *
	 * @return string
	 */
	public static function getTableName() {
		return self::SQL_TABLE_NAME;
	}

	/**
	 * Get array with field id as index and field name as value
	 *
	 * @return array
	 */
	public static function getFieldNames() {
		return self::$FIELD_NAMES;
	}

	/**
	 * Get array with field id as index and property name as value
	 *
	 * @return array
	 */
	public static function getPropertyNames() {
		return self::$PROPERTY_NAMES;
	}

	/**
	 * get the field name for the passed field id.
	 *
	 * @param int $fieldId
	 * @param bool $fullyQualifiedName true if field name should be qualified by table name
	 * @return string field name for the passed field id, null if the field doesn't exist
	 */
	public static function getFieldNameByFieldId($fieldId, $fullyQualifiedName=true) {
		if (!array_key_exists($fieldId, self::$FIELD_NAMES)) {
			return null;
		}
		$fieldName=self::SQL_IDENTIFIER_QUOTE . self::$FIELD_NAMES[$fieldId] . self::SQL_IDENTIFIER_QUOTE;
		if ($fullyQualifiedName) {
			return self::SQL_IDENTIFIER_QUOTE . self::SQL_TABLE_NAME . self::SQL_IDENTIFIER_QUOTE . '.' . $fieldName;
		}
		return $fieldName;
	}

	/**
	 * Get array with field ids of identifiers
	 *
	 * @return array
	 */
	public static function getIdentifierFields() {
		return self::$PRIMARY_KEYS;
	}

	/**
	 * Get array with field ids of autoincrement fields
	 *
	 * @return array
	 */
	public static function getAutoincrementFields() {
		return self::$AUTOINCREMENT_FIELDS;
	}

	/**
	 * Get array with field id as index and property type as value
	 *
	 * @return array
	 */
	public static function getPropertyTypes() {
		return self::$PROPERTY_TYPES;
	}

	/**
	 * Get array with field id as index and field type as value
	 *
	 * @return array
	 */
	public static function getFieldTypes() {
		return self::$FIELD_TYPES;
	}

	/**
	 * Assign default values according to table
	 * 
	 */
	public function assignDefaultValues() {
		$this->assignByArray(self::$DEFAULT_VALUES);
	}


	/**
	 * return hash with the field name as index and the field value as value.
	 *
	 * @return array
	 */
	public function toHash() {
		$array=$this->toArray();
		$hash=array();
		foreach ($array as $fieldId=>$value) {
			$hash[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		return $hash;
	}

	/**
	 * return array with the field id as index and the field value as value.
	 *
	 * @return array
	 */
	public function toArray() {
		return array(
			self::FIELD_EVENT_ID=>$this->getEventId(),
			self::FIELD_NAME=>$this->getName(),
			self::FIELD_FLOOR=>$this->getFloor(),
			self::FIELD_ROOM=>$this->getRoom(),
			self::FIELD_ACTIVE=>$this->getActive(),
			self::FIELD_CREATED_ON=>$this->getCreatedOn(),
			self::FIELD_SERVED_ON=>$this->getServedOn());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_EVENT_ID=>$this->getEventId());
	}

	/**
	 * cached statements
	 *
	 * @var array<string,array<string,PDOStatement>>
	 */
	private static $stmts=array();
	private static $cacheStatements=true;
	
	/**
	 * prepare passed string as statement or return cached if enabled and available
	 *
	 * @param PDO $db
	 * @param string $statement
	 * @return PDOStatement
	 */
	protected static function prepareStatement(PDO $db, $statement) {
		if(self::isCacheStatements()) {
			if (in_array($statement, array(self::SQL_INSERT, self::SQL_INSERT_AUTOINCREMENT, self::SQL_UPDATE, self::SQL_SELECT_PK, self::SQL_DELETE_PK))) {
				$dbInstanceId=spl_object_hash($db);
				if (null===self::$stmts[$statement][$dbInstanceId]) {
					self::$stmts[$statement][$dbInstanceId]=$db->prepare($statement);
				}
				return self::$stmts[$statement][$dbInstanceId];
			}
		}
		return $db->prepare($statement);
	}

	/**
	 * Enable statement cache
	 *
	 * @param bool $cache
	 */
	public static function setCacheStatements($cache) {
		self::$cacheStatements=true==$cache;
	}

	/**
	 * Check if statement cache is enabled
	 *
	 * @return bool
	 */
	public static function isCacheStatements() {
		return self::$cacheStatements;
	}

	/**
	 * Query by Example.
	 *
	 * Match by attributes of passed example instance and return matched rows as an array of Events instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Events $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Events[]
	 */
	public static function findByExample(PDO $db,Events $example, $and=true, $sort=null) {
		$exampleValues=$example->toArray();
		$filter=array();
		foreach ($exampleValues as $fieldId=>$value) {
			if (null!==$value) {
				$filter[$fieldId]=$value;
			}
		}
		return self::findByFilter($db, $filter, $and, $sort);
	}

	/**
	 * Query by filter.
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * Will return matched rows as an array of Events instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Events[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `events`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Events instances
	 *
	 * @param PDOStatement $stmt
	 * @return Events[]
	 */
	public static function fromStatement(PDOStatement $stmt) {
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * returns the result as an array of Events instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Events[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Events();
			$o->assignByHash($result);
			$resultInstances[]=$o;
		}
		$stmt->closeCursor();
		return $resultInstances;
	}

	/**
	 * Get sql WHERE part from filter.
	 *
	 * @param array $filter
	 * @param bool $and
	 * @param bool $fullyQualifiedNames true if field names should be qualified by table name
	 * @param bool $prependWhere true if WHERE should be prepended to conditions
	 * @return string
	 */
	public static function buildSqlWhere($filter, $and, $fullyQualifiedNames=true, $prependWhere=false) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		return $filter->buildSqlWhere(new self::$CLASS_NAME, $fullyQualifiedNames, $prependWhere);
	}

	/**
	 * get sql ORDER BY part from DSCs
	 *
	 * @param array $sort array of DSC instances
	 * @return string
	 */
	protected static function buildSqlOrderBy($sort) {
		return DSC::buildSqlOrderBy(new self::$CLASS_NAME, $sort);
	}

	/**
	 * bind values from filter to statement
	 *
	 * @param PDOStatement $stmt
	 * @param DFCInterface $filter
	 */
	public static function bindValuesForFilter(PDOStatement &$stmt, DFCInterface $filter) {
		$filter->bindValuesForFilter(new self::$CLASS_NAME, $stmt);
	}

	/**
	 * Execute select query and return matched rows as an array of Events instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Events[]
	 */
	public static function findBySql(PDO $db, $sql) {
		$stmt=$db->query($sql);
		return self::fromExecutedStatement($stmt);
	}

	/**
	 * Delete rows matching the filter
	 *
	 * The filter can be either an hash with the field id as index and the value as filter value,
	 * or a array of DFC instances.
	 *
	 * @param PDO $db
	 * @param array $filter
	 * @param bool $and
	 * @return mixed
	 */
	public static function deleteByFilter(PDO $db, $filter, $and=true) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		if (0==count($filter)) {
			throw new InvalidArgumentException('refusing to delete without filter'); // just comment out this line if you are brave
		}
		$sql='DELETE FROM `events`'
		. self::buildSqlWhere($filter, $and, false, true);
		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}

	/**
	 * Assign values from array with the field id as index and the value as value
	 *
	 * @param array $array
	 */
	public function assignByArray($array) {
		$result=array();
		foreach ($array as $fieldId=>$value) {
			$result[self::$FIELD_NAMES[$fieldId]]=$value;
		}
		$this->assignByHash($result);
	}

	/**
	 * Assign values from hash where the indexes match the tables field names
	 *
	 * @param array $result
	 */
	public function assignByHash($result) {
		$this->setEventId($result['event_id']);
		$this->setName($result['name']);
		$this->setFloor($result['floor']);
		$this->setRoom($result['room']);
		$this->setActive($result['active']);
		$this->setCreatedOn($result['created_on']);
		$this->setServedOn($result['served_on']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Events
	 */
	public static function findById(PDO $db,$eventId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$eventId);
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$result=$stmt->fetch(PDO::FETCH_ASSOC);
		$stmt->closeCursor();
		if(!$result) {
			return null;
		}
		$o=new Events();
		$o->assignByHash($result);
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getEventId());
		$stmt->bindValue(2,$this->getName());
		$stmt->bindValue(3,$this->getFloor());
		$stmt->bindValue(4,$this->getRoom());
		$stmt->bindValue(5,$this->getActive());
		$stmt->bindValue(6,$this->getCreatedOn());
		$stmt->bindValue(7,$this->getServedOn());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getEventId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getName());
			$stmt->bindValue(2,$this->getFloor());
			$stmt->bindValue(3,$this->getRoom());
			$stmt->bindValue(4,$this->getActive());
			$stmt->bindValue(5,$this->getCreatedOn());
			$stmt->bindValue(6,$this->getServedOn());
		} else {
			$stmt=self::prepareStatement($db,self::SQL_INSERT);
			$this->bindValues($stmt);
		}
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$lastInsertId=$db->lastInsertId();
		if (false!==$lastInsertId) {
			$this->setEventId($lastInsertId);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * Update this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function updateToDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_UPDATE);
		$this->bindValues($stmt);
		$stmt->bindValue(8,$this->getEventId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * Delete this instance from the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function deleteFromDatabase(PDO $db) {
		$stmt=self::prepareStatement($db,self::SQL_DELETE_PK);
		$stmt->bindValue(1,$this->getEventId());
		$affected=$stmt->execute();
		if (false===$affected) {
			$stmt->closeCursor();
			throw new Exception($stmt->errorCode() . ':' . var_export($stmt->errorInfo(), true), 0);
		}
		$stmt->closeCursor();
		return $affected;
	}


	/**
	 * get element as DOM Document
	 *
	 * @return DOMDocument
	 */
	public function toDOM() {
		return self::hashToDomDocument($this->toHash(), 'Events');
	}

	/**
	 * get single Events instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Events
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Events();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Events from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Events[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Events') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>