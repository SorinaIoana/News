<?php require_once 'header.php'; ?>

<div class="row">
    <div class="col-6 offset-3">
        <?php if($message): ?>
            <div class="alert alert-info">
                <p class="mb-o"><?= $message; ?></p>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?= old('username'); ?>" type="text" name="username" id="username" class="form-control <?= invalidInputClass($errors, 'username'); ?>" >
                <?= getErrors($errors, 'username'); ?>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control <?= invalidInputClass($errors, 'password'); ?>">
                <?= getErrors($errors, 'password'); ?>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confim password</label>
                <input type="password" name="confirm_password" id="confirm_password" class="form-control <?= invalidInputClass($errors, 'confirm_password'); ?>">
                <?= getErrors($errors, 'confirm_password'); ?>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= old('email'); ?>" type="email" name="email" id="email" class="form-control <?= invalidInputClass($errors, 'email'); ?>">
                <?= getErrors($errors, 'email'); ?>
            </div>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input value="<?= old('first_name'); ?>" type="text" name="first_name" id="first_name" class="form-control <?= invalidInputClass($errors, 'first_name'); ?>">
                <?= getErrors($errors, 'first_name'); ?>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input value="<?= old('last_name'); ?>" type="text" name="last_name" id="last_name" class="form-control <?= invalidInputClass($errors, 'last_name'); ?>">
                <?= getErrors($errors, 'last_name'); ?>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input value="<?= old('phone'); ?>" type="text" name="phone" id="phone" class="form-control <?= invalidInputClass($errors, 'phone'); ?>">
                <?= getErrors($errors, 'phone'); ?>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-sm btn-success">Create Account</button>
            </div>
        </form>
    </div>
</div>



<?php require_once 'footer.php'; ?>