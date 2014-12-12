<?php
class Post extends AppModel {
	public $useTable = 'wp_posts';
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
		'image' => array(
			'notEmpty' => array(
		        'rule' => array('notEmpty'),
		        'message' => 'images is required'
      		),
		    'unique' => array(
		        'rule' => 'isUnique',
		       	'message' => 'image is isUnique',
		    ),
		),
    );
}
?>