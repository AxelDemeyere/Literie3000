<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {    
        Schema::table('produits', function (Blueprint $table) {        
            $table->string('photo')->nullable();    
            
        }); 
    }
    
    public function down() {
        Schema::table('produits', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
    // Cette fonction down() supprimera la colonne photo de la table taches lorsque la migration est annulée.
};
