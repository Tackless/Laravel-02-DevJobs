<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            //
            $table->string('titulo');
            $table->foreignId('salarios_id')->constrained()->onDelete('cascade');
            $table->foreignId('categorias_id')->constrained()->onDelete('cascade');
            $table->string('empresa');
            $table->date('ultimo_dia');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('publicado')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vacantes', function (Blueprint $table) {
            $table->dropForeign('vacantes_categorias_id_foreign');
            $table->dropForeign('vacantes_salarios_id_foreign');
            $table->dropForeign('vacantes_user_id_foreign');
            $table->dropColumn([
                'titulo',
                'salarios_id',
                'categorias_id',
                'empresa',
                'ultimo_dia',
                'descripcion',
                'imagen',
                'publicado',
                'user_id'
            ]);
        });
    }
};
