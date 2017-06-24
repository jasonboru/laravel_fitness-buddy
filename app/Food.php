<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  /**
  * Attributes that are mass-assignable
  **/
  protected $fillable = ['name', 'protien', 'carbohydrates', 'fat'];

  public function meal() {
    return $this->belongsTo(Meal::class);
  }

  public function calories(){
    return ($this->protien * 4) + ($this->carbohydrates * 4) + ($this->fat * 9);
  }
}
