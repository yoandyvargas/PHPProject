<?php

session_start();

include "include/db_connection.php";


if (isset($_POST["signup"]) && isset($_POST["email"]) && isset($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordSecured = sha1($password);

    if (!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
        $_SESSION["incorrect"] = true;
        header('Refresh:1; url=login.php', true, 303);
    }
    if (!preg_match('/[0-9a-zA-Z]{6,}/', $password)) {
        $_SESSION["incorrect"] = true;
        header('Refresh:1; url=login.php', true, 303);
    }

    $userCheck = "SELECT * FROM user WHERE mail = ?";
    $stmt = mysqli_stmt_init($connect);
    if (!mysqli_stmt_prepare($stmt, $userCheck)) {
        echo "SQL statement error1";
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $validate = mysqli_stmt_get_result($stmt);
        mysqli_close($connect);
    }

    if (mysqli_num_rows($validate) == 1) {
        $_SESSION["incorrect"] = true;
        header('Refresh:1; url="login.php', true, 303);
    } else {
        include "include/db_connection.php";
        $newUser = "INSERT INTO user (mail, pw) VALUES (?, ?)";
        $stmt = mysqli_stmt_init($connect);
        if (!mysqli_stmt_prepare($stmt, $newUser)) {
            echo "SQL ERROR";
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $passwordSecured);
            mysqli_stmt_execute($stmt);

            $last_id = mysqli_insert_id($connect);
            $userID = $last_id;

            if (isset($_POST['sports'])) {
                $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '1')";
                mysqli_query($connect, $query) or die("SQL Error @tags");
            }
            if (isset($_POST['tech'])) {
                $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '2')";
                mysqli_query($connect, $query) or die("SQL Error @tags");
            }
            if (isset($_POST['music'])) {
                $query = "INSERT INTO user_tag (user_id, tag_id) VALUES ('$userID', '3')";
                mysqli_query($connect, $query) or die("SQL Error @tags");
            }

            mysqli_close($connect);
        }

        header('Refresh:1; url=news.php', true, 303);
        $_SESSION["userID"] = $userID;
        $_SESSION["loggedIn"] = true;
        $_SESSION["username"] = $email;
        unset($_SESSION["incorrect"]);
    }
} else {
    $_SESSION["incorrect"];
    header('Refresh:1; url=login.php', true, 303);
}
