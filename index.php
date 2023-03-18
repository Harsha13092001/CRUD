<?php

include "config.php";

  if(isset($_POST['submit'])) {

    $first_name = $_POST['first_name'];

    $last_name = $_POST['last_name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $phone_no = $_POST['phone_no'];


    $sql = "INSERT INTO `employee_id`(`first_name`,`last_name`, `email`, `password`, `gender`,`phone_no`) VALUES ('$first_name','$last_name','$email','$password','$gender','$phone_no')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error: it's not available"; 

    } 

    $conn->close(); 

  }

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>document</title>
</head>
<body>

<div id="myform">

</div>

<form action="" method="post">
  <fieldset>
 
    
        <label for="Name"><b> UserName:</b></label><br>
        <input type="text" name="first_name" placeholder="enter your firstname">

       <label for="Name"></label>
        <input type="text"name="last_name" placeholder="enter lastname"><br>

        <br> <label for="email"><b> email:</b></label><br>
      <input type="email" name="email" placeholder="enter your email"><br>

      <br><label for="password"><b> Password:</b></label><br>
      <input type="password" name="password"placeholder="enter your password"><br>

      <br><label for="gender"><b>gender:</b></label>
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other <br>
    
        <br> <label for="phone"><b> phone no:</b></label><br>
        <input type="phone" name="phone_no" placeholder="enter your phone no" maxlength="10"><br>
    
     
        <br><input name="submit"type="submit">
           
         <td><input name="reset"type="reset"></td>




        
     
  </fieldset>
 
</form> 
</body>
</html>