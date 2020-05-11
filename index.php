<!doctype html> 
<?php 
include('db.php');    


$sql = "select *from task";   

$rows = $db->query($sql); 



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
  <h1>To Do List</h1>
     <div class="row">  
       

         <div class="col-sm-5 col-sm-8 col-md-10 col-md-3  col-sm-3 col-md-offset-1">   
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" href="add.php">Add Task</button> 
           <button class="btn" id="print">Print</button>
         <table class="table"> 
       
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Activity</th>
      <th scope="col">When?</th>
      <th scope="col">Importance</th> 
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

        <?php  
        
        while($result=mysqli_fetch_assoc($rows)){ 

            echo"   
            <tr> 
            <th scope='row'>".$result['id']."</th>
            <td>".$result['name']."</td>
            <td>".$result['data']."</td>
            <td>".$result['importance']."</td> 
            <td> 
            <button class='btn' id='edit' data-toggle='modal' data-target='#EditModal'>Edit</button> 
            <button class='btn' id='del'>Delete</button>
            </td>       
            
            
            
            
            </tr> 
            
            ";
        }
  
      ?>
 
   
  </tbody>
</table>
         </div>
          
      </div>
      
  </div>  



  <!-- Modal Add -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add new task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"> 
     <form method="post" id='save' action="add.php">
            <h6>Activity</h6>
            <input type="text" id="task" name="task"></input> 
             <h6>When?</h6>
            <input type="date" id="date"  name="date"></input> 
             <h6>Priority</h6>
            <input  type="text" name="priority" id="priority"></input>         
            <input name="save" id="save" class="btn btn-success" type="submit" value="Save">

   </form>
        </div>
        
      
        
      </div>
    </div>
  </div>
</div> 

<!--Modal Edit--> 
<div class="modal" id="EditModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body --> 
        <?php  
        
        while($result=mysqli_fetch_assoc($rows)){ 

            echo" 
        <div class='modal-body'> 
        <h6>Activity</h6>
         <input type='text'>".$result['name']."</input> 
         <h6>When?</h6>
         <input type='date'>".$result['date']."</input> 
         <h6>Priority</h6>
         
         
         
        </div>  
        "; 
        } 
        ?>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
        </div>
        
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