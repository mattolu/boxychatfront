<?php

require_once __DIR__ . '/inc_application.php';

$recovery_hash = !empty($_GET['code']) ? stripslashes(mysqli_real_escape_string($conn,$_GET['code'])) : '';

$tbl_name = "members"; // Table name annot select DB
$sql = "SELECT * FROM $tbl_name WHERE forgot_password_code='$recovery_hash'";
$userSqlQueryResultSet = mysqli_query($conn,$sql);
if(mysqli_num_rows($userSqlQueryResultSet) != 1){
    header('Location:login.php');
    exit;
}

$errors = [];
$success = false;
if (isset($_POST['submit'])) {
    $user = mysqli_fetch_assoc($userSqlQueryResultSet);

    $password = !empty($_POST['password']) ? stripslashes(mysqli_real_escape_string($conn,$_POST['password'])) : '';
    if (empty($password)) $errors['password'] = 'This field can not be empty';

    if(empty($errors)){
        $password = md5($password);
        $sql = "UPDATE $tbl_name SET forgot_password_code = NULL,password='$password' WHERE id = $user[id]";
        $result = mysqli_query($conn,$sql);
        header('Location:login.php');
        exit;
    }

}

?>

<?php include("header.php"); ?>

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"> CLOUDSEA</div>
        <div class="tx-center mg-b-60">Recover Your Password</div>

        <form name="form1" method="post">
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter password" name="password"
                       id="password">
                <?php if (!empty($errors['password'])) { ?>
                    <div class="alert alert-danger"><?php echo $errors['password'] ?></div><?php } ?>

            </div><!-- form-group -->
            <button type="submit" name="submit" class="btn btn-info btn-block">Update</button>
        </form>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>

</body>
</html>
