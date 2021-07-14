<?php
namespace Tarsicio\Calculadora;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * @author Tarsicio Carrizales
 */
class CreateTiendasVisitadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiendas_visitadas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('stores_id')->nullable()->index();
            $table->bigInteger('users_id')->nullable()->index();
            $table->string('contexto')->nullable();
            $table->boolean('logueado')->default(false);
            $table->text('properties')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiendas_visitadas');
    }
}
