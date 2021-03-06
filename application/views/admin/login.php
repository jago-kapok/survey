<div class="container-fluid" data-aos="zoom-in">
  <div class="container" style="margin-top:8%">
    <div class="col-md-8 offset-md-2">
	  <div class="card">
      <div class="row">
        <div class="col-md-6 p-2">
          <center><img src="<?= base_url() ?>assets/dist/img/vector-login.jpg" width="300"></center>
        </div>
        <div class="col-md-6 p-4">
          <h5 class="mb-3">DAMISDA Kabupaten Bojonegoro</h5>
          <form action="auth/login" method="POST">
            <?= $this->session->flashdata('message'); ?>
            <label class="text-secondary">Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi-person"></i></span>
              <input type="text" name="user_name" class="form-control" placeholder="Username" required>
            </div>

            <label class="text-secondary">Password</label>
            <div class="input-group mb-4">
              <span class="input-group-text"><i class="bi-lock"></i></span>
              <input type="password" name="user_auth" class="form-control" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary btn-block" style="width:100px">Masuk</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
