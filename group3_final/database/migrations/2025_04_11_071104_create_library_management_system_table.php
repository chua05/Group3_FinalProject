<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('BookId');
            $table->string('Title');
            $table->string('Author');
            $table->string('BookCategory');
            $table->timestamps();
        });

        Schema::create('students', function (Blueprint $table) {
            $table->id('Student_Id');
            $table->string('Fullname');
            $table->string('Course');
            $table->dateTime('Entry_Time')->nullable();
            $table->dateTime('Exit_Time')->nullable();
            $table->string('Status');
            $table->timestamps();
        });

        Schema::create('borrow_records', function (Blueprint $table) {
            $table->id('Borrow_Id');
            $table->unsignedInteger('User_Id')->constrained()->onDelete('cascade');
            $table->unsignedInteger('Book_Id')->constrained()->onDelete('cascade');
            $table->string('Book_Name');
            $table->date('Borrow_Date');
            $table->date('Return_Date')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('library_management_system');
    }
};
