<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requesters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('password'); 
            $table->string('name'); //担当者名を保存するカラム
            $table->string('tell'); //会社の電話番号を保存するカラム
            $table->string('company_address');// 会社の住所を保存するカラム
            $table->string('email')->unique();  // メールアドレスを保存するカラム
            $table->string('company_name'); //会社の名前を保存するカラム
            $table->string('company_url'); //会社のurlを保存するカラム
            $table->string('pr_url'); //PR商品やサービスのurlを保存するカラム
            $table->string('body'); //PR商品やサービスの説明を保存するカラム
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
        Schema::dropIfExists('requesters');
    }
}
