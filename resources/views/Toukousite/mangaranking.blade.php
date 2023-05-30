<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>漫画ランキング</title>
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
    <h1>漫画ランキング</h1>
    {{-- メニューバー --}}
    <nav>
        <ul>
          <li><a href="#">漫画</a></li>
          <li><a href="#">小説</a></li>
          <li><a href="#">投稿</a></li>
          <li><a href="#">ログイン</a></li>
        </ul>
    </nav>
    @foreach($mangasrank as $manga_rankdata)
        <div class="card my-4">
            <div class="row mx-0">
                {{-- <h3 class="col border-bottom text-center border-dark"> {{ ? }} 位</h3> --}}
                <h3 class="col border-bottom text-center border-dark"> {{ $manga_rankdata->name }} </h3>
                <h3 class="col border-bottom text-center border-dark"> {{ $manga_rankdata->review }} </h3>
            </div>
        </div>
    @endforeach

</body>
</html>
