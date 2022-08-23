<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Testファイルの中身をもってこれる
use App\Models\Test;

//DBクエリの実行
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {

        $values = Test::all();

        //DBクエリ実行・クエリビルダ(細かい条件でデータを取得したいとき)
        $tests = DB::table('tests')
        ->select('id')
        ->get();
        
        dd($tests);

        return view('tests.test', compact('values'));

    }
};
