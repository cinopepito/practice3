<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    echo $username;
    $password = $_POST['password'];
    echo $password;
}

?>
<form action="" method='post'>
    Name : <input type="text" name='username'><br>
    Password : <input type="password" name='password'><br>
    <input type="submit" name='submit'>
</form>