<!DOCTYPE html>
<html>
<head>
    {% include "layout/client/partial/favicon.twig" %}
    {% block head %}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ title }} </title>
    <meta name="keywords" content="{{ keywords }}"/>
    <meta name="description" content="{{ description }}"/>
    <meta name="author" content="Trương Thanh Hùng - 0797581480 - thanhhung.tud@gmail.com" />

    <meta property="og:locale" content="vi_VI" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ title }}" />
    <meta property="og:description" content="{{ description }}" />
    <meta property="og:url" content="{{ url }}" />
    <meta property="og:site_name" content="{{ site_name }}" />
    <meta property="og:image" content="{{ image }}" />

    <link rel="stylesheet" href="{{ base_url() ~ '/css/modal.jquery.min.css'}}">
    <link rel="stylesheet" href="{{ base_url() ~ '/css/prism.min.css'}}">
    {{ renderStyle(
        [
            "/genneral/css/animate.twig",
            "/genneral/css/main.twig",
            "/genneral/css/progress.twig",
            "/genneral/css/alert.twig",
            "/genneral/css/client/header.twig",
            "/genneral/css/client/sidebar.twig", 
            "/genneral/css/client/main.content.twig",
            "/genneral/css/client/client.twig",
            "/genneral/css/client/comment.twig"
        ]) | raw
    }}
    {% endblock %}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://www.facebook.com/HungSmurf",
        "name": "Trương Thanh Hùng CEO.",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+84797581480",
            "contactType": "technical support"
        }
    }
    </script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/socket.io.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/markdown/converter.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/markdown/sanitizer.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/markdown/editor.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/jquery.min.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/modal.jquery.min.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/prism.min.js'}}"></script>
    <script type="text/javascript" src="{{ base_url() ~ '/js/detect.js'}}"></script>
    <script>
        const SYSTEM_BASE_URL = "{{ base_url() }}";
        const SYSTEM_API_URL = "{{ base_url() ~ ':3000' }}";
        const socket = io.connect(SYSTEM_API_URL, {
            reconnection: true,
            reconnectionDelay: 1000,
            reconnectionDelayMax : 5000,
            reconnectionAttempts: 99999
        });
        socket.on('connect', function () {
            $(".header-wrapper-menu").removeClass('border-bottom').removeClass('border-danger').removeClass('js-socket-fail');
        });
        socket.on('disconnect', function(){
            $(".header-wrapper-menu").addClass('border-bottom').addClass('border-danger').addClass('js-socket-fail');
        });
        socket.on('connect_error', function() {
            $(".header-wrapper-menu").addClass('border-bottom').addClass('border-danger').addClass('js-socket-fail');
        });
        const slug = "{{ slug }}";
    </script>
</head>
<body>
    <div class="wrapper-page position-relative">
        <div class="wrapper-header-page">
            {% include "layout/client/partial/header.twig" %}
        </div>
        <div class="wrapper-main-page">
            <div class="container">
                <div class="row position-relative">
                    {% include "layout/client/partial/sidebar.twig" %}
                    {% block main %}{% endblock %}
                </div>
            </div>
        </div>
        <div class="wrapper-footer-page">
            {% include 'layout/client/partial/footer.twig' %}
        </div>
    </div>
    {% include "layout/client/partial/modal-login.twig" %}
    {% include "layout/client/partial/modal-register.twig" %} 
    {% include "layout/client/partial/modal-error-connect.twig" %} 
    <input type="text" class="d-none" id="js-channel-name" value="" />
    <input type="text" class="d-none" id="js-id-user" value="" />
    <input type="text" class="d-none" id="js-access-token" value=""/> 
    <input type="text" class="d-none" id="js-refesh-token" value=""/> 
    <input type="text" class="d-none" id="js-user-infor" value=""/> 
    <input type="text" class="d-none" id="js-is-refeshed-token" value=""/> 
    <input type="text" class="d-none" id="js-post_id" value="{{post.id}}"/> 
    <input type="checkbox" class="d-none" id="js-is-change-data-user" checked onclick="listenConnectChannel()"/>
    <script type="text/javascript" src="{{ base_url() ~ '/js/main.js'}}"></script>
</body>
</html>