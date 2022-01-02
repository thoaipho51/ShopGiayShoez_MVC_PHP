<?php
  if (isset($data['ProductDetail'])) {
    $ProductDetail = $data['ProductDetail'];
  }
  // ProductRelated
  if (isset($data['ProductRelated'])) {
    $ProductRelated = $data['ProductRelated'];
  }

?>

<!--  detail product -->
<main class="">

<div id="product" class="productDetail-page">

  <!--  menu header seo -->
  <div class="breadcrumb-shop">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5">
          <ol class="breadcrumb breadcrumb-arrows">
            <li>
              <a href="home.html">
                <span">Trang chủ</span>
              </a>
            </li>
            <li>
              <a href="">
                <span>Sản phẩm</span>
              </a>
            </li>
            <li class="active">
              <span>
                <span itemprop="name"><?=$ProductDetail['ten']?></span>
              </span>
              <meta itemprop="position" content="3">
            </li>

          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- detail product chính -->
  <div class="container">
    <div class="row product-detail-wrapper">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row product-detail-main pr_style_01">
          <div class="col-md-7 col-sm-12 col-xs-12">
            <div class="product-gallery">
              <div class="product-gallery__thumbs-container hidden-sm
                hidden-xs">
                <div class="product-gallery__thumbs thumb-fix">

                  <div class="product-gallery__thumb  active" id="imgg1">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/1.jpg" data-zoom-image="/shoez/public/images/detailproduct/1.jpg">
                      <img src="/shoez/public/images/giay/anh1/<?=$ProductDetail['image']?>" data-image="/shoez/public/images/detailproduct/1.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <!-- <div class="product-gallery__thumb " id="imgg2">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/5.jpg" data-zoom-image="/shoez/public/images/detailproduct/5.jpg">
                      <img src="/shoez/public/images/detailproduct/5.jpg" data-image="/shoez/public/images/detailproduct/5.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg3">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/2.jpg" data-zoom-image="/shoez/public/images/detailproduct/2.jpg">
                      <img src="/shoez/public/images/detailproduct/2.jpg" data-image="/shoez/public/images/detailproduct/2.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg4">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/4.jpg" data-zoom-image="/shoez/public/images/detailproduct/4.jpg">
                      <img src="/shoez/public/images/detailproduct/4.jpg" data-image="/shoez/public/images/detailproduct/4.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg5">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/7.jpg" data-zoom-image="/shoez/public/images/detailproduct/7.jpg">
                      <img src="/shoez/public/images/detailproduct/7.jpg" data-image="/shoez/public/images/detailproduct/7.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg6">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/3.jpg" data-zoom-image="/shoez/public/images/detailproduct/3.jpg">
                      <img src="/shoez/public/images/detailproduct/3.jpg" data-image="/shoez/public/images/detailproduct/3.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg7">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/8.jpg" data-zoom-image="/shoez/public/images/detailproduct/8.jpg">
                      <img src="/shoez/public/images/detailproduct/8.jpg" data-image="/shoez/public/images/detailproduct/8.jpg" alt="Nike
                        Air Max 90 Essential" grape="">
                    </a>
                  </div>

                  <div class="product-gallery__thumb " id="imgg8">
                    <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                      data-image="/shoez/public/images/detailproduct/6.jpg" data-zoom-image="/shoez/public/images/detailproduct/6.jpg">
                      <img src="/shoez/public/images/detailproduct/6.jpg" data-image="/shoez/public/images/detailproduct/6.jpg"
                        alt="Nike Air Max 90 Essential" grape="">
                    </a>
                  </div> -->

                </div>
              </div>
              <div class="product-image-detail box__product-gallery
                scroll hidden-xs">
                <ul id="sliderproduct" class="site-box-content
                  slide_product">

                  <li class="product-gallery-item gallery-item
                    current " id="imgg1a">
                    <img class="product-image-feature " src="/shoez/public/images/giay/anh1/<?=$ProductDetail['image']?>"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <!-- <li class="product-gallery-item gallery-item " id="imgg2a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/5.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-item " id="imgg3a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/2.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-ite " id="imgg4a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/4.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-item " id="imgg5a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/7.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-item " id="imgg6a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/3.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-item " id="imgg7a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/8.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li>

                  <li class="product-gallery-item gallery-item " id="imgg8a">
                    <img class="product-image-feature" src="/shoez/public/images/detailproduct/6.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </li> -->

                </ul>
                <div class="product-image__button">
                  <div id="product-zoom-in" class="product-zoom
                    icon-pr-fix" aria-label="Zoom in" title="Zoom in">
                    <span class="zoom-in" aria-hidden="true">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width:
                        30px; height: 30px;" xml:space="preserve">
                        <polyline points="6,14 9,11 14,16 16,14 11,9
                          14,6 6,6">
                        </polyline>
                        <polyline points="22,6 25,9 20,14 22,16 27,11
                          30,14 30,6">
                        </polyline>
                        <polyline points="30,22 27,25 22,20 20,22
                          25,27 22,30 30,30">
                        </polyline>
                        <polyline points="14,30 11,27 16,22 14,20 9,25
                          6,22 6,30">
                        </polyline>
                      </svg>
                    </span>
                  </div>
                  <div class="gallery-index icon-pr-fix"><span class="current">1</span>
                    / <span class="total">8</span></div>
                </div>
              </div>
            </div>
            <div class="product-gallery-slide">
              <div class="owl-carousel owl-theme owl-product-gallery-slide"">
                <div class=" item">
                <div class="product-gallery__thumb  >
                  <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="/shoez/public/images/detailproduct/1.jpg" data-zoom-image="/shoez/public/images/detailproduct/1.jpg">
                  <img src="/shoez/public/images/detailproduct/1.jpg" data-image="/shoez/public/images/detailproduct/1.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  >
                  <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="/shoez/public/images/detailproduct/2.jpg" data-zoom-image="/shoez/public/images/detailproduct/2.jpg">
                  <img src="/shoez/public/images/detailproduct/2.jpg" data-image="/shoez/public/images/detailproduct/2.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  >
                  <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="/shoez/public/images/detailproduct/3.jpg" data-zoom-image="/shoez/public/images/detailproduct/3.jpg">
                  <img src="/shoez/public/images/detailproduct/3.jpg" data-image="/shoez/public/images/detailproduct/3.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  >
                  <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="/shoez/public/images/detailproduct/4.jpg" data-zoom-image="/shoez/public/images/detailproduct/4.jpg">
                  <img src="/shoez/public/images/detailproduct/4.jpg" data-image="/shoez/public/images/detailproduct/4.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  >
                  <a class=" product-gallery__thumb-placeholder" href="javascript:void(0);"
                  data-image="/shoez/public/images/detailproduct/5.jpg" data-zoom-image="/shoez/public/images/detailproduct/5.jpg">
                  <img src="/shoez/public/images/detailproduct/5.jpg" data-image="/shoez/public/images/detailproduct/5.jpg"
                    alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  " id="imgg1">
                  <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                    data-image="/shoez/public/images/detailproduct/6.jpg" data-zoom-image="/shoez/public/images/detailproduct/6.jpg">
                    <img src="/shoez/public/images/detailproduct/6.jpg" data-image="/shoez/public/images/detailproduct/6.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  " id="imgg1">
                  <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                    data-image="/shoez/public/images/detailproduct/7.jpg" data-zoom-image="/shoez/public/images/detailproduct/7.jpg">
                    <img src="/shoez/public/images/detailproduct/7.jpg" data-image="/shoez/public/images/detailproduct/7.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>
              <div class="item">
                <div class="product-gallery__thumb  " id="imgg1">
                  <a class="product-gallery__thumb-placeholder" href="javascript:void(0);"
                    data-image="/shoez/public/images/detailproduct/8.jpg" data-zoom-image="/shoez/public/images/detailproduct/8.jpg">
                    <img src="/shoez/public/images/detailproduct/8.jpg" data-image="/shoez/public/images/detailproduct/8.jpg"
                      alt="Nike Air Max 90 Essential" grape="">
                  </a>
                </div>
              </div>

            </div>
          </div>
          <!-- Flickity HTML init -->

          <!-- <div id="product-zoom-in" class="product-zoom icon-pr-fix
              hidden-md hidden-sm" style="padding-top:2rem;"
              aria-label="Zoom in" title="Zoom in">
              <span class="zoom-in" aria-hidden="true">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                  y="0px"
                  viewBox="0 0 36 36"
                  style="enable-background:new 0 0 36 36; width: 40px;
                  height: 40px;"
                  xml:space="preserve">
                  <polyline points="6,14 9,11 14,16 16,14 11,9 14,6
                    6,6">
                  </polyline>
                  <polyline points="22,6 25,9 20,14 22,16 27,11 30,14
                    30,6">
                  </polyline>
                  <polyline points="30,22 27,25 22,20 20,22 25,27
                    22,30 30,30">
                  </polyline>
                  <polyline points="14,30 11,27 16,22 14,20 9,25 6,22
                    6,30">
                  </polyline>
                </svg>
              </span>
            </div> -->
        </div>

        

        <div class="col-md-5 col-sm-12 col-xs-12
            product-content-desc" id="detail-product">
          <div class="product-content-desc-1">
            <div class="product-title">
              <h1><?=$ProductDetail['ten']?></h1>
              <span id="pro_sku">SKU: <?=$ProductDetail['id_product']?></span>
            </div>
            <div class="product-price" id="price-preview"><span class="pro-price"><?=number_format($ProductDetail['gia'],0)?></span> VNĐ</div>
            <form id="add-item-form" action="/cart/add" method="post" class="variants clearfix">
              <div class="select clearfix">
                <div class="selector-wrapper"><label for="product-select-option-0">Màu sắc</label><span
                    class="custom-dropdown custom-dropdown--white"><select class="single-option-selector
                        custom-dropdown__select
                        custom-dropdown__select--white" data-option="option1" id="product-select-option-0">
                      <option value="Tím">Tím</option>
                      <option value="Xanh">Xanh</option>
                    </select></span></div>
                <div class="selector-wrapper"><label for="product-select-option-1">Kích thước</label><span
                    class="custom-dropdown custom-dropdown--white"><select class="single-option-selector
                        custom-dropdown__select
                        custom-dropdown__select--white" data-option="option2" id="product-select-option-1">
                      <option value="36">36</option>
                      <option value="37">37</option>
                      <option value="38">38</option>
                      <option value="35">35</option>
                    </select></span></div><select id="product-select" name="id" style="display:none;">

                  <option value="1040377813">Tím / 36 - 4,800,000₫</option>
                  <option value="1040377814">Tím / 37 - 4,800,000₫</option>
                  <option value="1040377815">Tím / 38 - 4,800,000₫</option>
                  <option value="1040409049">Xanh / 35 - 4,800,000₫</option>
                  <option value="1040409050">Xanh / 36 - 4,800,000₫</option>
                  <option value="1040409053">Xanh / 37 - 4,800,000₫</option>
                  <option value="1040409054">Xanh / 38 - 4,800,000₫</option>
                </select>
              </div>
              <div class="select-swatch clearfix">
                <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">


                  <div class="header" style="background: white;
                      color: #272727;"><span>Tím</span></div>

                  <div class="select-swap">
                    <div data-value="Tím" class="n-sd swatch-element
                        color tim">
                      <input class="variant-0" id="swatch-0-tim" type="radio" name="option1" value="Tím"
                        data-vhandle="tim" checked="">
                      <label class="tim sd" for="swatch-0-tim">
                        <span>Tím</span>
                      </label>

                    </div>
                    <div data-value="Xanh" class="n-sd swatch-element
                        color xanh">
                      <input class="variant-0" id="swatch-0-xanh" type="radio" name="option1" value="Xanh"
                        data-vhandle="xanh">


                      <label class="xanh" for="swatch-0-xanh">
                        <span>Xanh</span>
                      </label>

                    </div>
                  </div>
                </div>
                <div id="variant-swatch-1" class="swatch clearfix" data-option="option2" data-option-index="1">


                  <div class="select-swap">
                    <div data-value="36" class="n-sd swatch-element
                        36">
                      <input class="variant-1" id="swatch-1-36" type="radio" name="option2" value="36"
                        data-vhandle="36" checked="">

                      <label for="swatch-1-36" class="sd">
                        <span>36</span>
                      </label>

                    </div>
                    <div data-value="37" class="n-sd swatch-element
                        37">
                      <input class="variant-1" id="swatch-1-37" type="radio" name="option2" value="37"
                        data-vhandle="37">

                      <label for="swatch-1-37">
                        <span>37</span>
                      </label>

                    </div>
                    <div data-value="38" class="n-sd swatch-element
                        38">
                      <input class="variant-1" id="swatch-1-38" type="radio" name="option2" value="38"
                        data-vhandle="38">

                      <label for="swatch-1-38">
                        <span>38</span>
                      </label>

                    </div>
                    <div data-value="35" class="n-sd swatch-element 35
                        soldout">
                      <input class="variant-1" id="swatch-1-35" type="radio" name="option2" value="35"
                        data-vhandle="35" disabled="">

                      <label for="swatch-1-35">
                        <span>35</span>
                      </label>

                    </div>
                  </div>
                </div>
              </div>
              <div class="selector-actions">
                <div class="quantity-area clearfix">
                  <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                  <input type="text" id="quantity" name="quantity" value="1" min="1" class="quantity-selector">
                  <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                </div>
                <div class="wrap-addcart clearfix">
                  <div class="row-flex">
                    <a href="/shoeZ/cart/show/<?=$ProductDetail['id_product']?>">
                    <button type="button" class="button btn-addtocart addtocart-modal">Thêm vào giỏ</button>
                    </a>
                    <a href="#">
                      <button type="button" class="buy-now button" style="display: block;">Mua ngay</button>
                    </a>

                  </div>

                  <a href="" target="_blank" class="button btn-check"
                    style="color: #ffffff;text-decoration:none;"><span>Click
                      nhận mã giảm giá ngay
                      !</span></a>

                </div>
              </div>
              <!--<div class="product-action-bottom visible-xs">
                  <div class="input-bottom">
                    <input id="quan-input" type="number" value="1" min="1">
                  </div>
                  <button type="button" id="add-to-cartbottom"
                    class="add-to-cartProduct add-cart-bottom button addtocart-modal" name="add">Thêm vào
                    giỏ</button>
                </div>-->
            </form>
            <div class="product-description">
              <div class="title-bl">
                <h2>Mô tả</h2>
              </div>
              <div class="description-content">
                <div class="description-productdetail">
                     <?=$ProductDetail['description']?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          <!-- $ProductRelated -->

      <div class="list-productRelated clearfix">
        <div class="heading-title text-center">
          <h2>Sản phẩm liên quan</h2>
        </div>
        <div class="container">
          <div class="row">
            <?php
            foreach ($ProductRelated as $item) {
              $id_product = $item['id_product'];
              $name = $item['ten'];
              $price = $item['gia'];
              $format = number_format($item['gia'],0);
              $desc = $item['description'];
              $img = $item['image'];
              $RelatedPR = <<<EOD
              <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                <div class="product-block">
                  <div class="product-img fade-box">
                    <a href="/shoez/detailproduct/show/$id_product" title="$name" class="img-resize">
                      <img src="/shoez/public/images/giay/anh1/$img"
                        alt="$name" class="lazyloaded">
                      <img src="/shoez/public/images/giay/anh2/$img" alt="$name" class="lazyloaded">
                    </a>

                  </div>
                  <div class="product-detail clearfix">
                    <div class="pro-text">
                      <a style="color: black;
                          font-size: 14px;text-decoration: none;" href="/shoez/detailproduct/show/$id_product" title="Adidas EQT Cushion ADV" inspiration
                        pack>
                       $name
                      </a>
                    </div>
                    <div class="pro-price">
                      <p class="">$format</p>
                    </div>
                  </div>
                </div>
              </div>
              EOD;
              echo $RelatedPR;
            }
              
            ?>
            
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>


<!-- show zoom detail product -->
<!-- zoom -->
<div class="product-zoom11">
 <div class="product-zom">
  <div class="divclose">
    <i class="fa fa-times-circle"></i>
  </div>
  <div class="owl-carousel owl-theme owl-product1">

    <div class="item"><img src="/shoez/public/images/detailproduct/1.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/2.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/3.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/4.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/5.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/6.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/7.jpg" alt="">
    </div>
    <div class="item"><img src="/shoez/public/images/detailproduct/8.jpg" alt="">
    </div>



  </div>
 </div>
</div>

</main>