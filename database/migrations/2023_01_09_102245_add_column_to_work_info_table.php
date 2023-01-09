<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToWorkInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_info', function (Blueprint $table) {

            //作業項目詳細
            $table->text('work_info','50')->nullable(false);

            //作業時間　not null制約有
            $table->integer('work_time')->nullable(false);

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
        Schema::table('work_info', function (Blueprint $table) {
            //
        });
    }
}
