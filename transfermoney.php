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

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab a {
            background-color: inherit;
            text-decoration: none;
            color: black;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change backgroun  d color of buttons on hover */
        .tab a:hover {
            background-color: #ddd;
        }

        table,
        tr,
        th,
        td {
            border: 1px solid white;
            /* background-color: black; */
            padding: 15px;
        }
    </style>

</head>

<body>
<?php
    include 'config.php';
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
?>
    <div id="bodyDiv">

        <div class="top-header-agile">
            <h1><a class="col-md-6 navbar-brand" href="/"><img src="./logo_small spark.png"
                        style="padding:5px; height:100%; float:left; background: linear-gradient(to top, rgba(254, 254, 254, 0.4), rgba(250, 250, 250, 0));;">
                    &nbsp;The Sparks Bank</a></h1>
            <div class="clearfix"></div>
        </div>
        <nav>
            <!-- <a href="index.php" style="color:#f5b120;text-decoration: none;">Home</a> | -->
            <a href="index.php" style="color:#f5b120;text-decoration: none;">Create User</a> |
            <a href="transactionhistory.php" target="_self" style="color:#f5b120;text-decoration: none;">Transaction
                History</a> |
            <a href="transfermoney.php" target="_self" style="color:#f5b120;text-decoration: none;">Transfer
                Money</a>
        </nav>
        <div class="frame">
            <h2 style="text-align: center;color: #f5b120;">Transfer Money</h2>
        </div>
        <div style="text-align: -webkit-center;color: #f5b120; margin-top: 10px;">
            <table style="color:aqua ;">
                <tr style="color: #f5b120;">
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Balance</th>
                    <th>Operation</th>
                </tr>
                <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : white;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="transaction.php?id= <?php echo $rows['id'] ;?>"> <button class="btn btn-outline-success btn" >Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                </tbody>
                
            </table>
        </div>
</body>

</html>