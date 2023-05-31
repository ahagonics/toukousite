<h1>本の中身</h1>
<div>タイトル名：{{ $content->name }}</div>
<div>ジャンル：{{ $content->genre->name }}</div>
<div>作者：{{ $content->user->name }}</div>
<div>あらすじ：{{ $content->content }}</div>
<div>評価：{{ $content->review }}</div>
<div>最新更新日：{{ $content->created_at }}</div>

<a href="{{ route('Toukousite.index') }}">ホームに戻る</a>
{{-- $genre = Genre::all(); --}}
