<?php
		include_once("connection.php");
		include_once("helper.php");
	if(isset($_POST["all_data"])){
		echo"<thead>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>last Name</th>

		</thead>
		<tbody>
		
		";	
			$q =  "select * from users where 1";
			$result = mysql_query($q);
			if($result){
				echo "good";
			}else{
				echo "noop";
			}
			
			while($row =  mysql_fetch_array($result)){
				echo "<tr>
						<td>".getName($row['f_name'])."</td>
						<td>".getName($row['m_name'])."</td>
						<td>".getName($row['l_name'])."</td>
						</tr>
						";


			}
			echo "</tbody>";


	}



	if(isset($_POST["all_data_with_num"])){
		echo"<thead>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>last Name</th>

		</thead>
		<tbody>
		
		";	
			$q =  "select * from users where 1";
			$result = mysql_query($q);			
			while($row =  mysql_fetch_array($result)){
				echo "<tr>
						<td>".$row['f_name']."</td>
						<td>".$row['m_name'] ."</td>
						<td>".$row['l_name'] ."</td>
						</tr>
						";


			}
			echo "</tbody>";


	}





	if(isset($_POST["name_table"])){
		echo"<thead>
			<th>Name</th>
			<th>Code</th>
		</thead>
		<tbody>
		
		";	
			$q =  "select * from name_codes	 where 1";
			$result = mysql_query($q);
			if($result){
				echo "good";
			}else{
				echo "noop";
			}
			
			
			while($row =  mysql_fetch_array($result)){
				echo "<tr>
						<td>".$row['Name']."</td>
						<td>".$row['code']."</td>
	          		  </tr>";


			}
			echo "</tbody>";


	}

?>