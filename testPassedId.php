<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "The current session ID is " . $_SESSION["currUserID"] . ".<br>";
?>

</body>
</html>