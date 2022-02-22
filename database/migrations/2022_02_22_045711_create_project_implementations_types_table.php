<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectImplementationsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_implementations_types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_implementation_id')->references('id')->on('project_implementations');
            $table->foreignId('implementation_type_id')->references('id')->on('implementation_types');
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
        Schema::dropIfExists('project_implementations_types');
    }
}
