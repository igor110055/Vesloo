<?php
function analGram($string){
  if(is_string($string))
  {
    $dico = file_get_contents('liste_francais.txt');
    $tabString = str_split($string);
    $count = count($tabString) - 1;
    $count2 = count($tabString);
    $i = $count;
    $x = 0;

    while($x < $count2)
    {
      $now = array_shift($tabString);


      if(in_array($now, $tabString))
      {
        $i -= 1;
        array_push($tabString, $now);

        foreach($tabString as $key => $value)
        {
          if($value === $now)
          {
            
          }
          else
          {

          }
        }
      }
      else
      {
        array_push($tabString, $now);
      }
      $x += 1;
    }

    while($i <= $count)
    {
      for($l = 0; $l < $count; $l++)
      {
        $now = array_shift($tabString);
        array_push($tabString, $last);
      }
    }
    echo $count;
  }
  else
  {
    echo 'Vous devez obligatoirement entrer une chaine de caractere\n';
  }
}
analGram('bonjour');
?>
