<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class Settings
{
    /**
     * @var string
     */
    public $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->string('setting');
        $table->string('value');
    }

}
