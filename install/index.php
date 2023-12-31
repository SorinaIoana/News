<?php require_once '../header.php';?>

<div class="row mt-5">
    <div class="col-6 offset-3">
        <?php if($message): ?>
            <div class="alert alert-info">
                <p class="mb-o"><?= $message; ?></p>
            </div>
        <?php endif; ?>
        <form action="" method="POST">
            <div class="form-group">
                <label for="host">Host</label>
                <input type="text" name="host" id="host" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="db_name">Database Name</label>
                <input type="text" name="db_name" id="db_name" class="form-control">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-sm btn-primary">Install</button>
            </div>
        </form>
    </div>
</div>



<?php require_once '../footer.php';?>