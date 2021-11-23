<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'title',
    'description'
  ];

  protected static function boot()
  {
    parent::boot();

    static::deleted(function ($project) {
      foreach ($project->tasks as $task) {
        $task->delete();
      }
    });
  }

  public function owner()
  {
    return $this->belongsTo(User::class);
  }

  public function tasks()
  {
    return $this->hasMany(Task::class);
  }

  public function addTask($task)
  {
    $this->tasks()->create($task);
  }
}
