<?php

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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            //DBテーブルの内容
            //氏名・電話番号・見学日・見学時間・年齢・お問い合わせ内容
            $table->string('your_name', 20);
            $table->string('tel', 11);
            $table->date('date');
            $table->string('time');
            $table->string('ages');
            $table->string('contact')->nullable($value = true);
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
        Schema::dropIfExists('forms');
    }
};
