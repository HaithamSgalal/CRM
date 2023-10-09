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
        Schema::create('clients', function (Blueprint $table) {

            $table->id();
            $table->string('name',64) ;
            $table->string('address' , 64) ;
            $table->string('contact_num_one','15');
            $table->string('contact_num_two','15')->nullable();
            $table->string('email',32);
            $table->string('status',64);
            $table->foreignId('unit_id');
            $table->foreignId('user_id');
            $table->mediumText('notes');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
