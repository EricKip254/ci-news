<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';

    // query builder gets news items and by its slug
    public function getNews($slug = false)
    {
        if ($slug === false) {
            // finAdll helper method. Fetches all the data  
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}

?>