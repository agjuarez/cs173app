<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Announcement extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [

    'title',
    'content'
  ];
  protected $attributes = array(
    'author' => 'School Official',
    'date' => ' 13-11-16',
    'level' => 3,
  );
}
