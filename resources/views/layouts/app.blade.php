<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>P_share</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <!--追加機能 削除する前の確認機能-->
        <script language="JavaScript" type="text/JavaScript">
             
            function Delete_check(){
                let checked = confirm("delete?");
                if (checked == true) {
                    return true;
            } else {
                    return false;
            }
          }
          //追加機能文字数カウント
          function ShowLength( str ) {
	            str=str.replace(/\n/g, ""); 
                document.getElementById("inputlength").innerHTML = ""+ str.length ;
             }

        </script> 
        <!--追加機能ここまで-->
        
    </head>
    
    
    <body>
    <!--<body style="background:url({{ asset('images/image02.jpg') }}) no-repeat center center; background-size:cover; background-color:rgba(255,255,255,0.5);-->
    <!--background-blend-mode:lighten; background-attachment: fixed;">-->
    
    <style>
        body::before {
  content: "";
  background:url({{ asset('images/image02.jpg') }}) no-repeat center center;
  background-color:rgba(255,255,255,0.5);
  background-blend-mode:lighten;
  background-size: cover;
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: -1;
  transform: translateZ(0);
  }
    </style>
    
    
        
    

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
        
    </body>
</html>