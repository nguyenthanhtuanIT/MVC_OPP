<?php
    require_once '../model/database.php';
    /**
     * 
     */
    class Users 
    {
      public function login()
      {
          $login = new Database();
          $data = $login->getUser()->fetch();
          var_dump($data);
      }
    }
    
