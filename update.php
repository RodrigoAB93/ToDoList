<!--Modal Edit--> 
<div class="modal" id="EditModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Edit task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body --> ´ 
      
        <?php     

 
        include('db.php');    
        $rows = $db->query($sql); 
        while($result=mysqli_fetch_assoc($rows)){ 

            echo" 
        <div class='modal-body'> 
        <h6>Activity</h6>
         <input id='task' type='text'>".$result['name']."</input> 
         <h6>When?</h6>
         <input id='data' type='date'>".$result['data']."</input> 
         <h6>Priority</h6>
         <input id='importance' type='text'>".$result['importance']."</input>
         
         
        </div>  
        "; 
        }  

        
        $task =$_GET['name']; 
        $data =$_GET['data']; 
        $importance =$_GET['importance'];  
             
        $sql = "update from task set 'name'='.$task.','data'='.$data.','importance'='.$data.'";   

       
        ?>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
        
      
   