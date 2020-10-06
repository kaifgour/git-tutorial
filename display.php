
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
  h2{
      font-size:18px;
      text-align:center;

  }
  table{
     border-collapse:collapse;
     box-shadow:0 10px 20px 0 rgba(0,0,0,0.3);
     border-radius:10px;
     margin:auto;
  }
  th,td{
      border:1px solid #f2f2f2;
      padding:8px 30px;
      text-align:center;
      color:black;
  }
  th{
      font-weight:500;
  }
</style>
</head>
<body>

<div>
<h2>Your Entered Data</h2>
</div>
    <table>
     <thead>
       <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>EMAIL</th>
           <th>NUMBER</th>
           <th>ADDRESS</th>
       </tr>      
     </thead>
     <tbody>
    <?php

    include 'connection.php';

    $selectquery= "SELECT * from information ";
    $query = mysqli_query($conn,$selectquery);

    $res =mysqli_fetch_array($query);

    while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['name'];?></td>
        <td><?php echo $res['email'];?></td>
        <td><?php echo $res['number'];?></td>
        <td><?php echo $res['address'];?></td>
     </tr>
     <?php
    }
    ?> 
    </tbody>
    </table>
</html>
