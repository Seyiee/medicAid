<?php  
 //filter.php  
 if(isset($_POST["start_date"], $_POST["end_date"]))  
 {  
      $connect = mysqli_connect("localhost", "root", "", "hsereports");  
      $output = '';  
      $query = "  
           SELECT * FROM perfomance_report  
           WHERE date BETWEEN '".$_POST["start_date"]."' AND '".$_POST["end_date"]."'  
      ";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
<table class="table align-items-center" id="perf_table">
                 <thead>
                   <tr>
                     <th> ID</th>
                     <th>AMOUNT</th>
                     <th>STATUS</th>
                     <th>DATE</th>
                     
                   </tr>
                   </thead>
                  
               
      ';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                    <tbody>
                 <tr>
                  
                   <td></td>
                     <td></td>
                      <td> '.$row['days_worked'].' </td>
                   <td>'. $row['fatalaties'].'  </td>
                 </tr>
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="4">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</tbody>
             </table>';  
      echo $output;  
 }  
 ?>
