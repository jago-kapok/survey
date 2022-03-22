<div class="container-fluid" data-aos="zoom-in">
  <div class="container" style="margin-top:8%">
    <div class="col-md-8 offset-md-2">
	  <div class="card">
      <div class="d-flex justify-content-around p-2 align-items-center">
        <div>
          <center><img src="<?= base_url() ?>assets/dist/img/vector-login.jpg" width="300"></center>
        </div>
        <div>
          <h5 class="mb-3">Survey Pemutakhiran DTKS</h5>
          <form action="auth/login" method="POST">
            <?= $this->session->flashdata('message'); ?>
            <label class="text-secondary">Username</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="bi-person"></i></span>
              <input type="text" name="user_name" class="form-control" placeholder="Username" autofocus required>
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
