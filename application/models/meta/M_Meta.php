<?php
defined('BASEPATH') || exit('No direct script access allowed');

class M_Meta extends CI_Model {

public function coreMeta() {
    $data = [
        ['content' => 'akusah.com','keyword' =>'akusah'],
        ['content' => 'sah', 'keyword' =>'sah']
    ];
    return $data;
}
}

?>