<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listar Articulos'), ['action' => 'index']) ?></li>
     
    </ul>
</nav>
<div class="articulo form large-9 medium-8 columns content">
    <?= $this->Form->create($articulo) ?>
    <fieldset>
        <legend><?= __('Add Articulo') ?></legend>
        <?php
            echo $this->Form->control('titulo');
            echo $this->Form->control('contenido');
            echo $this->Form->control('fecha');
            echo $this->Form->control('usuario_id', ['options' => $usuario]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
