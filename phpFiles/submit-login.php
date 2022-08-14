<?php
include('../basics/conn.php');
// $a =2 ;





        if (isset($_POST['submit'])) {
            echo " Form Submit";

            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql = 'SELECT * FROM `user` WHERE `email` = "'.$email.'" AND `password` = "'.$password.'"';
            echo $sql;
            $result = mysqli_query($conn,$sql);

            
            if(mysqli_num_rows($result)>0){
                echo '<script>alert("Login  successfully")</script>';

                // header('location:index.php');

            }else{
                echo '<script>alert("Invalid credentials")</script>';
            }

            

           


        }
