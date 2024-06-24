<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->date('check_in');
            $table->date('check_out');
            $table->string('email');
            $table->string('nom');
            $table->string('prenom');
            $table->string('tel');
            $table->integer('adults');
            $table->integer('children');
            $table->string('payment_method');
            $table->decimal('amount', 10, 2);
            $table->foreignId('room_id')->constrained('room');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
