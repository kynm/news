<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Paginator');
    public $components = array('Paginator');

    public $paginate = array(
        'Post' => array('limit' => 30,
            'order' => array(
                'Post.title' => 'asc'
            )
        ),
    );
    public function add() {
        if ($this->request->is('post')) {
            $file = $this->data['Post']['image'];
            move_uploaded_file($file['tmp_name'], WWW_ROOT . 'upload/' . $file['name']);
            $this->request->data['Post']['image'] = trim($file['name']);
            if ($this->Post->save($this->request->data)) {
                $this->redirect(array('action' => 'index'));
            } else {
                $this->set('errors', $this->Post->validationErrors);
                $this->Session->setFlash('Unable to add your post.');
            }
        }
    }

    public function edit($id = null) {
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

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
    }

    public function index($flag = 'none') {
        $order = array();
        if ($flag == 'none') {
            $order['Post.created'] = 'asc';
        }
        if ($flag == 'hot') {
            $order['Post.view'] = 'asc';
        }
        $this->Paginator->settings = array(
            'limit' => 30,
            'order' => $order
        );
        $data = $this->Paginator->paginate('Post');
        $this->set('posts', $data);
    }
    public function view($id) {
        $this->Post->id = $id;
        $post = $this->Post->read();
        $view = $post['Post']['view'];
        $this->Post->set('view', $view + 1);
        $this->Post->save();
        $this->set('post', $post);

    }
}