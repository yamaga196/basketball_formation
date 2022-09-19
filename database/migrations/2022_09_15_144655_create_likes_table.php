<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            //foreignId = テーブルをリンクする際に使用
            $table->foreignId('users_id')
            //constrained = 外部キー制約を使用する際に使用
            ->constrained()
            //onDelete = article_idが削除・更新された場合の処理を記述する
            ->onDelete('cascade');
            //foreignId = テーブルをリンクする際に使用
            $table->foreignId('formation_id')
            //constrained = 外部キー制約を使用する際に使用
            ->constrained()
            //onDelete = article_idが削除・更新された場合の処理を記述する
            ->onDelete('cascade');
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
        Schema::dropIfExists('likes');
    }
}
