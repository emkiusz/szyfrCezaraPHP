<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Szyfrowanie</title>
  </head>
  <body>
    <?php
      $text = array();
      $file = fopen("./ksiazka1.txt", "r") or die("Błąd przy otwieraniu pliku.");
      while (!feof ($file))
      {
        $char = fgetc($file);
        $ascii = ord($char);
        if($ascii>=65 && $ascii<=90)
        {
          if($ascii<90)
          {
            $ascii++;
          }
          else
          {
            $ascii=65;
          }
        }

        if($ascii>=97 && $ascii<=122)
        {
          if($ascii<122)
          {
            $ascii++;
          }
          else
          {
            $ascii=97;
          }
        }

        array_push($text,chr($ascii));
      }
      fclose($file);

      $file2 = "ksiazka2.txt";
      if(file_put_contents($file2,$text))
      {
        echo "Szyfrowanie zakończone pomyślnie.";
      }
      else {
        echo "Szyfrowanie zakończone niepowodzeniem.";
      }
    ?>
  </body>
</html>
