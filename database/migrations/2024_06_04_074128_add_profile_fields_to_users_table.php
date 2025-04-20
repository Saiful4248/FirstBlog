<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfileFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->integer('followers_count')->default(0);
            $table->integer('following_count')->default(0);
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['profile_picture', 'bio', 'followers_count', 'following_count']);
        });
    }
}
