
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>CloudSea: Cloud-Driven Semantic Annotation Portal</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
</head>

<body>

<form id="postRegData" class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"> CLOUDSEA</div>
        <div class="tx-center mg-b-40">Registration Page</div>

        <div class="form-group">
            <input id ="username" required name="username" type="text" class="form-control" placeholder="Enter your username">
          
        </div><!-- form-group -->
        <div class="form-group">
            <input id= "email" required name="email" type="email" class="form-control" placeholder="Enter your email">
          
        </div><!-- form-group -->
        <div class="form-group">
            <input  id= "firstname" required name="first_name" type="text" class="form-control" placeholder="Enter your first name">
           
        </div><!-- form-group -->
        <div class="form-group">
            <input id="lastname" required name="last_name" type="text" class="form-control" placeholder="Enter your last name">
         
        </div><!-- form-group -->
        <div class="form-group">
            <input id= "password" required name="password" type="password" class="form-control" placeholder="Enter your password">
          
        </div><!-- form-group -->

        <div class="form-group tx-12">By clicking the Register button below, you agreed to our privacy policy and terms
            of use of this portal.
        </div>
        <button type="submit" name="submit" class="btn btn-info btn-block">Register</button>

        <div class="mg-t-40 tx-center">Already a member? <a href="login.php" class="tx-info">Login</a></div>
    </div><!-- login-wrapper -->
</form><!-- d-flex -->

<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/popper.js/popper.js"></script>
<script src="../lib/bootstrap/bootstrap.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script>

        document.getElementById('postRegData').addEventListener('submit', postRegData);

          function postRegData(event){
            event.preventDefault();

            let username = document.getElementById('username').value;
            let firstname = document.getElementById('firstname').value;
            let lastname = document.getElementById('lastname').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            fetch('http://localhost:8000/register', {
                method: 'POST',
                headers: { "Content-Type": "application/json; charset=utf-8" },
                body:JSON.stringify({
                    username:username,
                    firstname:firstname,
                    lastname:lastname,
                    email:email,
                    password:password})
            })
            .then((res) => res.json())
            .then((data) => {
              if (data.result.status==200){
                alert(data.result.message+ ". Kindly login to continue.");
                window.location = '../app/login.php'             
              }else{
                alert(data.result.message);
              }
              })

            .catch((err)=>console.log(err))
            }
          
   </script>
  
<script>
    $(function () {
        'use strict';

        $('.select2').select2({
            minimumResultsForSearch: Infinity
        });
    });
</script>

</body>
</html>

