<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name');
            $table->bigInteger('department_id')->unsigned()->after('id');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->text('comment')->nullable();

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->string('name');
            $table->dropForeign(['department_id']);
            $table->dropColumn('department_id');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('comment');

        });

    }
}
