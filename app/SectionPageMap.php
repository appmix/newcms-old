<?php

namespace App;

use Illuminate\Database\Schema\Blueprint;

class SectionPageMap
{
    /**
     * @var string
     */
    public $table = 'sections_pages_map';

    /**
     *
     *
     * @var array
     */
    public static function up(Blueprint $table) {
        $table->increments('id');
        $table->integer('page_id')->unsigned()->nullable();
        $table->integer('section_id')->unsigned()->nullable();
        $table->foreign('page_id')->references('id')->on((new \App\Page)->table)->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('section_id')->references('id')->on((new \App\Section)->table)->onUpdate('cascade')->onDelete('cascade');
    }

}
