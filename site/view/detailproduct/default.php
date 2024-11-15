<style>
    .btn-lover {
        color: #007bff;
        border-color: #007bff;
        transition: color 0.3s, border-color 0.3s; 
        }

      
        .btn-lover:hover {
            color: #007bff; 
            border-color: #007bff; 
        }
        .checked {
  color: yellow;
  margin-bottom: 8px;
  margin-top: 10px;
}
.fa-star{
  margin-bottom: 10px;
}
.flex-container {
            display: flex;
            
        }
        h3 {
        font-size: 14px; 
        margin-right:10px;
        color:black;
        font-weight:lighter;
    }
    .flex-container h3 {
        display: inline-block; 
        margin-right: 10px; 
        border-right: 1px solid #ccc; 
        padding-right: 10px; 
    }

    
    .flex-container h3:last-child {
        border-right: none;
    }
h4{
  font-size: 14px; 
        margin-right:10px;
        color:red;
        font-weight:bold;
        cursor: pointer;
        
        
}
h4:hover{
  color:red;
  
}
.form-control {
      margin-top: 15px;
    }
.js-btn-minus{
  margin-top: 15px;

} 
.js-btn-plus{
  margin-top: 15px;
}  
.rating {
  position:absolute;
       
        right:12px;
        
    }
    
        
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="<?= $SITE_URL ?>/">Home</a> <span class="mx-2 mb-0">/</span> <strong
          class="text-black"><?= $detail['productName'];?></strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <?php ?>
    <form class="row" action="<?= $SITE_URL ?>/view/cart/?action=addCart" method="post" name="add-to-cart-form"  class="add-to-cart-form">
      <input type="hidden" name="id" value="<?= $detail['productId'];?>">
      <input type="hidden" name="name" value="<?= $detail['productName'];?>">
      <input type="hidden" name="price" value="<?= $detail['price'];?>">
      <input type="hidden" name="img" value="<?= $IMAGE_DIR.'/'.$detail['image'];?>">
      <div class="col-md-6">
        <img src="<?= $IMAGE_DIR ?>/<?php echo $detail['image']; ?>" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2 class="text-black">
          <?= $detail['productName'] ?>
        </h2>
        <div>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
   
        </div>
        
        <div class="flex-container">
        <h3>Đánh giá 4.7</h3>
        <h3>500+Lượt mua</h3>
        <h3>500+Đã bán</h3>
        <h4>Báo lỗi</h4>
        
    </div>
        
        <p>
          <?= $detail['description'] ?>
        </p>
        <p class="mb-4">
          <?= $detail['description'] ?>
        </p>
        <p><strong class="text-primary h4">$
            <?= $detail['price'] ?>

          </strong></p>
        <p>Liên hệ tư vấn và đặt mua: 18007200</p>
        <p><strong class="text-primary h4" >Lựa chọn chất liệu:
          </strong></p>
        <div class="mb-1 d-flex">
        <?php foreach ($sizes as $size): ?>
          <label for="option-sm" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm"
                name="shop-sizes" value="<?= $size['sizeId'] ?>" required></span> <span class="d-inline-block text-black"><?= $size['sizeName'] ?></span>
      <input type="hidden" name="price" value="<?= $detail['price'];?>">
              </label>
          <?php endforeach;?>
        </div>

          



        

                
        
        <p><strong class="text-primary h4" >Số lượng:
          </strong></p>
        <div class="mb-5">
          <div class="input-group mb-3" style="max-width: 120px;">
            <div class="input-group-prepend">
              <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center" name="quantity" value="1" placeholder=""
              aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append">
              <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
            </div>
          </div>
        </div>
        <label for="s_sm" class="d-flex">
              <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span class="text-black">Tôi đồng ý với những điều khoản, chính sách mua hàng tại Homedec</span>
            </label>
        <p><strong class="text-primary h4" >Vận chuyển:
          </strong></p>
          <p>HomeDec cung cấp dịch vụ giao hàng tận nơi, lắp ráp và sắp xếp vị trí theo đúng ý muốn của quý khách:

- MIỄN PHÍ giao hàng trong các Quận nội thành Tp.Hồ Chí Minh và Hà Nội, áp dụng cho các đơn hàng trị giá trên 10 triệu.

- Đối với khu vực các tỉnh lân cận: Tính phí hợp lý theo dựa trên quãng đường vận chuyển</p>
          
        
        <p><button name="addCart" class="buy-now btn btn-sm btn-primary">Thêm vào giỏ hàng</button> <button  name="addCart" class="buy-now btn btn-sm btn-lover">Thêm vào mục yêu thích</button></p> 
      </div>
    </form>
   
  </div>
</div>

<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 site-section-heading text-center pt-4">
        <h2>Các sản phẩm khác</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">
          <?php foreach ($products as $product): ?>
            <div class="item">
              <div class="block-4 text-center">
                <figure class="block-4-image">
                  <img src="<?= $IMAGE_DIR ?>/<?php echo $product['image']; ?>" alt="Image placeholder" class="img-fluid">
                </figure>
                <div class="block-4-text p-4">
                  <h3><a href="index.php?action=detailprod&id=<?php echo $product['productId'] ?>"><?php echo $product['productName']; ?></a></h3>
                  <p class="text-primary font-weight-bold">$
                    <?php echo $product['price']; ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="container mt-5">
  <div class="d-flex justify-content-center row">
    <div class="col-md-12">
      <div class="d-flex flex-column comment-section">
        <div class="bg-white p-2">
          <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
              src="https://i.imgur.com/RpzrMR2.jpg" width="60">
            <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">Marry
                Andrews</span><span class="date text-black-50">Shared publicly - Jan 2020</span></div>
          </div>
          
          <div class="mt-2">
            <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
          <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star"></span>
        </div>
        <div class="bg-white">
          <div class="d-flex flex-row fs-12">
            <div class="like p-2 cursor"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
            <div class="like p-2 cursor"><i class="fa fa-commenting-o"></i><span class="ml-1">Comment</span></div>
            <div class="like p-2 cursor"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
          </div>
        </div>
        
        <div class="bg-light p-2">
          <div class="d-flex flex-row align-items-start"><img class="rounded-circle"
              src="https://i.imgur.com/RpzrMR2.jpg" width="40"><textarea
              class="form-control ml-1 shadow-none textarea"></textarea></div>
          <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Post
              comment</button><button class="btn btn-outline-primary btn-sm ml-1 shadow-none"
              type="button">Cancel</button></div>
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
      url: '<?= $SITE_URL ?>/view/detailproduct/?action=addCart',
      data: $(this).serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        if (response.status == 0) {
          alert(response.message);
        } else {
          alert(response.message);
        }
        // console.log(response);
      },
    });

    return false;
  });

</script>