<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Articulo $articulo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Articulo'), ['action' => 'edit', $articulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Articulo'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Articulo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Articulo'), ['action' => 'add']) ?> </li>
       
    </ul>
</nav>
<div class="articulo view large-9 medium-8 columns content">
    <h3><?= h($articulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($articulo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $articulo->has('usuario') ? $this->Html->link($articulo->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $articulo->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articulo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($articulo->fecha) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Contenido') ?></h4>
        <?= $this->Text->autoParagraph(h($articulo->contenido)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Comentario') ?></h4>
        <?php if (!empty($articulo->comentario)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contenido') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->comentario as $comentario): ?>
            <tr>
                <td><?= h($comentario->id) ?></td>
                <td><?= h($comentario->contenido) ?></td>
                <td><?= h($comentario->fecha) ?></td>
                <td><?= h($comentario->usuario_id) ?></td>
                <td><?= h($comentario->articulo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comentario', 'action' => 'view', $comentario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comentario', 'action' => 'edit', $comentario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comentario', 'action' => 'delete', $comentario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comentario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
