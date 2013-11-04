<?php 

// not yet completted, still to implement

class Router{

// fields
private $url = null;
private $controller = null;
private $method = null;


// constructor
public function __constr($raw_url){

  $this->url = parse_url($raw_url);
  $this->controller = $this->parseController();
  $this->method = $this->parseMethod();
}

public function getUrl(){
  return $this->url;
}

public function getController(){
  return $this->controller;
}

public function getMethod(){
  return $this->method;
}

// TODO
private function parseController(){}
// TODO
private function parseMethod();

}

?>
