<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class EmailTypes extends Model
{
    protected $table = 'email_types';
    protected $primaryKey = 'email_type_id';
    public $timestamps = false;

    protected $fillable = [
        'email_type_id',
        'name',
        'template'
    ];
}
