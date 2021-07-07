<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskRepository extends Model
{
    use HasFactory;

    public function forUser(User $user)
    {
        return $user->tasks()->orderBy('created_at', 'asc')->get();
    }
}
