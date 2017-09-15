<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class userdetail extends Model
{
    public $table = "userdetail";
    public function tablename(){
    	return $this->table;
    }
}
