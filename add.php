<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "task";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  if(isset($_POST['submit'])){
      
       $title= $_POST['title'];
       $desc= $_POST['desc'];
       $date= $_POST['date'];
       $prior= $_POST['prior'];
      

       $q1=mysqli_query($conn,"SELECT * FROM `task`.`addtask` where `title`='$title'");

       
          $coun=mysqli_num_rows($q1);
          if($coun==1)
          {     
              $er="task cannot be Inserted .Already in VIEW";
               echo "<script type='text/javascript'>alert('Cannot be added already in VIEW')</script>";
               
            
          }
          elseif ($coun==0) {
            
          $query6 = "INSERT INTO `task`.`addtask` (`title`, `desc`, `date`, `prior`)values ('$title','$desc','$date','$prior')";
         $retval = mysqli_query($conn,$query6);   
             

         if(!$retval ){
            
            die();               
            }
       if ($retval){
            
                          $err="task Inserted";
             header('location:qwe.php');
           }
       mysqli_close($conn);
     }
     
   }
?>