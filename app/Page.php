<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class Page
{
    /**
     * @var string
     */
    public $table = 'pages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name',
    ];

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->string('slug')->unique();
        $table->string('name');
    }

}
