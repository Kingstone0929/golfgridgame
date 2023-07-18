<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerName extends Model
{
    use HasFactory;

    protected $table = "playername";
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'years',
        'imageUrl'
    ];


}
