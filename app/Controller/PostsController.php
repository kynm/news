<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Paginator', 'Ck');
    //public $helpers = array('Html', 'Form', 'Paginator', 'Cache', 'Ck');
    public $cacheAction = array(
         'view'  => array('callbacks' => true, 'duration' => '+1 hours'),
         'index'  => array('callbacks' => true, 'duration' => '+1 hours'),
    );

    public $components = array(
        'FacebookComponent' => array(
            'className' => 'Facebook'
        ),
        'Paginator',
    );
    public function add($check = null) {
        $this->layout = 'posts';
        if ($check != 'k54a2') {
            $this->redirect(array('action' => 'index'));
        }
        $groups = Configure::read('groups');
        $this->set('groups', $groups);
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->set('errors', $this->Post->validationErrors);
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }

    public function edit($id = null, $check = null) {
        $this->layout = 'posts';
        $this->Post->id = $id;
        if ($this->request->is('get')) {
            $this->request->data = $this->Post->read();
        } else {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash('Unable to update your post.');
            }
        }
    }

    public function delete($id, $check = null) {
        if ($check != 'k54a2') {
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function index() {
        $order = array();
        $conditions = array();
        $order['Post.created'] = 'asc';
        $conditions['Post.post_status'] = 'publish';
        $this->Paginator->settings = array(
            'conditions' => $conditions,
            'limit' => 30,
            'order' => $order
        );
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
    }
    public function category($flag = 'none') {
        $order = array();
        $conditions = array();
        if ($flag == 'none') {
            $order['Post.created'] = 'asc';
        } else {
            $conditions['Post.group'] = $flag;
        }
        if ($this->request->is('post')) {
            $dataSearch = $this->request->data['Post']['search'];
            $conditions['OR'] = array("Post.title LIKE '%$dataSearch%'","Post.body LIKE '%$dataSearch%'", "Post.group LIKE '%$dataSearch%'");

        }
        //die(var_dump($conditions));
        $this->Paginator->settings = array(
            'conditions' => $conditions,
            'limit' => 30,
            'order' => $order
        );
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
        $postNews = $this->Post->find('all', array('limit' => 10));
        $postHots = $this->Post->find('all', array('order' => 'view', 'limit' => 10));
        $this->set('postNews', $postNews);
        $this->set('postHots', $postHots);
    }
    public function view($id) {
        $this->Post->id = $id;
        $post = $this->Post->read();
        if (!$post) {
            $this->redirect(array('action' => 'index'));
        }
        $group = $post['Post']['group'];
        $allPostGroup = $this->Post->find('all', array('conditions' => array('group' => $group), 'order' => 'view', 'limit' => 5));
        $view = $post['Post']['view'];
        $this->Post->set('view', $view + 1);
        $url = 'http://localhost/news/posts/view/' . $id;
        $countComment = $this->FacebookComponent->facebook_count($url);
        if ($countComment) {
            $this->Post->set('comment_count', $countComment);
        }
        $postNews = $this->Post->find('all', array('limit' => 10));
        $postHots = $this->Post->find('all', array('order' => 'view', 'limit' => 10));
        $this->Post->save();
        $this->set('post', $post);
        $this->set('postNews', $postNews);
        $this->set('allPostGroup', $allPostGroup);
        $this->set('postHots', $postHots);

    }
}