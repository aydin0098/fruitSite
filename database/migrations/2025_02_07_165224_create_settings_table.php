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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('site_logo')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('work_time')->nullable();
            $table->string('work_day')->nullable();
            $table->text('about_us_text')->nullable();
            $table->string('about_us_image')->nullable();
            $table->string('contact_us_image')->nullable();
            $table->string('about_us_banner')->nullable();
            $table->string('contact_us_banner')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
