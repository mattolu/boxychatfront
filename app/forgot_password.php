<?php

require_once __DIR__ . '/inc_application.php';


$errors = [];
$success = false;
if (isset($_POST['submit'])) {
    $username_email = !empty($_POST['username_email']) ? stripslashes(mysqli_real_escape_string($conn,$_POST['username_email'])) : '';
    if (empty($username_email)) $errors['username_email'] = 'This field can not be empty';

    $tbl_name = "members"; // Table name annot select DB
    $sql = "SELECT * FROM $tbl_name WHERE email='$username_email' OR username='$username_email'";
    $userSqlQueryResultSet = mysqli_query($conn,$sql);
    if (empty($errors)) {
        if (mysqli_num_rows($userSqlQueryResultSet) != 1) $errors['username_email'] = 'no username or email exists';
    }

    if (empty($errors)) {
        $user = mysqli_fetch_assoc($userSqlQueryResultSet);

        $recovery_hash = bin2hex(mcrypt_create_iv(50, MCRYPT_DEV_URANDOM));
        $sql = "UPDATE $tbl_name SET forgot_password_code = '$recovery_hash' WHERE id = $user[id]";
        mysqli_query($conn,$sql);

        $mail->isHTML(true);
        $mail->addAddress($user['email'], $user['firstname']);     // Add a recipient
        $mail->Subject = 'Recover your password';
        $mail->Body    = '<a href="'.APP_URL.'/recover_password.php?code='.$recovery_hash.'">Please click here to recover your password</a>';
        $mail->send();
    }
}

?>

<?php include("header.php"); ?>

<body>

<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"> CLOUDSEA</div>
        <div class="tx-center mg-b-60">Recover Forgot Password</div>

        <form name="form1" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your username/email" name="username_email"
                       id="username_email">
                <?php if (!empty($errors['username_email'])) { ?>
                    <div class="alert alert-danger"><?php echo $errors['username_email'] ?></div><?php } ?>

            </div><!-- form-group -->
            <button type="submit" name="submit" class="btn btn-info btn-block">Recover</button>
        </form>

    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>

</body>
</html>
