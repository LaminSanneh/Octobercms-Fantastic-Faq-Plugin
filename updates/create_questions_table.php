<?php namespace LaminSanneh\FantasticFaq\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('laminsanneh_fantasticfaq_questions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('laminsanneh_fantasticfaq_questions');
    }

}
