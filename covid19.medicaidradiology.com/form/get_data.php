<?php
$date1 = date("Y-m-d", strtotime($_POST['date1']));
$date2 = date("Y-m-d", strtotime($_POST['date2']));
$project = $_POST['project'];
$conn = new mysqli("localhost", "root", "", "hsereports");
if(!$conn){
	die("Fatal Error: Connection Error!");
}
	
$q_book = $conn->query("SELECT project_name, reporter, location, sum(hours_worked)as hours, sum(man_power)as man, sum(toolbox_meets)as toolbox, sum(pretask_meets)as pretask,sum(hse_meets)as hsemeets,sum(fatalities)as fatal,date FROM `performance_report` WHERE `date` BETWEEN '$date1' AND '$date2' AND `project_name` = '$project' ORDER BY `date` ASC") or die(mysqli_error());
$v_book = $q_book->num_rows;
if($v_book > 0){
	while($f_book = $q_book->fetch_array()){
	?>
	<tr>
		<td><?php echo $f_book['project_name']?></td>
		<td><?php echo $f_book['reporter']?></td>
		<td><?php echo $f_book['location']?></td>
        <td><?php echo $f_book['hours']?></td>
		<td><?php echo $f_book['man']?></td>
		<td><?php echo $f_book['toolbox']?></td>
        <td><?php echo $f_book['pretask']?></td>
		<td><?php echo $f_book['hsemeets']?></td>
		<td><?php echo $f_book['fatal']?></td>
        <td><?php echo date("m/d/Y", strtotime($f_book['date']))?></td>
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