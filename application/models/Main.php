<?php

namespace application\models;
use application\core\Model;

class Main extends Model
{
    public function getNews ()
    {
        $params = [
            'id' => 1
        ];
        $data = $this->db->column( 'SELECT name FROM user WHERE id = :id', $params );
        debug($data);
    }

}