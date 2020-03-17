@extends('admin._layout')

@section('title', 'Thêm bài viết')

@section('content_admin')
<div class="wrapper-admin-page">
    @include ("layout/admin/partial/sidebar")
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">insert post </h2>
            </div>
        </div>
        <div class="admin-wrapper-content-field">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('LOGIN_ERROR'))
                    <div class="alert alert-warning">
                        {{ Session::get('LOGIN_ERROR') }}
                    </div>
                    @endif
                </div>
            </div>
            <form class="row" action="{{ Route('ADMIN_POST_INSERT_POST') }}" method="POST">
                {!! csrf_field() !!}
                <div class="col-8 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">title post</h2>
                            <input name="title" type="text" 
                                value="{{ $post['title'] }}"
                                onblur="isExistSlug('js-check-slug')" />
                            <input name="slug" type="hidden" value="{{ $post['slug'] }}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">content</h2>
                            <textarea name="content" id="editor1" class="h-100">{{ $post['content'] }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta keyword</h2>
                            <textarea name="keyword" cols="30" rows="10">{{ $post['keyword_seo'] }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta description</h2>
                            <textarea name="description" cols="30" rows="10">{{ $post['description_seo'] }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">bấm lưu mới 1 post</h2>
                                <div class="text-center">
                                    <button @if($post["id"]) disabled @endif
                                     type="submit" 
                                        class="btn bg-success-color-dark text-white">
                                        Save
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">chọn topic</h2>
                                <div class="text-center">
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">chọn tag</h2>
                                <div class="text-center">
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">setup thumbnail</h2>
                                <div class="text-center">
                                    <button type="button" onclick="selectThumbnailWithCKFinder('thumbnail-topic')"
                                        class="btn bg-primary text-white">
                                        Select Thumbnail
                                    </button>
                                </div>
                                <div id="thumbnail-topic">
                                    <input name="thumbnail" class="thumbnail-topic pb-2" 
                                        type="text" value="{{ $post['image_seo'] }}" />
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
