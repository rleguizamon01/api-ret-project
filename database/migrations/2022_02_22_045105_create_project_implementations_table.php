<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectImplementationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_implementations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->references('id')->on('projects');
            $table->foreignId('project_design_id')->nullable()->references('id')->on('project_designs');
            $table->text('description');
            $table->json('attachments');
            $table->string('repository_url');
            $table->string('host_url');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_implementations');
    }
}
