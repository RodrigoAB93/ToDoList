 
 <?php
 include('db.php');      


if(isset($_POST['save'])){

    $name=$_POST['task']; 
    $date=$_POST['date']; 
    $priority=$_POST['priority']; 

    $sql="INSERT INTO task (name,data,importance) VALUES ('$name','$date','$priority')";
    $exe = $db->query($sql);  

if($exe == true){ 
   header('location:index.php');
}


}

?>