<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
    .panel{
    margin-left: 25px;
    margin-top: 50px;
    border: 1px solid;
    padding: 20px;
    border-radius: 20px;
    background:#e8af99;
  }
  .panel-heading{
    font-size: 30px;
    font-weight: 600;
    /* padding: 10px; */
  }
  .panel-body{
    padding:20px;
  }
  .submit-btn{
    text-align:center;
    padding-top:10px;
  }
  .panel-footer{
    margin-left: -10px;
    margin-bottom: -15px;
    font-weight: 300;
  }
    </style>
    </head>
    <body>
      <div class="container">
        <div class="row">
         <div class="panel panel-primary">
             <div class="panel-heading">
               Registration form
             </div>
             <div class="panel-body">
             <form action='saveRecord.php' method="post">
                <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label-lg">Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="inputName3" name='name' placeholder='Enter your Name' required>
                </div>
              </div>
                <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label-lg">Email</label>
                <div class="col-sm-12">
                  <input type="email" class="form-control" id="inputEmail3" name='email' placeholder='Enter your E-mail' required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label-lg">Phone</label>
                <div class="col-sm-12">
                  <input type="number" class="form-control" id="inputNumber3" name='number' placeholder='Enter your Phone number' required>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label-lg">Address</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="inputAddress3" name='address' placeholder='Enter your Address' required>
                </div>
              </div>
              <div class="form-group row">
                <div class="submit-btn col-sm-10">
                  <button type="submit" class="btn btn-dark">Submit</button>
                </div>
              </div>
            </form>
             </div>
             <div class="panel-footer">
               &copy;Register2020.in
             </div>
         </div>
        </div>
     </div>
</body>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>

<?php
include "connection.php";
?>