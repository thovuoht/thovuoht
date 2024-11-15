<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="index.html">Home</a> /</span> <strong class="text-black">Login</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">

    <div class="row mb-5">
      <div class="col-md-12">
        <div class="border p-4 rounded" role="alert">
          Bạn chưa có tài khoản? <a href="#">Click vào đây </a> để đăng ký
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 align-items-center justify-content-center">
        <!-- New login form -->
        <div class="row mb-5">
          <div class="col-md-12">
            <h2 class="h3 mb-3 text-black">Login</h2>
              <?php 
if(strlen($MESSAGE)){
    echo '<h6 class="bg-danger text-light p-4 ">'.$MESSAGE.'</h6>';
}
?>
            <form id="login-form" action="" method="POST">
              <div class="form-group">
                <label for="username" class="text-black">Email</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password" class="text-black">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg py-3 btn-block" name="dangnhap"> Đăng nhập </button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>