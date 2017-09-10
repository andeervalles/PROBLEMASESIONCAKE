<?php
namespace App\Controller;

class UsuariosController extends AuthController {
    
     public function initialize() {
        parent::initialize();
        $this->loadModel('Roles');
    }
        public function index() {
         $usuarios = $this->Usuario->find();
        $this->set('usuarios', $usuarios);
        
        }
        
public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Usuario y/o clave inválido');
        }
    }



    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

}
