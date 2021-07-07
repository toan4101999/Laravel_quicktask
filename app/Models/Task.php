<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
<<<<<<< HEAD
        'name',
    ];
    
=======
        'name'
    ];
>>>>>>> 722619b627dc79a9979dd741ddabfe720d9649dc
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
