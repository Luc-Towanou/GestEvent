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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->decimal('montant', 10,2);
            $table->enum('methode', ['carte', 'PayPal', 'mobile_money'])->default('mobile_money');
            $table->enum('statut', ['en_attente', 'confirmé', 'échoué'])->default('en_attente');
            $table->timestamps();
        });
    }   
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
