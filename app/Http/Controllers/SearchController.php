<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Memo; // 追加



class SearchController extends Controller
{
    //
    public function index(Request $request){
        
        $user = \Auth::user();
        
        $query = $user->memos()->orderBy('date', 'desc');
      
        
        $search = $request->input('date');
      
        
        if ($request->has('date') && $search != ('指定なし')) {
            $query->where('date', $search)->get();
        }
        
        
        
        $data = $query->paginate(10);

        return view('memos.search',[
            'user' => $user,
            'data' => $data
        ]);
    }
}
