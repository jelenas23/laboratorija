<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NovaKolonaPolLaborant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laborants', function (Blueprint $table) {
            $table->after('prezime', function ($table) {
                $table->string('pol')->nullable();
            });

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laborants', function (Blueprint $table) {
            $table->dropColumn('pol');
        });
    }
}
