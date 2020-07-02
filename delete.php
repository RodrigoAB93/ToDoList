
 
<?php
 include('db.php');      

    $delete=$_GET['id']; 


    $sql="DELETE  FROM task WHERE id = '$delete' " ;
    $exe = $db->query($sql);  

if($exe = true){ 
   header('location:index.php');
}




?>