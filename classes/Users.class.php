<?php

/**
 * 
 *
 * @version 1.105
 * @package entity
 */
class Users extends Db2PhpEntityBase implements Db2PhpEntityModificationTracking {
	private static $CLASS_NAME='Users';
	const SQL_IDENTIFIER_QUOTE='`';
	const SQL_TABLE_NAME='users';
	const SQL_INSERT='INSERT INTO `users` (`user_id`,`username`,`password`,`firstname`,`lastname`,`active`) VALUES (?,?,?,?,?,?)';
	const SQL_INSERT_AUTOINCREMENT='INSERT INTO `users` (`username`,`password`,`firstname`,`lastname`,`active`) VALUES (?,?,?,?,?)';
	const SQL_UPDATE='UPDATE `users` SET `user_id`=?,`username`=?,`password`=?,`firstname`=?,`lastname`=?,`active`=? WHERE `user_id`=?';
	const SQL_SELECT_PK='SELECT * FROM `users` WHERE `user_id`=?';
	const SQL_DELETE_PK='DELETE FROM `users` WHERE `user_id`=?';
	const FIELD_USER_ID=973931561;
	const FIELD_USERNAME=127546876;
	const FIELD_PASSWORD=1610246081;
	const FIELD_FIRSTNAME=-560042795;
	const FIELD_LASTNAME=-1065386169;
	const FIELD_ACTIVE=-1525334612;
	private static $PRIMARY_KEYS=array(self::FIELD_USER_ID);
	private static $AUTOINCREMENT_FIELDS=array(self::FIELD_USER_ID);
	private static $FIELD_NAMES=array(
		self::FIELD_USER_ID=>'user_id',
		self::FIELD_USERNAME=>'username',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_FIRSTNAME=>'firstname',
		self::FIELD_LASTNAME=>'lastname',
		self::FIELD_ACTIVE=>'active');
	private static $PROPERTY_NAMES=array(
		self::FIELD_USER_ID=>'userId',
		self::FIELD_USERNAME=>'username',
		self::FIELD_PASSWORD=>'password',
		self::FIELD_FIRSTNAME=>'firstname',
		self::FIELD_LASTNAME=>'lastname',
		self::FIELD_ACTIVE=>'active');
	private static $PROPERTY_TYPES=array(
		self::FIELD_USER_ID=>Db2PhpEntity::PHP_TYPE_INT,
		self::FIELD_USERNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_PASSWORD=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_FIRSTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_LASTNAME=>Db2PhpEntity::PHP_TYPE_STRING,
		self::FIELD_ACTIVE=>Db2PhpEntity::PHP_TYPE_BOOL);
	private static $FIELD_TYPES=array(
		self::FIELD_USER_ID=>array(Db2PhpEntity::JDBC_TYPE_INTEGER,10,0,false),
		self::FIELD_USERNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_PASSWORD=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_FIRSTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_LASTNAME=>array(Db2PhpEntity::JDBC_TYPE_VARCHAR,50,0,true),
		self::FIELD_ACTIVE=>array(Db2PhpEntity::JDBC_TYPE_BIT,0,0,true));
	private static $DEFAULT_VALUES=array(
		self::FIELD_USER_ID=>null,
		self::FIELD_USERNAME=>null,
		self::FIELD_PASSWORD=>null,
		self::FIELD_FIRSTNAME=>null,
		self::FIELD_LASTNAME=>null,
		self::FIELD_ACTIVE=>null);
	private $userId;
	private $username;
	private $password;
	private $firstname;
	private $lastname;
	private $active;

	/**
	 * set value for user_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @param mixed $userId
	 */
	public function setUserId($userId) {
		$this->userId=$userId;
	}

	/**
	 * get value for user_id 
	 *
	 * type:INT,size:10,default:null,primary,unique,autoincrement
	 *
	 * @return mixed
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * set value for username 
	 *
	 * type:VARCHAR,size:50,default:null,unique,nullable
	 *
	 * @param mixed $username
	 */
	public function setUsername($username) {
		$this->username=$username;
	}

	/**
	 * get value for username 
	 *
	 * type:VARCHAR,size:50,default:null,unique,nullable
	 *
	 * @return mixed
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * set value for password 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $password
	 */
	public function setPassword($password) {
		$this->password=$password;
	}

	/**
	 * get value for password 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * set value for firstname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $firstname
	 */
	public function setFirstname($firstname) {
		$this->firstname=$firstname;
	}

	/**
	 * get value for firstname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * set value for lastname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @param mixed $lastname
	 */
	public function setLastname($lastname) {
		$this->lastname=$lastname;
	}

