<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container message-table">
            <!-- message display -->
            <?php

            require 'config/conn.php';

              $sql = "SELECT * FROM `users`";
              $result = mysqli_query($conn, $sql);

              if ($result) {
                while($row = mysqli_fetch_assoc($result)) {

                $id = $row['id'];
                $first = $row['first'];
                $middle = $row['middle'];
                $last = $row['last'];
                $street = $row['street'];
                $unit = $row['unit'];
                $city = $row['city'];
                $state = $row['state'];
                $zip = $row['zip'];
                $phonenumber = $row['phonenumber'];
                $type = $row['type'];
                $email = $row['email'];
                $ssn = $row['ssn'];
                $date = $row['date'];
                $file1 = $row['file1'];
                $file2 = $row['file2'];
          ?>


            <div class="row">
              <div class="col-md-5  message-info">
              <div class="box">
                <p>first: <?=$first?></p>
                <p>middle: <?=$middle?></p>
                <p>last: <?=$last?></p>
                <p>street: <?=$street?></p>
                <p>Date: <?=$date?></p>
               </div> 
              </div>

              <div class="col-md-5">
                <div class="image">
                    <!-- make use of the data_img file you created -->
                    <img src="data_img/<?=$file1?>" alt="<?= $file1?>" width="40%">
                    <img src="data_img/<?=$file2?>" alt="<?= $file2?>" width="40%">
                </div>
              </div>
              <div class="col-md-2 box-satus"><a href="delete.php?id=<?=$id?>" class='btn btn-danger'>Delete message</a></div>
            </div>

            <?php

            }                            
          }

          ?>

          </div>


    
</body>
</html>