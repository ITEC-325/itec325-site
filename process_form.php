<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email = htmlspecialchars(trim($_POST["email"] ?? ""));

    if ($name === "" || $email === "") {
        echo "Please provide both a name and an email.";
    } else {
        echo "Thank you, " . $name . ". We will contact you at " . $email . ".";
    }
} else {
    echo "No form data submitted.";
}
