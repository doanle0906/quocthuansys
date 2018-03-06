@extends('layout.master')

@section('title', 'Title')

@section('content')
    <header id="header" class="">
        <div class="headerWrap clear">


            <a href="index.html" class="logo">
                <!-- You can also use image as a logo the example below -->
                <img class="logo-white" style="width: 200px; height: 100px;" src="{{asset('public/img/content/logo.jpg')}}">
                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/logo.jpg')}}">
            </a>

            <h1 style="display:none">
                <a href="index.html">QUOC THUAN GYM</a>
            </h1>


            <span class="showMobileMenu">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</span>
            <div class="clearfix"></div>
        </div>
    </header>

    <div id="to-top">
        <img src="../theme.hstatic.net/1000075078/1000297410/14/Show-more-iconbb80.png?v=30" alt="">
    </div>
    <section class="container-tch section-class-name">
        <div class="homeBxSliderWrap">

            <div class="homeBxSlider" style="display: none">
                <div class="slide active" data-slide="0" style="background-image: url({{asset('public/img/background/bg1.jpg')}});">
                    <div class="slideDesc">
                        <div class="ct-caption">
                            <h2>Gym nhé!</h2>
                            <a class="learnMore" href="https://order.thecoffeehouse.com/">đăng ký thành viên</a>
                            <a class="learnMore" href="#store">chi nhánh</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        //var vid = document.getElementById("pretzel-video");
        $(document).ready(function(){
            //$("#pretzel-video1")[0].autoplay = true;
            $('.homeBxSlider').show();
        })
        function display(){
            //$('#pretzel-video').hide(1000);
            $('.homeBxSlider').fadeIn(1000);
        }
    </script>
    <main class="main">

        <section id="intro" class="wow fadeInUp section-class-name">
            <div class="container">
                <div class="intro">
                    <img src="{{asset('public/img/content/intro.jpg')}}" alt="" style="height: 80%">
                    <h2>Tập Gym nhé!</h2>
                    <p>“Đi tập nhé” từ lâu không chỉ đơn thuần là uống một tách cà phê mà còn là dịp gặp mặt và trò chuyện cùng bạn bè. Tại QUOC THUAN GYM, chúng tôi trân trọng và đề cao giá trị kết nối giữa con người và trải nghiệm của khách hàng. Chúng tôi được truyền cảm hứng từ những tách cà phê và thức uống mình tạo ra. Chúng tôi tin tưởng mạnh mẽ rằng những thức uống với chất lượng tốt nhất được phục vụ trong không gian thân thiện bởi những nhân viên tận tâm tại QUOC THUAN GYM sẽ mang lại những niềm vui bạn có thể chia sẻ cùng bạn bè và gia đình.</p>
                </div>
            </div>
        </section><!--end intro-->


        <section id="store" class="section-class-name" style="margin-top: 150px;">
            <div class="left-store wow fadeInUp">
                <h3 style="color: black; text-align:center; margin-top: -110px;">các phòng tập tại <br>Quốc Thuần Gym </h3>

                <div role="presentation" class="sub-store active">
                    <a class="to-right-store" href="#cf-store-1" aria-controls="cf-store-1" role="tab" data-toggle="tab">
                        <div class="img-hover">
                            <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa.jpg')}}">

                            <div class="img-opacity"></div>
                        </div>
                        <h4 style="color: black;">tại Số 1 - Biên Hoà</h4>
                        <span>(Tất cả XX dụng cụ)</span>
                    </a>
                </div>
                <div class="clearfix"></div>

                <div role="presentation" class="sub-store none">
                    <a class="to-right-store" href="#cf-store-2" aria-controls="cf-store-2" role="tab" data-toggle="tab">
                        <div class="img-hover">


                            <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa2.jpg')}}">

                            <div class="img-opacity"></div>
                        </div>
                        <h4 style="color: black;">tại Số 2 - Biên Hoà</h4>
                        <span>(Tất cả XX dụng cụ)</span>
                    </a>
                </div>
                <div class="clearfix"></div>

               <div role="presentation" class="sub-store none">
                    <a class="to-right-store" href="#cf-store-2" aria-controls="cf-store-2" role="tab" data-toggle="tab">
                        <div class="img-hover">


                            <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa3.jpg')}}">

                            <div class="img-opacity"></div>
                        </div>
                        <h4 style="color: black;">tại Số 3 - Biên Hoà</h4>
                        <span>(Tất cả XX dụng cụ)</span>
                    </a>
                </div>
                <div class="clearfix"></div>


            </div><!--end left-store-->
            <div class="right-store wow fadeInUp tab-content" id="right-store">

                <div role="tabpanel" class="tab-pane active" id="cf-store-1">
                    <div id="slide-store1">











                        <div class="item">

                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/400a-huynh-tan-phat">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/400a-huynh-tan-phat">400A Huỳnh Tấn Phát</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/93-5b-nguyen-anh-thu">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa2.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/93-5b-nguyen-anh-thu">93/5B Nguyễn Ảnh Thủ</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/112-114-duong-9a-khu-dan-cu-trung-son">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa3.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/112-114-duong-9a-khu-dan-cu-trung-son">112 - 114 đường 9A, khu dân cư Trung Sơn</a></h4>

                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/45-duong-so-5-cu-xa-binh-thoi">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/45-duong-so-5-cu-xa-binh-thoi">45 đường số 5 Cư xá Bình Thới</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/44-hoa-binh">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa2.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/44-hoa-binh">44 Hoà Bình</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/111-113-binh-phu">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa3.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/111-113-binh-phu">111 - 113 Bình Phú</a></h4>

                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/223-vo-van-tan">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa3.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/223-vo-van-tan">223 Võ Văn Tần</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/1056-hau-giang">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa2.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/1056-hau-giang">1056 HẬU GIANG</a></h4>




                                <span>
							<p>Quận 6</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/270-bui-huu-nghia">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa2.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/270-bui-huu-nghia">270 Bùi Hữu Nghĩa</a></h4>




                                <span>
							<p>Q. B&igrave;nh Thạnh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/45-truong-cong-dinh">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/45-truong-cong-dinh">45 Trương Công Định</a></h4>




                                <span>
							<p>Phường 14, T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/559-truong-chinh">
                                    <img src="../product.hstatic.net/1000075078/product/img_0062_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/559-truong-chinh">559 Trường Chinh</a></h4>




                                <span>
							<p>Q T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/185-tran-huy-lieu">
                                    <img src="../product.hstatic.net/1000075078/product/img_0251_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/185-tran-huy-lieu">185 Trần Huy Liệu</a></h4>




                                <span>
							<p>Q. Ph&uacute; Nhuận</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/771-phan-van-tri">
                                    <img src="../product.hstatic.net/1000075078/product/img_0040_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/771-phan-van-tri">771 Phan Văn Trị</a></h4>




                                <span>
							<p>Q. G&ograve; Vấp</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/685-au-co">
                                    <img src="../product.hstatic.net/1000075078/product/img_0029_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/685-au-co">685 ÂU CƠ</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/51-thang-long">
                                    <img src="../product.hstatic.net/1000075078/product/img_0147_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/51-thang-long">51 THĂNG LONG</a></h4>




                                <span>
							<p>Phường 4, Quận T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/329-lanh-binh-thang">
                                    <img src="../product.hstatic.net/1000075078/product/dscf5437_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/329-lanh-binh-thang">329 Lãnh Binh Thăng</a></h4>




                                <span>
							<p>Phường 8, Quận 11</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/177-doc-lap">
                                    <img src="../product.hstatic.net/1000075078/product/img_0188_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/177-doc-lap">177 Độc Lập</a></h4>




                                <span>
							<p>Phường T&acirc;n Qu&yacute;, Quận T&acirc;n Ph&uacute;</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/178-hau-giang">
                                    <img src="../product.hstatic.net/1000075078/product/img_0005_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/178-hau-giang">178 Hậu Giang</a></h4>




                                <span>
							<p>Phường 6, Quận 6</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/787-luy-ban-bich">
                                    <img src="../product.hstatic.net/1000075078/product/img_0273_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/787-luy-ban-bich">787 Luỹ Bán Bích</a></h4>




                                <span>
							<p>Quận T&acirc;n Ph&uacute;</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/18-hong-ha">
                                    <img src="../product.hstatic.net/1000075078/product/img_0094_20copy_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/18-hong-ha">18 Hồng Hà</a></h4>




                                <span>
							<p>Phường 2, Quận T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/68-huynh-van-banh">
                                    <img src="../product.hstatic.net/1000075078/product/img_2694_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/68-huynh-van-banh">68 Huỳnh Văn Bánh</a></h4>




                                <span>
							<p>Phường 15, Quận Ph&uacute; Nhuận</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/6a-ngo-thoi-nhiem">
                                    <img src="../sw001.hstatic.net/10/1444dbce688977/img_7932_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/6a-ngo-thoi-nhiem">6A Ngô Thời Nhiệm</a></h4>




                                <span>
							<p>Phường 7, Quận 3</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/258-nguyen-van-luong">
                                    <img src="../sw001.hstatic.net/7/0d94f0543a197c/img_7605_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/258-nguyen-van-luong">258 Nguyễn Văn Lượng</a></h4>




                                <span>
							<p>Phường 17, Quận G&ograve; Vấp&nbsp;</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/132-hoang-hoa-tham">
                                    <img src="../sw001.hstatic.net/2/08fb879e3f3d8d/img_6884_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/132-hoang-hoa-tham">132 Hoàng Hoa Thám</a></h4>




                                <span>
							<p>Phường 12, Quận T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/8bis-hoang-hoa-tham">
                                    <img src="../sw001.hstatic.net/9/0ae55b8b8a0047/img_7512_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/8bis-hoang-hoa-tham">8Bis Hoàng Hoa Thám</a></h4>




                                <span>
							<p>Phường 7, Quận B&igrave;nh Thạnh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/371-nguyen-kiem">
                                    <img src="../sw001.hstatic.net/6/08f4f81e12b61b/img_6955_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/371-nguyen-kiem">371 Nguyễn Kiệm</a></h4>




                                <span>
							<p>Phường 3, Quận G&ograve; Vấp</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/02-dong-da">
                                    <img src="../sw001.hstatic.net/6/04069956002d74/img_6816_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/02-dong-da">02 Đống Đa</a></h4>




                                <span>
							<p>Phường 2, Quận T&acirc;n B&igrave;nh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/14b1-ngo-tat-to">
                                    <img src="../hstatic.net/078/1000075078/1/2016/8-27/img_6088_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/14b1-ngo-tat-to">14B1 Ngô Tất Tố</a></h4>




                                <span>
							<p>Quận B&igrave;nh Thạnh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/572-ba-thang-hai">
                                    <img src="../hstatic.net/078/1000075078/1/2016/8-8/img_5635_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/572-ba-thang-hai">572 Ba Tháng Hai</a></h4>




                                <span>
							<p>Quận 10</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/197-xo-viet-nghe-tinh">
                                    <img src="../hstatic.net/078/1000075078/1/2016/8-8/img_5497_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/197-xo-viet-nghe-tinh">197 Xô Viết Nghệ Tĩnh</a></h4>




                                <span>
							<p>Quận B&igrave;nh Thạnh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/41-nguyen-thai-son-go-vap">
                                    <img src="../hstatic.net/078/1000075078/1/2016/7-11/img_4200_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/41-nguyen-thai-son-go-vap">41 Nguyễn Thái Sơn</a></h4>




                                <span>
							<p>Quận G&ograve; Vấp</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/quay-33-tang-3-aeon-mall-binh-tan">
                                    <img src="../hstatic.net/078/1000075078/1/2016/7-4/img_3863_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/quay-33-tang-3-aeon-mall-binh-tan">AEON Mall Bình Tân</a></h4>




                                <span>
							<p>Quầy 33, tầng 3 - AEON B&igrave;nh T&acirc;n , Quận B&igrave;nh T&acirc;n</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/403a-405a-le-dai-hanh">
                                    <img src="../hstatic.net/078/1000075078/1/2016/6-9/img_2203_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/403a-405a-le-dai-hanh">403A-405A Lê Đại Hành</a></h4>




                                <span>
							<p>Quận 11, TP Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/the-coffee-house-183f-tran-quoc-thao-quan-3">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-20/13041103_1702579663349386_2637970690713643261_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/the-coffee-house-183f-tran-quoc-thao-quan-3">183 F Trần Quốc Thảo</a></h4>




                                <span>
							<p>Quận 3, TP Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/313-nguyen-thi-thap">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-5/12901198_1693037677636918_4638615324848298917_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/313-nguyen-thi-thap">313 Nguyễn Thị Thập</a></h4>




                                <span>
							<p>Quận 7, Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/141-nguyen-thai-binh">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-5/12657347_1671159136491439_604926473703973726_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/141-nguyen-thai-binh">141 Nguyễn Thái Bình</a></h4>




                                <span>
							<p>Quận 1, TP Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/469-dien-bien-phu">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-24/7cff4ddc7d6245f6afbdefdbbbdba2ed_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/469-dien-bien-phu">469 Điện Biên Phủ</a></h4>




                                <span>
							<p>Quận B&igrave;nh Thạnh, Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/130-cach-mang-thang-8">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-16/cmt8_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/130-cach-mang-thang-8">130 Cách Mạng Tháng 8</a></h4>




                                <span>
							<p>Phường 10, Quận 3, Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/43-hoa-hong">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-5/12419359_1665273083746711_9045578246800128393_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/43-hoa-hong">43 Hoa Hồng</a></h4>




                                <span>
							<p>Quận Ph&uacute; Nhuận, Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/293-quang-trung">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_9879_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/293-quang-trung">293 Quang Trung</a></h4>




                                <span>
							<p>Phường 10, Quận G&ograve; Vấp,&nbsp;Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/798-su-van-hanh-q10">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_9700_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/798-su-van-hanh-q10">798 Sư Vạn Hạnh</a></h4>




                                <span>
							<p>Quận 10 - Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/store-tran-cao-van">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/11986972_1630706097203410_5405529303885931157_n_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/store-tran-cao-van">42 Trần Cao Vân</a></h4>




                                <span>
							<p>Phường 6, Quận 3, Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/17b-ut-tich">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-26/12232963_1646846405589379_7723364037985650962_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/17b-ut-tich">17b Út Tịch</a></h4>




                                <span>
							<p>Quận T&acirc;n B&igrave;nh, Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/114-vo-van-ngan">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/deco1_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/114-vo-van-ngan">114 Võ Văn Ngân</a></h4>




                                <span>
							<p>Quận Thủ Đức,&nbsp;Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/249-ly-thuong-kiet">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_8343_compact.png" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/249-ly-thuong-kiet">249 Lý Thường Kiệt</a></h4>




                                <span>
							<p>Quận 11, Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/281-le-van-sy">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_3792_6016bb5a-408a-41b4-6460-bb4ec457c2d6_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/281-le-van-sy">281 Lê Văn Sỹ</a></h4>




                                <span>
							<p>Phường 1, Quận T&acirc;n B&igrave;nh, Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/62-nguyen-huy-tu">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-26/12322749_1652943234979696_1958310929544360691_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/62-nguyen-huy-tu">62 Nguyễn Huy Tự</a></h4>




                                <span>
							<p>Quận 1, Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/86-88-cao-thang">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_5863_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/86-88-cao-thang">86-88 Cao Thắng</a></h4>




                                <span>
							<p>Quận 3, Tp.Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/112-bau-cat">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/img_8859_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/112-bau-cat">112 Bàu Cát</a></h4>




                                <span>
							<p>Quận T&acirc;n B&igrave;nh - Tp. Hồ Ch&iacute; Minh</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                </div><!-- slide-store1 -->

                <div role="tabpanel" class="tab-pane " id="cf-store-2">
                    <div id="slide-store2">











                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/12-lo-14b-kdt-moi-trung-yen-trung-hoa-p-trung-hoa">
                                    <img src="../product.hstatic.net/1000075078/product/post_3e50d525621640b383738f07dad91127_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/12-lo-14b-kdt-moi-trung-yen-trung-hoa-p-trung-hoa">12 Lô 14B, KĐT Mới Trung Yên, Trung Hòa, P. Trung Hòa</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/122-bui-thi-xuan">
                                    <img src="../hstatic.net/078/1000075078/1/2016/4-5/12898348_1695333734073979_6949394104154349942_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/122-bui-thi-xuan">122 Bùi Thị Xuân</a></h4>




                                <span>
							<p>Quận Hai B&agrave; Trưng, H&agrave; Nội</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/160-nguyen-khanh-toan">
                                    <img src="../sw001.hstatic.net/12/10379eff982302/tho_1902_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/160-nguyen-khanh-toan">160 Nguyễn Khánh Toàn</a></h4>




                                <span>
							<p>Phường Quan Hoa, Quận Cầu Giấy</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/23m-hai-ba-trung">
                                    <img src="../hstatic.net/078/1000075078/1/2016/3-7/10592659_1627318830875470_6469708824258694600_n_366d4966-48eb-4d71-5b49-68378dc5a3f6_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/23m-hai-ba-trung">23M Hai Bà Trưng</a></h4>




                                <span>
							<p>Quận Ho&agrave;n Kiếm, H&agrave; Nội</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/259-kim-ma">
                                    <img src="../hstatic.net/078/1000075078/1/2016/6-6/10557652_1659451310995555_3898163611527733720_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/259-kim-ma">259 Kim Mã</a></h4>




                                <span>
							<p>Quận Ba Đ&igrave;nh, H&agrave; Nội</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/56a-ba-trieu">
                                    <img src="../hstatic.net/078/1000075078/1/2016/6-6/12485887_1663495740591112_2567850273426922913_o_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/56a-ba-trieu">56A Bà Triệu</a></h4>




                                <span>
							<p>Quận Ho&agrave;n Kiếm, H&agrave; Nội</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/68a-hoang-cau">
                                    <img src="../sw001.hstatic.net/5/0404422ec80cb3/img_3260_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/68a-hoang-cau">68A Hoàng Cầu</a></h4>




                                <span>
							<p>Q Đống Đa</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/rice-city-linh-dam">
                                    <img src="../product.hstatic.net/1000075078/product/img_0142_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/rice-city-linh-dam">Rice City Linh Đàm</a></h4>




                                <span>
							<p>Tầng G1, T&ograve;a nh&agrave; Trung -Rice City Linh Đ&agrave;m, Quận Ho&agrave;ng Mai</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/the-coffee-house-times-city">
                                    <img src="../sw001.hstatic.net/11/151b306d6312de/tho_2240_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/the-coffee-house-times-city">Times City</a></h4>




                                <span>
							<p>Tầng 1 - T05 Times City, 458 Minh Khai, Quận Hai B&agrave; Trưng</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                        <div class="item">


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/xuan-thuy">
                                    <img src="../product.hstatic.net/1000075078/product/the_coffee_house-19_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/xuan-thuy">Xuân Thuỷ</a></h4>




                                <span>
							<p>To&agrave; nh&agrave; Richland,&nbsp;số 2 ng&otilde; 181, Xu&acirc;n Thuỷ</p>
						</span>


                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                </div><!-- slide-store1 -->

                <div role="tabpanel" class="tab-pane " id="cf-store-3">
                    <div id="slide-store3">









                        <div class="item">


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/223-tran-phu">
                                <img class="logo-black" style="width: 200px; height: 100px;" src="{{asset('public/img/content/bienhoa.jpg')}}">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/223-tran-phu">223 Trần Phú</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r ">
                                <a href="javascript:;" class="show_qw" data-handle="/products/435-le-duan">
                                    <img src="../product.hstatic.net/1000075078/product/post_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/435-le-duan">435 Lê Duẩn</a></h4>

                            </div>
                            <div class="clearfix"></div>


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/80-pasteur">
                                    <img src="../product.hstatic.net/1000075078/product/post_daf872ad0c0c482fafd325dde50a187f_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/80-pasteur">80 Pasteur</a></h4>

                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                </div><!-- slide-store1 -->

                <div role="tabpanel" class="tab-pane " id="cf-store-4">
                    <div id="slide-store4">











                        <div class="item">


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/240-pham-van-thuan">
                                    <img src="../product.hstatic.net/1000075078/product/post_d38dbfbb31844e72bdb3a2f99a1a36ee_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/240-pham-van-thuan">240 Phạm Văn Thuận</a></h4>

                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                </div><!-- slide-store1 -->

                <div role="tabpanel" class="tab-pane " id="cf-store-5">
                    <div id="slide-store5">











                        <div class="item">


                            <div class="sub-store-r none">
                                <a href="javascript:;" class="show_qw" data-handle="/products/5-ba-cu">
                                    <img src="../product.hstatic.net/1000075078/product/post_18f9aa52613a404686a91665a6d58193_compact.jpg" alt="">
                                </a>
                                <h5>QUOC THUAN GYM</h5>
                                <h4><a href="javascript:;" class="show_qw" data-handle="/products/5-ba-cu">5 Ba Cu</a></h4>

                            </div>
                            <div class="clearfix"></div>


                        </div>

                    </div>
                </div><!-- slide-store1 -->

            </div><!--end right-store-->
            <div class="clearfix"></div>
        </section><!--end store-->


        <section>
            <ul class="add-item">
                <li>
                <img   src="{{asset('public/img/content/bienhoa.jpg')}}">
                    <a href="pages/menu.html#scroll-section1">
                        <div class="ct-bg">
                            <h3><span>ESPRESSO &amp; VIETNAMESE</span>COFFEE</h3>
                        </div>
                    </a>
                </li>
                <li>
                <img  src="{{asset('public/img/content/bienhoa.jpg')}}">
                    <a href="pages/menu.html#scroll-section2">
                        <div class="ct-bg">
                            <h3><span>ICE BLENDED</span>COFFEE</h3>
                        </div>
                    </a>
                </li>
                <li>
                <img  src="{{asset('public/img/content/bienhoa2.jpg')}}">
                    <a href="pages/menu.html#scroll-section3">
                        <div class="ct-bg">
                            <h3><span>special</span>TEA</h3>
                        </div>
                    </a>
                </li>
                <li>
                <img src="{{asset('public/img/content/bienhoa2.jpg')}}">
                    <a href="pages/menu.html#scroll-section4">
                        <div class="ct-bg">
                            <h3><span></span>MOCKTAIL</h3>
                        </div>
                    </a>
                </li>
                <li>
                <img src="{{asset('public/img/content/bienhoa.jpg')}}">
                    <a href="pages/menu.html#scroll-section5">
                        <div class="ct-bg">
                            <h3><span></span>CHOCOLATE</h3>
                        </div>
                    </a>
                </li>
                <li>
                <img  src="{{asset('public/img/content/bienhoa2.jpg')}}">
                    <a href="pages/menu.html#scroll-section6">
                        <div class="ct-bg">
                            <h3><span></span>SMOOTHIES</h3>
                        </div>
                    </a>
                </li>
                <div class="clearfix">
                </div>
            </ul>
        </section>

        <section id="news" class="wow fadeInUp section-class-name">
            <div class="part-news">
                <div class="img-news">
                <img  src="{{asset('public/img/content/bienhoa2.jpg')}}">
                </div>
                <div class="info-news">
                    <h4>#Talk_To_Us</h4>
                    <a href="http://order.thecoffeehouse.vn/" ><h3>QUOC THUAN GYM DELIVERY</h3></a>
                    <p>Đặt món giao tận nơi tại https://order.thecoffeehouse.vn hoặc gọi tổng đài 1800 6936 khi bạn cần giao hàng tận nơi nhé!</p>
                    <!--		<a class="" href="http://order.thecoffeehouse.vn">-- xem thêm --</a> -->
                </div>
                <div class="clearfix"></div>
            </div><!--end part-news-->
            <div class="part-news">
                <div class="img-news">
                <img  src="{{asset('public/img/content/bienhoa.jpg')}}">
                </div>
                <div class="info-news">
                    <h4>#WORKWITHUS</h4>
                    <a href="blogs/tuyen-dung/goc-nghe-nghiep-the-coffee-house.html" ><h3>QUOC THUAN GYM TUYỂN DỤNG</h3></a>
                    <p>QUOC THUAN GYM mong muốn xây dựng thế hệ quản lý và nhân viên đam mê với cà phê và tâm huyết với ngành dịch vụ. Hãy gia nhập gia đình QUOC THUAN GYM ngay!</p>
                    <!-- <a class="" href="http://www.thecoffeehouse.com/blogs/tuyen-dung/goc-nghe-nghiep-the-coffee-house">-- xem thêm --</a> -->
                </div>
                <div class="clearfix"></div>
            </div><!--end part-news-->
            <div class="part-news">
                <div class="img-news right">
                <img  src="{{asset('public/img/content/bienhoa2.jpg')}}">
                </div>
                <div class="info-news left">
                    <h4>#THECOFFEEHOUSE_APP</h4>
                    <a href="http://thecoffeehouse.vn/blogs/news/chuong-trinh-khach-hang-than-thiet-the-coffee-house" ><h3>CHƯƠNG TRÌNH KHÁCH HÀNG THÂN THIẾT QUOC THUAN GYM</h3></a>
                    <p>Chương trình khách hàng thân thiết chính thức ra mắt!Hãy tích điểm trên ứng dụng QUOC THUAN GYM và tận hưởng ưu đãi 10%</p>
                    <!--	<a class="" href="http://thecoffeehouse.vn/blogs/news/chuong-trinh-khach-hang-than-thiet-the-coffee-house">-- xem thêm --</a> -->
                </div>
                <div class="clearfix"></div>
            </div><!--end part-news-->
            <div class="part-news">
                <div class="img-news right">
                <img  src="{{asset('public/img/content/bienhoa.jpg')}}">
                </div>
                <div class="info-news left">
                    <h4>#YourFeedbackMatters</h4>
                    <a href="http://feedback.thecoffeehouse.vn/" ><h3>Đánh giá chất lượng dịch vụ QUOC THUAN GYM</h3></a>
                    <p>QUOC THUAN GYM trân trọng, mong muốn trải nghiệm đi cà phê của bạn tốt hơn từng ngày. Hãy để chúng tôi có cơ hội được cải thiện chất lượng phục vụ bằng góp ý của bạn tại đây!</p>
                    <!--	<a class="" href="http://feedback.thecoffeehouse.vn">-- xem thêm --</a> -->
                </div>
                <div class="clearfix"></div>
            </div><!--end part-news-->
            <div class="clearfix"></div>
        </section><!--end news-->


        <section id="hightlight" class="section-class-name">
            <div class="left-hl wow fadeInUp">
                <!--<form class="contact-form">
    <h3>Liên hệ</h3>
    <input type="text" name="txtName" placeholder="Tên của bạn">
    <input type="text" name="txtEmail" placeholder="Địa chỉ Email của bạn">
    <textarea name="message" placeholder="Lời nhắn..."></textarea>
    <button type="submit">gửi</button>
    </form> -->

                <form accept-charset='UTF-8' action='http://www.thecoffeehouse.com/contact' class='contact-form' method='post'>
                    <input name='form_type' type='hidden' value='contact'>
                    <input name='utf8' type='hidden' value='✓'>


                    <div class="contact-form">
                        <h3>Liên hệ</h3>
                        <div class="form-group">
                            <label for="contactFormName" class="sr-only">Tên</label>
                            <input required type="text" id="contactFormName" class="form-control" name="contact[name]" placeholder="Tên của bạn" autocapitalize="words" value="">
                        </div>
                        <div class="form-group">
                            <label for="contactFormEmail" class="sr-only">Email</label>
                            <input required type="email" name="contact[email]" placeholder="Email của bạn" id="contactFormEmail" class="form-control " autocorrect="off" autocapitalize="off" value="">
                        </div>
                        <div class="form-group">
                            <label for="contactFormMessage" class="sr-only">Nội dung</label>
                            <textarea required rows="6" name="contact[body]" class="form-control" placeholder="Viết bình luận" id="contactFormMessage"></textarea>
                        </div>
                        <button type="submit">gửi</button>
                    </div>
                </form>
            </div>
            <div class="right-hl"></div>
            <div class="clearfix"></div>
        </section><!--end news-->

    </main><!--end main-->


    <div class="clearfix"></div>

    <footer class="section-class-name height-initial ">
        <div class="footer">
            <div class="ct-footer wow fadeInUp ">
                <a href="index.html"><img class="logo-white" src="../theme.hstatic.net/1000075078/1000297410/14/logobb80.png?v=30" alt=""></a>
                <p><p>223 Võ Văn Tần, Quận 3, HCM<br /> Hotline : 028 71 087 088 <br/> Giao hàng miễn phí : 1800 6936</p></p>
                <p class="security">
                    <a href="pages/dieu-khoan-bao-mat.html">Điều khoản bảo mật</a>
                </p>
                <ul class="menu-footer">

                    <li class="active"><a href="index.html">Trang chủ</a></li>

                    <li ><a href="pages/about-us.html">Giới thiệu</a></li>

                    <li ><a href="pages/menu.html">Menu</a></li>

                    <li ><a href="pages/our-stores.html">Cửa hàng</a></li>

                    <li ><a href="https://order.thecoffeehouse.vn/">Giao hàng</a></li>

                    <li ><a href="blogs/news.html">Tin tức</a></li>

                    <li ><a href="blogs/tuyen-dung.html">Tuyển dụng</a></li>

                    <li ><a href="pages/lien-he.html">Liên hệ</a></li>

                </ul>
            </div><!--ct-footer-->
            <div class="copyright">© 2014 - 2017 - ALL RIGHTS RESERVED. <a class="cpr" target="_blank" href="https://www.haravan.com/">Powered by Haravan</a></div>
        </div>
    </footer><!--end footer-->

    <div class="mobileMenu">
        <ul>

            <li class="active"><a href="index.html">Trang chủ</a></li>

            <li ><a href="pages/about-us.html">Giới thiệu</a></li>

            <li ><a href="pages/menu.html">Menu</a></li>

            <li ><a href="pages/our-stores.html">Cửa hàng</a></li>

            <li ><a href="https://order.thecoffeehouse.vn/">Giao hàng</a></li>

            <li ><a href="blogs/news.html">Tin tức</a></li>

            <li ><a href="blogs/tuyen-dung.html">Tuyển dụng</a></li>

            <li ><a href="pages/lien-he.html">Liên hệ</a></li>

        </ul>
    </div>
    <style>
        @media (min-height:560px) and (max-height: 580px) {
            #intro .intro img {
                height:280px;
                width: auto;
            }
        }
        @media (min-height:480px) and (max-height: 559px) {
            #intro .intro img {
                height:200px;
                width: auto;
            }
        }
    </style>

    <script>
        wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100
            }
        );
        wow.init();
        /*
        document.getElementById('moar').onclick = function() {
            var section = document.createElement('section');
            section.className = 'section--purple wow fadeInDown';
            this.parentNode.insertBefore(section, this);
        };
*/
        $('.parallax-window1').parallax({imageSrc: '//hstatic.net/078/1000075078/2/2016/3-8/coffee_131c6488-0505-425c-6762-5dcb1304087a_master.png', zIndex: 0});
        $('.parallax-window2').parallax({imageSrc: '//hstatic.net/078/1000075078/2/2016/3-8/iced-blended_70455e21-9606-4d33-7dcc-fd9e7ab75b43_master.png', zIndex: 0});
        $('.parallax-window3').parallax({imageSrc: '//hstatic.net/078/1000075078/2/2016/3-8/specialtea_master.png', zIndex: 0});
        $('.parallax-window4').parallax({imageSrc: '//hstatic.net/0/0/global/noDefaultImage6_master.gif', zIndex: 0});
    </script>
    <div class="modal fade my-popup" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!--<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><a aria-hidden="true"><i class="fa fa-times"></i></a></button>
    </div>-->
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <form method="post" action="http://www.thecoffeehouse.com/cart/add">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 t-img">
                                    <div class="image-zoom row text-center">
                                        <img class="p-product-image-feature" src="#">
                                        <div id="p-sliderproduct" class="flexslider">
                                            <ul class="slides"></ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right t-detail" style="padding: 10% 5%;">
                                    <div class="form-input">
                                        <img src="../theme.hstatic.net/1000075078/1000297410/14/icon-popupbb80.png?v=30" alt="">
                                        <div class="product-title p-title">
                                        </div>
                                        <div class="product-des">
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="t-close">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><a aria-hidden="true"><i class="fa fa-times"></i> Đóng</a></button>
                    </div>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script>
        var callBack = function (variant, selector) {
            if (variant) {
                modal = $('#quick-view-modal');
            }
            else {
                modal.find('.btn-addcart').css('display', 'none');
                modal.find('.btn-soldout').css('display', 'block');
            }
        }
        var p_select_data = $('.p-option-wrapper').html();
        var p_zoom = $('.image-zoom').html();
        var quickViewProduct = function (purl) {

            //if ($(window).width() < 680) { window.location = purl; return false; }
            modal = $('#quick-view-modal'); modal.modal('show');
            $.ajax({
                url: purl + '.js',
                async: false,
                success: function (product) {
                    $.each(product.options, function (i, v) {
                        product.options[i] = v.name;
                    })
                    modal.find('.p-title').html('<h1>' + product.title + '</h1>');
                    //modal.find('.p-option-wrapper').html(p_select_data);
                    modal.find('.product-des').html(product.description);
                    $('.image-zoom').html(p_zoom);
                    modal.find('.p-url').attr('href', product.url);
                    if (product.images.length == 0) {
                        modal.find('.p-product-image-feature').attr('src', '../hstatic.net/0/0/global/noDefaultImage6_large.gif');
                    }
                    else {
                        $('#p-sliderproduct').remove();
                        $('.image-zoom').append("<div id='p-sliderproduct' class='flexslider'>");
                        $('#p-sliderproduct').append("<ul class='slides'>");

                        $.each(product.images, function (i, v) {
                            elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
                            elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
                            elem.find('a').attr('data-zoom-image', v);
                            elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
                            elem.find('img').attr('data-zoom-image',v);
                            elem.find('img').attr('src', Haravan.resizeImage(v, 'master'));
                            modal.find('.slides').append(elem);
                        })

                        //modal.find('.p-product-image-feature').attr('src', Haravan.resizeImage(product.featured_image,'master'));
                        //$(".modal-footer .btn-readmore").attr('href', purl);
                        var iflag = 0;
                        $('#p-sliderproduct img').load(function () {
                            iflag++;
                            if (iflag == $('#p-sliderproduct img').length) {
                                $('#p-sliderproduct').flexslider({
                                    animation: "slide",
                                    controlNav: false,
                                    animationLoop: false,
                                    slideshow: true,
                                });
                            }
                        })
                        modal.find('.owl-item:first-child img').click();
                    }
                    $.each(product.variants, function (i, v) {
                        modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                    })
                    if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                        $('.p-option-wrapper').hide();
                    else
                        $('.p-option-wrapper').show();
                    if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                        callBack(product.variants[0], null);
                    }
                    else {
                        new Haravan.OptionSelectors("p-select", { product: product, onVariantSelected: callBack });
                        debugger
                        if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề')==-1)

                            modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');

                        $('.p-option-wrapper select:not(#p-select)').each(function () {
                            $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                            $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                        });
                        callBack(product.variants[0], null);
                    }

                }
            });

            //$('.modal-backdrop').css('opacity', '0');
            return false;
        }
        $('#quick-view-modal ').on('click', '.product-thumbs img', function (event) {
            event.preventDefault();
            modal = $('#quick-view-modal');
            modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
            modal.find('.product-thumb').removeClass('active');
            $(this).parents('li').addClass('active');
            return false;
        })
        $(document).ready(function () {
            $('a.show_qw').click(function (event) {
                //console.log('abc')
                event.preventDefault();
                quickViewProduct($(this).attr('data-handle'));
            })
        })
    </script>
@endsection