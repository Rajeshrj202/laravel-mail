<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $table = 'subscribers';
    public $timestamps = false;
    public $fillable = [

        'name',
        'email',
        'isactive'

    ];


    public static function getActive()
    {
        return Subscriber::where('isactive',1)->paginate(10);
    }
}
