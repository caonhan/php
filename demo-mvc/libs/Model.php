<?php
class Model{

    public function __construct(){//kết nối
		$this->conn=mysql_connect(__HOST,__USER,__PASS) or die ("Không thể kết nối server");
		mysql_select_db(__DB_NAME,$this->conn) or die("Không thể kết nối CSDL News");
		mysql_query("set names 'utf8'");
	}
	public function disconnect(){//ngắt kết nối
		if($this->conn){
			@mysql_close($this->conn);
		}
	}
	public function query($sql){//truy vấn
		$this->result=mysql_query($sql,$this->conn);
	}
	public function num_rows(){//đếm số dòng trả về từ câu lệnh truy vấn
		if($this->result){
		    $rows=mysql_num_rows($this->result);
		}
		else{
		    $rows=0;
		}
		return $rows;
	}
	public function fetch()
	{
		if($this->result)
		{
			if($this->num_rows()!=0){
				while($row=mysql_fetch_array($this->result)){
					$this->data[]=$row;
				}
			}else{
				$this->data=0;
			}
		}
		return $this->data;
	 }
	public function select($table, $where='')
	{
		if($where != "")
		{
			if(is_array($where))
			{
				foreach($where as $k => $v)
				{
					$sql[]= "$k='$v'";
				}
				$where=implode(" and ",$sql);
				$where="where $where";
			}
			else
			{
				$where="where $where";
			}
		}
		$sql="select * from $table $where";
		$this->query($sql);
	}
}
?>