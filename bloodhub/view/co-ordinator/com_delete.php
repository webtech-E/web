<?php 
 
include "../db_conn.php";

if(isset($_POST['delete']))//this will tell us what to do if some data has been post through form with button.  
{  
    $id=$_POST['id'];  
    
    $delete_query="Delete from comments where ID='$id'";  
  
    $run_query=mysqli_query($conn,$delete_query);  
	
  
    if($run_query)  
    {  
  
        echo '<script>alert("Data deleted");</script>';  
		header("location: ahome.php");
    }  
    else {
		
		echo'<script>alert("Data Not Deleted";</script>';
		
		}  
  
}  
  
?> 