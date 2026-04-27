<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="" method="post">
      <p>Login: <input type="text" name="login" id="" /></p>
      <p>Hasło: <input type="password" name="haslo" id="" /></p>
      <p><input type="submit" name="klik" value="zaloguj" /></p>
    </form>

    <?php 
    
    $con = mysqli_connect("localhost", "root", "", "uzytkownicy");

    $log = $_POST['login'];
    $pass = $_POST['haslo'];

    $kw = "SELECT * FROM uzytkownicy WHERE user = '$log'";
    $send = mysqli_query($con, $kw);

    $user = mysqli_fetch_assoc($send);

    if(password_verify($pass, $user['pass']))
    {
        echo "Witaj '$log'";
    }
    else echo "Błędne Hasło";

    ?>

  </body>
</html>
