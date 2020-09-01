<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background :linear-gradient(to right, #330000 0%,
    #330000 10%, #660000 10%, #660000 20%, #330000 20%, #330000 30%, #660000 30%, #660000 40%, #330000 40%, #330000 50%,
    #660000 50%, #660000 60%, #330000 60%, #330000 70%, #660000 70%, #660000 80%, #330000 80%, #330000 90%, #660000 90%, #660000 100%);">
        <!--height :80px;-->
        
        {{-- トップページへのリンク --}}
        <a class="navbar-brand" href="/"><i class="fas fa-home" style="margin-right: 5px;"></i>P_share</a>
        
                    

        

        
                @if (Auth::check())
                
                 <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                 </button>
                    
                    <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                    
                    {{-- ユーザ一覧ページへのリンク --}}
                    
                    <!--<li class="nav-item">{!! link_to_route('users.index', 'ユーザー一覧', [], ['class' => 'nav-link']) !!}</li>-->
                    
                    {{-- ユーザー検索ページへのリンク --}}
                    
                    <!--<li class="nav-item">{!! link_to_route('search', 'ユーザー検索', [], ['class' => 'nav-link']) !!}</li>-->
                    
                    {{-- ランキングページへのリンク --}}
                    
                    <!--<li class="nav-item">{!! link_to_route('ranking', 'ランキング', [], ['class' => 'nav-link']) !!}</li> -->
                    
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{-- ユーザ詳細ページへのリンク --}}
                            <!--<li class="dropdown-item">{!! link_to_route('users.show', 'マイプロフィール', ['user' => Auth::id()]) !!}</li>-->
                            
                            {{-- ユーザ編集ページへのリンク --}}
                            <!--<li class="dropdown-item">{!! link_to_route('users.edit', '編集', ['user' => Auth::id()]) !!}</li>-->
                            
                            <li class="dropdown-divider"></li>
                            {{-- ログアウトへのリンク --}}
                            <!--<li class="dropdown-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>-->
                        </ul>
                    </li>
                
                
                </ul>
            </div>
                
                @endif
            
        
    </nav>
</header>