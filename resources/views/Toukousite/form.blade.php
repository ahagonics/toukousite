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
        margin-right: 100px;
        margin-bottom: 100px;
        }
                nav {
        padding-top: 20px;
        box-sizing: border-box;
        }


    </style>
</head>
<body>
    <h1>投稿ページ</h1>
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
<form action="{{ route('Toukousite.store')}}" method="post">
    @csrf
    <div>
        <label>投稿ジャンル</label>
        <input type="radio" name="t_genre" value="0" >小説
        <input type="radio" name="t_genre" value="1" >漫画
      </div>
      <br>
    <div>
      <label for="name">タイトル</label>
      <input type="text" id="name" name="name" value="{{ old('name')}}">
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
      </div>
      <br>
      <div>
        <label for="genre">ジャンル名</label>
        <select name="genre">
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
        <span>{{$User->name}}</span>
     </div>
     <br>
     <div>
        <label for="content">お話の中身</label>
        <br>
        <textarea id="story" name="story"rows="5" cols="33"></textarea>
      @if ($errors->has('name'))
       <p class="error">*{{ $errors->first('name') }}</p>
      @endif
     </div>
     <br>
     <div>
        <input type="submit" value="投稿する"/>
      </div>
  </form>

</body>
<footer class="footer">
    <p class="copyright">© 2023 Kensyu Inc. All Rights Reserved.</p>
</footer>
</html>
