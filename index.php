<?php
include('./basics/Head.php');

?>




<div class="container mt-5">
    <h1 class="text-dark mb-5">Student : </h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Contact No</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include('./basics/conn.php');

            $sql = 'SELECT * FROM `students`';
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);

            // echo var_dump($row);
            // echo $row['name'];

            $sno = 0;

            // ======= First Method=======
            // while ($row = mysqli_fetch_assoc($result)) {
            //     $sno++;
            //     echo '

            //     <tr>
            //             <th scope="row">'.$sno.'</th>
            //             <td>' . $row['name'] . '</td>
            //             <td>' . $row['department'] . '</td>
            //             <td>' . $row['contact_no'] . '</td>
            //             <td>' . $row['email'] . '</td>

            //     </tr>


            //     ';
            // }

            // =======Secong Method=======
            
            while ($row = mysqli_fetch_assoc($result)) {
                $sno++;

            ?>

                <tr>
                    <th scope="row"><?php echo  $sno ?></th>
                    <td><?php echo  $row['name'] ?></td>
                    <td><?php echo  $row['department'] ?></td>
                    <td><?php echo  $row['contact_no'] ?></td>
                    <td><?php echo  $row['email'] ?></td>
                    <td class="text-center " style="cursor:pointer"><i class="fa-solid fa-trash text-danger" onclick="deleteUser(<?php echo $row['id'] ?>)"></i>
                
                   <a href="edit.php?id=<?php echo  $row['id']  ?>"> <i class="fa-solid fa-trash text-danger" ></i></a>
                
                </td>

                </tr>


            <?php


            }




            ?>



        </tbody>
    </table>

    <script>
        const deleteUser = (id) => {
            console.log(id)


            $.ajax({
                url: "./phpFiles/deleteUser.php",
                type: "post",
                data: {user_id:id},
                success: function(response) {

                    // You will get response from your PHP page (what you echo or print)

                    console.log(response)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });


        }
    </script>


</div>




<?php include('./basics/footer.php') ?>