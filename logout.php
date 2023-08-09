<?php
session_start();
unset($_SESSION['users_email']);

unset ($_SESSION['users_first_name']);
unset ($_SESSION['student_id']);
header("Location:practice.php");
?>