@extends('home.master')
@section('content')
<section>
    <img src="/images/img/demo/banner-sp-1535175408.jpg" alt="IMG-PRODUCT"style="width:100%!important;height: 330px!important;">
</section>
<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Danh mục sản phẩm
                    </h4>

                    <ul class="p-b-54">
                        <li class="p-t-4">
                            <a href="#" class="s-text13 active1">
                                Đèn thả đồng
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                Đèn thả pha lê Led
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                Đèn thả thủy tinh
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                Đèn thả gỗ - sứ - mica
                            </a>
                        </li>

                        <li class="p-t-4">
                            <a href="#" class="s-text13">
                                Đèn thả nhôm – sắt
                            </a>
                        </li>
                    </ul>

                    <!--  -->
                    <h4 class="m-text14 p-b-32">
                        Bộ lọc
                    </h4>

                    <div class="filter-price p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-17">
                            Giá
                        </div>

                        <div class="wra-filter-bar">
                            <div id="filter-bar"></div>
                        </div>

                        <div class="flex-sb-m flex-w p-t-16">
                            <div class="w-size11">
                                <!-- Button -->
                                <button id="filter_button" class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                    Lọc
                                </button>
                            </div>

                            <div class="s-text3 p-t-10 p-b-10">
                                Từ: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                            </div>
                        </div>
                    </div>

                    <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-12">
                            Màu sắc
                        </div>

                        <ul class="flex-w">
                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
                                <label class="color-filter color-filter1" for="color-filter1"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
                                <label class="color-filter color-filter2" for="color-filter2"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
                                <label class="color-filter color-filter3" for="color-filter3"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
                                <label class="color-filter color-filter4" for="color-filter4"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
                                <label class="color-filter color-filter5" for="color-filter5"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
                                <label class="color-filter color-filter6" for="color-filter6"></label>
                            </li>

                            <li class="m-r-10">
                                <input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
                                <label class="color-filter color-filter7" for="color-filter7"></label>
                            </li>
                        </ul>
                    </div>

                    <div class="search-product pos-relative bo4 of-hidden">
                        <input id="search" class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Tìm kiếm sản phẩm.....">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!--  -->
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select id="other_filter" class="selection-2" name="sorting">
                                <option value="popular">Độ phổ biến</option>
                                <option value="down_to_up">Giá: Thấp đến cao</option>
                                <option value="up_to_down">Giá: Cao đến thấp</option>
                            </select>
                        </div>

                        <div id="price_search" class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting">
                                <option>Giá</option>
                                <option value="1000000">Dưới $1000000</option>
                                <option value="2000000">Dưới $2000000</option>
                                <option value="5000000">Dưới $5000000</option>
                                <option value="7000000">Dưới $700000</option>
                                <option value="10000000">Dưới $10000000</option>
                            </select>
                        </div>
                    </div>

                    <span class="s-text8 p-t-5 p-b-5">
							Hiển thị 1–12 trong 16 sản phẩm
						</span>
                </div>
                <!-- Product -->
                <div id="product_chil">
                    <div class="row">
                        @foreach ($product as $products)
                            <div id="product" class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="{{$domain}}{{$products->image_link}}" alt="{{$products->name}}"style="width: 100%!important;height: 360px!important;">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="{{route('chi-tiet-san-pham',[$products->slug_name])}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="{{route('chi-tiet-san-pham',[$products->slug_name])}}" class="block2-name dis-block s-text3 p-b-5">
                                            {{$products->name}}
                                        </a>
                                        <span class="block2-price m-text6 p-r-5">
										{{$products->price}}
									</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Pagination -->
{{--                <div class="pagination flex-m flex-w p-t-26">--}}
{{--                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>--}}
{{--                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</section>
<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>


<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/noui/nouislider.min.js')}}"></script>
<script type="text/javascript">
    /*[ No ui ]
    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [ 50, 10000000 ],
        connect: true,
        range: {
            'min': 0,
            'max': 10000000
        }
    });

    var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function( values, handle ) {
        skipValues[handle].innerHTML = Math.round(values[handle]) ;
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script id="product_filter_price" type="x-tmpl-mustache">

    <div id="product" class="col-sm-12 col-md-6 col-lg-4 p-b-50">
   <div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labellike">
        <img src="{{$domain}}@{{image_link}}" alt="@{{name}}"style="width: 100%!important;height: 360px!important;">

        <div class="block2-overlay trans-0-4">
            <a href="/chi-tiet-san-pham/@{{slug_name}}" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
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
<span class="block2-price m-text6 p-r-5">
@{{price}}
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        let loading = $('#loading').html();

        let tmpl = $('#product_filter_price').html();

        $("#search").keyup(function(){
            let search_form =( $(this).val());

            let render_loading = Mustache.render(loading);

            $("#product_chil").children().html(render_loading);

            $.ajax({
                // url: "/home/product_by_ajax/" + id,
                url: "/product_by_search_form",
                type : "POST",
                data   : {
                    "search_form" : search_form,

                    "_token": "{{ csrf_token() }}",
                },
                success : product  => {

                    $("#product_chil").children().empty(); /// xóa component cũ và trang load///
                    product.forEach((item) => {
                        let rendered = Mustache.render(tmpl, item);
                        $("#product_chil").children().append(rendered); ////thêm mới/////
                    });
                    console.log(product);
                },
                error: error => {

                    console.log(error);
                }
            });


        });

        $('#other_filter').on('change', function() {

            let other_filter =( $(this).find(":selected").val() );

            let render_loading = Mustache.render(loading);

            $("#product_chil").children().html(render_loading);

            $.ajax({
                // url: "/home/product_by_ajax/" + id,
                url: "/product_by_other_filter",
                type : "POST",
                data   : {
                    "other_filter" : other_filter,

                    "_token": "{{ csrf_token() }}",
                },
                success : product  => {

                    $("#product_chil").children().empty(); /// xóa component cũ và trang load///
                    product.forEach((item) => {
                        let rendered = Mustache.render(tmpl, item);
                        $("#product_chil").children().append(rendered); ////thêm mới/////
                    });
                    console.log(product);
                },
                error: error => {

                    console.log(error);
                }
            });


        });


        $('#price_search').on('change', function() {

            let price =( $(this).find(":selected").val() );
            console.log(price);

            let render_loading = Mustache.render(loading);

            $("#product_chil").children().html(render_loading);

            $.ajax({
                // url: "/home/product_by_ajax/" + id,
                url: "/product_by_search",
                type : "POST",
                data   : {
                    "price_search" : price,

                    "_token": "{{ csrf_token() }}",
                },
                success : product  => {

                    $("#product_chil").children().empty(); /// xóa component cũ và trang load///
                    product.forEach((item) => {
                        let rendered = Mustache.render(tmpl, item);
                        $("#product_chil").children().append(rendered); ////thêm mới/////
                    });
                    console.log(product);
                },
                error: error => {

                    console.log(error);
                }
            });


        });

        $( "#filter_button" ).click(function() {

            let lower = $('#value-lower').text();

            let upper = $('#value-upper').text();

            let render_loading = Mustache.render(loading);

            $("#product_chil").children().html(render_loading);

            $.ajax({
                // url: "/home/product_by_ajax/" + id,
                url: "/product_by_filter",
                type : "POST",
                data   : {
                    "lower" : lower,
                    "upper" : upper,
                    "_token": "{{ csrf_token() }}",
                },
                success : product  => {
                    console.log(product);
                    $("#product_chil").children().empty(); /// xóa component cũ và trang load///
                    product.forEach((item) => {
                        let rendered = Mustache.render(tmpl, item);
                        $("#product_chil").children().append(rendered); ////thêm mới/////
                    });
                },
                error: error => {

                    console.log(error);
                }
            });
        });
    });
</script>
<!--===============================================================================================-->
@endsection