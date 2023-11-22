<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];



    
    /**
     * Define the many-to-many relationship with User model.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
}
