<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Modelを呼び出すことで保存が簡単にできる
use App\Models\Form;

//クエリビルダで保存した内容を表示する
use Illuminate\Support\Facades\DB;

//バリデーション読み込み
use App\Http\Requests\StoreContactForm;

//ページネーション
use Illuminate\Pagination\Paginator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //保育園TOPページ
        return view('contact/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //予約フォーム
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //バリデーションかける(送信した後の内容を確かめるからstore)
    public function store(StoreContactForm $request)
    {
        //Modelをインスタンス化して使えるようにする
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

        //保存したらthanksページにとぶ
        return view('contact.thanks', compact('contact'));

        // dd($your_name, $date, $tel, $time, $ages, $contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)//
    {

        //検索フォーム
        $search = $request->input('search');

        $query = DB::table('forms');
        if($search !== null){
            $search_split = mb_convert_kana($search,'s');
            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);
            foreach($search_split2 as $value){
                $query->where('your_name','like','%'.$value.'%');
            }
        };

        $query->select('id', 'your_name', 'tel', 'date', 'time', 'ages', 'contact', 'created_at');
        $query->orderBy('created_at', 'asc');
        $contacts = $query->paginate(10);

        //ページネーションのみ表示
        // $contacts = DB::table('forms')
        // ->paginate(10);

        return view('contact/show', compact('contacts'));
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




    public function thanks(Request $request)
    {
        //
        $contact = Form::find($id);

        return view('contact.thanks', compact('contact'));
        
    }
}
