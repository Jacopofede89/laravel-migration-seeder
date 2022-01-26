<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();

            $table->string('title', 100);
            
            $table->string('week_position', 10);

            $table->string('entry_position', 10);

            $table->string('peak_position', 10);

            $table->string('total_weeks', 10);

            $table->text('type_of_albums');

            $table->date('date_of_relese');

            $table->date('entry_date');

            $table->text('description_song');

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
        Schema::dropIfExists('songs');
    }
}
