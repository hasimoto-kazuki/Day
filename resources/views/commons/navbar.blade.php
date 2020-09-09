<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background :linear-gradient(to bottom, #30F9B2 0%, #B1F9D0 100%);">
        <!--height :80px;-->
        
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/" style="color: #111111;"><i class="fas fa-home" style="margin-right: 5px; color: #111111;"></i>Day_App</a>
        
                    

        

        
                @if (Auth::check())
                
                 <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                    
                    <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                    
                    {{-- ユーザ一覧ページへのリンク --}}
                    
                    
                    
                    {{-- ユーザー検索ページへのリンク --}}
                    
                    
                    
                    {{-- ランキングページへのリンク --}}
                    
                    
                    
                    <li class="nav-item dropdown">
                        
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: #111111;">{{ Auth::user()->name }}
                        @if($user->image == null)
                        {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="" style="border-radius: 50%;">
                        @else
                        <img class="" src="{{ Storage::disk('s3')->url($user->image) }}" alt="" style="height: 50px; width: 50px; border-radius: 50%;">
                        @endif
                        </a>
                        
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザー検索ページへのリンク --}}
                    
                            <li class="dropdown-item">{!! link_to_route('search', '予定検索') !!}</li>
                            
                            {{-- ユーザ詳細ページへのリンク --}}
                            
                            
                            {{-- ユーザ編集ページへのリンク --}}
                            
                            
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                        </ul>
                    </li>
                
                
                </ul>
            </div>
                
                @endif
            
        
    </nav>
</header>