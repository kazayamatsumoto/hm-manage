<?php

namespace App\Http\Controllers\HmManage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectInfo;

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

    //工数登録処理
    public function add_do(Request $request)
    {

        $data = $request->all();

        dd($data);

    }
    
}
