@extends('layouts.app')



@section('content')

<form method="POST" action="{{route('memos.update', $memo->id)}}"

            enctype="multipart/form-data">
            @csrf
            @method('PUT')
       
        <div class="form-group row">    
            <div class="offset-2 col-10">
            <input type="date" value="{{ $memo->date }}" name="date">
            </div>
        </div>
        
        
        <div class="form-group row">
            <label class="col-2 col-form-label" style="padding-top: 0px; padding-right: 0px;">内容</label> 
            <div class="col-10"> <!--追加機能文字数カウント-->
            <p style="margin-bottom: 0px;" id="inputlength">0</p>
            
            <!--音声読み上げ機能-->
                    <p style="font-size:30px; margin-bottom:0px;"> 
                       <button class="btn" style="background-color:#11FFFF; color:white;" id="button1" type="button"><i class="fas fa-volume-up"></i>英語</button>
                        <!--日本語-->
                        <button class="btn" style="background-color:#FF0066; color:white;" id="button2" type="button"><i class="fas fa-volume-up"></i>日本語</button>
                        <!--読み上げ中止-->
                        <button class="btn" style="background-color:red; color:white;" id="button3" type="button"><i class="fas fa-volume-mute"></i>停止</button>
                        
                    </p>
            
            <textarea contenteditable class="form-control" onkeyup="ShowLength(value);" id="content" name="content" rows="5">{{ old('content', $memo->content) }}</textarea>
            </div>
        </div>
        
        
        
        
        
            
        <div class="form-submit">
             <button class="btn btn-primary" type="submit">更新する</button>
        </div>
        
       
</form>

@endsection