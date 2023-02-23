@extends('layouts.app')

@section('content')

<div class="container">
    @foreach ($articles as $article)
    <div>
        <p>{{ $article->title}}</p>
        <a href="{{route('articles.show',$article)}}"></a>
    </div>
    @endforeach
    {{ $articles->links()}}
</div>

@endsection