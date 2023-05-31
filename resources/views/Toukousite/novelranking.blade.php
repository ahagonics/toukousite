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
        color: rgb(109, 121, 211);
        margin-right: 100px;
        }
                nav {
        padding-top: 20px;
        box-sizing: border-box;
        }
        .box2 {
            padding: 0.5em 1em;
            margin: 2em 0;
            font-weight: bold;
            color: #6091d3;/*文字色*/
            background: #FFF;
            border: solid 3px #6091d3;/*線*/
            border-radius: 10px;/*角の丸み*/
        }
        .box2 p {
            margin: 0;
            padding: 0;
        }

    </style>
</head>
<body bgcolor="f5f5dc">
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
        <div class="box2">
            <div >
                <h3 class="col border-bottom text-center border-dark"> タイトル名：{{ $novel_rankdata->name }}  </h3>
                <h3 class="col border-bottom text-center border-dark"> 作者名：{{ $novel_rankdata->user->name }} </h3>
                <h3 class="col border-bottom text-center border-dark"> 評価：{{ $novel_rankdata->review }}  </h3>
            </div>
            <a href="{{ route('Toukousite.show', ['id'=>$novel_rankdata->id, 'flag'=>0]) }}">本の中身</a>
            <a href="{{ route('Toukousite.edit', ['id'=>$novel_rankdata->id, 'flag'=>0]) }}">編集</a>
            <br>
        </div>
    @endforeach

</body>
</html>
