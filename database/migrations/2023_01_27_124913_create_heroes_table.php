<?php

use App\Models\Heroes;
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
        Schema::create(Heroes::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->string(Heroes::COL_NAME_URL, 100);
            $table->string(Heroes::COL_NAME_NAME, 40);
            $table->string(Heroes::COL_NAME_GENDER, 40);
            $table->string(Heroes::COL_NAME_CULTURE, 40);
            $table->string(Heroes::COL_NAME_BORN, 40);
            $table->string(Heroes::COL_NAME_DIED, 40);
            $table->string(Heroes::COL_NAME_FATHER, 40);
            $table->string(Heroes::COL_NAME_MOTHER, 40);
            $table->string(Heroes::COL_NAME_SPOUSE, 40);
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
        Schema::dropIfExists(Heroes::TABLE_NAME);
    }
};
