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
        Schema::create('career_forms', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('contact');
            $table->string('email');
            $table->longText('currentAddress');
            $table->string('workExperience');
            $table->string('previousJob')->nullable();
            $table->string('previousEmployer')->nullable();
            $table->string('references')->nullable();
            $table->string('preferedCleaningType');
            $table->string('toolsExpertise');
            $table->string('preferedWorkType');
            $table->string('preferedWorkLocation');
            $table->string('shiftPreference');
            $table->string('identityProofUrl');
            $table->boolean('declarationCheck')->default(0);
            $table->date('createdOn')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_forms');
    }
};
