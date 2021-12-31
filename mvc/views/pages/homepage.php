
  

  <!-- Registratior -->
  <?php require_once "./mvc/views/blocks/registratior.php" ;

    if ($data['Product_8']) {
      $SanPhamBanChay = $data['Product_8'];
    }
    if ($data['Product_10']) {
      $SanPhamMoi = $data['Product_10'];
    }
  ?>

  <!-- Owl-Carousel -->
  <div class="owl-carousel owl-theme owl-carousel-setting">
    
      <div class="item"><img src="/shoez/public/images/slide/1.png" class="d-block w-100" alt="..."></div>
      <div class="item"><img src="/shoez/public/images/slide/2.png" class="d-block w-100" alt="..."></div>
      <div class="item"><img src="/shoez/public/images/slide/3.png" class="d-block w-100" alt="..."></div>
      <div class="item"><img src="/shoez/public/images/slide/4.png" class="d-block w-100" alt="..."></div>
      <div class="item"><img src="/shoez/public/images/slide/5.png" class="d-block w-100" alt="..."></div>
  </div>
 
  <!--Content-->
  <div class="content">
    <div class="container">
      <div class="hot_sp" style="padding-bottom: 10px;">
        <h2 style="text-align:center;padding-top: 10px">
          <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm bán chạy</a>
        </h2>
        <div class="view-all" style="text-align:center;padding-top: -10px;">
          <a style="color: black;text-decoration: none" href="">Xem thêm</a>
        </div>
      </div>
    </div>
    <!--Product-->
    <div class="container" style="padding-bottom: 50px;">
      <div class="row">
        <?php
          foreach ($SanPhamBanChay as $item) {
            $maGiay = $item['id_product'];
            $tenGiay = $item['ten'];
            $giaBan = number_format($item['gia'],0);
            $Img = $item['image'];
            $maLoai = $item['id_brand'];
            $SPBC = <<<EOD
            <div class="col-md-3 col-sm-6 col-xs-6 col-6">
              <div class="product-block">
                <div class="product-img fade-box">
                  <a href="/shoez/detailproduct/show/$maGiay" title="$tenGiay" class="img-resize">
                    <img src="/shoez/public/images/giay/anh1/$Img"
                      alt="$tenGiay" class="lazyloaded">
                    <img src="/shoez/public/images/giay/anh2/$Img" alt="$tenGiay" class="lazyloaded">
                  </a>
                
                </div>
                <div class="product-detail clearfix">
                  <div class="pro-text">
                    <a style=" color: black;font-size: 14px;text-decoration: none;" href="/shoez/detailproduct/show/$maGiay"
                      title="$tenGiay" inspiration pack>
                      $tenGiay
                    </a>
                  </div>
                  <div class="pro-price">
                    <p class="">$giaBan Vnđ</p>
                  </div>
                </div>
              </div>
            </div>
            EOD;
            echo  $SPBC;
          }
        ?>
      </div>
    </div>
    <section class="section wrapper-home-banner">
      <div class="container-fluid" style="padding-bottom: 50px;">
        <div class="row">
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box">
                  <img class="lazyloaded" src="/shoez/public/images/shoes/block_home_category1_grande.jpg" alt="Shoes">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p>Bộ sưu tập</p>
                  <h2>
                    Đại sứ thương hiệu
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image fade-box">
                  <img class="lazyloaded" src="/shoez/public/images/shoes/block_home_category2_grande.jpg" alt="Shoes">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p>Bộ sưu tập</p>
                  <h2>
                    Thương hiệu
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 home-banner-pd">
            <div class="block-banner-category">
              <a href="#" class="link-banner wrap-flex-align flex-column">
                <div class="fg-image">
                  <img class="lazyloaded" src="/shoez/public/images/shoes/block_home_category3_grande.jpg" alt="Shoes">
                </div>
                <figcaption class="caption_banner site-animation">
                  <p></p>
                  <h2>
                    Blog
                  </h2>
                </figcaption>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="content">
        <div class="container">
          <div class="hot_sp">
            <h2 style="text-align:center;">
              <a style="font-size: 28px;color: black;text-decoration: none" href="">Sản phẩm mới</a>
            </h2>
            <div class="view-all" style="text-align:center;">
              <a style="color: black;text-decoration: none" href="">Xem thêm</a>
            </div>
          </div>
        </div>
        <!--Product-->
      </div>
      <div class="container product" style="width: 100%;margin: auto;">
        <div class="owl-carousel owl-theme owl-product-setting">
        <?php
          foreach ($SanPhamMoi as $item) {
            $maGiay = $item['id_product'];
            $tenGiay = $item['ten'];
            $giaBan = number_format($item['gia'],0);
            $Img = $item['image'];
            $maLoai = $item['id_brand'];
            $SPBC = <<<EOD
            <div class="item">
              <div class="">
                <div class="product-block">
                  <div class="product-img fade-box">
                    <a href="/shoez/detailproduct/show/$maGiay" title="$tenGiay" class="img-resize">
                      <img src="/shoez/public/images/giay/anh1/$Img" alt="$tenGiay"
                        class="lazyloaded">
                      <img src="/shoez/public/images/giay/anh2/$Img" alt="$tenGiay" class="lazyloaded">
                    </a>
                  </div>
                  <div class="product-detail clearfix">
                    <div class="pro-text">
                      <a style=" color: black;font-size: 14px;text-decoration: none;" href="/shoez/detailproduct/show/$maGiay" title="$tenGiay" inspiration pack>
                      $tenGiay
                      </a>
                    </div>
                    <div class="pro-price">
                      <p class="">$giaBan Vnđ</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            EOD;
            echo  $SPBC;
          }
        ?>
          
      </div>




      </div>
    </section>
    <section class="">
      <div class="content">
        <div class="container">
          <div class="hot_sp">
            <h2 style="text-align:center;padding-top: 10px">
              <a style="font-size: 28px;color: black;text-decoration: none" href="">Bài viết mới nhất</a>
            </h2>
            <br />
          </div>
        </div>
      </div>
      <!--New-->
      <div>

        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Adidas EQT Cushion ADV">
                    <img class="img-resize" style="padding-bottom:15px;" src="/shoez/public/images/shoes/new-1.jpg"
                      alt="Adidas Falcon nổi bật mùa Hè với phối màu color block">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                  font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Adidas Falcon nổi bật mùa Hè với phối màu color block
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Cuối tháng 5, adidas Falcon đã cho ra mắt nhiều phối màu đón chào mùa Hè khiến giới trẻ yêu
                    thích không thôi. Tưởng chừng thương hiệu sẽ tiếp tục...</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Adidas EQT Cushion ADV">
                    <img class="img-resize" style="padding-bottom:15px;" src="/shoez/public/images/shoes/new-2.jpg"
                      alt="Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                                  font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Saucony hồi sinh mẫu giày chạy bộ cổ điển của mình – Aya Runner
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Là một trong những đôi giày chạy bộ tốt nhất vào những năm 1994, 1995, Saucony Aya Runner vừa có
                    màn trở lại
                    vô cùng ấn tượngCó vẻ như 2019...</span>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="post_item">
                <div class="post_featured">
                  <a href="#" title="Adidas EQT Cushion ADV">
                    <img class="img-resize" style="padding-bottom:15px;" src="/shoez/public/images/shoes/new-3.jpg"
                      alt="Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt">
                  </a>
                </div>
                <div class="pro-text">
                  <span class="post_info_item">

                    Thứ Ba 11,06,2019

                  </span>
                </div>
                <div class="pro-text">
                  <h3 class="post_title">
                    <a style=" color: black;
                                      font-size: 18px;text-decoration: none;" href="#" inspiration pack>
                      Nike Vapormax Plus trở lại với sắc tím mộng mơ và thiết kế chuyển màu đẹp mắt
                    </a>
                  </h3>
                </div>
                <div style="text-align:center; padding-bottom: 30px;">
                  <span>Là một trong những mẫu giày retro có nhiều phối màu gradient đẹp nhất từ trước đến này, Nike
                    Vapormax Plus vừa có màn trở lại bá đạo dành cho...</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section wrapper-home-newsletter">
      <div class="container-fluid">
        <div class="content-newsletter">
          <h2>Đăng ký</h2>
          <p>Đăng ký nhận bản tin của Hyper Shoe Z để cập nhật những sản phẩm mới, nhận thông tin ưu đãi đặc biệt và thông
            tin
            giảm giá khác.</p>
          <div class="form-newsletter">
            <form action="" accept-charset="UTF-8" class="">
              <div class="form-group">
                <input type="hidden" id="contact_tags">
                <input required="" type="email" value="" placeholder="Nhập email của bạn" aria-label="Email Address"
                  class="">
                <button type="submit" class=""><span>Gửi</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
</div>