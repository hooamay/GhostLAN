<?php
if (isset($_POST['name']) && isset($_POST['message'])) {
    $name = strip_tags($_POST['name']);
    $message = strip_tags($_POST['message']);
    $time = date("H:i");

    $entry = "<p><strong>$name</strong> [$time]: $message</p>\n";

    $file = "chatlog.txt";
    file_put_contents($file, $entry, FILE_APPEND);

    // Trim to last 100 lines
    $lines = file($file);
    if (count($lines) > 100) {
        $lines = array_slice($lines, -100);
        file_put_contents($file, implode("", $lines));
    }
}

header("Location: index.php");
exit;
?>
