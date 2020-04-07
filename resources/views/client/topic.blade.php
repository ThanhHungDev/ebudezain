@extends('layout.client.index')
@section('content')
<div class="wrapper-client-content clear">
    <div class="main-content-data">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <h1 class="title pt-3">
                        {{ $topic->name }}
                    </h1>
                </div>
                <div class="col-12">
                    <h1>{{ $topic->title }}</h1>
                </div>
                @if($sidebar['postNew'])
                @foreach($sidebar['postNew'] as $post)
                <div class="col-4 col-md-6 col-xs-12 topic-post-block">
                    <a class="d-block line-height-0" href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}">
                        <img src="{{ $post->thumbnail }}" alt="{{ $post->slug }}"/>
                    </a>
                    <h3 class="entry-title td-module-title">
                        <a href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}" title="{{ $post->title }}">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <div class="td-module-meta-info"><span class="td-post-date">{{ date('d / m / Y', strtotime($post->updated_at)) }}</span></div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection