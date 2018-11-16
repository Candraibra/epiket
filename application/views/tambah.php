<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>

	    <div class="main-content">

        <form class="form-basic" method="post" action="http://localhost/trepel/index.php/Cilin/masukkan">

            <div class="form-title-row">
                <h1>Daftar</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" placeholder="Nama Lengkap" name="fullname">
                </label>
            </div>

			  <div class="form-row">
                <label>
                    <span>Username</span>
                    <input type="text" placeholder="Username" name="username">
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" placeholder="E-mail" name="email">
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Password</span>
                    <input type="password" placeholder="Password" name="password" id="password" required>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Confirm Password</span>
					<input type="password" placeholder="Ulangi Password" id="confirm_password" required>
                </label>
            </div>
            <button class="btn btn-outline-primary" type="submit" value="Submit">Daftar</button>
                </div>
            </div>

        </form>

    </div>
	<script language='javascript' type='text/javascript'>
   var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
</body>
</html>