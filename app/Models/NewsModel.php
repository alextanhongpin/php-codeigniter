<?php

// Models are the place where you
// retrieve, insert and update information
// in your database or other data stores.
// They provide access to your data.

namespace App\Models;

use CodeIgniter\Model;

// Create a new model by extending
// CodeIgniter\Model and loads the
// database library.
class NewsModel extends Model
{
    protected $table = 'news';

    public function getNews($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
