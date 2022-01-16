<?php $render('header'); ?>

<hr>

<h2>Editar Usuário</h2>

<form action="<?=$base;?>/usuario/<?=$pessoa['id'];?>/editar" method="POST">
  <label for="nome">Nome:</label><br/>
  <input type="text" name="nome" id="nome" value="<?=$pessoa['nome'];?>"><br><br>

  <label for="numero">E-mail:</label><br/>
  <input type="text" name="numero" id="numero" value="<?=$pessoa['numero'];?>"><br><br>

  <button type="submit" class="btn">Salva</button>
</form>

<?php $render('footer'); ?>