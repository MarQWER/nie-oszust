<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      * {
        margin: 10px;
        padding: 0;
      }
      .rekord {
        background-color: #b9f769ff;
        border: 1px black solid;
        margin: 10px;
        border-radius: 10px;
        padding: 10px;
      }
      .rekord *{
        margin: 3px;
      }
      a {
        display:block;
        color: black;
        background-color: #b9f769ff;
        width: 150px;
        height: 20px;
        text-align: center;
        padding: 5px;
        border-radius: 10px;
        border: 2px black dashed;
      }
    </style>
  </head>
  <body>
    <h1>Lista zgłoszonych okazów roślinnych</h1>
    <h3>Dodaj Okaza</h3> <a href="dodajokaza.php">Dodaj Okaza</a>

    

    <?php 
    
      $con = mysqli_connect('localhost','root','','plants');
      $zpt = "SELECT * FROM plants";
      $send = mysqli_query($con,$zpt);

      //var_dump($send);

      while($row = mysqli_fetch_assoc($send)) {
            echo '<div class="rekord"> 
              <p><span>Nazwa Rośliny: '. $row['plant']. '</span></p>
              <p><span>Masa okazu w kg: '. $row['weight']. ' </span></p>
              <p><span>Zgłaszający: '. $row['name']. '</span></p>
              <p><span>Data Zgłoszenia: '. $row['date']. '</span></p>
            </div>';
        
      }
    ?> 

  </body>
</html>
