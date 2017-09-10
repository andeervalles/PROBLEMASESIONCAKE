<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Articulo[]|\Cake\Collection\CollectionInterface $articulo
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo Articulo'), ['action' => 'add']) ?></li>
       
    </ul>
</nav>
<div class="articulo index large-9 medium-8 columns content">
    <h3><?= __('Articulos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th style="width: 80px;"></th>
                <th style="width: 80px;"></th>
                <th style="width: 80px;"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulo as $articulo): ?>
            <tr>
                <td><?= $this->Number->format($articulo->id) ?></td>
                <td><?= h($articulo->titulo) ?></td>
                <td><?= h($articulo->fecha) ?></td>
                <td><?= $articulo->has('usuario') ? $this->Html->link($articulo->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $articulo->usuario->id]) : '' ?></td>
                
               <td class="actions">
                    <?= $this->Html->link('Mostrar', ['action' => 'view', $articulo->id,'width' => '20px'],['class' => 'btn btn-primary'] ) ?>
                   
                </td>
                        <td class="actions">
                 <?= $this->Html->link(__('Editar'), ['action' => 'edit', $articulo->id]) ?>
                       </td>
                       
                      <td class="actions">
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?>
                      </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
