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
            $table->string('projectName');
            $table->string('amountQuoted');
            $table->string('companyEmail');
            $table->string('clientEmail');
            $table->string('methodology');
            $table->string('totalInterviews');
            $table->string('questionnaireBy');
            $table->string('scriptedBy');
            $table->string('fieldStart');
            $table->string('fieldEnd');
            $table->string('dataSpecBy');
            $table->string('finalDataBy');
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
