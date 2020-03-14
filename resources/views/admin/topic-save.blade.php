{% extends "layout/admin/index.twig" %}
{% block main %}
<div class="wrapper-admin-page">
    {% include "layout/admin/partial/sidebar.twig" %}
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">insert topic</h2>
            </div>
        </div>
        <div class="admin-wrapper-content-field">
            <div class="row">
                <div class="col-12">
                    {% for error in errors %}
                    <div class="alert alert-warning">
                        {{ error }}
                    </div>
                    {% endfor %}
                </div>
            </div>
            <form class="row" action="{{ path_for('ADMIN_SAVE_TOPIC_POST') }}" method="POST">
                <input type="hidden" name="edit" value="{{topic.id}}">
                <div class="col-8 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">tên topic</h2>
                            <input name="name" type="text" 
                                value="{{ topic.name }}"
                                onblur="isExistSlug('js-check-slug')" />
                            <input name="slug" type="hidden" value="{{topic.slug}}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title"> title </h2>
                            <input name="title" type="text" value="{{ topic.title }}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta keyword</h2>
                            <textarea name="keyword" cols="30" rows="10">{{ topic.keyword }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta description</h2>
                            <textarea name="description" cols="30" rows="10">{{ topic.description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">bấm lưu mới 1 topic</h2>
                                <div class="text-center">
                                    <button {% if topic.id is empty %}disabled{% endif %}
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
                                <h2 class="title text-center">setup thumbnail</h2>
                                <div class="text-center">
                                    <button type="button" onclick="selectThumbnailWithCKFinder('thumbnail-topic')"
                                        class="btn bg-primary text-white">
                                        Select Thumbnail
                                    </button>
                                </div>
                                <div id="thumbnail-topic">
                                    <input name="thumbnail" class="thumbnail-topic pb-2" 
                                        type="text" value="{{ topic.thumbnail }}" />
                                    {% if topic.thumbnail %}
                                    <img src="{{ topic.thumbnail }}" class="output-image-finder">
                                    {% endif %}
                                    
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
{% block customScript %}
<script src="{{ base_url() ~ '/jquery.min.js'}}"></script>
<script src="{{ base_url() ~ '/ckeditor/ckeditor.js' }}"></script>
<script src="{{ base_url() ~ '/ckfinder/ckfinder.js' }}"></script>
<script>
    var SYSTEM_IS_ADD = "{% if topic is empty %}true{% endif %}";
</script>
{% endblock %}