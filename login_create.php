<?php
include('db.php');
include('function.php');
if(isset($_POST['submit'])){
    createTable();
}
?>
<form action="" method='post'>
    Name : <input type="text" name='username'><br>
    Password : <input type="password" name='password'><br>
    <input type="submit" name='submit'>
</form>