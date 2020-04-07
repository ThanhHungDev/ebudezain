
<input type="checkbox" id="sidebar-toggle" class="d-none">
<label class="btn-toggle-sidebar clear" for="sidebar-toggle">
    <span class="d-inline-block float-left">
        @include ("genneral.svg.arrow-left")
        @include ("genneral.svg.arrow-right")
    </span>
    <span class="text-btn-toggle-sidebar float-left px-2">
        chuyển thanh bên
    </span>
</label>
<div class="wrapper-client-sidebar">
    @if ($sidebar['postNew'])
    <div class="social-wrapper clear mobile">
        <label for="sidebar-toggle" class="btn-toggle-close">
            @include ("genneral.svg.windows-close")
        </label>
    </div>
    <div class="block-sidebar clear">
        <input type="checkbox" id="post-new" class="checkbox-sidebar d-none">

        <label for="post-new" class="title-sidebar blue-gradient d-block clear">
            <span class="ballot-icon">@include ("genneral.svg.ballot")</span>
            Bài viết mới
            <span class="angle-down-icon float-right">@include ("genneral.svg.angle-down")</span>
            <span class="angle-right-icon float-right">@include ("genneral.svg.angle-right")</span>
        </label>

        <ul class="list-sidebar clear">
            @if ($sidebar['postNew'])
            @foreach( $sidebar['postNew'] as $post)
            <li class="{{ @$slug == $post->slug ? 'active' : null }}">
                <a href="{{  Route('CLIENT_GET_POST', ['slug' => $post->slug ]) }}">
                    {{ $post->title }}
                </a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
    @endif
    
    @if( $sidebar['postRelateIgnore'])
    <div class="block-sidebar clear">
        <input type="checkbox" id="post-relation" class="checkbox-sidebar d-none">

        <label for="post-relation" class="title-sidebar aqua-gradient-rgba d-block clear">
            <span class="ballot-icon">@include ("genneral.svg.ballot")</span>
            quan tam
            <span class="angle-down-icon float-right">@include ("genneral.svg.angle-down")</span>
            <span class="angle-right-icon float-right">@include ("genneral.svg.angle-right")</span>
        </label>

        <ul class="list-sidebar clear">
            @if( $sidebar['postRelateIgnore'])
            @foreach($sidebar['postRelateIgnore'] as $post )
            
            <li class="{{ @$slug == $post->slug ? 'active' : null }}">
                <a href="{{  Route('CLIENT_GET_POST', ['slug' => $post->slug ]) }}">
                    {{ $post->title }}
                </a>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
    @endif
</div>