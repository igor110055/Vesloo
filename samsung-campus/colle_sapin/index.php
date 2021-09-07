<?php
function get_sapin($args){
  $hauteur = 0;

  foreach($args as $key => $value)
  {
    if(is_file($value))
    {
      $filename = $value;
    }
    elseif(is_int(intval($value)) && intval($value) > 0)
    {
      $hauteur = intval($value);
    }
  }
  if($hauteur > 0)
  {
    make_sapin($hauteur);
  }
  else
  {
    echo 'Vous devez entrez un numero superieur a 0';
  }
}

function make_sapin($hauteur){
  $hauteur_pic = 4;
  $corps = make_corps($hauteur, $hauteur_pic);

  for($i = 0; $i <= $hauteur; $i++)
  {

  }
}

function make_corps($hauteur, $hauteur_pic){
  $raws = [];
  $epine = '';
  $i = 0;

  while($i < $hauteur_pic)
  {
    if($i = 0)
    {
      $epine = '*';
      $tronc = ' | ';
      array_push($raws, $epine);
      $i++;
    }
    else
    {
      $epine = '*'.$epine.'*';
      array_push($raws, $epine);
      $i++;
    }
  }

  var_dump($raws);
  // if($hauteur > 0)
  // {
  //   $footer = make_footer($tronc, $hauteur);
  // }
}

// function make_footer($tronc, $hauteur)
// {
//   $footer = [];
//
//   for($i = 0; $i <= $hauteur; $i++)
//   {
//
//   }
// }
get_sapin($argv);
?>
