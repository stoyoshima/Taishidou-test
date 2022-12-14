<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelを呼び出すことで保存が簡単にできる
use App\Models\Form;

//クエリビルダで保存した内容を表示する
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //エロクワント書き方でstore保存した内容を表示 
        //$contacts = Form::all();

        //クエリビルダ書き方でstore保存した内容を表示
        $contacts = DB::table('forms')
        ->select('id', 'your_name', 'date', 'time', 'created_at') //表示させるデータ
        ->orderBy('created_at', 'asc')
        ->get(); //get()でデータをもってこれる

        // dd($contacts);


        // .の前がフォルダ名で後ろがファイル名、第二引数にクエリビルダで書いた変数をいれる(＄いらない)
        //viewのindex.blade.phpに表示させる内容を書く
        return view('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Moddelをインスタンス化して使えるようにする
        //この中にそれぞれ保存していく
        $contact = new Form;

        //ages配列を文字列に変換して保存できるようにする
        $ages = "";

        foreach($request->input('ages') as $age){
            $ages .= $age.',';
        }

        $contact->ages = $ages;
       
        //データをもってくる  $変数名 = $request->input('データ');
        //$contactの中にプロパティ(変数)があって、DBの列の名前と対応する！
        $contact->your_name = $request->input('your_name');
        $contact->tel = $request->input('tel');
        $contact->date = $request->input('date');
        $contact->time = $request->input('time');
        $contact->contact = $request->input('contact');    

        //保存 $contactの中のメソッドsaveを使う
        $contact->save();

        //保存したら一度戻す
        return redirect('contact/index');

        // dd($your_name, $date, $tel, $time, $ages, $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //エロクワントで書く、データをとる
        $contact = Form::find($id);

        return view('contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }




    // public function thanks($id)
    // {
    //     //
    //     $contact = Form::find($id);

    //     return view('contact.thanks', compact('contact'));
    // }
}
