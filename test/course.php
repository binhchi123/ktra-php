<?php
include 'header.php';
$course = mysqli_query($conn,"SELECT name FROM course");

$error = '';
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $sql ="INSERT INTO courseRegister SET name='$name',email ='$email',phone = '$phone',address = '$address'";
    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
    } else {
        $error = mysqli_error($conn);
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
    <div class="container">
        <h1>Form đăng kí khóa học</h1>
        <hr>
        <form action="" method="post" role="form">
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Điện thoại</label>
                <input type="text" name="phone" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" name="address" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="">Chọn khóa học</label>
                <select name="course" id="">
                    <?php foreach($course as $cor) : ?>
                    <option value=""><?= $cor['name'];?></option>
                    <?php endforeach;?>
                </select>
            </div>
        </form>
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