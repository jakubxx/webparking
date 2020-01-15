<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Parking extends Model
{
    use Sortable;

    protected $fillable = [
        'id', 'start_hour', 'start_img', 'end_hour', 'end_img', 'end_hour', 'registration'
    ];

    public $sortable = ['start_hour', 'start_img', 'end_hour', 'end_img', 'registration'];

    public $timestamps = false;

    protected $hidden = [
        //
    ];
}
