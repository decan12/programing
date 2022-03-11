<?php 

include "function.php";

if (isset($_POST['register'])) {
    
    if (register($_POST) > 0) {
        echo "

                <script>
                alert('register berhasil ');
                document.location.href = 'login.php';
                </script>


             ";
    }else{
        echo mysqli_error($coneksi);
    }
}




 ?>



<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body class="q">
        <div class="container">
          <h1 class="w">Register</h1>
            <form method="post" action="">
                <label for="username">Username</label>
                <br>
                <input class="h" type="text" name="username" id="username">
                <br>
                <br>
                <label>Password</label>
                <br>
                <input class="h" type="password" name="pasword" id="pasword">
                 <br>
                <label for="pasword2">Konfirmasi Password</label>
                <br>
                <input class="h" type="password" name="pasword2" id="pasword2">
                <button type="submit" name="register">Register</button>
                <p> Sudah punya akun?
                  <a href="login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>



<?php

echo "hello word";

?>
