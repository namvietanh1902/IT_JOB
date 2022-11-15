<?php

class DB{
    private static $instance = NULL;
    public static function getInstance() {
      if (!isset(self::$instance)) {
        try {
          self::$instance = mysqli_connect('localhost','root','','IT_JOB');
          
        } catch (Exception $ex) {
          die($ex->getMessage());
        }
      }
      return self::$instance;
    }
}