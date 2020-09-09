@if (count($memos) > 0)
    <ul class="list-unstyled">
        @foreach ($memos as $memo)
            <li class="media mb-3">
                @if($memo->user->image == null)
                {{-- 投稿の所有者のメールアドレスをもとにGravatarを取得して表示 --}}
                <img class="" src="{{ Gravatar::get($memo->user->email, ['size' => 50]) }}" alt="" style="border-radius: 50%;">
        
                @else
                <img class="" src="{{ Storage::disk('s3')->url($memo->user->image) }}" alt="" style="height: 50px; width: 50px; border-radius: 50%;">
                @endif
                
                 <div class="media-body">
                     
                    <div>
                        {{-- 予定内容 --}}
                        <p class="mb-0">日時{!! nl2br(e($memo->date)) !!}</p>
                        
                        <p class="mb-0">{!! nl2br(e($memo->content)) !!}</p>
                        
                        
                        
                    </div>
                    
                    <div onclick="return Delete_check()">
                    
                        @if (Auth::id() == $memo->user_id)
                            {{-- 予定削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['memos.destroy', $memo->id], 'method' => 'delete']) !!}
                                <button class="btn btn-danger" type="submit">予定削除</button>
                            {!! Form::close() !!}
                        @endif
                    </div>
                    
                    {{-- 予定編集ページへのリンク --}}
                    {!! link_to_route('memos.edit', 'この予定を編集', ['memo' => $memo->id], ['class' => 'btn btn-light']) !!}
                    
                 </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $memos->links() }}
@endif