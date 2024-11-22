<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id_posts');
            $table->string('judul');
            $table->longText('desc');
            $table->longText('content');
            $table->unsignedBigInteger('id_admin');
            $table->timestamps();

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
