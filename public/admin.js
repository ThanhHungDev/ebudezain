function validateForm(formJquery){
    formJquery.validate({
        rules: {
            title: {
                required : true,
                maxlength: 255
            },
            slug: {
                required : true,
                maxlength: 100
            },
            excerpt : {
                required : true,
                maxlength: 255
            },
            content : {
                required : true
            },
            thumbnail : {
                required : true,
                maxlength: 255
            },
            category_type_id : {
                required : true
            }, 
            site_name : {
                required : true,
                maxlength: 255
            },
            image_seo : {
                required : true,
                maxlength: 255
            },
            keyword_seo : {
                required : true,
                maxlength: 255
            },
            description_seo : {
                required : true,
                maxlength: 255
            }
        },
        messages: {
            title: {
                required : "bắt buộc phải nhập title",
                maxlength: "title có độ dài lớn nhất là 255"
            },
            slug: {
                required : "bắt buộc nhập title để tạo slug",
                maxlength: "độ dài slug được tạo ra không vượt quá 255 kí tự"
            },
            excerpt : {
                required : "bắt buộc nhập đoạn trích",
                maxlength: "độ dài đoạn trích không vượt quá 255 kí tự"
            },
            content : {
                required : "cần nhập nội dung"
            },
            thumbnail : {
                required : "cần thêm link thumbnail",
                maxlength: "đường link vượt 255 kí tự"
            },
            category_type_id : {
                required : "cần thêm category type cho bài đăng"
            }, 
            site_name : {
                required : "cần thêm site_name cho seo",
                maxlength: "phần site_name không vượt quá 255 kí tự"
            },
            image_seo : {
                required : "cần nhập hình ảnh để seo tốt hơn",
                maxlength: "phần hình ảnh không vượt quá 255 kí tự"
            },
            keyword_seo : {
                required : "cần thêm mô tả keyword seo",
                maxlength: "phần keyword không vượt quá 255 kí tự"
            },
            description_seo : {
                required : "cần thêm mô tả seo",
                maxlength: "phần mô tả không nên vượt quá 255 kí tự "
            }
        }
    });
}
function showErrorSystem(text){
    alert(" có lỗi ");
    console.log(text)
}
function deleteSlug( slug, table, element ){
    var result = confirm("Có chắc muốn xóa không?");
    if(typeof SYSTEM_DELETE_SLUG_ACTION == 'undefined'){
        showErrorSystem("SYSTEM_DELETE_SLUG_ACTION")
    }
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
    console.log(blockShow);
    blockShow.click();
    blockShow.value = imageSrc;
    // blockShow.blur();
    var img_finder           = document.createElement("img");
        img_finder.src       = imageSrc;
        img_finder.className = "output-image-finder"
        
    var wrapper              = document.getElementById( elementId );
    wrapper.appendChild(img_finder);
}

function showImageToInput( imageSrc, elementId ){

    var img_finder           = document.createElement("img");
        img_finder.src       = imageSrc;
        img_finder.className = "output-image-finder"
        
    var wrapper              = document.getElementById( elementId );
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
function selectImageInputWithCKFinder(element) {
    CKFinder.popup( {
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function( finder ) {
            finder.on( 'files:choose', function( evt ) {
                var file = evt.data.files.first();
                var imageSrc = file.getUrl();
                showImageToInput( imageSrc, element );
            });
            finder.on( 'file:choose:resizedImage', function( evt ) {
                var imageSrc = evt.data.resizedUrl;
                showImageToInput( imageSrc, element );
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
    // str = str.replace(/[^a-z0-9 ]+/gi,'');
    str = str.trim().replace(/ /g,'-');
    str = str.replace(/[\-]{2}/g,'');
    // var slug =  (str.replace(/[^a-z\- ]*/gi,''));
    return str;
}
function isExistSlug( elementId ){
    
    var title = $( '#'+elementId + " input" ).val();
    var slug = createSlug( title );
    /// reset slug input
    $( "input[name=slug]").val( slug );
    $(document).find(".result-slug").remove();
    if( slug ){
        $("button[type=submit]").attr('disabled', true );
    } else {
        return false;
    }
    $.ajax({
        type: "GET",
        url: ACTION_CHECK_SLUG + "/" + slug,
        dataType:"JSON",
        success: function(response){
            showResultSlugExisted(response.data);
        }
    });
}
function showResultSlugExisted(result){
    let DF_MESSAGE_SLUG_EXISTED     = "slug đã tồn tại";
    let DF_MESSAGE_SLUG_NOT_EXISTED = "slug chưa tồn tại";

    let DF_CLASS_RESULT   = 'result-slug ';
    let DF_ERROR_RESULT   = 'text-danger px-2 py-2';
    let DF_SUCCESS_RESULT = 'text-success px-2 py-2';
    
    var parag             = document.createElement("p");
        parag.className   = result ? DF_CLASS_RESULT + DF_ERROR_RESULT : DF_CLASS_RESULT + DF_SUCCESS_RESULT;
        parag.textContent = result ? DF_MESSAGE_SLUG_EXISTED : DF_MESSAGE_SLUG_NOT_EXISTED;
    document.getElementById("js-check-slug").appendChild( parag );
    if( !result ) {
        $("button[type=submit]").attr('disabled', false );
    }
}


/// dom load success
$(document).ready(function() {

    var multiSelect = $('.js-multi-select');
    if(multiSelect.length){
        multiSelect.select2(
            { 
                language: {
                    noResults: function(){
                        return "không có kết quả trùng khớp";
                    }
                },
            }
        );
    }
    var DF_FORM_VALIDATE = $(".js-validate-form");
    if(DF_FORM_VALIDATE.length){
        validateForm(DF_FORM_VALIDATE);
    }
});

if( document.getElementById('editor1') ){
    CKEDITOR.replace( 'editor1' );
}