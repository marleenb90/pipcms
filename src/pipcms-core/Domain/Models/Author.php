<?php

namespace PIPcmsCore\Domain\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table = 'authors';
}
