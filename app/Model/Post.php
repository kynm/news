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
		        'message' => 'body is required'
      		),
		    // 'check_image' => array(
		    //     'rule' => 'check_image',
		    //    	'message' => 'file is image',
		    // ),
		),
    );

  	public function check_image($check) {
        $file = $check['image'];
        $ext = substr(strtolower(strrchr($file, '.')), 1);
        $arr_ext = array('jpg', 'jpeg', 'gif');
        if(in_array($ext, $arr_ext)) {
		    return true;
		} else {
			return false;
		}
  	}
}
?>