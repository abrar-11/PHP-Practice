<?php
include('../basics/conn.php');
// $a =2 ;





        if (isset($_POST['submit'])) {
            echo " Form Submit";

            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql = 'INSERT INTO `user`( `name`, `email`, `password`) 
            VALUES ("'.$name.'","'.$email.'","'.$password.'" )';
            echo $sql;
            $result = mysqli_query($conn,$sql);

            if($result){
                echo '<script>alert("Form Submitted successfully")</script>';

                // header('location:index.php');

            }

            

           


        }
