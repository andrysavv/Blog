@extends ("layout")
@section("links")
    @foreach ($key as $key2)
        <li><a href="/posts/{{$key2->id}}">{{$key2->name}}</a></li>
    @endforeach
@endsection
@section("body")
<h1>Главная</h1>
<div class="container">
    <p>Контейнер который контейнит мой крутой контент , ведь это контейнер, что ему еще делать кроме того, чтобы контейнить</p>
</div>
@endsection
