@extends('layouts.app')



@section('content')
<div class="row">
        <div class="col-sm-4">
            <div class="text-center my-4">
                <h3 class="brown p-2">予定検索</h3>
            </div>
            {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                
                <div class="form-group">
                    {!! Form::label('date', '日時:') !!}
                    <input type="date" name="date" value="<?php echo date('Y-m-d');?>">
                </div>
                
                
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-sm-8">
            <div class="text-center my-4">
                <h3 class="brown p-2">予定一覧</h3>
            </div>

            <div class="container">
                <!--検索ボタンが押された時に表示されます-->
                @if(!empty($data))
                    <div class="my-2 p-0">
                        
　　　　　　　　　　　　　　<!--検索条件に一致したユーザを表示します-->
                        @foreach($data as $memo)
                                <div class="row py-2 border-bottom text-center">
                                    <div class="col-sm-4">
                                    日時{!! nl2br(e($memo->date)) !!}   
                                        
                                    </div>
                                    <div class="col-sm-4">
                                    {!! nl2br(e($memo->content)) !!}
                                    </div>
                                    
                                
                                    
                                
                                    
                                    
                                   
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                
                                
                                </div>
                        @endforeach
                    </div>
                    {{ $data->appends(request()->input())->render('pagination::bootstrap-4') }}
                @endif
            </div>
        </div>
    </div>
@endsection