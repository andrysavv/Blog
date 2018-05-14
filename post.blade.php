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
    <p>{{$pos->body}}</p>
    <h4>Комментарий</h4>
    <form action="/coment" method="post">
        @csrf
        <input type="text" placeholder="Имя" name="name">
        <input type="text" placeholder="Текст комментария" name="text">
        <button class="btn" type="submit">Опубликовать</button>
    </form>
    
    @endforeach
</div>
@endsection