<div class="site-blocks-cover" style="background-image: url('https://www.thespruce.com/thmb/BSrh0ONxZj4r7l2TZLHXJrgNucQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/FlamingoResidenceMaiteGrandaDesignStudio-5a194f944ac04fb2847120f50e54894c-e40c7bf73c6c4aa7b0272893454016a8-644351e009bd42b8aada88d54070fd46.jpeg');" data-aos="fade">
<div class="container" style="background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
    <div class="row align-items-start align-items-md-center justify-content-end">
        <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2 text-white"  style="font-size: 100px; font-weight: 400">Nội Thất Hiện Đại</h1>
            <div class="intro-text text-center text-md-left">
                <p class="mb-4 text-white">Khám phá các bộ sưu tập nội thất sang trọng và hiện đại cho không gian sống của bạn. Chúng tôi mang đến những sản phẩm chất lượng cao, thiết kế tinh tế và tiện ích tối ưu.</p>
            </div>
        </div>
    </div>
</div>

</div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Miễn Phí Vận Chuyển Cho Đơn Hàng Từ 500K</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Hỗ Trợ Đổi Trả Hàng Trong 15 Ngày.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p> Nếu bạn cần giúp đỡ. Đừng lo lắng gì , chúng tôi ở đây vì bạn.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
      <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="<?=$IMAGE_DIR?>/nha-xinh-phong-khach-may-net-viet-duong-dai-3.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Bộ Sưu Tập</span>
                  <h3>Sofa Coastal</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="<?=$IMAGE_DIR?>/nha-xinh-thiet-ke-noi-that-ecopark-16523-1200x800.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Bộ Sưu Tập</span>
                  <h3>Không gian phòng khách</h3>
                </div>
              </a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
              <a class="block-2-item" href="#">
                <figure class="image">
                  <img src="<?=$IMAGE_DIR?>/banner-do-trang-tri-noel-nha-xinh.jpg" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <span class="text-uppercase">Bộ Sưu Tập</span>
                  <h3>Đồ trang trí Noel</h3>
                </div>
              </a>
            </div>
          </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>SẢN PHẨM NỔI BẬT</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
            <?php foreach ($products as $product): ?>
            <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="<?=$IMAGE_DIR ?><?php echo $product['image']; ?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="<?=$SITE_URL?>/view/detailproduct?id=<?=$product['productId']?>"><?php echo $product['productName']; ?></a></h3>                    
                    <p class="text-primary font-weight-bold">$<?php echo $product['price']; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- New Products -->
    <div class="site-section block-3 site-blocks-2 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>SẢN PHẨM MỚI</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nonloop-block-3 owl-carousel">
            <?php foreach ($products as $product): ?>
            <div class="item">
                <div class="block-4 text-center">
                  <figure class="block-4-image">
                    <img src="<?=$IMAGE_DIR ?><?php echo $product['image']; ?>" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href="<?=$SITE_URL?>/view/detailproduct?id=<?=$product['productId']?>"><?php echo $product['productName']; ?></a></h3>                    
                    <p class="text-primary font-weight-bold">$<?php echo $product['price']; ?></p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>THIẾT KẾ NỘI THẤT</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="<?=$CONTENT_SITE_URL?>/images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2><a href="<?=$SITE_URL?>/view/shop">Ý tưởng không gian sống </a></h2>
            <p>Với kinh nghiệm hơn 23 năm trong lĩnh vực thiết kế và hoàn thiện nội thất cùng đội ngũ thiết kế chuyên nghiệp, Homedec mang đến giải pháp toàn diện trong nội thất.</p>
            <p><a href="#" class="btn btn-primary btn-sm">Mua Ngay</a></p>
          </div>
        </div>
      </div>
    </div>
