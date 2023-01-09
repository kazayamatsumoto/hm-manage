<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToHmInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hm-info', function (Blueprint $table) {

            //プロジェクト名
            $table->text('project','50')->unique();

            //作業項目
            $table->text('work','50')->unique();

            // deleted_at 論理削除を有効化
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hm-info', function (Blueprint $table) {
            //
        });
    }
}
