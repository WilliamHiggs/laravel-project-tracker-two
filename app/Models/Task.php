<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'project_id',
    'description',
    'completed',
    'completed_at'
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'completed' => 'boolean',
    'completed_at' => 'datetime'
  ];

  public function complete($completed = true)
  {
    $this->update(compact('completed'));
  }

  public function incomplete()
  {
    $this->complete(false);
  }

  public function project()
  {
    return $this->belongsTo(Project::class);
  }
}
