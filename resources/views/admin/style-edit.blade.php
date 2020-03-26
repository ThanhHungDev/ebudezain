
@extends('admin._layout')

@section('title', 'Thêm bài viết')

@section('content_admin')
<div class="wrapper-admin-page">
    @include ("layout/admin/partial/sidebar")
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">chỉnh sửa thể loại </h2>
            </div>
        </div>
        <div class="admin-wrapper-content-field">
            <div class="row">
                <div class="col-12">
                    @if (Session::has('SAVE_ERROR'))
                    <div class="alert alert-warning">
                        {{ Session::get('SAVE_ERROR') }}
                    </div>
                    @endif
                    @if (Session::has('SAVE_SUCCESS'))
                    <div class="alert alert-success">
                        lưu bài viết thành công
                    </div>
                    @endif
                    @if(!empty($errors->all()))
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-warning">
                            {{ $error }}
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <form class="row js-validate-form" action="{{ Route('ADMIN_POST_EDIT_STYLE', ['id', $style->id]) }}" method="POST">
                {!! csrf_field() !!}
                <div class="col-8 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">title style</h2>
                            <input name="name" type="text" value="{{ old('name', $style->name) }}" onblur="isExistSlug('js-check-slug')" />
                            <input name="slug" type="hidden" value="{{ old('slug', $style->slug) }}" />
                        </div>
                    </div>
                    
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">excerpt -- đoạn trích</h2>
                            <textarea  class="height-150px" name="excerpt" cols="30" rows="10">{{ old('excerpt', $style->excerpt) }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">mô tả</h2>
                            <textarea  class="height-150px" name="description" cols="30" rows="10">{{ old('description', $style->description) }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">background</h2>
                            <input name="background" type="text" value="{{ old('background', $style->background) }}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">site name SEO</h2>
                            <input name="site_name" type="text" value="{{ old('site_name', $style->site_name) }}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">hình ảnh SEO</h2>
                            <div class="position-relative">
                                <input name="image_seo" type="text" value="{{ old('image_seo', $style->image_seo) }}" />
                                <button class="btn bg-cyan bd-cyan text-white btn-input-append" 
                                type="button" onclick="selectImageInputWithCKFinder(this)">chọn ảnh</button>
                            </div>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta keyword</h2>
                            <textarea class="height-150px" name="keyword_seo" cols="30" rows="10">{{ old('keyword_seo', $style->keyword_seo) }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta description</h2>
                            <textarea class="height-150px" name="description_seo" cols="30" rows="10">{{ old('description_seo', $style->description_seo) }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">bấm lưu mới thể loại</h2>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-success-color-dark text-white">
                                        Lưu
                                    </button>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">chọn category</h2>
                                @if($categories)
                                @php 
                                    $categoryTypeActive = $style->type()->first();
                                    $categoryActive = $categoryTypeActive->category()->first();
                                    $categoryIdActive = old('category', $categoryActive->id);
                                @endphp
                                <select name="category_id" class="js-multi-select js-category" 
                                onchange="changeCategory('js-category-type', 'js-category-style', this)">
                                    <option value="">chọn thể loại</option>
                                    @foreach($categories as $category)
                                    <option @if(old('category_id', $categoryIdActive) == $category->id) {{ 'selected' }} @endif
                                    value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </section>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">chọn type</h2>
                                @if($types)
                                <select name="category_type_id" class="js-multi-select js-category-type"
                                onchange="changeCategoryType('js-category', 'js-category-style', this)">
                                    <option value="">chọn loại bài đăng</option>
                                    @foreach($types as $type)
                                    <option @if(old('category_type_id', $style->category_type_id) == $type->id) {{ 'selected' }} @endif
                                    value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                                @endif
                            </section>
                        </div>
                    </div>

                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">thiết lập thumbnail</h2>
                                <div class="text-center">
                                    <button type="button" onclick="selectThumbnailWithCKFinder('thumbnail-topic')"
                                        class="btn bg-primary text-white">
                                        Select Thumbnail
                                    </button>
                                </div>
                                <div id="thumbnail-topic">
                                    <input name="thumbnail" class="thumbnail-topic pb-2" 
                                        type="text" value="{{ old('thumbnail', $style->thumbnail) }}" />
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

@section('js_custom_page')
@if(old('image_seo', $style->image_seo))
<script>
var value_image_seo = "{{ old('image_seo', $style->image_seo) }}";
var doms_image_seo  = document.getElementsByName( 'image_seo' );

if(doms_image_seo.length){

    var dom_image_seo = doms_image_seo[0];
    showImageToInput(value_image_seo, dom_image_seo);
}
</script>
@endif
@if(old('thumbnail', $style->thumbnail))
<script>
var value_thumbnail = "{{ old('thumbnail', $style->thumbnail) }}";
showImageToBrowser(value_thumbnail, 'thumbnail-topic');
</script>
@endif
@endsection