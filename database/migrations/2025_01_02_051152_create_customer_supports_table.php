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
        Schema::create('customer_supports', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->longText('message');
            $table->string('fullName');
            $table->string('email');
            $table->string('contact');
            $table->string('subject');
            $table->string('company')->nullable();
            $table->string('category')->nullable();
            $table->string('gst')->nullable();
            $table->string('source')->nullable();
            $table->date('createdOn');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_supports');
    }
};
