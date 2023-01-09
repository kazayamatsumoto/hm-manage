<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class WorkInfo extends Model
{
    //テーブルを指定
    protected $table = 'work_info';

    /**
     * Undocumented function
     * 工数データの登録を行う
     *
     * @param [type] $edit_array2[authority-edit]内にカンマ区切りでユーザーid,division_codeが格納されている
     * @return void
     */
    public function hm_add($data,$project_info_data,$users_id,$created_at)
    {
        //工数登録処理
        $data = DB::table('work_info')
            ->insertGetId(
                [
                    // insertするデータを格納
                    'work_info' => $data["work_info"], //作業内容
                    'work_time' => $data["work_time"], //作業時間
                    'project_info_id' => $project_info_data["0"]->id, //project_info_id project_infoテーブルとの紐づけに使用
                    'users_id' => $users_id, //users_id usersテーブルとの紐づけに使用
                    'created_at' => $created_at, //登録時刻
                ]

            );
        return $data;

    }
}
