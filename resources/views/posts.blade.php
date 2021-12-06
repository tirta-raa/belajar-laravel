{{-- digunakan untuk melihat data dalam bentuk json yang di tampilkan --}}
{{-- @dd($blogPost) --}}

@extends('layouts.main')

@section('container')

{{-- kode di bawah digunakan untuk melooping data dari $blogPost yang di deklaraso sebagai post --}}
@foreach ($blogPost as $post)

<article class="mb-5">
    <h2>
      <a href="/posts/{{ $post['slug'] }}"> {{ $post['title'] }}</a>  
    </h2>
    <h5>By:  {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>
@endforeach
    
    
@endsection