
<?php
    include "connection.php";
    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $number = $_POST['number'];
     $address = $_POST['address'];
   

     
    if($conn->connect_error){
         die("connection Failed :" .$conn->connect_error);
     }else{
    ?>
    <script>
    alert("Your data is successfully registered");
    </script>
    <?php
     $insertquery = $conn->prepare("insert into information(name, email, number, address) values(?,?,?,?)");
     $insertquery->bind_param("ssis",$name,$email,$number,$address);
     $insertquery->execute();
     $insertquery->close();
     }
    
?>
<html>
 <head>
 <style>
     div{
         background: coral;
         height: 20px;
         width: 110px;
         border: 1px solid;
         text-align:center;
     }
    .record{
        color:black;
        padding-left: 7px;
       
       
    }
 </style>
</head>
 <h3>Your details has been recorded</h3>
 <div>
 <a href="display.php" class='record'>Check Record</a>
 </div>
</html>