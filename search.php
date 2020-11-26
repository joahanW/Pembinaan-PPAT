<?php  
$conn = mysqli_connect("localhost", "u9049545_adminfront", "pembinaanppat2020", "u9049545_frontend");
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM peserta WHERE nama LIKE '%".$_POST["query"]."%' LIMIT 5" ;  
      $result = mysqli_query($conn, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li class="list-group-item">'.$row["nama"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li class="list-group-item" >Nama tidak di temukan</li>';  
      }  
      $output .= '</ul class="list-group list-group-flush">';  
      echo $output;  
 }  
 ?>  