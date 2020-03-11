<div class="header-wrapper-menu clear">
    <div class="wrapper-brand float-left" itemscope itemtype="http://schema.org/WebSite">
        <h3 class="brand" itemprop="name">
            <a class="link-home-page position-relative" href="{{ base_url() }}" itemprop="url">
                {% include "genneral/svg/logo.svg" %} <span class="brand-name">{{ config.site.name }}</span>
            </a>
        </h3>
    </div>
    <div class="header-search-box float-right pc">
        <input id="open-search" type="checkbox" class="d-none">
        <label for="open-search" class="icon-search-open">
            {% include "genneral/svg/search-plus.svg" %}
            {% include "genneral/svg/close.svg" %}
        </label>
        <form class="search-show" action="{{ full_url_for('SEARCH') }}" autocomplete="off">
            <div class="group-control position-relative">
                <input type="text" placeholder="Search.." name="q" autocomplete="off">
                <button type="submit">{% include "genneral/svg/search-plus.svg" %}</button>
            </div>
        </form>
    </div>
    <div>
        <input type="checkbox" id="toggle-menu" class="d-none">
        {% include "layout/client/partial/list-menu.twig" %}
    </div>
    <label for="toggle-menu" class="btn-toggle-menu mobile">
        {% include "genneral/svg/align-justify.svg" %}
    </label>
</div>