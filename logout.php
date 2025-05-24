// logout.php
<?php
session_destroy();
header("Location: admin.php");
exit();
?>
