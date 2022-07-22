<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/navbar.php' ?>

<?php $oglas = getOne($_GET['id']);
// Test
// dd($oglas);
// array(9) {
//     ["id"]=>
//     string(1) "2"
//     ["title"]=>
//     string(8) "Frizider"
//     ["text"]=>
//     string(11) "LG frizider"
//     ["category"]=>
//     string(12) "bela tehnika"
//     ["price"]=>
//     string(5) "25000"
//     ["user_id"]=>
//     string(1) "2"
//     ["name"]=>
//     string(5) "Marko"
//     ["email"]=>
//     string(16) "marko@gmail.com "
//     ["password"]=>
//     string(5) "12345"
//   }
?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h3 class="display-4 text-center"> <?php echo $oglas['title'] ?></h3>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card mb-2 mt-2">

                        <div class="card-header">
                            <a href="show.category.php?cat=<?php echo $oglas['category'] ?>" class="btn btn-secondary btn-sm"> <?php echo $oglas['category'] ?></a>
                        </div>

                        <div class="card-body text-center">
                            <h5> <?php echo $oglas['title'] ?></h5>
                            <p> <?php echo $oglas['text'] ?></p>
                        </div>

                        <div class="card-footer">
                            <a href="oglasi_from_user.php?name=<?php echo $oglas['name'] ?>" class="btn btn-warning btn-sm float-left"> <?php echo $oglas['name'] ?></a>
                            <a href="" class="btn btn-danger btn-sm float-right"> <?php echo $oglas['price'] ?></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once 'partials/footer.php' ?>