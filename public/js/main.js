/// prototype ////////////////////////
Date.prototype.strFormatDate = function(){
    return this.getDate() + '-' + (this.getMonth() + 1) + '-' + this.getFullYear();
}
//////////////////////////////////////
const SYSTEM_MAX_WIDTH_MOBILE = '767';
$(document).ready(function(){
    // if (typeof(Storage) !== 'undefined') {
    //     var user = localStorage.getItem('user');
    //     user = JSON.parse(user);
    //     console.log(user , " get data user before from Storage");
    //     if(user) updateDataUserToHtml(user);
    // } else {
    //     alert('ứng dụng không chạy tốt trên trình duyệt này, vui lòng nâng cấp trình duyệt');
    // }
    triggerKeyEnterFormSubmit( "js-modal-register", "js-btn-register-submit-form" );
    triggerKeyEnterFormSubmit( "js-modal-login", "js-btn-login-submit-form" );
    $(".table-content li>a").click(function() {
        var target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top - 100
        }, 200);
    });
    var list_head = $(".list-wrapper ul.menu li");
    list_head.click(function(){
        if ($(window).width() < 768){
            console.log( "mobile" );
            /// remove all active 
            if($( this ).hasClass('active')){
                list_head.removeClass("active");
            }else{
                list_head.removeClass("active");
                $( this ).addClass( "active" );
            }
            
            
        }
        console.log( "list_head click" );
    });
    $("#toggle-menu").change(function(){
        var bodyElement = $(document.body);
        if(bodyElement.hasClass("neo-scroll")){
            bodyElement.removeClass("neo-scroll")
        }else{
            bodyElement.addClass("neo-scroll")
        }
    });
    $("#sidebar-toggle").change(function(){
        var bodyElement = $(document.body);
        var sidebar = bodyElement.find(".wrapper-client-sidebar");
        if(bodyElement.width()< SYSTEM_MAX_WIDTH_MOBILE){
            if(bodyElement.hasClass("neo-scroll")){
                bodyElement.removeClass("neo-scroll");
                sidebar.removeClass("active");
            }else{
                bodyElement.addClass("neo-scroll");
                sidebar.addClass("active");
            }
        }
    });
    //// set modal login 
    $('a[href="#js-modal-login"]').click(function(event) {
        $(this).modal({
            fadeDuration: 0,
            escapeClose: false,
            clickClose: false,
            closeExisting: true
        });
        event.preventDefault();
    });
    $('#js-modal-login').on('modal:before-open', function(event, modal) {
        if($('.js-socket-fail').length){
            /// show login modal
            $("#js-modal-error-connect").modal({
                fadeDuration: 0,
                escapeClose: false,
                clickClose: false,
                closeExisting: true
            });
            return false;
        }
    });
    $('a[href="#js-modal-login"]').on($.modal.BEFORE_CLOSE, function(event, modal) {
        modal.find(".js-alert-register-success").hide();
    });
    $('a[href="#js-modal-register"]').click(function(event) {
        $(this).modal({
            fadeDuration: 0,
            escapeClose: false,
            clickClose: false,
            closeExisting: true
        });
        event.preventDefault();
    });
    $("#js-btn-register-submit-form").click(function(event){
        var action = SYSTEM_API_URL + "/api/register";
        var wrapper_modal = $(this).closest("div.modal");
        var progress      = wrapper_modal.find(".js-progress-wrap");
        progress.show();
        /// get input data 
        var email    = wrapper_modal.find("input[name=email]").val();
        var password = wrapper_modal.find("input[name=password]").val();
        var name     = wrapper_modal.find("input[name=name]").val();
        console.log( action, email, password, name );
        $.ajax({
            type: "POST",
            url: action,
            data : { email , password, name },
            dataType:"JSON",
            success: function(response){
                console.log( response );
                progress.hide();
                if(response.code == 200){
                    $.modal.close();
                    /// refesh form input
                    refeshFormInputAuthentication();
                    /// show modal login
                    var modal_login = $("#js-modal-login");
                    modal_login.modal({
                        fadeDuration: 0,
                        escapeClose: false,
                        clickClose: false,
                        closeExisting: true
                    });
                    modal_login.find(".js-alert-register-success").show();
                    event.preventDefault();
                }else{
                    wrapper_modal.find(".js-alert-register-error").show();
                    wrapper_modal.find(".js-alert-register-error p").text(response.user_message);
                }
            }
        });
    });
    $("#js-btn-login-submit-form").click(function(event){
        var action        = SYSTEM_API_URL + "/api/login";
        var wrapper_modal = $(this).closest("div.modal");
        var progress      = wrapper_modal.find(".js-progress-wrap");
        progress.show();
        /// get input data 
        var email    = wrapper_modal.find("input[name=email]").val();
        var password = wrapper_modal.find("input[name=password]").val();
        var client   = detectClient();
        console.log( action, email, password, client );
        $.ajax({
            type: "POST",
            url: action,
            data : { email , password, client },
            dataType:"JSON",
            success: function(response){
                console.log( response );
                progress.hide();
                if(response.code == 200){
                    $.modal.close();
                    if (typeof(Storage) !== 'undefined') {
                        console.log(JSON.stringify(response.data));
                        localStorage.setItem('user', JSON.stringify(response.data));
                        updateDataUserToHtml( response.data );
                    } else {
                        alert('ứng dụng không chạy tốt trên trình duyệt này, vui lòng nâng cấp trình duyệt');
                    }
                }else{
                    wrapper_modal.find(".js-alert-login-error").show();
                    wrapper_modal.find(".js-alert-login-error p").text(response.user_message);
                }
            }
        });
    });
    $("#js-comment-editor").click(function(){
        middlewareLoginBeforeComment();
    });
});
if(document.getElementById("js-comment-editor")){
    var converter = Markdown.getSanitizingConverter();
    var options = {};
    var editor = new Markdown.Editor(converter, "-comment", options);
    editor.run();
}
// function logout(){
//     if (typeof(Storage) !== 'undefined') {
//         localStorage.setItem('user', null);
//     } 
//     return false;
// }
function refeshFormInputAuthentication(){
    $("input").val('');
    $(".alert").hide();
}
function getUserFormStore(){
    if (typeof(Storage) !== 'undefined') {
        var user = localStorage.getItem('user');
        user = JSON.parse(user);
        return user;
    } 
    return null;
}
function listenConnectChannel(){
    console.log( "listen Connect Channel" );
    updateMenuLogin();
    var user   = getUserFormStore();
    var client = detectClient();
    if( slug ){
        var DATA_JOIN_CHANNEL = { id : user.id, access: user.access, slug, client };
        console.log( DATA_JOIN_CHANNEL, "DATA_JOIN_CHANNEL_COMMENT" );
        socket.emit("SOCKET_LISTEN_JOIN_CHANNEL_COMMENT", DATA_JOIN_CHANNEL);
    }
    /// get notification
    var DATA_NOTIFICATION = { id : user.id, access: user.access, client };
    console.log( DATA_NOTIFICATION, "DATA_NOTIFICATION" );
    socket.emit("SOCKET_LISTEN_GET_LIST_NOTIFICATION", DATA_NOTIFICATION);
}
function updateDataUserToHtml( user ){
    if(!user){
        user = { id : '', access: '', refesh: '', user_infor: '' };
    }
    document.getElementById("js-id-user").value      = user.id;
    document.getElementById("js-access-token").value = user.access;
    document.getElementById("js-refesh-token").value = user.refesh;
    document.getElementById("js-user-infor").value   = JSON.stringify(user.user_infor);
    document.getElementById("js-is-change-data-user").click();
}
function updateDataRefeshed (){
    document.getElementById("js-is-refeshed-token").value = '1';
}
function getDataUserFromHtml(){
    var id         = document.getElementById("js-id-user").value;
    var access     = document.getElementById("js-access-token").value;
    var refesh     = document.getElementById("js-refesh-token").value;
    var channel    = document.getElementById("js-channel-name").value;
    var user_infor = document.getElementById("js-user-infor").value;
    user_infor = JSON.parse(user_infor);
    return { id, access, refesh, channel, user_infor };
}
function getDataPostFromHtml(){
    var id         = document.getElementById("js-post_id").value;
    return { id };
}
function getCommentContentFromHtml(){
    var message  = document.getElementById("wmd-preview-comment").innerHTML;
    var md       = document.getElementById("wmd-input-comment").value;
    var reply    = document.getElementsByClassName('js-reply-id')[0].value;
    var block_id = document.getElementsByClassName('js-block-id')[0].value;
    return { message, md, reply, block_id };
}
function replyComment(e){
    
    var wrapper_reply = $(e).parents(".js-row-comment").first();
    var reply_id      = wrapper_reply.find(".js-comment-id").first().val();
    var reply_name    = wrapper_reply.find(".js-name-comment").first().html();
    var wrapper_block = $(e).parents(".js-row-comment").last();
    var block_id      = wrapper_block.find(".js-comment-id").first().val();
    //set reply id 
    $("#js-comment-editor .js-reply-id").val(reply_id);
    $("#js-comment-editor .js-reply").html('@' + reply_name);
    $("#js-comment-editor .js-block-id").val(block_id);
    /// set data send 
    $('html, body').animate({
        scrollTop: $("#js-comment-editor").offset().top - 120
    }, 500);
    $("#wmd-input-comment").val('@' + reply_name + '\n\n');
    $("#wmd-input-comment").focus();
}
function resetCommentContentFromHtml(){
    document.getElementById("wmd-preview-comment").innerHTML = '';
    document.getElementById("wmd-input-comment").value = '';
    document.getElementsByClassName("js-reply").value = '';
    document.getElementsByClassName("js-reply-id").value = '';
}
function getDataRefeshedFromHtml(){
    return document.getElementById("js-is-refeshed-token").value;
}
function refeshAuthentication(){
    var is_refeshed = getDataRefeshedFromHtml();
    if( !is_refeshed ){
        var action = SYSTEM_API_URL + "/api/refesh-token";
        var user = getDataUserFromHtml();
        console.log( "data user html ");
        console.log( user );
        var client   = detectClient();
        var id = user.id;
        var access = user.access;
        var refesh = user.refesh;
        $.ajax({
            type: "POST",
            url: action,
            data : { id, access, refesh, client },
            dataType:"JSON",
            success: function(response){
                if(response.code == 200){
                    updateDataRefeshed();
                    if (typeof(Storage) !== 'undefined') {
                        console.log(JSON.stringify(response.data));
                        localStorage.setItem('user', JSON.stringify(response.data));
                        updateDataUserToHtml( response.data );
                    } else {
                        alert('ứng dụng không chạy tốt trên trình duyệt này, vui lòng nâng cấp trình duyệt');
                    }
                }else if (typeof(Storage) !== 'undefined') {
                    localStorage.setItem('user', null);
                }
            }
        });
    }
}
function triggerKeyEnterFormSubmit( idWrapperInput, idTrigger ){
    // Get the input field
    $("#" + idWrapperInput).keyup(function(event){
        // Number 13 is the "Enter" key on the keyboard
        if (event.keyCode === 13) {
            // Cancel the default action, if needed
            event.preventDefault();
            // Trigger the button element with a click
            $("#" + idWrapperInput).find("#" + idTrigger).click();
        }
    })
}
function middlewareLoginBeforeComment(){
    if($('.js-socket-fail').length){
        /// show login modal
        $("#js-modal-error-connect").modal({
            fadeDuration: 0,
            escapeClose: false,
            clickClose: false,
            closeExisting: true
        });
        return false;
    }
    var channelName = $("#js-channel-name").val();
    if( !channelName ){
        /// show login modal
        $('a[href="#js-modal-login"]').click();
        return false;
    }
}
function refesh_page(){
    location.reload();
}
function sendCommentToChannel(){
    var channelName = $("#js-channel-name").val();
    if( channelName ){
        /// send comment to channel
        var client   = detectClient();
        var dataEmit = getDataUserFromHtml();
        var post     = getDataPostFromHtml();
        var dataCommentHtml = getCommentContentFromHtml();
        dataEmit.message  = dataCommentHtml.message;
        dataEmit.md       = dataCommentHtml.md;
        dataEmit.reply    = dataCommentHtml.reply;
        dataEmit.block_id = dataCommentHtml.block_id;
        dataEmit.client  = client;
        dataEmit.post_id = post.id
        if(dataEmit.message && dataEmit.post_id){
            socket.emit("CHANNEL_MESSAGE", dataEmit);
        }else if(!dataEmit.message){
            alert("không có mesage!");
        }else if(!dataEmit.post_id){
            alert("không có bài viết!");
        }else{
            alert("có lỗi sảy ra! không thể gửi");
        }
    }else{
        /// show login modal
        $('a[href="#js-modal-login"]').click();
    }
    resetInputComment();
}
function resetInputComment(){
    document.getElementsByClassName("js-reply")[0].innerHTML = '';
    document.getElementsByClassName("js-reply-id" )[0].value = 0;
    document.getElementsByClassName("js-block-id" )[0].value = 0;
}
function updateCommentHtml(comment, user){

    var block = $(".js-example-comment");
    block.find('.js-row-comment').addClass("js-index-comment");
    block.find("img.js-avatar").attr('src', user.avatar);
    block.find(".js-name-comment").html(user.name);
    block.find(".js-time-update").html(new Date().strFormatDate());
    block.find(".js-content-comment").html(comment.content_html + '<div class="js-reply-content wrapper-reply-comment"></div>');
    block.find(".js-comment-id").val(comment.id);

    if(comment.block_id){
        console.log(`.js-comment-id[value=${comment.block_id}]`)
        $(`.js-comment-id[value=${comment.block_id}]`)
            .closest('.js-row-comment').find(".js-reply-content")
            .first()
            .append(block.html());
    }else{
        $(".js-wrapper-comment-data").append(block.html());
    }
    ///scroll to comment
    $('html, body').animate({
        scrollTop: $(".js-index-comment").offset().top - 100
    }, {
        duration: 200,
        complete: function() { 
            $('body').find(".js-row-comment").removeClass("js-index-comment");
        }
    });
}
function logout(){
    if (typeof(Storage) !== 'undefined') {
        var user = localStorage.setItem('user', null);
        if(user) updateDataUserToHtml(null);
    } else {
        alert('ứng dụng không chạy tốt trên trình duyệt này, vui lòng nâng cấp trình duyệt');
    }
    location.reload();
}
function updateMenuAccount(user_infor){
    var block = $(".js-user-login-data-menu");
    if(!user_infor){
        /// update login data
        block.find("img.js-user-avatar").attr('src', '');
        block.find(".js-name-user").attr('src', '');
    }else{
        /// update avatar data
        block.find("img.js-user-avatar").attr('src', user_infor.avatar);
        block.find(".js-name-user").text(user_infor.name);
    }
}
function updateMenuLogin(){
    console.log("updateMenuLogin")
    if (typeof(Storage) !== 'undefined') {
        var user = localStorage.getItem('user');
        user = JSON.parse(user);
        if(user && user.user_infor) updateMenuAccount(user.user_infor);
        if($(".js-user-login-modal-menu").hasClass('d-none')){
            $(".js-user-login-data-menu").addClass('d-none');
            $(".js-user-login-modal-menu").removeClass('d-none');
        }else{
            $(".js-user-login-data-menu").removeClass('d-none');
            $(".js-user-login-modal-menu").addClass('d-none');
        }
    } else {
        updateMenuAccount(null);
        alert('ứng dụng không chạy tốt trên trình duyệt này, vui lòng nâng cấp trình duyệt');
    }
}
//////////////////////////////////////////////////
// socket.on("SOCKET_RESPONSE_JOIN_CHANNEL", function(response){
//     if( response.code != 200 ){
//         console.log("data trả ra của SOCKET_RESPONSE_JOIN_CHANNEL là : sai ");
//         refeshAuthentication();
//     }else{
//         console.log("data trả ra của SOCKET_RESPONSE_JOIN_CHANNEL là : đúng ");
//         document.getElementById("js-channel-name").value = response.data;
        
//     }
//     console.log(response);
// });
// socket.on("CHANNEL_MESSAGE_RESPONSE", function(response){
//     console.log(response);
//     if( response.code != 200 ){
//         console.log("CHANNEL_MESSAGE_RESPONSE : that bai ");
//         alert("có lỗi sảy ra, vui lòng thử lại sau!");
//         location.reload();
//     }else{
//         console.log("CHANNEL_MESSAGE_RESPONSE : thanh cong ");
//         resetCommentContentFromHtml();
//         if( response.data.user_infor ){
//             updateCommentHtml(response.data.comment_result, response.data.user_infor);
//         }
//     }
// });
// socket.on("NOTIFICATION_RESPONSE", function(response){
//     console.log(response);
//     if( response.code != 200 ){
//         console.log("NOTIFICATION_RESPONSE : that bai ");
//     }else{
//         console.log("NOTIFICATION_RESPONSE : thanh cong ");
//         document.getElementById("js-total-notification").innerHTML = response.data;
//     }
// });
