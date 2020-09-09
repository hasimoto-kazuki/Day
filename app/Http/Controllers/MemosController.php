<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Memo; // 追加

class MemosController extends Controller
{
    //
    public function index()
    {
        $data = [];
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            // 関係するモデルの件数をロード
            $user->loadRelationshipCounts();
            // ユーザの投稿の一覧を作成日時の降順で取得
            $memos = $user->memos()->orderBy('date', 'desc')->paginate(10);

            $data = [
                'user' => $user,
                'memos' => $memos,
            ];
        }

        // Welcomeビューでそれらを表示
        return view('welcome', $data);
    }
    
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|max:255',
            'date' => 'required',
        ]);

        // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
        $request->user()->memos()->create([
            'content' => $request->content,
            'date' => $request->date,
        ]);

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function destroy($id)
    {
        // idの値で投稿を検索して取得
        $memo = \App\Memo::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $memo->user_id) {
            $memo->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
    
    public function edit($id)
    {
        $memo = Memo::findOrFail($id);
        
        $user = \Auth::user();
        
        if (\Auth::id() === $memo->user_id){
        
        return view('memos.edit', [
            'memo' => $memo,
            'user' => $user,
        ]);
        }
        
        else
        
        return redirect('/');
    }
    
    public function update(Request $request, $id)
    {
         $request->validate([
            'content' => 'required|max:255',
            'date' => 'required',
        ]);
        
        
        
        
        $memo = Memo::findOrFail($id);
        $memo->content = $request->content;
        $memo->date = $request->date;
        $memo->save();

        
        return redirect('/');
    }
}
