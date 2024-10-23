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
  public $T3;
  public $T4;
  public $T5;
  public $T6;
  public $T7;
  public $T8;


  function __construct()
  {
    #echo "<h1>View Base</h1>";
  }

  function Render($nombre)
  {
    require 'views/' . $nombre . '.php';
  }
}