	/**
	 * get value for lastname 
	 *
	 * type:VARCHAR,size:50,default:null,nullable
	 *
	 * @return mixed
	 */
	public function getLastname() {
		return $this->lastname;
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
			self::FIELD_USER_ID=>$this->getUserId(),
			self::FIELD_USERNAME=>$this->getUsername(),
			self::FIELD_PASSWORD=>$this->getPassword(),
			self::FIELD_FIRSTNAME=>$this->getFirstname(),
			self::FIELD_LASTNAME=>$this->getLastname(),
			self::FIELD_ACTIVE=>$this->getActive());
	}


	/**
	 * return array with the field id as index and the field value as value for the identifier fields.
	 *
	 * @return array
	 */
	public function getPrimaryKeyValues() {
		return array(
			self::FIELD_USER_ID=>$this->getUserId());
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
	 * Match by attributes of passed example instance and return matched rows as an array of Users instances
	 *
	 * @param PDO $db a PDO Database instance
	 * @param Users $example an example instance defining the conditions. All non-null properties will be considered a constraint, null values will be ignored.
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Users[]
	 */
	public static function findByExample(PDO $db,Users $example, $and=true, $sort=null) {
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
	 * Will return matched rows as an array of Users instances.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param array $filter array of DFC instances defining the conditions
	 * @param boolean $and true if conditions should be and'ed, false if they should be or'ed
	 * @param array $sort array of DSC instances
	 * @return Users[]
	 */
	public static function findByFilter(PDO $db, $filter, $and=true, $sort=null) {
		if (!($filter instanceof DFCInterface)) {
			$filter=new DFCAggregate($filter, $and);
		}
		$sql='SELECT * FROM `users`'
		. self::buildSqlWhere($filter, $and, false, true)
		. self::buildSqlOrderBy($sort);

		$stmt=self::prepareStatement($db, $sql);
		self::bindValuesForFilter($stmt, $filter);
		return self::fromStatement($stmt);
	}

	/**
	 * Will execute the passed statement and return the result as an array of Users instances
	 *
	 * @param PDOStatement $stmt
	 * @return Users[]
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
	 * returns the result as an array of Users instances without executing the passed statement
	 *
	 * @param PDOStatement $stmt
	 * @return Users[]
	 */
	public static function fromExecutedStatement(PDOStatement $stmt) {
		$resultInstances=array();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)) {
			$o=new Users();
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
	 * Execute select query and return matched rows as an array of Users instances.
	 *
	 * The query should of course be on the table for this entity class and return all fields.
	 *
	 * @param PDO $db a PDO Database instance
	 * @param string $sql
	 * @return Users[]
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
		$sql='DELETE FROM `users`'
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
		$this->setUserId($result['user_id']);
		$this->setUsername($result['username']);
		$this->setPassword($result['password']);
		$this->setFirstname($result['firstname']);
		$this->setLastname($result['lastname']);
		$this->setActive($result['active']);
	}

	/**
	 * Get element instance by it's primary key(s).
	 * Will return null if no row was matched.
	 *
	 * @param PDO $db
	 * @return Users
	 */
	public static function findById(PDO $db,$userId) {
		$stmt=self::prepareStatement($db,self::SQL_SELECT_PK);
		$stmt->bindValue(1,$userId);
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
		$o=new Users();
		$o->assignByHash($result);
		return $o;
	}

	/**
	 * Bind all values to statement
	 *
	 * @param PDOStatement $stmt
	 */
	protected function bindValues(PDOStatement &$stmt) {
		$stmt->bindValue(1,$this->getUserId());
		$stmt->bindValue(2,$this->getUsername());
		$stmt->bindValue(3,$this->getPassword());
		$stmt->bindValue(4,$this->getFirstname());
		$stmt->bindValue(5,$this->getLastname());
		$stmt->bindValue(6,$this->getActive());
	}


	/**
	 * Insert this instance into the database
	 *
	 * @param PDO $db
	 * @return mixed
	 */
	public function insertIntoDatabase(PDO $db) {
		if (null===$this->getUserId()) {
			$stmt=self::prepareStatement($db,self::SQL_INSERT_AUTOINCREMENT);
			$stmt->bindValue(1,$this->getUsername());
			$stmt->bindValue(2,$this->getPassword());
			$stmt->bindValue(3,$this->getFirstname());
			$stmt->bindValue(4,$this->getLastname());
			$stmt->bindValue(5,$this->getActive());
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
			$this->setUserId($lastInsertId);
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
		$stmt->bindValue(7,$this->getUserId());
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
		$stmt->bindValue(1,$this->getUserId());
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
		return self::hashToDomDocument($this->toHash(), 'Users');
	}

	/**
	 * get single Users instance from a DOMElement
	 *
	 * @param DOMElement $node
	 * @return Users
	 */
	public static function fromDOMElement(DOMElement $node) {
		$o=new Users();
		$o->assignByHash(self::domNodeToHash($node, self::$FIELD_NAMES, self::$DEFAULT_VALUES, self::$FIELD_TYPES));
		return $o;
	}

	/**
	 * get all instances of Users from the passed DOMDocument
	 *
	 * @param DOMDocument $doc
	 * @return Users[]
	 */
	public static function fromDOMDocument(DOMDocument $doc) {
		$instances=array();
		foreach ($doc->getElementsByTagName('Users') as $node) {
			$instances[]=self::fromDOMElement($node);
		}
		return $instances;
	}

}
?>