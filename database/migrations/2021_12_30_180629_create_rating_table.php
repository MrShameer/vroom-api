<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('owner')->constrained('users')->onDelete('cascade');
            $table->string('plat');
            $table->foreign('plat')->references('plat')->on('vehicles')->onDelete('cascade');
            $table->mediumText('message')->nullable();
            $table->float('rating');
            $table->datetime('created')->useCurrent();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rating');
    }
}
