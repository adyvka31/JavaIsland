<?php

if (isset($_POST["submit"])) {
    IF ($_POST["username"] == "atharif" && $_POST["password"] == "atharif123") {
        header("location: index.php");
    } else {
        $error = true;
    }
}

if (isset($_POST["submit"])) {
    IF ($_POST["username"] == "majot" && $_POST["password"] == "majot123") {
        header("Location: index.php");
    } else {
        $error = true;
    }
}
