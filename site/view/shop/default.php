<style>
  .product-sale-tag {
      position: absolute;
      z-index: 2;
      top: 0px;
      left: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 20px;
      width: 60px;
      background-color: red;
      color: white;
      font-weight: bold;
      font-family: "Roboto", monospace;
      font-size: 14px;
      border-radius: 3px;
    }
        .checked {
  color: yellow;
  margin-bottom: 8px;
  margin-top: 1px;
}
.fa-star{
  margin-bottom: 10px;
}
.product-wishlist-icon {
      &.added {
        fill: #ff6f60;
        path {
          stroke: #ff6f60;
        }
      }
      width: 22px;
      height: 20px;
      position: absolute;
      top: 15px;
      right: 30px;
      z-index: 1;
      cursor: pointer;
      fill: none;
    }

</style>
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Trang chủ</a> <span class="mx-2 mb-0">/</span> <strong
          class="text-black">Sản phẩm</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-9 order-2">

        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="float-md-left mb-4">
              <h2 class="text-black h5">Hãy chọn sản phẩm phù hợp với bạn</h2>
            </div>
            <div class="d-flex justify-content-end align-items-center">
              <div class="btn-group">
                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuReference"
                  data-toggle="dropdown">Lọc theo</button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                  <a class="dropdown-item" href="#">Tên từ A đến Z</a>
                  <a class="dropdown-item" href="#">Tên từ Z đến A</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Giá, từ thấp tới cao</a>
                  <a class="dropdown-item" href="#">Giá, từ cao tới thấp</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-5">

          <?php foreach ($searchs as $search): ?>
            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
            <form action="<?=$SITE_URL?>/view/cart/?action=addCart" method="po;st" name="add-to-cart-form" class ="add-to-cart-form">
              <input type="hidden" name="id" value="<?=$search['prodId']?>">
              <input type="hidden" name="name" value="<?php echo $search['prodName']; ?>">
              <input type="hidden" name="price" value="<?php echo $search['price']; ?>">
              <input type="hidden" name="img" value="<?=$IMAGE_DIR?>/<?php echo $search['imageUrl']; ?>">  
            <div class="block-4 text-center border">
                <figure class="block-4-image">
                  <a href="<?=$SITE_URL?>/view/detailproduct?id=<?=$search['prodId']?>"><img
                      src="<?=$IMAGE_DIR?><?php echo $search['imageUrl']; ?>" alt="Image placeholder"
                      class="img-fluid"></a>
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="<?=$SITE_URL?>/view/detailproduct?id=<?=$search['prodId']?>"><?php echo $search['prodName']; ?></a></h3>
                </div>
                <div>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        </div>
                <div class="block-4-text d-flex justify-content-center align-items-center mb-3">
                  <span class="text-primary font-weight-bold mr-3 ">
                  <?php echo $search['price'] . '$'; ?>
                  </span>
                  <!-- <button name="addCart" onclick="notify()" class="addCart" type="submit" style="cursor: pointer; background-color: transparent; border: none !important; " ><i class="fa-solid fa-cart-plus"></i></button> -->
                </div>
                <span class="product-sale-tag">
        sale
</span>
<svg class="product-wishlist-icon" viewBox="0 0 18 16" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.2369 2.19522L10.237 2.19513C10.6162 1.81576 11.0664 1.51481 11.5619 1.30948C12.0575 1.10416 12.5886 0.998474 13.125 0.998474C13.6614 0.998474 14.1925 1.10416 14.6881 1.30948C15.1836 1.51481 15.6338 1.81576 16.013 2.19513L16.0132 2.1953C16.3926 2.5745 16.6935 3.02472 16.8988 3.52026C17.1042 4.0158 17.2099 4.54694 17.2099 5.08333C17.2099 5.61972 17.1042 6.15086 16.8988 6.6464C16.6935 7.14193 16.3926 7.59216 16.0132 7.97136L16.0131 7.97144L15.1298 8.85478L9 14.9846L2.87022 8.85478L1.98688 7.97144C1.22091 7.20547 0.790588 6.16658 0.790588 5.08333C0.790588 4.00008 1.22091 2.96119 1.98688 2.19522C2.75286 1.42924 3.79174 0.99892 4.875 0.99892C5.95825 0.99892 6.99714 1.42924 7.76311 2.19522L8.64644 3.07855C8.84171 3.27381 9.15829 3.27381 9.35355 3.07855L10.2369 2.19522Z" stroke="#2C3547" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
              </div>
            </div>

            </form>
          <?php endforeach;?>

        </div>
        <div class="row" data-aos="fade-up">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-3 order-1 mb-5 mb-md-0">
        <div class="border p-4 rounded mb-4">
          <h3 class="mb-3 h6 text-uppercase text-black d-block">Sản phẩm</h3>
          <ul class="list-unstyled mb-0">
            <?php foreach ($productbyCates as $productbyCate): ?>
              <li class="mb-1"><a href="<?=$SITE_URL?>/view/category?id=<?=$productbyCate['cateId']?>"
                  class="d-flex"><span>
                    <?php echo $productbyCate['cateName']; ?>
                  </span> <span class="text-black ml-auto">(
                    <?php echo $productbyCate['total']; ?>)
                  </span></a></li>
            <?php endforeach;?>
          </ul>
        </div>

        <div class="border p-4 rounded mb-4">
          <div class="mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Lọc Theo Giá</h3>
            <div id="slider-range" class="border-primary"></div>
            <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
          </div>

          <div class="mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Kích cỡ</h3>
            <label for="s_sm" class="d-flex">
              <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Small (2,319)</span>
            </label>
            <label for="s_md" class="d-flex">
              <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span class="text-black">Medium (1,282)</span>
            </label>
            <label for="s_lg" class="d-flex">
              <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span class="text-black">Large (1,392)</span>
            </label>
          </div>
          

          <div class="mb-4">
            <h3 class="mb-3 h6 text-uppercase text-black d-block">Màu sắc </h3>
            <a href="#" class="d-flex color-item align-items-center">
              <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Red
                (2,429)</span>
            </a>
            <a href="#" class="d-flex color-item align-items-center">
              <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Green
                (2,298)</span>
            </a>
            <a href="#" class="d-flex color-item align-items-center">
              <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Blue
                (1,075)</span>
            </a>
            <a href="#" class="d-flex color-item align-items-center">
              <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span class="text-black">Purple
                (1,075)</span>
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="site-section site-blocks-2">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7 site-section-heading pt-4">
              <h2>Có thể bạn cũng thích</h2>
            </div>
          </div>
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
    </div>

  </div>
</div>

<script>
$('.add-to-cart-form').submit(function (e) {
    e.preventDefault();

    $.ajax({
        type: 'POST',
        url: '<?=$SITE_URL?>/view/cart/?action=addCart',
        data: $(this).serializeArray(),
        success: function (response) {
            response =JSON.parse(response);
            if (response.status == 0) {
              alert(response.message);
            }else {
              alert(response.message);  
              var countElement = $('#count');
                var currentCount = parseInt(countElement.text());
                countElement.text(currentCount + 1);    
            }
        },
    });

    return false;
});

</script>