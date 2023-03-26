<?php
function readTable(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error($connection));
    }
    while($row = mysqli_fetch_assoc($result)){
        echo'<pre>';
        print_r($row);
        echo'</pre>';
    }
}
function createTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username,password) VALUES('$username','$password')";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error($connection));
    }
}
function shoAlldata(){
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection,$query);
    if(!$result){
        die("query failed".mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($result)){
       $id=$row['id'];
       echo"<option value='$id'>$id</option>";
    }
}
function updateTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id=$_POST['id'];
    $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("query failed".mysqli_error($connection));
    }
}  
function deleteTable(){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id=$_POST['id'];
    $query = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("query failed".mysqli_error($connection));
    }
}
?>