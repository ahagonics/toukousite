<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <title>投稿サイト</title>
    <style>
        nav {
            width: 100%;
            height: 10vh;
            background-color: dimgray;
        }
        ul {
            display: flex;
        }
        li {
            list-style: none;
        }
        a {
            display: block;
            text-decoration: none;
            color: white;
            margin-right: 100px;
            margin-bottom: 50px;
        }
        nav {
            padding-top: 20px;
            box-sizing: border-box;
        }
        .btn-square-pop {
            position: relative;
            display: inline-block;
            padding: 5em 5em;
            text-decoration: none;
            color: #FFF;
            background: #fd9535;/*背景色*/
            border-bottom: solid 2px #d27d00;/*少し濃い目の色に*/
            border-radius: 4px;/*角の丸み*/
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.2), 0 2px 2px rgba(0, 0, 0, 0.19);
            font-weight: bold;
        }
        .btn-square-pop:active {
            border-bottom: solid 2px #fd9535;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.30);
        }
        h1{
            .wf-roundedmplus1c { font-family: "M PLUS Rounded 1c"; }
        }
    </style>
</head>
<body bgcolor="#f5f5dc">
    <div class="h1">投稿サイトへようこそ</div>
    <nav>
        <ul>

          <li><a href="{{ route('Toukousite.index') }}">ホーム</a></li>
          <li><a href="{{ route('manga.index') }}">漫画</a></li>
          <li><a href="{{ route('novel.index') }}">小説</a></li>
          <li><a href="{{ route('Toukousite.create') }}">投稿</a></li>
          <li><a href="{{ route('login') }}">ログイン</a></li>

        </ul>
    </nav>

    <a href="{{ route('todaymanga.index') }}" class="btn-square-pop">今日投稿の漫画</a>
    <a href="{{ route('todaynovel.index') }}" class="btn-square-pop">今日投稿の小説</a>
    <br>
    <a href="{{ route('mangasranking.index') }}" class="btn-square-pop">漫画ランキング</a>
    <a href="{{ route('novelsranking.index') }}" class="btn-square-pop">小説ランキング</a>

</body>
<footer class="footer">
    <p class="copyright">© 2023 Kensyu Inc. All Rights Reserved.</p>
</footer>
</html>




