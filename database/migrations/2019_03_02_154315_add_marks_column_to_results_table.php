<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMarksColumnToResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->string('bangla')->default('N/A')->after('semester');
            $table->string('english')->default('N/A')->after('bangla');
            $table->string('math')->default('N/A')->after('english');
            $table->string('physics')->default('N/A')->after('math');
            $table->string('biology')->default('N/A')->after('physics');
            $table->string('chemistry')->default('N/A')->after('biology');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropColumn('bangla');
            $table->dropColumn('english');
            $table->dropColumn('math');
            $table->dropColumn('physics');
            $table->dropColumn('biology');
            $table->dropColumn('chemistry');
        });
    }
}
