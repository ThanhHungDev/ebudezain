{% extends "layout/admin/index.twig" %}
{% block main %}
<div class="wrapper-admin-page">
    {% include "layout/admin/partial/sidebar.twig" %}
    <div class="admin-main-content">
        <div class="page-title">
            <div class="clear">
                <h2 class="headding float-left">list post</h2>
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
                                            <th>title</th>
                                            <th>keyword</th>
                                            <th>description</th>
                                            <th>#remove#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for post in posts %}
                                        <tr>
                                            <td>
                                                <a href="{{ path_for("ADMIN_SAVE_POST_GET", {slug : post.slug}) }}">
                                                    {{ post.renderKeyLimit( 'title' ,30 ) }}
                                                </a>
                                            </td>
                                            <td>{{ post.renderKeyLimit( 'keyword' ,30 ) }}</td>
                                            <td>{{ post.renderKeyLimit( 'description' ,30 ) }}</td>
                                            <td>
                                                <button type="button"
                                                onclick="deleteSlug('{{ post.slug }}' , 'post', this)"
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
{# {% block customScript %}
<script src="{{ base_url() ~ '/jquery.min.js'}}"></script>
<script>
    var SYSTEM_DELETE_SLUG_ACTION = "{{ path_for('ADMIN_DELETE_SLUG')}}";
    function deleteSlug( slug, table, element ){
        $.ajax({
            type: "DELETE",
            url: SYSTEM_DELETE_SLUG_ACTION,
            data : { slug , table },
            dataType:"JSON",
            success: function(response){
                if(response.status == 200){
                    $( element ).closest('tr').remove();
                }
            }
        });
    }
</script>
{% endblock %} #}