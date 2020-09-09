<div class="text-center">

<div class="card">
    <div class="card-header" style="background-color: #CCFFFF;">
        <h3 class="card-title"><i class="far fa-address-card" style="margin-right: 5px;"></i>{{ $user->name }}</h3>
    </div>
    
   
    
    <div class="card-body">
        @if($user->image == null)
        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
        <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 108]) }}" alt="">
        
        @else
        
        <img class="rounded img-fluid" src="{{ Storage::disk('s3')->url($user->image) }}" alt="" style="height: 108px; width: 108px;">
        
        @endif
        
        
        
    </div>
    
    <form method="POST" action="{{route('users.update', $user->id)}}"

            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="form-name">
              
              <input type="text" class="form-control" value="{{ $user->name }}" name="name">
            </div>
            
            <div class="form-image">
              
              <input type="file" name="image" id="img">
            </div>
             
          　
          　
          　
            
            
            
        　　<div class="form-submit">
             <button class="btn btn-primary" type="submit">編集する</button>
            </div>

    </form>
</div>

</div>
