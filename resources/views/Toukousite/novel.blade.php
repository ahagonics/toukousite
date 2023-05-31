<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>小説一覧</title>
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
        color: brown;
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
<body bgcolor="#f5f5dc">
    <h1>小説一覧</h1>
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
    @foreach($novels as $novel_data)
        <div class="box2">
            <div
                {{-- <h3 class="col border-bottom text-center border-dark"> {{ ? }} 位</h3> --}}
                <h3 class="col border-bottom text-center border-dark"> {{ $novel_data->created_at }} </h3>
                <h3 class="col border-bottom text-center border-dark"> {{ $novel_data->name }} </h3>
            </div>
            <a href="{{ route('Toukousite.show', ['id'=>$novel_data->id, 'flag'=>0]) }}">本の中身</a>
        <a href="{{ route('Toukousite.edit', ['id'=>$novel_data->id, 'flag'=>0]) }}">編集</a>
        </div>


    @endforeach
    {{-- $id=$novel_data->id, --}}

</body>
</html>
