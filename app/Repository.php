<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model {

  protected $table = 'repositories';

  public function getDates()
  {
    return array('created_date', 'last_pushed');
  }
  
}