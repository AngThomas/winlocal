<?php

use App\Models\HeroPovBooks;
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
        Schema::create(HeroPovBooks::TABLE_NAME, function (Blueprint $table) {
            $table->id();
            $table->integer(HeroPovBooks::COL_NAME_HERO_ID);
            $table->string(HeroPovBooks::COL_NAME_POV_BOOK_URL, 100);
            $table->timestamps();

            $table->index(HeroPovBooks::COL_NAME_HERO_ID);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(HeroPovBooks::TABLE_NAME);
    }
};
