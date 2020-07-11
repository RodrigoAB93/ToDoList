<!doctype html> 
<?php 
include 'db.php';     

$id = $_GET['id'];

$sql = "SELECT * FROM task WHERE id = '$id'";   

$rows = $db->query($sql); 

$row = $rows -> fetch_assoc();  
if(isset($_POST['send'])){
$task = $_POST['task']; 
$data = $_POST['date'];  
$importance =$_POST['priority'];
$sql2 = "UPDATE task SET name='$task',data='$data',importance='$importance' WHERE id = '$id'";

$db ->query($sql2); 

header('location: index.php'); 
}
?>
<html lang="en">
  <head>
    <title>To Do List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="body">  

  <div class="container">  
  <h1>Edit Task</h1>
     <div class="row">  
       

         <div class="col-sm-5 col-sm-8 col-md-10 col-md-3  col-sm-3 col-md-offset-1">    
         <button class="btn" id="print"><a href="index.php">Home</a></button>
           <button class="btn" id="print">Print</button>
         <table class="table"> 
       
  
     <form method="post" id='save'> 
            <h3>Activity</h3>
            <input type="text" id="task" name="task" value="<?php echo $row['name']?>"></input> 
             <h3>When?</h3>
            <input type="date" id="date"  name="date" value="<?php echo $row['data']?>"></input> 
             <h3>Priority</h3>
           
          
          <select name="priority" value=" <?php echo $row['importance']?>" id="priority" >    
          
            <option name="priority" value="Relax">Relax</option> 
            <option name="priority" value="On the time">On the time</option> 
            <option name="priority" value="Danger">Danger</option>

          </select>
          
          
               
            <input name="send" id="send" class="btn btn-success" type="submit" value="Save">

   </form>
        </div>
        
  




  </div>
</div>
</div> 


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>