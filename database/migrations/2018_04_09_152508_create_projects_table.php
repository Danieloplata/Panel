<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->default('1');
            $table->string('projectName');
            $table->string('amountQuoted');
            $table->string('companyEmail');
            $table->string('clientEmail');
            $table->string('methodology');
            $table->string('totalInterviews');
            $table->date('questionnaireBy');
            $table->date('scriptedBy');
            $table->date('fieldStart');
            $table->date('fieldEnd');
            $table->date('dataSpecBy');
            $table->date('finalDataBy');
            $table->string('openQuestions');
            $table->string('codeframeRequired');
            $table->string('rawDataFormat');
            $table->string('crossTabsRequired');
            $table->string('tabFormat');
            $table->string('verbFormat');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
