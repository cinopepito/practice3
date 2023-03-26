<?php
include('db.php');
include('function.php');
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id=$_POST['id'];
    $query = "UPDATE users SET username='$username', password='$password' WHERE id=$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
    die("query failed".mysqli_error($connection));
    }
}

?>

<form action="" method='post'>
    Name : <input type="text" name='username'><br>
    Password : <input type="password" name='password'><br>
    <select name="id" id="">
        <?php 
       shoAlldata();
        ?>
    </select>
    <input type="submit" name='submit' value='update'>
</form>