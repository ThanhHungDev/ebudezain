@extends('layout.client.index')
@section('content')
<div class="wrapper-client-content clear">
    <div class="main-content-data clear">
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
                <div class="col-12">
                    <p class="excerpt">{{ $topic->excerpt }}</p>
                </div>
                <div class="w-100 text-center pt-4">
                    <img class="entry-thumb" style="width: 100%; height: auto; max-width: 600px;" src="{{ asset( $topic->thumbnail ) }}" alt="{{ $topic->title}}"/>
                </div>
                <div class="col-12">
                    <p class="description">{{ $topic->description }}</p>
                </div>

            </div>
        </div>
        @if(!$postsInTopic->isEmpty())
        <div class="col-12">
            <h2 class="title-topic"> @include("genneral.svg.wreath") Bài Viết Trong Chủ Đề</h2>
        </div>
        <div class="col-12 px-0 post-data">

            <div class="wrapper-item-post clear">
                @foreach($postsInTopic as $post)
                <div class="topic-post-block float-left">
                    <div class="bg-white js-item-format-height">
                        <a class="d-block line-height-0" href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}">
                            @php $image_resize = json_decode($post->image_resize, true); @endphp
                            <img src="{{ $image_resize['thumbnail'] }}" alt="{{ $post->slug }}"/>
                        </a>
                        <div class="data-text-post-new">
                            <h3 class="entry-title">
                                <a href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}" title="{{ $post->title }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="entry-excerpt">
                                <a href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}" title="{{ $post->title }}">
                                    {{ $post->excerpt }}
                                </a>
                            </p>
                            <div class="entry-meta-info">
                                <span class="td-post-date">{{ date('d / m / Y', strtotime($post->updated_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        @if($sidebar['postNew'])
        <div class="col-12">
            <h2 class="title-topic"> @include("genneral.svg.wreath") Bài Viết Mới</h2>
        </div>
        <div class="col-12 px-0 post-data">

            
            <div class="wrapper-item-post clear">
                @foreach($sidebar['postNew'] as $post)
                <div class="topic-post-block float-left">
                    <div class="bg-white js-item-format-height">
                        <a class="d-block line-height-0" href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}">
                            @php $image_resize = json_decode($post->image_resize, true); @endphp
                            <img src="{{ $image_resize['thumbnail'] }}" alt="{{ $post->slug }}"/>
                        </a>
                        <div class="data-text-post-new">
                            <h3 class="entry-title">
                                <a href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}" title="{{ $post->title }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="entry-excerpt">
                                <a href="{{ Route('CLIENT_GET_POST', ['slug' => $post->slug ])}}" title="{{ $post->title }}">
                                    {{ $post->excerpt }}
                                </a>
                            </p>
                            <div class="entry-meta-info">
                                <span class="td-post-date">{{ date('d / m / Y', strtotime($post->updated_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endsection