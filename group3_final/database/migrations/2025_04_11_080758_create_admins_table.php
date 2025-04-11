<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('admins', function (Blueprint $table) {
        $table->id('admin_id');
        $table->string('firstname');
        $table->string('lastname');
        $table->string('position');
        $table->string('email')->unique();
        $table->string('contact_number');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('admins');
}

};
