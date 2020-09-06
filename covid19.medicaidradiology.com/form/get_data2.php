<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$project = $_POST['project'];
$conn = new mysqli("localhost", "root", "", "hsereports");
if(!$conn){
	die("Fatal Error: Connection Error!");
}
	
$q_book = $conn->query("SELECT * FROM `weather` WHERE `date` BETWEEN '$date1' AND '$date2' AND `project_name` = '$project' ORDER BY `date` ASC") or die(mysqli_error());
$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
	?>
	<tr>
        <td><?php echo date("m/d/Y", strtotime($f_book['date']))?></td>
        <td><?php echo $f_book['rain']?></td>
		<td><?php echo $f_book['time']?></td>
		<td><?php echo $f_book['duration']?> Hours</td>
	
      
	</tr>
	<?php
	}
}else{
		echo '
		<tr>
			<td colspan = "4"><center>Record Not Found</center></td>
		</tr>
		';
}
	?>