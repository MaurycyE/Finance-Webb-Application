<?php

namespace App\Controllers;

use \Core\View;
use \App\Authentication;

class Home extends \Core\Controller {

    public function indexAction() {

        View::renderTemplate('Home/index.html');
    }
}