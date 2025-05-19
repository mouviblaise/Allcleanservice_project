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
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
    $table->string('prenom');
    $table->string('email');
    $table->string('telephone');
    $table->string('adresse')->nullable();
    $table->string('service');
    $table->string('photo')->nullable()->after('service');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('devis', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
        Schema::dropIfExists('devis');
    }
};
