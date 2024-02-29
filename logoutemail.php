<?php
    session_start();

    session_destroy();

    header("Location: loginemail.php", true, 301);
    exit();
?>