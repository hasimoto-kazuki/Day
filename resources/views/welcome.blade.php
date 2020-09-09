@extends('layouts.app')



@section('content')
　　@if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                {{-- ユーザ情報 --}}
                @include('users.card')
            </aside>
            <div class="col-sm-8">
                {{-- 投稿フォーム --}}
                @include('memos.form')
                <ul class="nav nav-tabs nav-justified mb-3">
                <li class="nav-item">
                    
                        予定一覧
                        <span class="badge badge-secondary">{{ $user->memos_count }}</span>
                    
                </li>
                </ul>
                {{-- 予定一覧 --}}
                @include('memos.memos')
            </div>
        </div>
        

    
        
    @else    
    <div class="center jumbotron" style="background:url({{ asset('images/image01.jpg') }}); background-size:cover;">
        <div class="text-center">
            <h1 style="color: white; margin-top: 200px; font-style:oblique;">Day_Appへようこそ！</h1>
            
            <h3 style="color: white; margin-top: 100px">ここではあなたの予定を保存できます<br>
            予定の管理や確認を便利にします<br>
            まずは登録からどうぞ
            </h3>
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '新規登録', [], ['class' => 'btn btn-lg btn-dark']) !!}
            {{-- ユーザログインページへのリンク --}}
            {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-dark']) !!}
            
        </div>
    </div>
    @endif
@endsection
