<?php

use App\Models\HeroActors;
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
        Schema::create(HeroActors::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->integer(HeroActors::COL_NAME_HERO_ID);
            $table->string(HeroActors::COL_NAME_PLAYED_BY, 100);
            $table->timestamps();

            $table->index(HeroActors::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroActors::TABLE_NAME);
    }
};
