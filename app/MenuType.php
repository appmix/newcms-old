<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class MenuType
{

    /**
     * @var string
     */
    public $table = 'menu_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type'
    ];

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->string('type');
    }

}
