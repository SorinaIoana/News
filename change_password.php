<?php require_once 'header.php'; ?>

<div class="row">
    <div class="col-4 offset-4">
        <?php if($message): ?>
            <div class="alert alert-info">
                <p class="mb-0"><?= $message; ?></p>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="current_password">Current password</label>
                <input type="text" name="current_password" id="current_password"  class="form-control <?= invalidInputClass($errors, 'current_password'); ?>">
                <?= getErrors($errors, 'current_password'); ?>
            </div> 
            <div class="form-group">
                <label for="password">New password</label>
                <input type="text" name="password" id="password"  class="form-control <?= invalidInputClass($errors, 'password'); ?>">
                <?= getErrors($errors, 'password'); ?>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm password</label>
                <input type="text" name="confirm_password" id="confirm_password"  class="form-control <?= invalidInputClass($errors, 'confirm_password'); ?>">
                <?= getErrors($errors, 'confirm_password'); ?>
            </div>
            <div class="form-group text-center">
                <button class="btn btn-sm btn-primary">Change password</button>
            </div>
        </form>
    </div>
</div>



<?php require_once 'footer.php'; ?>