<?php

namespace App\Http\Controllers\HmManage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectInfo;
use App\Models\WorkInfo;
use Illuminate\Support\Facades\Auth;

//バリデーションファイル読み込み
use App\Http\Requests\ValidRequest;

class HmManageInOut extends Controller
{

    //工数入力画面に遷移
    public function add_top(Request $request)
    {

        //プロジェクト情報テーブルからすべて取得
        $project_info = ProjectInfo::all();

        //ビューを返す
        return view('hm_manege.hm_inout.hm_add_top', ['data_list' => $project_info]);

    }

    /**
     * 
     * ValidRequestを指定してあげることでバリデーションを行う
     * 
     * 工数登録処理
     */
    public function add_do(Request $request ,ValidRequest $vrequest)
    {

        //リクエストパラメータを格納
        $data_list = $request->all();
        
        // ログイン情報取得
        $users_id = Auth::id();

        // 入力されている工数分繰り返す
        foreach($data_list["project"] as $data) {

            if (!$data["work_time"] or !$data["work_info"]) {
                continue;
            }

            //プロジェクト名を格納
            $project = $data["project"];
            
            //ProjectInfoモデルのインスタンス化
            $pjmd = new ProjectInfo();
            
            //project_infoテーブルから情報を取得
            $project_info_data = $pjmd->hm_add_project_select($project);

            // 現在時刻を格納
            $timestamp = time();
            $now = date("Y-m-d H:i:s", $timestamp);
            $created_at = $now;

            //WorkInfoモデルのインスタンス化
            $wkmd = new WorkInfo();

            //WorkInfoテーブルに工数を登録
            $wkmd->hm_add($data,$project_info_data,$users_id,$created_at);            
            $result_comment = 'hm_add_success';
        }
        if(isset($result_comment)) {
            //ビューを返す
            return view('hm_manege.hm_inout.hm_result', compact('result_comment'));
        }else {
            $result_comment = 'non';
            //ビューを返す
            return view('hm_manege.hm_inout.hm_result', compact('result_comment'));
        }


    }
    
}
