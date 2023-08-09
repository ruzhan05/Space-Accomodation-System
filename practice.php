<?php 

session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: newlogin.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: newlogin.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM intro WHERE users_email='$uname' AND users_password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['users_email'] === $uname && $row['users_password'] === $pass) {

                echo "Logged in!";

                $_SESSION['users_email'] = $row['users_email'];

                $_SESSION['users_first_name'] = $row['users_first_name'];

                $_SESSION['student_id'] = $row['student_id'];

                header("Location: Pagla.html");

                exit();

            }else{

                header("Location: newlogin.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: newlogin.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: newlogin.php");

    exit();

}