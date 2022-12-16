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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('owner_identification_number')->unique();
            $table->string('haki_number')->nullable();
            $table->string('owner_name');
            $table->text('address');
            $table->text('description');
            $table->string('logo')->default('default.svg');
            $table->string('facebook_username')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->enum('status', ['approved', 'rejected', 'pending'])->default('pending');
            $table->text('message_rejected')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
