<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * See https://laravel.com/docs/5.4/migrations#creating-tables
 */
class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tmdb_id')
                    ->nullable()->comment('The primary id on api.themoviedb.org');
            $table->integer('imdb_id')
                    ->nullable()->comment('The primary id on IMDb.com');
            $table->string('title', 50);
            $table->text('overview')
                    ->nullable()->comment('Movie overview/description text');
            $table->tinyInteger('format')
                    ->nullable()->comment('1=VHS,2=LaserDisc,3=DVD,4=Blu-ray,5=File,6=Streaming');
            $table->smallInteger('length')
                    ->unsigned()->nullable()->comment('Time in minutes: 0-500');
            $table->smallInteger('release_year')
                    ->unsigned()->nullable()->comment('1800-2100');
            $table->tinyInteger('rating')
                    ->nullable()->comment('Generic movie rating: 1-5');
            $table->timestamp('created_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')
                    ->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table->index('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie');
    }
}
