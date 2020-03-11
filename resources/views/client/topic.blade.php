{% extends "layout/client/index.twig" %}
{% block main %}
<div class="wrapper-client-content clear">
    <div class="main-content-data">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="entry-crumbs">
                        <span>
                            <a class="entry-crumb" href="{{ base_url() }}">
                                <span>Trang Chủ</span>
                            </a>
                        </span>
                        <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
                        <span class="td-bred-no-url-last">
                            {{topic.name}}
                        </span>
                    </div>
                </div>
                <div class="col-12">
                    <h1>{{topic.title}}</h1>
                </div>
                {% if newPosts %}
                {% for post in newPosts %}
                <div class="col-4 col-md-6 col-xs-12 topic-post-block">
                    <a href="{{ path_for('GET_POST', {slug : post.slug})}}">
                        <img src="{{post.thumbnail}}" alt="{{post.slug}}"/>
                    </a>
                    <h3 class="entry-title td-module-title">
                        <a href="{{ path_for('GET_POST', {slug : post.slug})}}" title="{{ post.title }}">
                            {{ post.title }}
                        </a>
                    </h3>
                    <div class="td-module-meta-info"><span class="td-post-date">{{ post.update_at | date("d/m/Y")}}</span></div>
                </div>
                {% endfor %}
                {% endif %}
                
            </div>
        </div>
    </div>
</div>
{% endblock %}
