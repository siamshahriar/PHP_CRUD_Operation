<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    //connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_operation";

    //creating connection
    $connection = new mysqli($servername, $username, $password, $database);

    //delete operation
    $sql = "DELETE FROM clients WHERE id=$id";
    $connection->query($sql);

    header("location: /CRUD/index.php");
    exit;
}
