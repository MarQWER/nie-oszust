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
      <p>Mail: <input type="email" name="mail" id="" /></p>
      <p><input type="submit" name="klik" value="zarejestruj" /></p>
    </form>

    <?php 
    
    $con = mysqli_connect("localhost", "root", "", "uzytkownicy");

    $log = $_POST['login'];
    $pass = $_POST['haslo'];

    $szyfr = password_hash($pass, PASSWORD_DEFAULT);

    $email = $_POST['mail'];

    $kw = "INSERT INTO uzytkownicy(user, pass, email,
     drewno, kamien, zboze, dnipremium) 
    VALUES('$log', '$szyfr', '$email', 100, 100, 100, 3)";

    $send = mysqli_query($con, $kw);

    if($send) echo "Wszystko okej";
    else echo "Nie okej D:";

    ?>

  </body>
</html>
