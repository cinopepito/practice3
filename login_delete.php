<?php
include('db.php');
include('function.php');
if(isset($_POST['submit'])){
  
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
    <input type="submit" name='submit' value='DELETE'>
</form>