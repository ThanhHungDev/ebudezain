<div class="comment template container">
    <div class="row">
        <div class="col-12">
            <div class="title"> ý kiến bạn đọc </div>
            <div id="js-comment-editor" class="css-comment-editor position-relative">
                <div id="wmd-button-bar-comment" class="clear text-right">
                    <div class="float-left">
                        <label class="btn-change-state"> soạn thảo 
                            <strong class="js-reply reply"></strong>
                            <input type="hidden" class="js-reply-id" value="0">
                            <input type="hidden" class="js-block-id" value="0">
                        </label>
                    </div>
                </div>
                <textarea class="wmd-input" id="wmd-input-comment"></textarea>
                <div class="clear py-2">
                    <label class="btn-change-state d-inline-block"> preview </label>
                    <div id="wmd-preview-comment" class="preview-code-html"></div>
                </div>
                <div class="send-comment">
                    <button class="btn bg-primary-color-dark text-white d-block w-100"
                        onclick="sendCommentToChannel()"
                    >gửi bình luận</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="comment py-2 container bg-transparent js-wrapper-comment-data">
    {% if comments %}
    {% for comment in comments %}
    <div class="row js-row-comment">
        <div class="col-12">
            <div class="wrapper-comment-row">
                <img src="{{comment.avatar}}" alt="avatar">
                <div class="data-comment">
                    <input type="hidden" class="js-comment-id" value="{{comment.id}}">
                    <input type="hidden" class="js-user-account-id" value="{{comment.user_account_id}}">
                    <div class="people-comment">
                        <strong class="name-comment js-name-comment">{{comment.name}}</strong>
                    </div>
                    <div class="content-comment">
                        {{comment.content_html | raw}}
                        <div class="js-reply-content wrapper-reply-comment">
                            {% set comments_child = comment.getCommentChild %}
                            {% if comments_child %}
                            {% for comment_child in comments_child %}
                            <div class="row js-row-comment">
                                <div class="col-12">
                                    <div class="wrapper-comment-row">
                                        <img src="{{comment_child.avatar}}" alt="avatar">
                                        <div class="data-comment">
                                            <input type="hidden" class="js-comment-id" value="{{comment_child.id}}">
                                            <input type="hidden" class="js-user-account-id" value="{{comment_child.user_account_id}}">
                                            <div class="people-comment">
                                                <strong class="name-comment js-name-comment">{{comment_child.name}}</strong>
                                            </div>
                                            <div class="content-comment">
                                                {{comment_child.content_html | raw}}
                                                <div class="js-reply-content wrapper-reply-comment"></div>
                                            </div>
                                            <div class="action-comment clear">
                                                <a href="javascript:void(0)" onclick="likeComment(this)" class="like-comment text-muted">like</a>
                                                <a href="javascript:void(0)" onclick="replyComment(this)" class="like-comment text-muted">trả lời</a>
                                                <a href="javascript:void(0)" onclick="reportComment(this)" class="like-comment text-muted">report</a>
                                                <span class="time-comment text-muted">{{comment_child.update_at | date("d-m-y")}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                            {% endif %}
                        </div>
                    </div>
                    <div class="action-comment clear">
                        <a href="javascript:void(0)" onclick="likeComment(this)" class="like-comment text-muted">like</a>
                        <a href="javascript:void(0)" onclick="replyComment(this)" class="like-comment text-muted">trả lời</a>
                        <a href="javascript:void(0)" onclick="reportComment(this)" class="like-comment text-muted">report</a>
                        <span class="time-comment text-muted">{{comment.update_at | date("d-m-y")}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
    {% endif %}
</div>

<div class="js-example-comment d-none">
    <div class="row js-row-comment">
        <div class="col-12">
            <div class="wrapper-comment-row">
                <img class="js-avatar" src="" alt="avatar">
                <div class="data-comment">
                    <input type="hidden" class="js-comment-id" value="">
                    <div class="people-comment">
                        <strong class="name-comment js-name-comment"></strong>
                    </div>
                    <div class="content-comment js-content-comment"></div>
                    <div class="action-comment clear">
                        <a href="javascript:void(0)" onclick="likeComment(this)" class="like-comment text-muted">like</a>
                        <a href="javascript:void(0)" onclick="replyComment(this)" class="like-comment text-muted">trả lời</a>
                        <a href="javascript:void(0)" onclick="reportComment(this)" class="like-comment text-muted">report</a>
                        <span class="time-comment text-muted js-time-update">{{comment.update_at | date("d/m/y H:i:s")}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>