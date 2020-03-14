
<input type="checkbox" id="sidebar-toggle" class="d-none">
<label class="btn-toggle-sidebar clear" for="sidebar-toggle">
    <span class="d-inline-block float-left">
        {% include "genneral/svg/arrow-left.svg" %}
        {% include "genneral/svg/arrow-right.svg" %}
    </span>
    <span class="text-btn-toggle-sidebar float-left px-2">
        toggle sidebar
    </span>
</label>
<div class="wrapper-client-sidebar">
    {% if sidebar.new %}
    <div class="social-wrapper clear mobile">
        <label for="sidebar-toggle" class="btn-toggle-close">
            {% include "genneral/svg/windows-close.svg" %}
        </label>
    </div>
    <div class="block-sidebar clear">
        <input type="checkbox" id="post-new" class="checkbox-sidebar d-none">

        <label for="post-new" class="title-sidebar blue-gradient d-block clear">
            <span class="ballot-icon">{% include "genneral/svg/ballot.svg" %}</span>
            Bài viết mới
            <span class="angle-down-icon float-right">{% include "genneral/svg/angle-down.svg" %}</span>
            <span class="angle-right-icon float-right">{% include "genneral/svg/angle-right.svg" %}</span>
        </label>

        <ul class="list-sidebar clear">
            {% if sidebar.new %}
            {% for post in sidebar.new %}
            <li class="{{ activeRouter( full_url_for('GET_POST', {slug : post.slug})) }}">
                <a href="{{  full_url_for('GET_POST', {slug : post.slug}) }}">
                    {{post.title}}
                </a>
            </li>
            {% endfor %}
            {% endif %}
        </ul>
    </div>
    {% endif %}
    
    {% if sidebar.related %}
    <div class="block-sidebar clear">
        <input type="checkbox" id="post-relation" class="checkbox-sidebar d-none">

        <label for="post-relation" class="title-sidebar aqua-gradient-rgba d-block clear">
            <span class="ballot-icon">{% include "genneral/svg/ballot.svg" %}</span>
            quan tam
            <span class="angle-down-icon float-right">{% include "genneral/svg/angle-down.svg" %}</span>
            <span class="angle-right-icon float-right">{% include "genneral/svg/angle-right.svg" %}</span>
        </label>

        <ul class="list-sidebar clear">
            {% if sidebar.related %}
            {% for post in sidebar.related %}
            <li class="{{ activeRouter( full_url_for('GET_POST', {slug : post.slug})) }}">
                <a href="{{  full_url_for('GET_POST', {slug : post.slug}) }}">
                    {{post.title}}
                </a>
            </li>
            {% endfor %}
            {% endif %}
        </ul>
    </div>
    {% endif %}
</div>