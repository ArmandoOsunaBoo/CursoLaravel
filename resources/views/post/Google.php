<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Google extends Model
{
  /**
   * The attributes that are mass assignable.
   * \
   * @var array
   */

   private $id;
   private $code;


  public function __construct($id,$code)
  {
    $this->id=$id;
    $this->secret=$code;
  }

  public function foo()
  {
    return "dsfdfsdf";
  }

}
