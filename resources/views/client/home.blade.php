{% extends "layout/client/intro.twig" %}
{% block main %}
<div class="BlackImage line-height-0">
    {% include "genneral/svg/hero-triangles.svg" %}
    <h1>Trương Thanh Hùng <span>Web developer</span></h1>
    <img class="mobile" src="{{ base_url() ~ '/images/background/bg-developer.jpg' }}" alt="HUNGTT">
    <img class="pc" src="{{ base_url() ~ '/images/background/bg-developer-pc.jpg' }}" alt="HUNGTT-PC">
</div>
<div class="bg-grey-x">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row py-3">
                    <div class="col-4 col-lg-5 col-sm-12 AvatarDeveloper">
                        <img src="{{ base_url() ~ '/images/background/avatar-developer.jpg' }}" alt="avatar"/>
                    </div>
                    <div class="col-8 col-lg-7 col-sm-12">
                        <h2 class="title-section">Thông Tin Cơ Bản</h2>
                        <div class="base-information">
                            <div class="wrapper-item-infor">
                                <p class="title">Tên Đầy Đủ</p>
                                <p>Trương Thanh Hùng</p>
                            </div>
                            <div class="wrapper-item-infor">
                                <p class="title">Địa Chỉ</p>
                                <p>0674, lộc hòa, bình giã, Châu Đức, Bà Rịa - Vũng Tàu</p>
                            </div>
                            <div class="wrapper-item-infor">
                                <p class="title">Số Điện Thoại</p>
                                <p>079.7581.480</p>
                            </div>
                            <div class="wrapper-item-infor">
                                <p class="title">email</p>
                                <p>thanhhung.tud@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-5 py-sm-0 px-5 px-sm-0">
            <div class="row bg-white shadows-1 shadows-0-mobile">
                <h2 class="title-topic">Kỹ Năng</h2>
                <div class="col-12 py-3">
                    <div class="row">
                        <div class="col-6 col-sm-12">
                            <h4>HTML, CSS</h4>
                            <div class="progress">
                                <div class="progress-bar w-80"></div>
                            </div>
                            <h4>PHP</h4>
                            <div class="progress">
                                <div class="progress-bar w-85"></div>
                            </div>
                            <h4>JAVASCRIPT</h4>
                            <div class="progress">
                                <div class="progress-bar w-75"></div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-12">
                            <h4>SQL</h4>
                            <div class="progress">
                                <div class="progress-bar w-75"></div>
                            </div>
                            <h4>SERVER</h4>
                            <div class="progress">
                                <div class="progress-bar w-50"></div>
                            </div>
                            <h4>JAVA, C#</h4>
                            <div class="progress">
                                <div class="progress-bar w-50"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-5 py-sm-0 row">
            <h2 class="title-topic py-3">Ngôn Ngữ</h2>
            <div class="wrapper-language-developper clear">
                <div class="block-language">
                    <div class="icon-title-block">
                        <span class="js-component icon">
                            {% include "genneral/svg/node-js.svg" %}
                        </span>
                    </div>
                    <h6 class="text-center">Express.js, Reactjs, Jquery</h6>
                    <h4 class="title-block-language">JAVASCRIPT</h4>
                    <p class="content-language">
                        Ứng dụng đang dùng được viết trên nền nodejs trên công nghệ reactjs và nodejs
                        express socket
                    </p>
                </div>
                <div class="block-language middle">
                    <div class="icon-title-block">
                        <span class="php-component icon">
                            {% include "genneral/svg/php.svg" %}
                        </span>
                    </div>
                    <h6 class="text-center">PHP Core, Laravel,...</h6>
                    <h4 class="title-block-language">PHP</h4>
                    <p class="content-language">
                        Xây dựng các ứng dụng web động viết trên nền LAMP, LEMP. Có khả năng làm việc
                        ở tất cả các giai đoạn của quy trình phát triển phần mềm từ phân tích hệ thống đến xây dựng
                        website font-end lẫn back-end
                    </p>
                </div>
                <div class="block-language">
                    <div class="icon-title-block">
                        <span class="java-component icon">
                            {% include "genneral/svg/java.svg" %}
                        </span>
                    </div>
                    <h6 class="text-center">Servlet, Java core, C#, Redit</h6>
                    <h4 class="title-block-language">JAVA &amp; C#</h4>
                    <p class="content-language">
                        Sử dụng Java, C#,... để built các web chuyên biệt hơn hoặc có yêu cầu phù hợp
                        với project cụ thể
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line-height-0">
    <h2 class="title-topic">Học Vấn</h2>
    <div class="education-developer position-relative">
        <div class="wrapper-content-education"><img class="avatar_dh_saigon vertical-align-middle"
                src="{{ base_url() ~ '/images/background/avatar-dh-saigon.jpg' }}" alt="">
            <div class="description-content-education vertical-align-middle">
                <h3 class="title">Đại Học Sài Gòn</h3>
                <q class="description">
                    Đại Học Sài Gòn là 1 chuỗi hành trình học
                    tập và rèn luyện kĩ năng. Được trải qua đoạn đường sinh viên trong Đh Sài Gòn, nơi không chỉ vun đắp
                    ước mơ mà còn là nơi giúp bạn có những kỉ niệm không thể quên!
                </q>
            </div>
        </div>
    </div>
</div>
{% endblock %}

<script> 
	$.get("http://ip-api.com/json", function(response) {
		console.log(response);
    }, "json");
</script> 