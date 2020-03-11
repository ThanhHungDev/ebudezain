{% extends "layout/admin/index.twig" %}
{% block main %}
<div class="wrapper-admin-page">
    {% include "layout/admin/partial/sidebar.twig" %}
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">insert tag</h2>
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
            <form class="row" action="{{ path_for('ADMIN_SAVE_TAG_POST') }}" method="POST">
                <input type="hidden" name="edit" value="{{tag.id}}">
                <div class="col-8 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4" id="js-check-slug">
                            <h2 class="title">tên tag</h2>
                            <input name="name" type="text" 
                                value="{{ tag.name }}"
                                onblur="isExistSlug('js-check-slug')" />
                            <input name="slug" type="hidden" value="{{tag.slug}}" />
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta keyword</h2>
                            <textarea name="keyword" cols="30" rows="10">{{ tag.keyword }}</textarea>
                        </div>
                    </div>
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <h2 class="title">meta description</h2>
                            <textarea name="description" cols="30" rows="10">{{ tag.description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <section class="pb-4">
                                <h2 class="title text-center">bấm lưu mới 1 tag</h2>
                                <div class="text-center">
                                    <button {% if tag.id is empty %}disabled{% endif %}
                                     type="submit" 
                                        class="btn bg-success-color-dark text-white">
                                        Save
                                    </button>
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
<script>
    var SYSTEM_IS_ADD = "{% if topic is empty %}true{% endif %}";
</script>
{% endblock %}