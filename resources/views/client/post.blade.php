
@extends('layout.client.index')
@section('content')
<div class="wrapper-client-content clear">
    @if($post->table_content)
    <div class="table-content">
        <span class="title">Table of contents</span>
        {{ $post->table_content }}
    </div>
    @endif
    
    <div class="main-content-data">
        <h1 class="title pt-3">
            {{ $post->title }} 
        </h1>
        <div class="w-100 text-center pt-4">
            <img style="width: 100%; height: auto; max-width: 600px;" src="{{ asset( $post->thumbnail ) }}" alt="{{ $post->title}}"/>
        </div>
        <div class="content-page-post">
            @php 
            $hung = $post->content;
            echo $hung;
            @endphp 
        </div>
    </div>
</div>
@endsection