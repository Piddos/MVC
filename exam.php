<?php
	 function get_list_category(){
			$sql = "SELECT id, category_name FROM categories";
			$query= $this->conn->query($sql);
			$data = array();
			while ($row = $query->fetch_array(MYSQLI_NUM)) {
				$data[$iter]['id'] = $row['0'];
				$data[$iter]['category_name'] = $row['1'];
				$iter++; 
			}

			return $data;
		}