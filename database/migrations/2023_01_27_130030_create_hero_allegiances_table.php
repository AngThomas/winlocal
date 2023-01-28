<?php

use App\Models\HeroAllegiances;
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
        Schema::create(HeroAllegiances::TABLE_NAME, function (Blueprint $table) {
            $table->id(HeroAllegiances::COL_NAME_ID);
            $table->integer(HeroAllegiances::COL_NAME_HERO_ID);
            $table->string(HeroAllegiances::COL_NAME_ALLEGIANCE, 100);
            $table->timestamps();

            $table->index(HeroAllegiances::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroAllegiances::TABLE_NAME);
    }
};
