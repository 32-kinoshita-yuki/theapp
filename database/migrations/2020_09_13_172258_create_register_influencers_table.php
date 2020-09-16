<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_influencers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('password'); 
            $table->string('tell');// 電話番号を保存するカラム
            $table->string('email');  // メールアドレスを保存するカラム
            $table->string('name'); // 名前を保存するカラム
            $table->string('address');// 住所を保存するカラム
            $table->string('gender');  // 性別を保存するカラム
            $table->string('age');// 年齢を保存するカラム
            $table->string('sns_kind');// 使用するsnsを保存するカラム
            $table->string('sns_url');// snsのurlを保存するカラム
            $table->string('sns_genre');//snsのジャンルを保存するカラム
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_influencers');
    }
}
