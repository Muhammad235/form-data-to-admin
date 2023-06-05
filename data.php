<?php

require 'config/conn.php';

if (isset($_POST['submit'])) {

    $first = $_POST['first'];
    $middle = $_POST['middle'];
    $last = $_POST['last'];
    $street = $_POST['street'];
    $unit = $_POST['unit'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phonenumber = $_POST['phonenumber'];
    $type = $_POST['type'];
    $email = $_POST['email'];
    $ssn = $_POST['ssn'];
    $date = $_POST['date'];
    $file1 = $_FILES['file1']['name'];
    $file2 = $_FILES['file2']['name'];

    $ext1 = explode('.', $file1);
    $ext2 = explode('.', $file1);

    $end1 = end($ext1);
    $end2 = end($ext2);

    $acceptable = ['png', 'jpeg'];

    if (!in_array($end1, $acceptable) || !in_array($end2, $acceptable) ) {
        
        echo'<script>alert("Only png and jpeg image is allowed")</script>';

        //this will return the user back to the form page, if the file is not png or jpeg
        // change index.html to your form directory!!

        header('location: index.html');
        exist();
    }else {

        $random1 = rand(0, 999);
        $random2 = rand(0, 999);
    
        $newname1 = $random1 . $file1;
        echo "<br>";
        $newname2 = $random2 . $file2;
    
        echo $newname1;
        echo $newname2;

        // create a folder called data_img
        $location1 = "data_img/". $newname1;
        $location2 = "data_img/". $newname2;

       if (move_uploaded_file($_FILES['file1']['tmp_name'], $location1) && move_uploaded_file($_FILES['file2']['tmp_name'], $location2)) {


        $sql = "INSERT INTO `users` (first, middle, last, street, unit, city, state, zip,phonenumber, type, email, ssn, date, file1, file2) VALUES ('$first', '$middle', '$last', '$street','$unit', '$city', '$state', '$zip', $phonenumber, '$type','$email', '$ssn', '$date', '$newname1', '$newname2')";

        mysqli_query($conn, $sql);

        echo'<script>alert("Message sent successfully")</script>';


        //this will return the user back to the form page, if the file is not png or jpeg
        // change index.html to your form directory!!
         header('location: index.html');

       } 
    }

} 


?>