<?php 
    $date1 = GET_['start_date'];
    $date2 = GET_['end_date'];

    $host         = "localhost";
    
    $username     = "root";
    
    $password     = "";

    $dbname       = "hsereports";
    
    $result_array = array();
    /* Create connection */
    $conn = new mysqli($host, $username, $password, $dbname);

    /* Check connection  */
    if ($conn->connect_error) {
         die("Connection to database failed: " . $conn->connect_error);
    }
    /* SQL query to get results from database */
    
   // $sql = "SELECT project_name, reporter, location, sum(days_worked) as days FROM performance_report ";
    $sql = "SELECT    
            project_name, reporter, location, sum(days_worked) as days
            FROM performance_report  
            WHERE date > '".$date1."' AND date < '".$date2."' 
           ";
    $result = $conn->query($sql);
    /* If there are results from database push to result array */
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($result_array, $row);
        }
    }
    /* send a JSON encded array to client */
    echo json_encode($result_array);
    
    $conn->close();
