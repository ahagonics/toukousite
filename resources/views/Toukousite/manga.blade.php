<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>漫画一覧</title>
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
        margin-right: 35px;
        }
                nav {
        padding-top: 5px;
        box-sizing: border-box;
        }

    </style>
</head>
<body>
    <h1>漫画一覧</h1>
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
    @foreach($mangas as $manga_data)
        <div class="card my-4">
            <div class="row mx-0">
                {{-- <h3 class="col border-bottom text-center border-dark"> {{ ? }} 位</h3> --}}
                <h3 class="col border-bottom text-center border-dark"> {{ $manga_data->created_at }} </h3>
                <h3 class="col border-bottom text-center border-dark"> {{ $manga_data->name }} </h3>
            </div>
            <a href="{{ route('Toukousite.show', ['id'=>$manga_data->id, 'flag'=>1]) }}">本の中身</a>
            <br>
        </div>
    @endforeach

</body>
</html>
