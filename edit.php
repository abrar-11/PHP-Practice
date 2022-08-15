<?php
include('./basics/Head.php');

// UPDATE `students` SET `id`='[value-1]',`name`='[value-2]',`contact_no`='[value-3]',`email`='[value-4]',`department`='[value-5]' WHERE id =1
?>





<div class="container py-5">
    <h1 class="text-primary">Day 2 </h1>

    <?php  
    
            if(isset($_GET['id'])){
                echo $_GET['id'];
            }
      ?>

    <!-- <form method="post" action="phpFiles/submit-login.php">
        <h2 class="text-success mb-5 mt-2">Login form</h2>
       
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?php echo $row['name'] ?>" >
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
    
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
    </form> -->



</div>









<?php include('./basics/footer.php') ?>