<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    @include ("genneral/css/admin/admin")
    @include ("genneral/css/animate")
    @include ("genneral/css/main")
    @include ("genneral/css/progress")
    @include ("genneral/css/alert")
    @yield('css_custom_page')
</head>
<body>
    <div class="wrapper-page">
        <div class="wrapper-header-page">
            @include ('layout/admin/partial/header')
        </div>
        <div class="wrapper-main-page">
            @yield('content_admin')
        </div>
        <div class="wrapper-footer-page">
            @include ('layout/admin/partial/footer')
        </div>
    </div>
<script src="{{ asset('jquery.min.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
<script src="{{ asset('jquery.min.js')}}"></script>
<script>
    var SYSTEM_DELETE_SLUG_ACTION = "{{ Route('ADMIN_DELETE_SLUG', ['slug' => null])}}";

    $(document).ready(function() {
        if($('.js-multi-tag').length){
            $('.js-multi-tag').select2();
        }
    });
    if( document.getElementById('editor1') ){
        CKEDITOR.replace( 'editor1' );
    }
    function deleteSlug( slug, table, element ){
        var result = confirm("Có chắc muốn xóa không?");
        if (result) {
            /// delete
            $.ajax({
                type: "DELETE",
                url: SYSTEM_DELETE_SLUG_ACTION,
                data : { slug , table },
                dataType:"JSON",
                success: function(response){
                    if(response.status == 200){
                        $( element ).closest('tr').remove();
                    }else{
                        alert( response.message )
                    }
                }
            });
        }
    }
    function showImageToBrowser( imageSrc, elementId ){
        //. remove img class output-image-finder is exist
        var img_exist = document.getElementsByClassName("output-image-finder");
        if( img_exist.length ){
            img_exist[0].remove()
        }
        var blockShow = document.getElementsByClassName( elementId )[0];
        blockShow.value = imageSrc;
        var img_finder = document.createElement("img");
        img_finder.src = imageSrc;
        img_finder.className = "output-image-finder"
        var wrapper = document.getElementById( elementId );
        wrapper.appendChild(img_finder);
    }
    function selectThumbnailWithCKFinder( elementId ) {
        CKFinder.popup( {
            chooseFiles: true,
            width: 800,
            height: 600,
            onInit: function( finder ) {
                finder.on( 'files:choose', function( evt ) {
                    var file = evt.data.files.first();
                    var imageSrc = file.getUrl();
                    showImageToBrowser( imageSrc, elementId );
                });
                finder.on( 'file:choose:resizedImage', function( evt ) {
                    var imageSrc = evt.data.resizedUrl;
                    showImageToBrowser( imageSrc, elementId );
                });
            }
        } );
    }
    function createSlug( str ){
        str = str.toLowerCase();
        //Đổi ký tự có dấu thành không dấu
        str = str.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        str = str.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        str = str.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        str = str.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        str = str.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        str = str.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        str = str.replace(/đ/gi, 'd');
        str = str.replace(/[\u00C0-\u00C5]/ig,'a');
        str = str.replace(/[\u00C8-\u00CB]/ig,'e');
        str = str.replace(/[\u00CC-\u00CF]/ig,'i');
        str = str.replace(/[\u00D2-\u00D6]/ig,'o');
        str = str.replace(/[\u00D9-\u00DC]/ig,'u');
        str = str.replace(/[\u00D1]/ig,'n');
        str = str.replace(/[^a-z0-9 ]+/gi,'');
        str = str.trim().replace(/ /g,'-');
        str = str.replace(/[\-]{2}/g,'');
        var slug =  (str.replace(/[^a-z\- ]*/gi,''));
        return slug;
    }
    function isExistSlug( elementId ){
        var _DEFINNE_SYSTEM_ACTION_CHECK_SLUG = "{{ Route('ADMIN_GET_SLUG', ['slug' => null] ) }}"
        var title = $( '#'+elementId + " input" ).val();
        var slug = createSlug( title );
        /// reset slug input
        $( "input[name=slug]").val( slug );
        if( slug ){
            $("button[type=submit]").attr('disabled', true );
        }
        if( !slug ){
            $(".result-slug").remove();
            return false;
        }
        $.ajax({
            type: "GET",
            url: _DEFINNE_SYSTEM_ACTION_CHECK_SLUG + slug,
            dataType:"JSON",
            success: function(response){
                $(".result-slug").remove();
                var DF_SLUG_EXIST = false;
                var parag = document.createElement("p");
                if( response.data ){
                    DF_SLUG_EXIST = true;
                }
                parag.className     = DF_SLUG_EXIST ? "result-slug text-danger px-2 py-2" : "result-slug text-success px-2 py-2";
                parag.textContent   = DF_SLUG_EXIST ? "slug đã tồn tại" : "slug chưa sử dụng";
                document.getElementById("js-check-slug").appendChild( parag );
                if( !DF_SLUG_EXIST ){
                    if( slug ) 
                        $("button[type=submit]").attr('disabled', false );
                }
            }
        });
    }
</script>
</body>
</html>