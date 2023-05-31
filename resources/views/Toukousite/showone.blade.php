<h1>本の中身</h1>
<div>{{ $content->name }}</div>
<div>{{ $content->genre->name }}</div>
<div>{{ $content->user->name }}</div>
<div>{{ $content->content }}</div>
<div>{{ $content->review }}</div>
<div>{{ $content->created_at }}</div>

<a href="{{ route('Toukousite.index') }}">一覧に戻る</a>
{{-- $genre = Genre::all(); --}}
