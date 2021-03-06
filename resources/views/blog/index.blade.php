@extends('layouts.app')


@section('title',' Blog')

@section('content')


    <div class="row">
        <div class="col-md-12">
            <h1>
                Blog
            </h1>
        </div>
    </div>


    @foreach ($posts as $post)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{$post->title}}</h2>
            <h5>Publish: {{date('M j, Y | H:i a',strtotime($post->created_at ))}}</h5>
            <p>{{substr($post->body,0,20)}} {{strlen($post->body)> 20 ? "..." :""}}</p>
            <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary no-underline">Read More</a>
        </div>
    </div>
    <hr class="hr-margin-bottom hr-margin-top">
    @endforeach

@endsection

