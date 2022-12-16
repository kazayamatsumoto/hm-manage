<?php

namespace App\Http\Controllers\HmManage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HmManageInOut extends Controller
{

    //
    public function add_top(Request $request)
    {
        //ビューを返す
        return view('hm_manege.hm_inout.hm_add_top');

    }
    
}
