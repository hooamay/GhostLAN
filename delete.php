<?php
$chatlog = "chatlog.txt";
if (file_exists($chatlog)) {
    // Delete the chat log file content
    file_put_contents($chatlog, "");
}
echo "Chat deleted.";
?>
