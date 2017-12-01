<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateDefenderPermissionUserTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        
        Schema::create(config('defender.permission_user_table', 'permission_user'), function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('user_id')->unsigned()->index();
            

            $table->integer(config('defender.permission_key', 'permission_id'))->unsigned()->index();
            

            $table->tinyInteger('value')->default(-1);
            $table->timestamp('expires')->nullable();
        });
    
        Schema::table(config('defender.permission_user_table', 'permission_user'), function($table) {
    
            $table->foreign('user_id')->references('id')->on(config('auth.table', 'users'))->onDelete('cascade');
            $table->foreign(config('defender.permission_key', 'permission_id'))->references('id')
                ->on(config('defender.permission_table', 'permissions'))
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table(config('defender.permission_user_table', 'permission_user'), function (Blueprint $table) {
            $table->dropForeign(config('defender.permission_user_table', 'permission_user').'_user_id_foreign');
            $table->dropForeign(config('defender.permission_user_table', 'permission_user').'_'.config('defender.permission_key', 'permission_id').'_foreign');
        });

        Schema::drop(config('defender.permission_user_table', 'permission_user'));
    }
}
