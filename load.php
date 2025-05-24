<?php
$chatlog = "chatlog.txt";
if (file_exists($chatlog)) {
    echo file_get_contents($chatlog);
} else {
    echo "<p>No messages yet.</p>";
}
?>
