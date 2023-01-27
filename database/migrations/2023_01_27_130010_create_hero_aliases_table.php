<?php

use App\Models\HeroAliases;
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
        Schema::create(HeroAliases::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->integer(HeroAliases::COL_NAME_HERO_ID);
            $table->string(HeroAliases::COL_NAME_ALIAS, 100);
            $table->timestamps();

            $table->index(HeroAliases::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroAliases::TABLE_NAME);
    }
};
