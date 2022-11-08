<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/navbar.php' ?>
<?php
if (isset($_SESSION['id'])) {
    header('Location: oglasi.php');
}
?>

<div class="container">
    <div class="col-6 offset-4">
        <form action="register.php" method="post">
            <input type="text" name="name" placeholder="name" class="form-control"><br>
            <input type="email" name="email" placeholder="email" class="form-control"><br>
            <input type="password" name="password" placeholder="password" class="form-control"><br>
            <button type="submit" name="regBtn" class="form-control btn btn-primary">Register</button>
        </form>
    </div>
</div>

<?php require_once 'partials/footer.php' ?>
