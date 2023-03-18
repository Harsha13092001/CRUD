<?php
include('config.php');
$id=$_GET['id'];
if(isset($_POST['update']))
{
	$growth=$_POST['growth'];
    $length=$_POST['length']; 
    $weight=$_POST['weight'];
    $price=$_POST['price'];
    
    
    $query="UPDATE `cotton_candy` SET `growth`='$growth', `length`='$length', `weight`='$weight',`price`='$price'where `id`='$id'";

    $rs=mysqli_query($conn,$query)or die(mysqli_error($conn));
    if($rs)
    {
        ?>
        <script type="text/javascript">
        alert("Cotton Candy Details Updated successfully");
		window.location="view_cotton_candy.php";
        </script>
     <?php
    }
  }


  
 ?>