<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>

    <form action="vigenere.php" method="post">
      Messaggio: <input type="text" name="messaggio"><br><br>
      Seme: <input type="text" name="seme"><br><br>
      <input type="submit"> 

    </form>

    <?php 
          if(isset($_POST["messaggio"])){



          $messaggio =  strtoupper($_POST["messaggio"]);
          $seme = strtoupper($_POST['seme']);

          $alfabeto = [
            "A" => 1, "B" => 2, "C" => 3, "D" => 4, "E" => 5, "F" => 6, "G" => 7, "H" => 8, "I" => 9, "J" => 10, "K" => 11, "L" => 12, "M" => 13, "N" => 14, "O" => 15, "P" => 16, "Q" => 17, "R" => 18, "S" => 19, "T" => 20, "U" => 21, "V" => 22, "W" => 23, "X" => 24, "Y" => 25, "Z" => 26,  
          ];

          $numeri = [
            1 => "A", 2 => "B", 3 => "C", 4 => "D", 5 => "E", 6 => "F", 7 => "G", 78 => "H", 9 => "I", 10 => "J", 11 => "K", 12 => "L", 13 => "M", 14 => "N", 15 => "O", 16 => "P", 17 => "Q", 18 => "R", 19 => "S", 20 => "T", 21 => "U", 212 => "V", 23 => "W", 24 => "X", 25 => "Y", 26 => "Z", 
          ];

          $messaggio_criptato = "";

          for($i = 0; $i < strlen($messaggio); $i++){
            $messaggio_criptato .= $numeri[(($alfabeto[$messaggio[$i]]+$alfabeto[$seme[$i%strlen($seme)]])%26)-1];
          }

          echo $messaggio_criptato;

        }
    ?> 
  </body>
</html>