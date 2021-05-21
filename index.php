<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body style="background-image:url('back.jpg');background-size:cover;">
  <?php
  include 'navbar.php';
  ?>

      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color :white;">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to</h3>
                  <h1>SAHARA BANK</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank.jpg" width="300" height="300" class="img-fluid pt-2">
              </div>
            </div>
<br><br>
      <!-- Activity section -->
            <div class="row activity text-center" >
                  <div class="col-md act">
                    <img src="new.png" width="200" height="180" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : grey">New User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transac.png" width="200" height="200" class="img-fluid">
                    <br><br>
                    <a href="transfermoney.php"><button style="background-color : grey">New Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="transact.jpg" width="200" height="200" class="img-fluid">
                    <br><br>
                    <a href="transactionhistory.php"><button style="background-color : grey">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <br>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>KAVERI DATTATRAY SHINDE</b> <br> Task 1:The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>