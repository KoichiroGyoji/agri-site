<?php

namespace App\Http\Controllers;

use App\Models\Agri; //追記
use Illuminate\Http\Request;


class AgrisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        // メッセージ一覧を取得
        $agris = Agri::all();

        // メッセージ一覧ビューでそれを表示
        return view('agris.home', [
            'agris' => $agris,
        ]);
    }
    
    public function weare()
    {
        $agris = Agri::all();
        
        return view('agris.weare', [
            'agris' => $agris,
        ]);
    }
    
    public function onlineshop()
    {
        $agris = Agri::all();
        
        return view('agris.onlineshop', [
            'agris' => $agris,
        ]);
    }
    
    public function onlineshopshow(string $id)
    {
        // idの値でメッセージを検索して取得
        $agri = Agri::findOrFail($id);

        // メッセージ詳細ビューでそれを表示
        return view('agris.onlineshopshow', [
            'agri' => $agri,
        ]);
    }
    
    
    public function purchase(string $id)
    {
        // idの値でメッセージを検索して取得
        $agri = Agri::findOrFail($id);

        // 詳細ビューでそれを表示
        return view('agris.purchase', [
            'agri' => $agri,
        ]);
    }
    
    public function contact()
    {
        $agris = Agri::all();
        
        return view('agris.contact', [
            'agris' => $agris,
        ]);
    }
    
    
    public function index()
    {
        $agris = Agri::all();
        
        return view('agris.index', [
            'agris' => $agris,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agri = new Agri;

        // メッセージ作成ビューを表示
        return view('agris.create', [
            'agri' => $agri,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // メッセージを作成
        $agri = new Agri;
        $agri->name = $request->name;
        $agri->url = $request->url;
        $agri->price = $request->price;
        $agri->content = $request->content;
        $agri->save();

        // トップページへリダイレクトさせる
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // idの値でメッセージを検索して取得
        $agri = Agri::findOrFail($id);

        // メッセージ詳細ビューでそれを表示
        return view('agris.show', [
            'agri' => $agri,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // idの値でメッセージを検索して取得
        $agri = Agri::findOrFail($id);

        // メッセージ編集ビューでそれを表示
        return view('agris.edit', [
            'agri' => $agri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id, string $name, string $url, string $price, string $content)
    public function update(Request $request)
    {
       
       
        // idの値でメッセージを検索して取得
        
        $agri = Agri::findOrFail($request->id);
        
        // // メッセージを更新
        $agri->name = $request->name;
        $agri->url = $request->url;
        $agri->price = $request->price;
        $agri->content = $request->content;
        $agri->save();

        // トップページへリダイレクトさせる
        return redirect('/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
        // idの値でメッセージを検索して取得
        $agri = Agri::findOrFail($request->id);
        // メッセージを削除
        $agri->delete();

        // トップページへリダイレクトさせる
        return redirect('/index');
    }
}
