<div class="bg-unique-color-dark text-white px-5 px-xs-2 pt-5 clear">
    <div class="container">
        <div class="border-top border-brown pb-5"></div>
        <div class="row">
            <div class="col-3 col-lg-12 col-sm-12 text-center-mobile pb-4">
                <a class="logo-footer" href="/">
                    <img src="{{ asset('images/footer-logo.png') }}" alt="Hospital">
                </a>
            </div>
            <div class="col-4 col-lg-6 col-sm-12">
                <div class="contact-information">
                    <div class="clear">
                        <div class="icon-address-map-market float-left">
                            @include ("genneral.svg.map-marker-alt")
                        </div>
                        <div class="float-left">
                            <p>{{ config('system.information.address') }}</p>
                            <strong class="text-base font-bold">
                                {{ config('system.information.area') }}
                            </strong>
                        </div>
                    </div>
                    <div class="clear pt-4">
                        <div class="icon-phone-alt float-left">
                            @include ("genneral.svg.phone-alt")
                        </div>
                        <div class="float-left">
                            <h2>
                                <a class="text-white text-base font-bold pt-1 d-block"
                                    href="tel:0797581480">
                                    079.7581.480
                                </a>
                            </h2>
                        </div>
                    </div>
                    <div class="clear pt-4">
                        <div class="icon-mail-alt float-left">
                            @include ("genneral.svg.email")
                        </div>
                        <div class="float-left">
                            <h4><a class="text-default text-base font-bold pt-1 pb-5 d-block"
                                    href="mail:{{ config('system.mail.admin')}}">{{ config('system.mail.admin')}}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 col-lg-6 col-sm-12 text-center-mobile">
                <h3 class="text-default font-bold text-xl capitalize">{{ config('system.sitename') }}</h3>
                <div class="pt-3 text-light">{{ config('system.site.description') }}</div>
                <div class="pt-4">
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf">
                        @include ("genneral.svg.facebook-square")
                    </a>
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
                        @include ("genneral.svg.youtube")
                    </a>
                    <a class="soccial-link" href="https://www.facebook.com/HungSmurf" >
                        @include ("genneral.svg.instagram")
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>