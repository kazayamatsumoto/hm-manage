<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectInfo extends Model
{
    //テーブルを指定
    protected $table = 'project_info';

    /**
     * Undocumented function
     * 受け取ったデータを基に所属部門の削除、登録を行う
     *
     * @param [type] $edit_array2[authority-edit]内にカンマ区切りでユーザーid,division_codeが格納されている
     * @return void
     */
    public function hm_add($email2, $division_cd, $created_at, $updated_at, $add_user, $edit_user, $deleted_at)
    {

        //削除されていないユーザーを全て取得
        $data = DB::table('user_divisions')
            ->insertGetId(
                [
                    // insertするデータを格納
                    'email2' => $email2, //usersテーブルのメールアドレス
                    'division_cd' => $division_cd, //チェックボックスでチェックを付けた部門コード
                    'created_at' => $created_at, //現在時刻を格納
                    'updated_at' => $updated_at, //現在時刻を格納
                    'add_user' => $add_user, // ログイン中のユーザー名を格納
                    'edit_user' => $edit_user, // ログイン中のユーザー名を格納
                    'deleted_at' => $deleted_at, // デフォルトでnull
                ]
            );

    }
}