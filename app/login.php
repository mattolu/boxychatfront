<?php include ("header.php"); ?>

  <body>
 
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"> CLOUDSEA </div>
        <div class="tx-center mg-b-60">Login Page</div>

    <form id="postLoginData">
		<div class="form-group">
          <input type="text" class="form-control" placeholder="Enter your username" required id="username">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Enter your password" required id="password">
          <a href="forgot_password.php" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
      
        <button type="submit" name="submit" class="btn btn-info btn-block">Login</button>
	</form>

        <div class="mg-t-60 tx-center">Not yet a member? <a href="register.php" class="tx-info">Register</a></div>
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->


    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script>

        document.getElementById('postLoginData').addEventListener('submit', postLoginData);

          function postLoginData(event){
            event.preventDefault();

            let username = document.getElementById('username').value;
            let password = document.getElementById('password').value;

            fetch('http://localhost:8000/login', {
                method: 'POST',
                credentials: 'same-origin',
                
                headers: { "Content-Type": "application/json; charset=utf-8",
                            "Access-Control-Allow-Origin": "http://localhost",
                           
                            "Access-Control-Allow-Headers": "Content-Type, Authorization, X-Requested-With"
                        },
                
                body:JSON.stringify({username:username, password:password})
            })
            .then((res) => res.json())
            .then((data) => {
              if (data.result.status==200){
              Cookies.set('token', data.result.token, { expires: 1 });
             
              window.location = '../index.php'             
              }else{
                alert(data.result.message);
              }
              })

            .catch((err)=>console.log(err))
            }
          
   </script>
  

  </body>
</html>
