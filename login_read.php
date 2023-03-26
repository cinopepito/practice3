<?php
include('db.php');
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
?>
