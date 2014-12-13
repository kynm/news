<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Paginator', 'Ck');
    //public $helpers = array('Html', 'Form', 'Paginator', 'Cache', 'Ck');
    // public $cacheAction = array(
    //      'view'  => array('callbacks' => true, 'duration' => '+1 hours'),
    //      'index'  => array('callbacks' => true, 'duration' => '+1 hours'),
    // );

    public $components = array(
        'FacebookComponent' => array(
            'className' => 'Facebook'
        ),
        'Paginator',
    );
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view','category');
    }
    public function add($check = null) {
        $this->layout = 'posts';
        $groups = Configure::read('groups');
        $this->set('groups', $groups);
        if ($this->request->is('post')) {
            if (!empty($this->request->data)) {
                //Check if image has been uploaded
                if (!empty($this->request->data['Post']['image']['name'])) {
                    $file = $this->request->data['Post']['image']; //put the data into a var for easy use
                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
                    //only process if the extension is valid
                    if(in_array($ext, $arr_ext)) {
                        //do the actual uploading of the file. First arg is the tmp name, second arg is 
                        //where we are putting it
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/upload/posts/' . $file['name']);

                        //prepare the filename for database entry
                        unset($this->request->data['Post']['image']);
                        $this->request->data['Post']['post_author'] = $this->Auth->user()['id'];
                        $this->request->data['Post']['image'] = '/img/upload/posts/' . $file['name'];
    
                    }
                }
                //now do the save
                if($this->Post->save($this->request->data)) {
                    $this->redirect(array('action' => 'index'));
                } else {
                    $this->set('errors', $this->Post->validationErrors);
                }
            }
        }
    }

    public function edit($id = null) {
        $this->layout = 'posts';
        $this->Post->id = $id;
        $post = $this->Post->read();
        if (!$post) {
            $this->redirect(array('action' => 'index'));
        }
        if ($this->request->is('post')) {
            $data = $this->request->data;
            if (isset($data['Post']['image']['name'])) {
                $file = $this->request->data['Post']['image']; //put the data into a var for easy use
                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions
                //only process if the extension is valid
                if(in_array($ext, $arr_ext)) {
                    //do the actual uploading of the file. First arg is the tmp name, second arg is 
                    //where we are putting it
                    move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/upload/posts/' . $file['name']);

                    //prepare the filename for database entry
                    unset($this->request->data['Post']['image']);
                    $this->request->data['Post']['image'] = '/img/upload/posts/' . $file['name'];

                }
            } else {
                $this->request->data['Post']['image'] = $post['Post']['image'];
            }
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            } else {
                $this->set('errors', $this->Post->validationErrors);
                $this->Session->setFlash('Unable to update your post.');
            }
        }
        $this->request->data = $post;
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function index() {
        $groups = Configure::read('groups');
        $order = array();
        $conditions = array();
        $order['Post.created'] = 'desc';
        //$conditions['Post.post_status'] = 'publish';
        $this->Paginator->settings = array(
            'conditions' => $conditions,
            'limit' => 6,
            'order' => $order
        );
        $allDataView = array();
        foreach ($groups as $key => $value) {
            $$key = $this->Post->find('all', array('conditions' => array('group' => $key), 'limit' => 6, 'order' => array('created' => 'desc')));
            $allDataView[$key] = $$key;
        }
        $this->set('allDataView', $allDataView);
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
        $postNews = $this->Post->find('all', array('order' => array('created' => 'desc'), 'limit' => 10));
        $postHots = $this->Post->find('all', array('order' => array('view' => 'desc'), 'limit' => 10));
        $this->set('postNews', $postNews);
        $this->set('postHots', $postHots);
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
            'limit' => 12,
            'order' => $order
        );
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
        $postNews = $this->Post->find('all', array('order' => array('created' => 'desc'), 'limit' => 10));
        $postHots = $this->Post->find('all', array(array('view' => 'desc'), 'limit' => 10));
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
        $postNews = $this->Post->find('all', array('order' => array('created' => 'desc'), 'limit' => 10));
        $postHots = $this->Post->find('all', array(array('view' => 'desc'), 'limit' => 10));
        $this->Post->save();
        $this->set('post', $post);
        $this->set('postNews', $postNews);
        $this->set('allPostGroup', $allPostGroup);
        $this->set('postHots', $postHots);

    }
}