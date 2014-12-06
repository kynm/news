<?php
class UsersController extends AppController {
    public $name = 'Users';
    public $components = array('Facebook.Connect','Auth');
    public $helpers    = array('Facebook.Facebook');
    public function beforeFilter() {
         $this->Auth->loginRedirect = array('action' => 'index');
    }

    public function index() {

    }
 
    public function login() {

    }
     
    public function logout() {
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }
}
?>