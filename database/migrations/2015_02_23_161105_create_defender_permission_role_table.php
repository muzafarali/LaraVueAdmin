<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
class CreateDefenderPermissionRoleTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::create(config('defender.permission_role_table', 'permission_role'), function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer(config('defender.permission_key', 'permission_id'))->unsigned()->index();
            $table->integer(config('defender.role_key', 'role_id'))->unsigned()->index();
            $table->tinyInteger('value')->default(-1);
            $table->timestamp('expires')->nullable();
        });
    
        Schema::table(config('defender.permission_role_table', 'permission_role'), function($table) {
            
            $table->foreign(config('defender.permission_key', 'permission_id'))->references('id')
                ->on(config('defender.permission_table', 'permissions'))
                ->onDelete('cascade');
            $table->foreign(config('defender.role_key', 'role_id'))->references('id')
                ->on(config('defender.role_table', 'roles'))
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table(config('defender.permission_role_table', 'permission_role'), function (Blueprint $table) {
            $table->dropForeign(config('defender.permission_role_table', 'permission_role').'_'.config('defender.permission_key', 'permission_id').'_foreign');
            $table->dropForeign(config('defender.permission_role_table', 'permission_role').'_'.config('defender.role_key', 'role_id').'_foreign');
        });

        Schema::drop(config('defender.permission_role_table', 'permission_role'));
    }
}
