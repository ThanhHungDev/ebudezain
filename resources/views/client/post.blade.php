{% extends "layout/client/index.twig" %}
{% block main %}
<div class="wrapper-client-content clear">
    {% if post.table_content %}
    <div class="table-content">
        <span class="title">Table of contents</span>
        {{ post.table_content | raw }}
    </div>
    {% endif %}
    
    <div class="main-content-data">
        <h1 class="title pt-3">
            {{ post.title }} 
        </h1>
        <div class="w-100 text-center pt-4">
            <img style="width: 100%; height: auto; max-width: 600px;" src="{{ post.medium }}" alt="{{post.title}}"/>
        </div>
        <div class="content-page-post">
            {{ post.content | raw }}
        </div>
    </div>
    {% include "layout/client/partial/comment.twig" %}
</div>
{% endblock %}