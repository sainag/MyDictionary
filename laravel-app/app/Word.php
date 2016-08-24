<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $guarded = [];
    //protected $fillable = ['word','slug','meaning','language','note'];
    protected $primaryKey = 'wordid';
}
