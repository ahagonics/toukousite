<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>今日投稿された小説</title>
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
        color: rgb(121, 220, 110);
        margin-right: 100px;
        }
                nav {
        padding-top: 20px;
        box-sizing: border-box;
        }

    </style>
</head>
<body>
    <h1>今日投稿された小説</h1>
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
    @foreach($todaynovel as $todaynovel_data)
        <div class="card my-4">
            <div class="row mx-0">
                <h3 class="col border-bottom text-center border-dark"> {{ $todaynovel_data->created_at }} </h3>
                <h3 class="col border-bottom text-center border-dark"> {{ $todaynovel_data->name }} </h3>
                <h3 class="col border-bottom text-center border-dark"> {{ $todaynovel_data->user->name }} </h3>
            </div>
            <a href="{{ route('Toukousite.show', ['id'=>$todaynovel_data->id, 'flag'=>0]) }}">本の中身</a>
            <br>
        </div>
    @endforeach

</body>
</html>
