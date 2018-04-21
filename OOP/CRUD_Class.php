<?php 
class CRUD extends Database {

		public function insert($table,$data){
				if(!empty($data) && is_array($data)){
					$columns = '';
					$values  = '';
					$i = 0;
					
					$columnString = implode(',', array_keys($data));
					$valueString = ":".implode(',:', array_keys($data));
					$sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")";
					$query = $this->query($sql);
					foreach($data as $key=>$val){
						// $query->bindValue(':'.$key, $val);
						$this->bind(':'.$key, $val);
					}
					$insert = $this->execute();
					return $insert?$this->lastInsert():false;
				}else{
					return false;
				}
			}
			
			public function update($table,$data,$conditions){
				if(!empty($data) && is_array($data)){
					$colvalSet = '';
					$whereSql = '';
					$i = 0;
					
					foreach($data as $key=>$val){
						$pre = ($i > 0)?', ':'';
						$colvalSet .= $pre.$key."='".$val."'";
						$i++;
					}
					if(!empty($conditions)&& is_array($conditions)){
						$whereSql .= ' WHERE ';
						$i = 0;
						foreach($conditions as $key => $value){
							$pre = ($i > 0)?' AND ':'';
							$whereSql .= $pre.$key." = '".$value."'";
							$i++;
						}
					}
					$sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
					$query = $this->query($sql);
					$update = $this->execute();
					return $update?$this->rowCount():false;
				}else{
					return false;
				}
			}
			
			public function delete($table,$conditions){
				
				$whereSql = '';
				if(!empty($conditions)&& is_array($conditions)){
					$whereSql .= ' WHERE ';
					$i = 0;
					foreach($conditions as $key => $value){
						$pre = ($i > 0)?' AND ':'';
						$whereSql .= $pre.$key." = '".$value."'";
						$i++;
					}
				}
				$sql = "DELETE FROM ".$table.$whereSql;
				$this->query($sql);
				$delete = $this->execute();
				return $delete?$delete:false;
			}

			public function getRows($table,$conditions = array()){
				$sql = 'SELECT ';
				$sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
				$sql .= ' FROM '.$table;

				//joins
				if(array_key_exists("join",$conditions)){
					foreach ($conditions['join'] as $key => $value) {
						$sql .= ' INNER JOIN '.$key;
						$sql .= ' ON '.$value;		
					}
				}
				
				if(array_key_exists("where",$conditions)){
					$sql .= ' WHERE ';
					$i = 0;
					foreach($conditions['where'] as $key => $value){
						$pre = ($i > 0)?' AND ':'';
						$sql .= $pre.$key." = '".$value."'";
						$i++;
					}
				}
				
				if(array_key_exists("order_by",$conditions)){
					$sql .= ' ORDER BY '.$conditions['order_by']; 
				}
				
				if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
					$sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit']; 
				}elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
					$sql .= ' LIMIT '.$conditions['limit']; 
				}
				
				$query = $this->query($sql);
				$this->execute();
				
				if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
					switch($conditions['return_type']){
						case 'count':
							$data = $this->rowCount();
							break;
						case 'single':
							$data = $this->single(PDO::FETCH_ASSOC);
							break;
						default:
							$data = '';
					}
				}else{
					if($this->rowCount() > 0){
						$data = $this->resultSet();
					}
				}
				return !empty($data)?$data:false;
			}
	}
?>