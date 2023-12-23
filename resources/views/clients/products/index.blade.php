@include('clients.header')

<div id="productPage">
    <div class="breadcrumb-shop">

        <div class="breadcrumb-wrap container container-xl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>

                <li class="breadcrumb-item active"><span>{{ $product->name }}</span></li>

            </ol>
        </div>
    </div>
    <div class="productWrap">
        <div class="container">
            <div class="productWrapAll">
                <div class="productWrapLeft">
                    <div class="featureImage">

                        <div data-source="//product.hstatic.net/200000397235/product/pc_cam-01_e2c3f4345f8a4065b238156b43554da7_master.jpg"
                            class="thumbImageItem swiper-slide" data-index="1"
                            data-zoom="//product.hstatic.net/200000397235/product/pc_cam-01_e2c3f4345f8a4065b238156b43554da7_master.jpg"
                            data-id="1358947304">
                            <picture>
                                <img src="{{$product->img}}"
                                    alt=" {{ $product->name }} " class="img-fluid bk-product-image">
                            </picture>
                        </div>
                    </div>

                </div>
                <div class="productWrapRight">
                    <div class="productWrapDetail">
                        <h1 class="productTitle bk-product-name">{{ $product->name }}</h1>
                        <div class="productInfoMain">

                            <div class="productSku">
                                <strong>Mã sản phẩm: </strong> {{ $product->sku}}
                            </div>

                        </div>
                        <div class="checkProduct productAvailable">
                            <strong>Tình trạng: </strong>{{ $product->status}}
                        </div>



                        <div class="productDes">

                            <p><span style="font-size: 15pt;"><em><strong>Thời gian khuyến m&atilde;i từ : 22/12 -
                                            29/12</strong></em></span></p>
                            <p>&nbsp;</p>
                            <p><a href=""><span style="color: #000000;">Hỗ trợ mua k&egrave;m tản nước</span>
                                    <span style="color: #ff0000;"><strong>Tản nhiệt nước 240P ICEDEMON RGB
                                            WHITE</strong></span><span style="color: #000000;"> chỉ 750k!!</span></a>
                            </p>
                            <p>&nbsp;</p>
                            <p><span style="font-size: 15pt; color: #ff0000;"><strong>+ Qu&agrave; tặng th&ecirc;m đi
                                        k&egrave;m </strong><strong>:</strong></span></p>
                            <p><span style="font-size: 10pt; color: #000000;"><strong>&nbsp; &nbsp; &nbsp;(chỉ áp dụng cho khách khi mua pc hoặc màn hình )</strong></span></p>
                            <p>&nbsp; &nbsp; &nbsp; 🎁 <a href=""><strong>Ph&iacute;m + chuột Gaming G21
                                        LED</strong></a> <strong><span style="color: #000000;">trị gi&aacute;
                                        800k.</span></strong></p>
                            <p>&nbsp; &nbsp; &nbsp; 🎁 <strong><a href="">L&oacute;t chuột PUBG SIZE
                                        LỚN&nbsp;MỚI&nbsp;</a><span style="color: #000000;">trị gi&aacute;
                                        400k.</span></strong></p>
                        </div>




                        <div class="d-none" style="display:none">
                            <select id="productSelect" name="id">

                                <option value="1096866653">Default Title - 6,390,000₫</option>

                            </select>
                        </div>
                        <div class="product-swatch" style="display:none">


                            <div class="product-sw-line">
                                <div class="product-sw-title">
                                    Tiêu đề

                                </div>
                                <div class="product-sw-select">



                                    <span class="product-sw-select-item">
                                        <input type="radio" data-value="Default Title" name="product-choose-tieu-de"
                                            data-name="option1" value="Default Title" class="trigger-option-sw d-none"
                                            id="product-choose-tieu-de-1">
                                        <label for="product-choose-tieu-de-1"
                                            class="product-sw-select-item-span">Default Title</label>
                                    </span>



                                    <script>
                                        const collection = document.getElementsByClassName("product-sw-select-item");
                                        const input = collection[0].querySelector("input");
                                        input.classList.add("bk-product-property");

                                        for (let i = 0; i < collection.length; i++) {
                                            collection[i].addEventListener("click", function() {
                                                for (let j = 0; j < collection.length; j++) {
                                                    const elInput = collection[j].querySelector("input");
                                                    elInput.classList.remove("bk-product-property");
                                                }

                                                const thisInput = collection[i].querySelector("input");
                                                thisInput.classList.add("bk-product-property");
                                            });
                                        }
                                    </script>

                                </div>
                            </div>

                        </div>
                        <div class="productPrice border-bottom-0">
                            <div class="productPriceBox">

                                <span style="width:100px;display: inline-block;font-weight: bold;" class="mr-1">Giá
                                    Cũ:</span><del class="productPriceCompare"></del>
                                <span class="productDiscount d-none">(-32%)</span>

                                <br />
                                <span style="width:100px;display: inline-block;font-weight: bold;" class="mr-1">Giá
                                    KM:</span><span class="productPriceMain bk-product-price">{{$product->price}}</span>


                            </div>
                        </div>
                        <div class="productActionMain">
                            <div class="groupAdd">
                                <div class="d-none itemQuantity">
                                    <button class="qtyBtn minusQuan" data-type="minus">-</button>
                                    <input type="number" id="quantity" name="quantity" value="1" min="1"
                                        class="quantitySelector bk-product-qty">
                                    <button class="qtyBtn plusQuan" data-type="plus">+</button>
                                </div>


                            </div>
                            <div class="productAction">
                                <button type="button" class="hoverOpacity" id="addToCart">
                                    Đặt hàng
                                </button>

                            </div>
                            <!-- BK BUTTON -->
                            <div class='bk-btn'></div>
                            <!-- END BK BUTTON -->

                        </div>
                    </div>
                    <div class="productWrapSidebar">
                        <div class="productWrapSidebarGroup">




                            <div class="productWrapSidebarItem">
                                <img src="https://file.hstatic.net/200000397235/file/thanh_toan_2f58014006cc47bc876285d4bed77245.png"
                                    alt="ItemSidebar" />
                                <div class="productWrapSidebarContent">
                                    <h5>⭐ CAM KẾT GIÁ TỐT NHẤT</h5>
                                    <p>Mua PC - linh kiện chính hãng giá tốt nhất chỉ có tại Sao Chổi PC.</p>
                                </div>
                            </div>




                            <div class="productWrapSidebarItem">
                                <img src="https://file.hstatic.net/200000265255/file/static-icons-1_b925e91e6ad74e8d9ecbac3f725b17e4.png"
                                    alt="ItemSidebar" />
                                <div class="productWrapSidebarContent">
                                    <h5>⭐ MIỄN PHÍ VẬN CHUYỂN</h5>
                                    <p>Miễn phí vận chuyển, giao hàng tận nơi.</p>
                                </div>
                            </div>




                            <div class="productWrapSidebarItem">
                                <img src="https://file.hstatic.net/200000397235/file/ng-icon-free-download-232195-onl-5c2a1200b4c8d9.7343111715462609927405_31bef60a08cf4818acb7eb4e63aef65e.jpg"
                                    alt="ItemSidebar" />
                                <div class="productWrapSidebarContent">
                                    <h5>⭐ KHUYẾN MÃI</h5>
                                    <p>Nhiều chương trình khuyến mãi cùng quà tặng hấp dẫn.</p>
                                </div>
                            </div>




                            <div class="productWrapSidebarItem">
                                <img src="https://file.hstatic.net/200000265255/file/static-icons-4_24025647d256438eb38834a0d9f9ae78.png"
                                    alt="ItemSidebar" />
                                <div class="productWrapSidebarContent">
                                    <h5>⭐ NẮM BẮT XU THẾ</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            
			
            <div class="productTabsContent">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item ">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" role="tab"
                            aria-controls="home" aria-selected="true"> <br> <p style = "color:#e74c3c; font-size:22px ">* Mô tả chi tiết của {{$product->name}} : </p>
							<p style = "color:#555555;">  {{$product->description}} </p>
						</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


<!-- BK MODAL -->
<div id='bk-modal'></div>
<!-- END BK MODAL -->
<!-- BK JS -->
<script src="https://pc.baokim.vn/js/bk_plus_v2.popup.js"></script>
<!-- END BK JS -->


</main>

@include('clients.footer')
