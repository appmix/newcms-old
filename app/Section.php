<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class Section
{
    /**
     * @var string
     */
    public $table = 'sections';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name', 'content',
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
        $table->string('content');
    }

}
