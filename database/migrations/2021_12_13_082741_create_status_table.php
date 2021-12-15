<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lessee')->constrained('users')->onDelete('cascade');
            $table->string('plat');
            $table->foreign('plat')->references('plat')->on('vehicles')->onDelete('cascade');
            $table->enum('status', ['accepted', 'rejected', 'pending']);
            $table->mediumText('message')->nullable();
            //$table->primary(['lessee', 'plat']);
           //$table->primary(['lessee', 'plat']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status');
    }
}
