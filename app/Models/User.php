<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password'])]
class User extends Authenticatable
{
  /** @use HasFactory<UserFactory> */
  use HasFactory, Notifiable;

  protected function casts(): array
  {
    return [
      'password' => 'hashed',
    ];
  }

  public function academies(): HasMany
  {
    return $this->hasMany(Academy::class);
  }
}