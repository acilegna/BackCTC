<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $primaryKey = 'id';
    public $timestamps = false;
    //lista blanca atributos que deberían ser asignables en masa
    protected $fillable =
    [
        'title',
        'description',
        'date',
        'location',
        'responsible',
        'likes'
    ];
}