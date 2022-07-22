<?php require_once 'partials/head.php' ?>

<?php require_once 'partials/navbar.php' ?>

<div class="container">
    <div class="col-6 offset-4">
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="email" class="form-control"><br>
            <input type="password" name="password" placeholder="password" class="form-control"><br>
            <button type="submit" class="form-control btn btn-info" name="logBtn">Login</button>
        </form>
    </div>
</div>

<?php require_once 'partials/footer.php' ?>