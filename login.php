<?php require_once 'header.php'; ?>

<div class="row">
    <div class="col-4 offset-4">
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control <?= invalidInputClass($errors, 'username'); ?> ">
                <?= getErrors($errors, 'username'); ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control <?= invalidInputClass($errors, 'username'); ?> ">
                <?= getErrors($errors, 'password'); ?>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" name="remember_me" id="remember_me">
                    <label for="remember_me">Remember me</label>
                </div>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-sm btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>



<?php require_once 'footer.php'; ?>