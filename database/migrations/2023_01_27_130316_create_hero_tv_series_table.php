<?php

use App\Models\HeroTvSeries;
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
        Schema::create(HeroTvSeries::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->integer(HeroTvSeries::COL_NAME_HERO_ID);
            $table->string(HeroTvSeries::COL_NAME_TV_SERIES, 100);
            $table->timestamps();

            $table->index(HeroTvSeries::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroTvSeries::TABLE_NAME);
    }
};
