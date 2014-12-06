<?php

class FacebookComponent extends Component {

    public function __construct () {
        // foreach ($this->uses as $model) {
        //     $this->$model = ClassRegistry::init($model);
        // }
    }

    public function facebook_count($url){
        $fqlURL = "https://api.facebook.com/method/links.getStats?urls=".$url."&format=json";
        // Facebook Response is in JSON
        $response = file_get_contents($fqlURL);
        return json_decode($response);
    }
}