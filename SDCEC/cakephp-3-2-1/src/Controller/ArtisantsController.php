<?php
// src/Controller/UsersController.php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class ArtisantsController extends AppController
{

   public function index(){
    $this->connected();
    $user = $this->user;
    debug($user);
   }
}
