@extends ("layout")
@section("links")
    @foreach ($key as $row)
        <li><a href="/posts/{{$row->id}}">{{$row->name}}</a></li>
    @endforeach
@endsection
@section("body")
<h1>Посты</h1>
<div class="container">
    @foreach ($posts as $pos)
    <h2>{{$pos->title}}</h2>
    <p>{{str_limit($pos->body, 200)}}</p>
    <a href="/post/{{$pos->id}}">Читать дальше</a>
    @endforeach
</div>
@endsection
