<?php

namespace App;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class quytech extends Model
{
    //
   // use HasFactory;
   use Notifiable;
    protected $table = 'quyteches';

    protected $fillable = [
        'fname',  'lname', 'email',

        'image',
    ];
}
