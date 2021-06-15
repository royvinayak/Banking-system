<?php
include "config.php";
 ?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spark Foundation</title>

   <!-- Latest compiled and minified CSS  -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

     <!-- Latest compiled and minified JavaScript  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

  <style>
    * {
      margin: 0px;
    }

    body {
      font-family: 'Times New Roman', Times, serif;
      /* background:  url('./600x800-bank-retail-branch-poemsuk-49813653.jpg'); */
    }

    #bodyDiv {
      height: 100vh;
      background-image: url('./bg3.jpg');
      backface-visibility: hidden;
    }

    header {
      background-color: aliceblue;
      padding: 5px;
      text-align: left;
      font-size: large;
      color: black;
    }

    nav {
      /* background-color: rgb(112, 196, 202); */
      padding: 2px;
      text-align: right;
      font-size: large;
      color: black;
    }

    .top-header-agile {
      padding: 5px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.18);
    }

    a.navbar-brand {
      height: 63px;
      padding: 0;
      padding-left: 1em;
      font-size: 1em;
      letter-spacing: 0.4px;
      line-height: 45px;
      text-decoration: none;
      color: #f5b120;
    }
     .imgcontainer {
      text-align: center;
      /* margin: 24px 0 12px 0; */
}

      img.avatar {
      width: 10%;
      border-radius: 15%;
}

    #formDiv {
      /* margin: 10px; */
      border-radius: 5px;
      background-color: #c9caca5e;
      padding: 20px;
    }

    #formDiv input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid rgb(245, 247, 123);
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    #formDiv input[type=submit] {
      width: 40%;
      background-color:#f5b120;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    #formDiv input[type=submit]:hover {
      background-color: #f5b120;
    }
    
}

  </style>

</head>
<body>
  <div id="bodyDiv">

    <div class="top-header-agile">
      <h1><a class="col-md-6 navbar-brand" href="index.php"><img src="./logo_small spark.png"
            style="padding:5px; height:100%; float:left; background: linear-gradient(to top, rgba(254, 254, 254, 0.4), rgba(250, 250, 250, 0));;">
          &nbsp;The Sparks Bank</a></h1>
      <div class="clearfix"></div>
    </div>
    <nav>
      <!-- <a href="index.php" style="color:#f5b120;text-decoration: none;">Home</a> | -->
      <a href="index.php" style="color:#f5b120;text-decoration: none;">Create User</a> |
      <a href="transactionhistory.php" target="_self" style="color:#f5b120;text-decoration: none;">Transaction History</a> |
      <a href="transfermoney.php" target="_self" style="color:#f5b120;text-decoration: none;">Transfer Money</a>
    </nav>
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['username'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="INSERT into user(name,email,balance) values('{$username}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>
    <div class="imgcontainer">
      <img src="user-512.png" alt="Avatar" class="avatar">
    </div>
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
      <div class="col-lg-1"></div>
      <div class="col-lg-10">
        <div id="formDiv">
          <form action="transfermoney.php">
           
            <label style="text-align: unset;color:#f5b120;" for="fname">Username</label>
            <input type="text" id="fname" name="username" placeholder="Your name..">
  
            <label style="text-align: unset;color:#f5b120;" for="lname">Email</label>
            <input type="text" id="lname" name="Email" placeholder="email address..">
  
            <label style="text-align: unset;color:#f5b120;" for="balance">balance</label>
            <input type="text" id="balance" name="balance" placeholder="amount..">
            <div style="text-align: center;">
              <input type="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-1"></div>
    </div>
    <div class="col-lg-4"></div>
  </div>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
</body>

</html>