<?php

class View
{
  public $mensaje;
  public $data;
  public $data2;
  public $data3;
  public $data4;
  public $data5;
  public $T1;
  public $T2;


  function __construct()
  {
    #echo "<h1>View Base</h1>";
  }

  function Render($nombre)
  {
    require 'views/' . $nombre . '.php';
  }
}
