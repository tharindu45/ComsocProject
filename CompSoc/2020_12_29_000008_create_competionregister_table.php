<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetionregisterTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'competionregister';

    /**
     * Run the migrations.
     * @table competionregister
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('CompetitionID');
            $table->string('RegistrationNo', 12);
            $table->string('Name', 50);
            $table->tinyInteger('YOS');
            $table->string('Email', 50);

            $table->index(["RegistrationNo"], 'RegNo4_idx');


            $table->foreign('RegistrationNo', 'RegNo4_idx')
                ->references('RegistrationNo')->on('students')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
