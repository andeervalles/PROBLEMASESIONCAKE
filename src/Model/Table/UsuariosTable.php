<?php

namespace App\Model\Table;
use \Cake\ORM\Table;
/**
 * Description of UsuariosTable
 *
 * @author Usuario
 */
class UsuariosTable extends Table {
  public function initialize(array $config) {
        
        $this->setTable('usuario');
        $this->setPrimaryKey('id');
        $this->setEntityClass('App\Model\Entity\Usuario');
        
    }
}
