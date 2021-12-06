@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $blogPost['title'] }}</h2>
    <h5>{{ $blogPost['author'] }}</h5>
    <p>{{ $blogPost['body'] }}</p>
</article>

<a href="/blog"> back</a>

@endsection