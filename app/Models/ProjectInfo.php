<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    //テーブルを指定
    protected $table = 'project_info';

    /**
     * Undocumented function
     * 工数データの登録を行う
     *
     * @param [type] $edit_array2[authority-edit]内にカンマ区切りでユーザーid,division_codeが格納されている
     * @return void
     */
    public function hm_add_project_select($project)
    {
        //削除されていないユーザーを全て取得
        $data = DB::table('project_info')
            ->where('project', $project)
            ->whereNull('deleted_at')
            ->get();
        //->toSql();
        // dd($data);
        return $data;

    }
}