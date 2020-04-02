<div class="header-wrapper-menu clear">
    <div class="wrapper-brand float-left" itemscope itemtype="http://schema.org/WebSite">
        <h3 class="brand" itemprop="name">
            <a class="link-home-page position-relative" href="{{ asset('') }}" itemprop="url">
                @include ("genneral.svg.logo") 
                <span class="brand-name">{{ config('system.sitename') }}</span>
            </a>
        </h3>
    </div>
    <div class="header-search-box float-right pc">
        <input id="open-search" type="checkbox" class="d-none">
        <label for="open-search" class="icon-search-open">
            @include ("genneral.svg.search-plus" )
            @include ("genneral.svg.close" )
        </label>
        <form class="search-show" action="{{ Route('SEARCH') }}" autocomplete="off">
            <div class="group-control position-relative">
                <input type="text" placeholder="tìm kiếm..." name="q" autocomplete="off">
                <button type="submit">@include ("genneral.svg.search-plus" )</button>
            </div>
        </form>
    </div>
    <div>
        <input type="checkbox" id="toggle-menu" class="d-none">
        @include ("layout.client.partial.list-menu" )
    </div>
    <label for="toggle-menu" class="btn-toggle-menu mobile">
        @include ("genneral.svg.align-justify" )
    </label>
</div>