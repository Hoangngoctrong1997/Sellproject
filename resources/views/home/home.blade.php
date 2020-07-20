@extends('home.master')
@section('content')
<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
            <div class="item-slick1 item1-slick1" style="background-image: url(/images/img/demo/banner3.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
                        Đèn chùm trang trí
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="{!! route('san-pham') !!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Chi Tiết
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item2-slick1" style="background-image: url(/images/img/demo/banner2.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center  p-b-6 animated visible-false m-b-22" data-appear="rollIn">
                        Đèn thông minh
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{!! route('san-pham') !!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            xem ngay
                        </a>
                    </div>
                </div>
            </div>

            <div class="item-slick1 item3-slick1" style="background-image: url(/images/img/demo/banner-1.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <h2 class="caption1-slide1 xl-text2 t-center  p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
                        Đèn trang trí
                    </h2>
                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="{!! route('san-pham') !!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            chi tiết
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Banner -->
<div class="banner bgwhite p-t-40 p-b-40">
    <div class="container">
        <div class="row">
            @foreach ($product_hot_view as $product_hot_views)
            <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                <!-- block1 -->
                <div class="block1 hov-img-zoom pos-relative m-b-30"style="width: 100%!important;height: 339px!important;">
                    <img src="{{$domain}}{{$product_hot_views->image_link}}" alt="{{$product_hot_views->name}}">

                    <div class="block1-wrapbtn w-size2">
                        <!-- Button -->
                        <a href="{{route('chi-tiet-san-pham',[$product_hot_views->slug_name])}}" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                            XEM
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Our product -->
<section class="bgwhite p-t-45 p-b-58">
    <div class="container">
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                Sản phẩm
            </h3>
        </div>

        <!-- Tab01 -->
        <div class="tab01">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Sản phẩm mới</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link product_by_ajax" data-toggle="tab" id="hot_product" href="#featured" role="tab">Nổi bật</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link product_by_ajax" data-toggle="tab" id="sale" href="#featured" role="tab">Giảm giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link product_by_ajax" data-toggle="tab" id="hot_view" href="#featured" role="tab">Bán chạy</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content p-t-35">
                <!-- - -->
                <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                    <div class="row">
                        @foreach ($product as $products)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <img src="{{$domain}}{{$products->image_link}}" alt="{{$products->name}}" style="width: 100%!important;height: 270px!important;">

                                    <div class="block2-overlay trans-0-4">
                                        <a href="{{$domain}}{{$products->image_link}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                        </a>

                                        <div class="block2-btn-addcart w-size1 trans-0-4">
                                            <!-- Button -->
                                            <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                Đặt hàng
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="{{route('chi-tiet-san-pham',[$products->slug_name])}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$products->name}}
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
											${{$products->price}}

										</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- - -->
                <div class="tab-pane fade" id="featured" role="tabpanel">
                    <div class="row">

                    </div>
                </div>
                <!---->
            </div>
        </div>
    </div>
</section>
<!-- Banner video -->
<section class="parallax0 parallax100" style="background-image: url(/images/img/demo/banner_video.jpg);">
    <div class="overlay0 p-t-190 p-b-200">
        <div class="flex-col-c-m p-l-15 p-r-15">
            <h3 class="l-text1 fs-35-sm">
                Sản phẩm của chúng tôi
            </h3>

            <span class="btn-play s-text4 hov5 cs-pointer p-t-25" data-toggle="modal" data-target="#modal-video-01">
					<i class="fa fa-play" aria-hidden="true"></i>
					Xem video
				</span>
        </div>
    </div>
</section>
<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                Bài viết nổi bật
            </h3>
        </div>

        <div class="row">
            @foreach ($product_hot as $product_hots)

            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                        <img src="{{$domain}}{{$product_hots->image_link}}" alt="IMG-BLOG"style="width:100%!important;height: 277px!important;">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="{{route('chi-tiet-san-pham',[$product_hots->slug_name])}}" class="m-text11">
                               {{$product_hots->name}}
                            </a>
                        </h4>

                        <span class="s-text6">By</span> <span class="s-text7">Admin</span>
                        <span class="s-text6">on</span> <span class="s-text7">{{$product_hots->created}}</span>

                        <p class="s-text8 p-t-16">
                           {{$product_hots->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Instagram -->
<section class="instagram p-t-20">
    <div class="sec-title p-b-52 p-l-15 p-r-15">
        <h3 class="m-text5 t-center">
            chất lượng - đẳng cấp
        </h3>
    </div>

    <div class="flex-w">
        <!-- Block4 -->
        <divs class="block4 wrap-pic-w">
            <img src="/images/img/demo/1.jpg" alt="IMG-INSTAGRAM" style="width: 100%!important;height: 277px!important;">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                         Sản phẩm tiêu biểu của chúng tôi</p>

                    <span class="s-text9">
							Photo by @Admin
						</span>
                </div>
            </a>
        </divs>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="/images/img/demo/2.jpg" alt="IMG-INSTAGRAM"style="width: 100%!important;height: 277px!important;">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                    </p>

                    <span class="s-text9">
							Photo by @nancyward
						</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="/images/img/demo/3.jpg" alt="IMG-INSTAGRAM"style="width: 100%!important;height: 277px!important;">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                    </p>

                    <span class="s-text9">
							Photo by @nancyward
						</span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="/images/img/demo/4.jpg" alt="IMG-INSTAGRAM"style="width: 100%!important;height: 277px!important;">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                    </p>

                    <span class="s-text9">
							Photo by @nancyward
						</span>
                </div>
            </a>
        </div >

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="/images/img/demo/5.jpg" alt="IMG-INSTAGRAM" style="width: 100%!important;height: 277px!important;">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                    </p>

                    <span class="s-text9">
							Photo by @nancyward
						</span>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Mừng khai trương cơ sở mới
            </h4>

            <a href="#" class="s-text11 t-center">
                Click xem thông tin
            </a>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="m-text12 t-center">
                Khuyến mãi đặc biệt
            </h4>

            <span class="s-text11 t-center">
					Click xem thông tin
				</span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="m-text12 t-center">
                Dịch vụ lắp đặt
            </h4>

            <span class="s-text11 t-center">
					Click xem thông tin
				</span>
        </div>
    </div>
</section>
<!-- Footer -->

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>
<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
<!-- Modal Video 01-->
<div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog" role="document" data-dismiss="modal">
        <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

        <div class="wrap-video-mo-01">
            <div class="w-full wrap-pic-w op-0-0"><img src="/images/img/demo/icons/video-16-9.jpg" alt="IMG"></div>
            <div class="video-mo-01">
                <iframe src="https://www.youtube.com/embed/Nt8ZrWY2Cmk?rel=0&amp;showinfo=0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script id="my-template" type="x-tmpl-mustache">
    <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
        <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-label@{{type}}">
                <img src="{{$domain}}@{{image_link}}" alt="@{{name}}">

                <div class="block2-overlay trans-0-4">
                    <a href="home/chi-tiet-san-pham/@{{item.slug_name}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                    </a>

                    <div class="block2-btn-addcart w-size1 trans-0-4">
                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                            Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <div class="block2-txt p-t-20">
                <a href="/chi-tiet-san-pham/@{{slug_name}}" class="block2-name dis-block s-text3 p-b-5">
                    @{{name}}
                </a>

                <span class="block2-oldprice m-text7 p-r-5">
                        $@{{price}}
                    </span>

                <span class="block2-newprice m-text8 p-r-5">
                        $@{{discount}}
                    </span>
            </div>
        </div>
    </div>
</script>
<script id="loading" type="x-tmpl-mustache">
     <div class="load-3">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
</script>
<script>
    $(document).ready(function () {
        let loading = $('#loading').html();

        let tmpl = $('#my-template').html();
        $( ".product_by_ajax" ).click(function() {

            let render_loading = Mustache.render(loading);

            $("#featured").children().html(render_loading);

            var id = this.id;

            $.ajax({
                // url: "/home/product_by_ajax/" + id,
                url: "/product_by_ajax/" + id,
                method : "get",
                success : product  => {
                    console.log(product);
                    $("#featured").children().empty(); /// xóa component cũ và trang load///
                    product.forEach((item) => {
                        item.type = id;
                        console.log(item);
                        let rendered = Mustache.render(tmpl, item);
                        $("#featured").children().append(rendered); ////thêm mới/////
                    });
                },
                error: error => {

                    console.log(error);
                }
            });
        });
    });
</script>

@endsection
