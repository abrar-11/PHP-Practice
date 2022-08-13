<?php
include('./basics/Head.php');

?>





<div class="container py-5">
    <h1 class="text-primary">Day 1 </h1>


    <form method="post" action="phpFiles/registerUser.php">
        <h2 class="text-success mb-5 mt-2">Registration form</h2>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Name</label>
            <input type="text" class="form-control" id="inputEmail" name="fullname" placeholder="Enter your FUll Name">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password">
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" name="password" type="checkbox" id="checkRemember">
                <label class="form-check-label" for="checkRemember">Remember me</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
    </form>



</div>









<?php include('./basics/footer.php') ?>