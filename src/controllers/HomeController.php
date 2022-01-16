<?php
namespace src\controllers;

use \core\Controller;
use src\models\Pessoa;

class HomeController extends Controller {

    public function index() {
        $pessoas = Pessoa::select()->execute();

        $this->render('home', [
          'pessoas' => $pessoas]
        );
    }

}