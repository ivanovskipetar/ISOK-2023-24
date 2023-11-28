<?php
session_start();
echo "<h2>Provided data:</h2>";

if (isset($_GET['ime'])) {
    $name = trim(htmlspecialchars($_GET['ime']));
    if ($name != "") {
        echo "<p>Name: ${name}</p>";
        if (isset($_GET['remember'])) {
            setcookie("name", $name, time() + 2 * 60 * 60);
        }
    }
}
if (isset($_GET['prezime'])) {
    $surname = trim(htmlspecialchars($_GET['prezime']));
    if ($surname != "") {
        echo "<p>Surname: ${surname}</p>";
        if (isset($_GET['remember'])) {
            setcookie("surname", $surname, time() + 2 * 60 * 60);
        }
    }
}
if (isset($_GET['email'])) {
    $email = trim(htmlspecialchars($_GET['email']));
    if ($email != "") {
        echo "<p>Email: ${email}</p>";
        if (isset($_GET['remember'])) {
            setcookie("email", $email, time() + 2 * 60 * 60);
        }
    }
}
if (isset($_GET['pol'])) {
    $gender = htmlspecialchars($_GET['pol']);
    if ($gender == 0 || $gender == 1) {
        $gender = $gender == 1 ? "Male" : "Female";
        echo "<p>Gender: ${gender}</p>";
        if (isset($_GET['remember'])) {
            setcookie("pol", $gender, time() + 2 * 60 * 60);
        }
    }
}
if (isset($_GET['remember'])) {
    if (isset($_COOKIE["sessionID"]) && $_COOKIE["time"] - time() < 3600) {
        echo "<h2>Hello ${name}, you are still logged in!!!!</h2>";
    }
    setcookie("time", time(), time() + 2 * 60 * 60);
    setcookie("sessionID", session_id());
}