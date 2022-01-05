<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;
    public $table ="users";
    public $timestamps = false;
    public $primarykey="id";
    public function getPost()
    {
        return $this->hasMany("App\Models\Post","userId","id");
    }
}
