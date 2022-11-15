<?php
require_once('BaseController.php');

class HomeController extends BaseController
{
  function __construct()
  {
    $this->folder ='Homepage';
  }

  public function index()
  {
    $data = array(
      'name' => 'Sang Beo',
      'age' => 22
    );
    
    $this->render('index', $data);
  }

  public function error()
  {
    $this->render('error');
  }
}