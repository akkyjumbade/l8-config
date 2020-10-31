<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('var');
            $table->string('type')->default('option');
            $table->string('label');
            $table->string('caption')->nullable();
            $table->string('data_type')->default('text');
            $table->longText('data')->nullable();
            $table->longText('default_value')->nullable();
            $table->string('scope')->default('system');
            $table->string('level')->default('system');
            $table->boolean('is_autoload')->default(false);
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
        Schema::dropIfExists('configs');
    }
}
