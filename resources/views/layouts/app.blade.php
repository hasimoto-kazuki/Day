<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Day</title>
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
    
    
    
    
        
    

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        </div>
        
        <script>
            // 音声読み上げ機能
        
        // 英語
        button1.addEventListener("click", () => {
          if (!window.speechSynthesis) return;
          let u = new SpeechSynthesisUtterance(content.value);
          u.lang = "en";
          speechSynthesis.speak(u);
        });
        
        // 日本語
        button2.addEventListener("click", () => {
          if (!window.speechSynthesis) return;
          let u = new SpeechSynthesisUtterance(content.value);
          u.lang = "ja";
          speechSynthesis.speak(u);
        });
        
        // 読み上げ中止
        button3.addEventListener("click", () => {
          if (!window.speechSynthesis) return;
          speechSynthesis.cancel();
        });
        
        </script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        
        
    </body>
</html>