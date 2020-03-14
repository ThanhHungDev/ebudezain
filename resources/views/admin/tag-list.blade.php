{% extends "layout/admin/index.twig" %}
{% block main %}
<div class="wrapper-admin-page">
    {% include "layout/admin/partial/sidebar.twig" %}
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">list tag</h2>
            </div>
        </div>
        <div class="admin-wrapper-content-field">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4 ">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>name</th>
                                            <th>slug</th>
                                            <th>post</th>
                                            <th>keyword</th>
                                            <th>description</th>
                                            <th>#remove#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for tag in tags %}
                                        <tr>
                                            <td>
                                                <a href="{{ path_for("ADMIN_SAVE_TAG_GET", {slug : tag.slug}) }}">
                                                    {{ tag.name }} 
                                                </a>
                                            </td>
                                            <td>{{ tag.slug }}</td>
                                            <td>{{ tag.post }}</td>
                                            <td>{{ tag.renderKeyLimit( 'keyword' ,30 ) }}</td>
                                            <td>{{ tag.renderKeyLimit( 'description' ,30 ) }}</td>
                                            <td>
                                                <button type="button"
                                                onclick="deleteSlug('{{ tag.slug }}' , 'tag', this)"
                                                class="bg-transparent btn-remove-row">
                                                    {% include "genneral/svg/remove.svg" %}
                                                </button>
                                            </td>
                                        </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
