
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>master add</title>

</head>

<body>


<table style="width:475px ; max-height: 250px; border-style: ridge;border-color: #000066;border-width: 5px;"align="left">

      <form action="add.php" method="POST">
       <td colspan="2" align="left"> <h2 class="nm" style="width: 200px; padding-left: 20px;">ADD TASK</h2></td>
       <tr align="center">
            <td align="right"> <strong>TITLE</strong></td>
                <td ><input name='title' type='text' maxlength="15" required>
               
         </td>
         </tr>
      <tr>
      <td align="right"> <strong>DESCRIPTION</strong></td>
      <td ><input name='desc' type='text' minlength="30" maxlength="50" required>
            
            </td>
            </tr>
            <tr>
            <td align="right"> <strong>DATE</strong></td>    
      <td><input name='date' type='date' required></td>
            </tr>
            <tr>
      <td align="right"> <strong>PRIORITY</strong></td>
      <td><select name='prior' required>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            </td>
      </tr>
      
      <tr>
      <td  colspan="2" align="center"><input type='submit' value='SUBMIT' name='submit'></td>
     
        
         </tr>

      
    </form>                           
    </table>
       


</div>


<?php 
  require_once('connection.php');
  
  $que1=mysqli_query($con,"SELECT * FROM `addtask`"); 
 ?>
  
  
<div style="padding-left: 40% ; width:50%; max-height: 50%" >

  <form action="" method="post" style="width:700px ; max-height: 100%; border-style: ridge;border-color: #000066;border-width: 5px; margin-left: 190px;"align="center"form-group >
        <div  style="float:left; width:100%; " align="center">
         <h2 class="lm" style="padding-left: 40px">VIEW TASK</h2>
          <div style="display:inline;">
          <select multiple class="form-control" id="adch" name="adch" id="lstBox1" style="height: 250px; padding-left: 10px" required>
            <option disabled>TITLE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DESCRIPTION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRIORITY&nbsp;&nbsp;</option>
                            <?php
                while ($row=mysqli_fetch_array($que1)):;
                ?>
                <option value="<?php echo $row[0];?>" >

                                        
                      <?php echo $row[0];?>
                    <?php echo "nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>
                    <?php echo $row[1];?>
                    <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>
                    <?php echo $row[2];?>
                    <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>
                    <?php echo $row[3];?>
                    <?php echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"?>
                    
                                </option>
              <?php endwhile;  ?>

          </select>
        
        </div>
      </div>
                <p></p>  
               <input type='submit' value='REMOVE' name='delete'>
            <button type="reset" value="Reset">Reset</button>
            </form>
</div>
</div>

<div>
    
</div>
 <div>
 
</div>
<div>
  <?php 

      if (isset($_POST['delete'])) {
      require_once('connection.php');
      $cono=$_POST['adch'];
      $query1=mysqli_query($con,"SELECT * FROM `addtask` where `title`= '$cono'");
      if (!$query1 ) {
        die('......');
      }
      else
      {
        $info=mysqli_fetch_assoc($query1);
        $title=$info['title'];
        $del=mysqli_query($con,"DELETE FROM `addtask` WHERE `title`='$cono'");
        if (!$del) {
          die('could not delete THE TASK FROM VIEW');
        }
        else
        {
          
            header('Location:qwe.php');
        }
        
      }
    }

     ?>
</div>

</body>
</html>