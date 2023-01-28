<?php

use App\Models\HeroBooks;
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
        Schema::create(HeroBooks::TABLE_NAME, function (Blueprint $table) {
            $table->id(HeroBooks::COL_NAME_ID);
            $table->integer(HeroBooks::COL_NAME_HERO_ID);
            $table->string(HeroBooks::COL_NAME_BOOK_URL, 100);
            $table->timestamps();

            $table->index(HeroBooks::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroBooks::TABLE_NAME);
    }
};
