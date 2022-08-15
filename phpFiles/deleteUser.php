<?php

include('../basics/conn.php');


if (isset($_POST['user_id'])) {
    $id = $_POST['user_id'];
    


    $sql = 'DELETE FROM `students` WHERE id = '.$_POST['user_id'].'';
    // echo $sql;
    $result = mysqli_query($conn, $sql);


    // Delete Successfully
    if ($result) {
        echo 1;

        // header('location:index.php');

    } else {
        echo 0;
    }
} else {
    echo 0;
}
