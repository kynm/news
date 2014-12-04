<?php
class Post extends AppModel {

	public $validate = array(
        'name' => array(
            'rule' => 'unique'
        ),
    );
}
?>