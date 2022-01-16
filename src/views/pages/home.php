<?php $render('header'); ?>

<hr>
<a href="<?=$base;?>/novo">Adicionar Novo</a>

<table border="1" width="100%" style="margin: 20px 0;">
  <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>NUMERO</th>
    <th>AÇÕES</th>
  </tr>
  <?php foreach($pessoas as $pes): ?>
    <tr>
      <td><?=$pes['id'];?></td>
      <td><?=$pes['nome'];?></td>
      <td><?=$pes['numero'];?></td>
      <td>
        <a href="<?=$base;?>/usuario/<?=$pes['id'];?>/editar">[ Editar ]</a>
        <a href="<?=$base;?>/usuario/<?=$pes['id'];?>/excluir" onclick="return confirm('Tem certeza que quer Apagar!')">[ Excluir ]</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

<?php $render('footer'); ?>