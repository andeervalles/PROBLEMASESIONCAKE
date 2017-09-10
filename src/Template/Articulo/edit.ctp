<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $articulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Articulo'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="articulo form large-9 medium-8 columns content">
    <?= $this->Form->create($articulo) ?>
    <fieldset>
        <legend><?= __('Edit Articulo') ?></legend>
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
