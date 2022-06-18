<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moviestechandmore_database";
$table = "moviestechandmore_table";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Display data from database

$sql = "SELECT * FROM $table";

$query = mysqli_query($conn, $sql);


// Display full page from database

if(isset($_GET['id'])){

  $idFull = $_GET['id'] ;

  $sqlFull = "SELECT * FROM $table WHERE id = $idFull ";

  $queryFull = mysqli_query($conn, $sqlFull);


}


// Pagination 

$countOfPosts = 10 ;
$totalCount = mysqli_num_rows($query);
$totalPages = ceil($totalCount/$countOfPosts);




?>


