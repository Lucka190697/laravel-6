<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\Animals\AnimalAgeClassificationEnum;
use App\Enums\Animals\AnimalProductionStatus;
use App\Enums\Animals\AnimalSexEnum;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->string('name');
            $table->timestamp('born_date');
            $table->enum('age_classification', AnimalAgeClassificationEnum::getConstantsValues());
            $table->enum('sex', AnimalSexEnum::getConstantsValues());
            $table->enum('production_classification', AnimalProductionStatus::getConstantsValues());
            $table->string('breed');

            $table->string('thumbnail');

            $table->integer('mother_id')->nullable();
            $table->integer('father_id')->nullable();

            $table->integer('farm_id')->unsigned();
            $table->foreign('farm_id')
                ->references('id')
                ->on('farms')
                ->onDelete('cascade');

            $table->integer('responsible_id')->unsigned();
            $table->foreign('responsible_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->softDeletes();

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
        Schema::dropIfExists('animals');
    }
}
