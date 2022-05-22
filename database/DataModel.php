<?php 
	require dirname(__FILE__).'/ConnectDatabase.php';

	class DataModel extends ConnectDatabase{
		
		public function __construct()
		{
			parent::__construct();
		}

		public function add($tableName, $data)
		{
			$i = 0;
			$colName = "";
			$colValue = "";
			foreach ($data as $key => $value) {
				if($i != 0){
					$colName .= ", ";
					$colValue .= ", ";
				}
				$colName .=$key;
				$colValue .="'$value'";
				$i++;
			}
			$sql = "INSERT INTO {$tableName}({$colName}) VALUES({$colValue})";
			$query = $this->conn->query($sql);
			if($query == true){
				return $this->conn->insert_id;
			}
			else{
				return null;
			}
		}

		public function insert($sql)
		{
			$query = $this->conn->query($sql);
			if($query == true){
				return $this->conn->insert_id;
			}
			else{
				return null;
			}
		}
		
		public function update($tableName, $data, $condition)
		{
			$colNameValue = "";
			$i = 0;
			foreach ($data as $key => $value) {
				if($i != 0){
					$colNameValue .=", ";
				}
				$colNameValue .=$key."='$value'";
				$i++;
			}
			$sql = "UPDATE {$tableName} SET {$colNameValue} WHERE {$condition}";
			$query = $this->conn->query($sql);
			if($this->conn->affected_rows > 0){
				return true;
			}
			else{
				return false;
			}
		}

		public function delete($tableName, $condition)
		{
			$sql = "DELETE FROM {$tableName} WHERE {$condition}";
			$query = $this->conn->query($sql);
			if($this->conn->affected_rows > 0){
				return true;
			}
			else{
				return false;
			}
		}

		public function get($tableName)
		{
			$result = null;
			$sql = "SELECT * FROM $tableName";
			$query = $this->conn->query($sql);
			if($query != null){
				while ($row = $query->fetch_assoc()) {
					$result[] = $row;
				}
				return $result;
			}
			else{
				return null;
			}
		}

		public function getById($tableName, $idName, $idValue)
		{
			$sql = "SELECT * FROM {$tableName} WHERE {$idName}='{$idValue}'";
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				$result = $query->fetch_assoc();
			}
			return $result;			
		}

		public function getWhere($tableName, $condition)
		{
			$sql = "SELECT * FROM {$tableName} WHERE {$condition}";
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				while ($row = $query->fetch_assoc()) {
					$result[] = $row;
				}
			}
			return $result;			
		}

		public function selectWhere($tableName, $columnName, $condition)
		{
			$sql = "SELECT {$columnName} FROM {$tableName} WHERE {$condition}";
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				while ($row = $query->fetch_assoc()) {
					$result[] = $row;
				}
			}
			return $result;			
		}

		public function getFilter($tableName, $filterArray, $extraCondition = '')
		{
			$condition = "";
			$flag = false;
			foreach ($filterArray as $key => $value) {
				if(strlen($value) > 0){
					if($flag){
						$condition .= " AND "; 
					}
					else{
						$flag = true;
					}
					$condition .= $key."='$value'";
				}
			}

			if(!empty($extraCondition)){
				$condition .= $extraCondition;
			}

			$sql = "SELECT * FROM {$tableName} WHERE {$condition}";
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				while ($row = $query->fetch_assoc()) {
					$result[] = $row;
				}
			}
			// echo $sql;
			// die();
			return $result;			
		}

		public function getQuery($sql)
		{
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				while ($row = $query->fetch_assoc()) {
					$result[] = $row;
				}
			}
			return $result;			
		}

		public function getTotal($tableName)
		{
			$sql = "SELECT count(*) FROM {$tableName}";
			$query = $this->conn->query($sql);
			$result = null;
			if($query != null){
				$row = $query->fetch_array();
				$result = $row[0]; 
			}
			return $result;			
		}

		public function getTotalWhere($tableName, $condition)
		{
			$sql = "SELECT count(*) FROM {$tableName} WHERE {$condition}";
			$query = $this->conn->query($sql);
			$result = 0;
			if($query != null){
				$row = $query->fetch_array();
				$result = $row[0]; 
			}
			return $result;			
		}

		public function max($tableName, $colName)
		{
			$sql = "SELECT max($colName) FROM ".$tableName;
			$query = $this->conn->query($sql);
			if($query != null){
				$row = $query->fetch_array();
				return $row['0'];
			}
			else{
				return null;
			}
		}

		public function getColumnName($tableName, $columnName, $id, $idValue)
		{
			$sql = "SELECT {$columnName} FROM {$tableName} WHERE {$id} = '{$idValue}'";
			$query = $this->conn->query($sql);
			$msg = "";
			if($query != null){
				$row = $query->fetch_assoc();
				if($row != null){
					$msg = $row[$columnName];
				}
			}
			return $msg;	
		}

		public function getSumWhere($tableName, $columnName, $condition)
		{
			$sql = "SELECT sum({$columnName}) FROM {$tableName} WHERE $condition";
			$query = $this->conn->query($sql);
			if($query != null){
				$row = $query->fetch_array();
				return $row['0'];
			}
			else{
				return null;
			}	
		}

		public function getCondition($filterArray)
		{
			$condition = "";
			$flag = false;
			foreach ($filterArray as $key => $value) {
				if(strlen($value) > 0){
					if($flag){
						$condition .= " AND "; 
					}
					else{
						$flag = true;
					}
					$condition .= $key."='$value'";
				}
			}
			return $condition;
		}

		public function timeToArray($time)
		{
			$time_array = explode(' ', $time);
			$hour_minute_array = explode(':', $time_array[0]);
			$hour = $hour_minute_array[0];
			$minute = $hour_minute_array[1];
			$am_pm = $time_array[1];

			$result = array(
				'hour' => $hour,
				'minute' => $minute,
				'am_pm' => $am_pm
			);
			return $result;
		}
	}
 ?>