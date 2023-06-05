<?php

require 'config/conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);

//return back to admin page
header("location: admin.php");
echo "<script>alert('message deleted successfully')</script>"

?>