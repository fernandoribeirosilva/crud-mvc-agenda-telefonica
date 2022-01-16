<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Pessoa;

class UsuariosController extends Controller {

  public function add() {
    $this->render('add');  
  }

  public function addAction() {
    $nome = filter_input(INPUT_POST, 'name');
    $numero = filter_input(INPUT_POST, 'numero');

    if( $nome && $numero ) {
      $data = Pessoa::select()->where('numero', $numero)->execute();

      if(count($data) === 0) {
        Pessoa::insert([
          'nome' => $nome,
          'numero' => $numero
        ])->execute();

        $this->redirect('/');
      }
    }
    $this->redirect('/novo');
  }

  public function edit($args) {
    $pessoa = Pessoa::select()->find($args['id']);

    $this->render('edit', [
      'pessoa' => $pessoa
    ]);
  }

  public function editAction($args) {
    $nome = filter_input(INPUT_POST, 'nome');
    $numero = filter_input(INPUT_POST, 'numero');

    if($nome && $numero) {
      Pessoa::update()
        ->set('nome', $nome)
        ->set('numero', $numero)
        ->where('id', $args['id'])
      ->execute();

      $this->redirect('/');
    }
    $this->redirect('/usuario/'.$args['id'].'editar');
  }

  public function del($args) {
    Pessoa::delete()->where('id', $args['id'])->execute();
    $this->redirect('/');
  }

}