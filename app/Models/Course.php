<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Course extends Model
{

  use HasFactory;
  protected $fillable = [
    'academy_id',
    'name',
    'description',
    'start_date',
    'end_date',
    'capacity'
  ];

  public function academy(): BelongsTo
  {
    return $this->belongsTo(Academy::class);
  }

  public function students(): BelongsToMany
  {
    return $this->belongsToMany(Student::class)
      ->withPivot('enrolled_at')
      ->withTimestamps();
  }
}