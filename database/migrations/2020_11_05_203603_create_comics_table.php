<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 30);
            $table->string("original_title", 50)->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            // imposto la relazione con author
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->smallInteger('number');
            $table->smallInteger('n_pages');
            $table->string("edition", 50);
            $table->string("reading", 3);
            $table->float("price", 6,2);
            $table->boolean("color")->default(false);
            $table->year("release");
            $table->string("cover")->default("https://via.placeholder.com/200x300");
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
        Schema::dropIfExists('comics');
    }
}