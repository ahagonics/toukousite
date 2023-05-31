<!DOCTYPE html>
<html lang=“ja”>
<head>
    <meta charset=“UFT-8”>
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
        margin-right: 35px;
        }
                nav {
        padding-top: 5px;
        box-sizing: border-box;
        }


    </style>
</head>
<body>
    <h1>編集画面</h1>
    <nav>
        <ul>
            <li><a href="{{ route('Toukousite.index') }}">ホーム</a></li>
            <li><a href="{{ route('manga.index') }}">漫画</a></li>
            <li><a href="{{ route('novel.index') }}">小説</a></li>
            <li><a href="{{ route('Toukousite.create') }}">投稿</a></li>
            <li><a href="{{ route('login') }}">ログイン</a></li>
        </ul>
    </nav>
    <br>
<form action="{{ route('Toukousite.update', $content->id)}}" method="post">
    @method('put')
    @csrf

    <div>
        <label>投稿ジャンル</label>
        <input type="radio" name="t_genre" value="0" @if($flag == 0)checked @endif>小説
        <input type="radio" name="t_genre" value="1" @if($flag == 1)checked @endif>漫画
      </div>
      <br>
    <div>
      <label for="name">タイトル</label>
      <input type="text" id="name" name="name" value="{{ $content->name}}">
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
      </div>
      <br>
      <div>
        <label for="genre">ジャンル名</label>
        <select name="genre">
            <option value="" selected>{{ $content->genre->name }}</option>
            @foreach($Genres as $genre)
                <option value="{{ $genre->id }}">
                    {{ $genre->name }}
                </option>
            @endforeach
         </select>
     </div>
     <br>
     <div>
        <label for="s_users">ユーザー名</label>
        <span>{{$content->user->name}}</span>
     </div>
     <br>
     <div>
        <label for="content">お話の中身</label>
        <br>
        <textarea id="story" name="story"rows="5" cols="33">{{$content->content}}</textarea>
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
     </div>
     <br>
     <div>
        <input type="submit" value="変更する"/>
      </div>
      <br>
  </form>
  <form action="{{ route('Toukousite.destroy', $content->id, $flag) }}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="削除">
    </form>
</body>
<footer class="footer">
    <p class="copyright">© 2023 Kensyu Inc. All Rights Reserved.</p>
</footer>
</html>
