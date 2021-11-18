<?php

//Indicar donde esta situada esta clase -> Dentro de APP y dentro de CONTROLLERS
namespace App\Controllers;


//Voy a hacer uso de la vista DashBoard que está en -> App\Views
use App\Views\DashBoard;

class DashBoardController
{
  public function dashBoard()
  {
    new DashBoard();
  }
}

