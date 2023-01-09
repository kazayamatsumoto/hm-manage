<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommentToHmInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_info', function (Blueprint $table) {

            //カラムにコメントを代入
            //プロジェクト名
            $table->text('project','50')->comment('プロジェクト名')->change();
            $table->text('work','50')->comment('作業内容')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_info', function (Blueprint $table) {
            //
        });
    }
}
