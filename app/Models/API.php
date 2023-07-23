<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API extends Model
{
    use HasFactory;

    protected $table = 'discord';

    public $primaryKey = 'id';

    public $connection = 'discord_db';

    protected $fillable = [
        'type',
        'channel',
        'title',
        'content',
        'color',
        'footer',
        'completed',
    ];
}
