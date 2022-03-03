<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["nome"] = "Renan Onofre";
$_SESSION["idade"] = "17";
$_SESSION["favcolor"] = "black";
$_SESSION["favanimal"] = "dog";
echo "Session variables are set.";
?>

</body>
</html>
