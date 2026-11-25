<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Student extends Model
{
  use HasFactory;
  protected $fillable = [
    'name',
    'surname',
    'email',
    'phone',
    'date_of_birth'
  ];

  public function courses(): BelongsToMany
  {
    return $this->belongsToMany(Course::class)
      ->withPivot('enrolled_at')
      ->withTimestamps();
  }
}