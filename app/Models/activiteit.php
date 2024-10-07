<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activiteit extends Model
{
    use HasFactory;

    protected $table = 'activiteit';

    public function Activiteiten()
    {
        return $this->hasMany(activiteit::class);
    }
}