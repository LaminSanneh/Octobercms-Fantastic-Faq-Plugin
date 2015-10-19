<?php namespace LaminSanneh\FantasticFaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class GroupIdIsNullable extends Migration
{
    public function up()
    {

        Schema::table('laminsanneh_fantasticfaq_questions', function($table)
        {
            $table->integer('group_id')->unsigned()->nullable()->change();
        });

    }

    public function down()
    {
        Schema::table('laminsanneh_fantasticfaq_questions', function($table)
        {
            $table->integer('group_id')->unsigned()->change();
        });
    }
}
