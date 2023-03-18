<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `employee_id` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        // echo "Record deleted successfully.";
        ?>
        <script>
            alert("deleted successfully");
            window.location('view.php');
        </script>
<?php
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>