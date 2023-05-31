<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
    <title>本の詳細</title>
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
        color: pink;
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
                h1 {
        color: #6594e0;/*文字色*/
        /*線の種類（点線）2px 線色*/
        border-bottom: dashed 2px #6594e0;
        }
                .normal-box7{
        margin: 1em 0;
        padding: 1em;
        background: radial-gradient(800px, #ffebee, #e57373);
        }

        .normal-box7 p{
        margin: 0;
        padding: 0;
        }
                .fashionable-box2{
        margin: 2em 25px;
        padding: 1em;
        background-color: #fff59d;
        border: dashed 3px #fdd835;
        box-shadow: 0 0 0 10px #fff59d, 0 0 0 25px #fdd835;
        border-radius: 3px;
        }

        .fashionable-box2 p{
        margin: 0;
        padding: 0;
        }
                .fashionable-box4{
        margin: 1em 0;
        padding: 1em;
        background-size: 20px 20px;
        border-radius: 5px;
        background-color: #f9ffff;
        background-image: linear-gradient(45deg,rgba(255,186,238,.1) 25%,transparent 25%,transparent 50%,rgba(255,186,238,.1) 50%,rgba(255,186,238,.1) 75%,transparent 75%,transparent),linear-gradient(-45deg,rgba(255,186,238,.1) 25%,transparent 25%,transparent 50%,rgba(255,186,238,.1) 50%,rgba(255,186,238,.1) 75%,transparent 75%,transparent);
        border: solid 2px #f48fb1;
        }

        .fashionable-box4 p{
        margin: 0;
        padding: 0;
        }
                .loose-leaf{
        background: #f10f0d7;
        border-left: 5px dotted rgba(0,0,0,.1);
        box-shadow: 0 0 0 5 #f8f0d7;
        padding: 1em;
        margin: 1em 5px;
        }

        .loose-leaf p{
        margin: 0;
        padding: 0;
        }



    </style>
</head>
<body bgcolor="f5f5dc">

<h1>本の中身</h1>
<div class="normal-box7">タイトル名：{{ $content->name }}</div>
<div class="fashionable-box4">ジャンル：{{ $content->genre->name }}</div>
<div class="loose-leaf">作者：{{ $content->user->name }}</div>
<div class="fashionable-box2">あらすじ：{{ $content->content }}</div>
<br>
<div class="fashionable-box2">評価：{{ $content->review }}</div>
<br>
<div class="fashionable-box2">最新更新日：{{ $content->created_at }}</div>

<a href="{{ route('Toukousite.index') }}">ホームに戻る</a>
{{-- $genre = Genre::all(); --}}
</body>
</html>

