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
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_link')->default('https://Site-Link.com');
            $table->string('site_title')->default('TITLE');
            $table->string('company_name')->default('Site Name');
            $table->string('email');
            $table->string('private_email');
            $table->string('phone')->default('+123-Phone');
            $table->string('telephone')->default('+123-Phone-2');
            $table->string('address')->default('site street address');
            $table->string('app_contact')->default('site street address 2');

            $table->boolean('refer')->default(0);
            $table->boolean('verify')->default(1);
            $table->boolean('login')->default(1);
            $table->string('logo')->default('logo.png');
            $table->string('front_page')->default('http://kelvteck.app/home or /home');
            $table->string('about_page')->default('http://kelvteck.app/about or /about');
            $table->string('faq_page')->default('http://kelvteck.app/faq or /faq');
            $table->string('help_page')->default('http://kelvteck.app/help or /help');
            $table->string('policy_page')->default('http://kelvteck.app/policy or /policy');
            $table->string('terms_page')->default('http://kelvteck.app/terms or /terms');
            $table->string('contact_page')->default('http://kelvteck.app/contact or /contact');
            $table->string('var1')->nullable();
            $table->string('var2')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
