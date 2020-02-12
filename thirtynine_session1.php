<?php session_start(); ?>
<html>
<body>
<?php
echo "username in session :".$_SESSION["username"];
echo "password in session :".$_SESSION["password"];
?>
</body>
</html>