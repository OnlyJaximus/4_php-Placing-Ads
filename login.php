 <?php
    require_once "functions.php";
    if (isset($_POST['logBtn'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

        $query = mysqli_query(db(), $sql);

        $result = mysqli_fetch_assoc($query);

        // dd($result);
        // array(4) {
        //     ["id"]=>
        //     string(1) "4"
        //     ["name"]=>
        //     string(5) "Merca"
        //     ["email"]=>
        //     string(15) "merca@gmail.com"
        //     ["password"]=>
        //     string(5) "12345"
        //   }

        if ($result) {
            logUser($result);
        } else {
            header("Location: login.view.php");
        }
    } else {
        header("Location: index.php");
    }


    ?>