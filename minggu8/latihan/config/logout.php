<?php 

session_start();
session_destroy();
echo '<script>alert("LOGOUT SUCCESSFULLY")</script>';
echo '<script>window.location="../login.php"</script>';

?>