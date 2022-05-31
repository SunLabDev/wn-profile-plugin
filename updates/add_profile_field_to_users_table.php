<?php namespace SunLab\Profile\Updates;

use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;
use Winter\Storm\Support\Facades\Schema;

class AddProfileFieldToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', static function (Blueprint $table) {
            $table->json('profile_fields');
        });
    }

    public function down()
    {
        Schema::table('users', static function (Blueprint $table) {
            $table->dropColumn('profile_fields');
        });
    }
}
