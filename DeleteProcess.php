<?php
include_once 'db_conn.php';
$sql = "DELETE FROM library WHERE Id='" . $_GET["Id"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>