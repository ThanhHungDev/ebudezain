{% extends "layout/admin/index.twig" %}
{% block main %}
<div class="wrapper-admin-page">
    {% include "layout/admin/partial/sidebar.twig" %}
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">list topic</h2>
            </div>
        </div>
        <div class="admin-wrapper-content-field">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="row block-content">
                        <div class="col-12 bg-white shadows-1 px-4 py-4">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">name</th>
                                        <th scope="col">slug</th>
                                        <th scope="col">keyword</th>
                                        <th scope="col">description</th>
                                        <th>#remove#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for topic in topics %}
                                    <tr>
                                        <td>
                                            <a href="{{ path_for("ADMIN_SAVE_TOPIC_GET", {slug : topic.slug}) }}">
                                                {{ topic.name }} 
                                            </a>
                                        </td>
                                        <td>{{ topic.slug }}</td>
                                        <td>{{ topic.renderKeyLimit( 'keyword' ,30 ) }}</td>
                                        <td>{{ topic.renderKeyLimit( 'description' ,30 ) }}</td>
                                        <td>
                                            <button type="button"
                                            onclick="deleteSlug('{{ topic.slug }}' , 'topic', this)"
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
{% endblock %}