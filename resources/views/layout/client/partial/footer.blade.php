<div class="bg-unique-color-dark text-white px-5 px-xs-2 pt-5 clear">
    <div class="container">
        <div class="border-top border-brown pb-5"></div>
        <div class="row">
            <div class="col-3 col-lg-12 col-sm-12 text-center-mobile pb-4">
                <a class="logo-footer" href="/">
                    <img src="{{ base_url() ~ '/images/footer-logo.png' }}" alt="Hospital">
                </a>
            </div>
            <div class="col-4 col-lg-6 col-sm-12">
                <div class="contact-information">
                    <div class="clear">
                        <div class="icon-address-map-market float-left">
                            {% include "genneral/svg/map-marker-alt.svg" %}
                        </div>
                        <div class="float-left">
                            <p>{{ config.information.address }}</p>
                            <strong class="text-base font-bold">
                                {{ config.information.area }}
                            </strong>
                        </div>
                    </div>
                    <div class="clear pt-4">
                        <div class="icon-phone-alt float-left">
                            {% include "genneral/svg/phone-alt.svg" %}
                        </div>
                        <div class="float-left">
                            <h2>
                                <a class="text-white text-base font-bold pt-1 d-block"
                                    href="tel:{{ config.information.mobile }}">
                                    {{ config.information.mobile }}
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="clear pt-4">
                        <div class="icon-mail-alt float-left">
                            {% include "genneral/svg/email.svg" %}
                        </div>
                        <div class="float-left">
                            <h4><a class="text-default text-base font-bold pt-1 pb-5 d-block"
                                    href="mail:{{ config.information.mail }}">{{ config.information.mail }}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 col-lg-6 col-sm-12 text-center-mobile">
                <h3 class="text-default font-bold text-xl capitalize">{{ config.site.sitename }}</h3>
                <div class="pt-3 text-light">{{ config.site.description }}</div>
                <div class="pt-4">
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf">
                        {% include "genneral/svg/facebook-square.svg" %}
                    </a>
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
                        {% include "genneral/svg/youtube.svg" %}
                    </a>
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
                        {% include "genneral/svg/instagram.svg" %}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>