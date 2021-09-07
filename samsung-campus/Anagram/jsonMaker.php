<?php
$name = "Biababu";
$html = file_get_contents('index.html');

class JsonMaker {
  private $html;

  public function __construct($html){
    $this->html = $html;
  }

  public function create_file($name){

  }
}

$json = new JsonMaker($html, $name);
?>
