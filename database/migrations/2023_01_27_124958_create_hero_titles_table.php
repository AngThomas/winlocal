<?php

use App\Models\HeroTitles;
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
        Schema::create(HeroTitles::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->integer(HeroTitles::COL_NAME_HERO_ID);
            $table->string(HeroTitles::COL_NAME_TITLE, 100);
            $table->timestamps();

            $table->index(HeroTitles::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroTitles::TABLE_NAME);
    }
};
