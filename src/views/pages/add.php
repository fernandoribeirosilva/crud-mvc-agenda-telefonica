<?php $render('header'); ?>

<hr>

<h2>Adicionar Novo Usuário</h2>
<?=$base;?>

<form action="<?=$base;?>/novo" method="POST">
  <label for="nome">Nome:</label><br/>
  <input type="text" name="name" id="nome"><br><br>

  <label for="numero">E-mail:</label><br/>
  <input type="text" name="numero" id="numero"><br><br>

  <button type="submit" class="btn">Adicionar</button>
</form>

<?php $render('footer'); ?>