<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>小説ランキング</title>
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
        margin-right: 35px;
        }
                nav {
        padding-top: 5px;
        box-sizing: border-box;
        }

    </style>
</head>
<body>
    <h1>小説ランキング</h1>
    {{-- メニューバー --}}
    <nav>
        <ul>
          <li><a href="{{ route('Toukousite.index') }}">ホーム</a></li>
          <li><a href="{{ route('manga.index') }}">漫画</a></li>
          <li><a href="{{ route('novel.index') }}">小説</a></li>
          <li><a href="{{ route('Toukousite.create') }}">投稿</a></li>
          <li><a href="{{ route('login') }}">ログイン</a></li>
        </ul>
    </nav>
    @foreach($novelsrank as $novel_rankdata)
        <div class="card my-4">
            <div class="row mx-0">
                <h3 class="col border-bottom text-center border-dark"> タイトル名：{{ $novel_rankdata->name }}  </h3>
                <h3 class="col border-bottom text-center border-dark"> 作者名：{{ $novel_rankdata->user->name }} </h3>
                <h3 class="col border-bottom text-center border-dark"> 評価名：{{ $novel_rankdata->review }}  </h3>
            </div>
        </div>
    @endforeach

</body>
</html>
