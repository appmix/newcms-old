<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class MenuItem
{

    /**
     * @var string
     */
    public $table = 'menu_items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug', 'name'
    ];

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->integer('menu')->unsigned()->nullable();
        $table->integer('parent')->unsigned()->nullable();
        $table->string('slug');
        $table->string('name');
        $table->foreign('menu')->references('id')->on((new Menu)->table);
        $table->foreign('parent')->references('id')->on((new MenuItem)->table);
    }

}
