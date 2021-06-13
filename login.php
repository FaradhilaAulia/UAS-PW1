<?php 

session_start();
include "koneksi.php";

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
    <style>
    a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #FA8072, #C0C0C0);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}
#forgot-pass {
  color: #FA8072;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 3px;
  text-align: right;
}
#card {
  background: #ebbbb1;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}
#signup {
  color: #2dbd6e;
  font-family: "Raleway", sans-serif;
  font-size: 10pt;
  margin-top: 16px;
  text-align: center;
}
#submit-btn {
  background: -webkit-linear-gradient(right, #FA8072,#C0C0C0);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #C0C0C0;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #24c64f;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #FA8072,#C0C0C0);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #FFEBCD;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #FA8072, #C0C0C0);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}
    
    </style>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="login.php">
        <label for="username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="username" class="form-content" type="username" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="password" style="padding-top:22px">&nbsp;Password
          </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <a href="#">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>
        <input id="submit-btn" type="submit" name="login" value="LOGIN" />
        <a href="daftar.php" id="signup">Don't have account yet?</a>
      </form>
        
        <?php
           if (isset($_POST['login'])){
               $username = $_POST['username'];
               $password = $_POST['password'];
               $qry = mysqli_query($koneksi,"SELECT * FROM tab_login WHERE username = '$username' AND password = '$password'");
               $cek = mysqli_num_rows($qry);
               if ($cek==TRUE)
               {
                   $_SESSION['username']=$username;
                   header ("location:index.php");
                   exit;
               }
               else {
                   echo "Maaf username dan password anda salah";
               }
           }
        ?> 
    </div>
  </div>
</body>

</html>

