<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class Menu
{

    /**
     * @var string
     */
    public $table = 'menu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu',
    ];

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->string('menu')->index();
    }

}
