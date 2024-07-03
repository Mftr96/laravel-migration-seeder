<?php
//creato tramite linea di comando php artisan make:migration create_trains_table
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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //vado ad aggiungere le colonne per la tabella trains
            //metodo per il dato (nella parentesi inserire il nome della colonna come stringa)
            $table->tinyText("azienda");
            $table->tinyText("stazione partenza");
            $table->tinyText("stazione arrivo");
            $table->date("orario partenza");
            $table->date("orario arrivo");
            $table->tinyText("codice treno");
            $table->tinyInteger("numero carrozze");
            $table->boolean("in orario");
            $table->boolean("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
