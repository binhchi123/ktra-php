<?php
session_start();
include 'connect.php';
// $error = '';
// if (isset($_POST['email'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $sql ="INSERT INTO account SET email='$email',password ='$password'";
//     if (mysqli_query($conn, $sql)) {
//         header('location: index.php');
//     } else {
//         $error = mysqli_error($conn);
//     }
// }
$error =null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql ="SELECT * FROM account WHERE email='$email' AND password ='$password'";
    $query = mysqli_query($conn,$sql);

    if (mysqli_num_rows($query) == 1) {

        $account = mysqli_fetch_assoc($query);
        $_SESSION['login'] = $account;
        header('location: index.php');
    } else {
        $error = 'Tài khoản không chính xác';
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>FORM</h1>
        <hr>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post" role="form">
                    <?php if ($error) : ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $error;?>
                    </div>
                    <?php endif;?>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>