<div class="container-fluid">
	<div class="row">
	  <div class="col-md-9">
			<div class="row" data-aos="fade-in">
				<div class="col-md-4 mb-3">
					<div class="card p-4">
						<div class="d-flex justify-content-between">
							<div class="btn card-icon-score" style="background-color: #d0e1fd; margin-right:1rem">
								<i class="bi-files text-primary"></i>
							</div>

							<div>
								<h6 class="text-black-50 mb-2"><strong>Total Data Survey</strong></h6>
								<h1 style="float:right; margin-bottom: 0">
									<strong><?= $total_survey ?></strong> 
									<span style="font-size: 1rem">KK</span>
								</h1>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="card p-4">
						<div class="d-flex justify-content-between">
							<div class="btn card-icon-score" style="background-color: #80f1af; margin-right:1rem">
								<i class="bi-file-earmark-check text-success"></i>
							</div>

							<div>
								<h6 class="text-black-50 mb-2"><strong>Terisi Lengkap</strong></h6>
								<h1 style="float:right; margin-bottom: 0">
									<strong><?= $terisi_lengkap ?></strong> 
									<span style="font-size: 1rem">KK</span>
								</h1>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="card p-4">
						<div class="d-flex justify-content-between">
							<a href="#" onclick="return alert()">
								<div class="btn card-icon-score" style="background-color: #feddc7; margin-right:1rem">
									<i class="bi-file-earmark-excel text-danger"></i>
								</div>
							</a>

							<div>
								<h6 class="text-black-50 mb-2"><strong>Tidak Terisi Lengkap</strong></h6>
								<h1 style="float:right; margin-bottom: 0">
									<strong><?= $tidak_terisi_lengkap ?></strong> 
									<span style="font-size: 1rem">KK</span>
								</h1>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="card" data-aos="fade-in">
			  <div class="row mb-1">
				<div class="col-md-8">
				  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#export_data"><i class="bi-file-earmark-arrow-down"></i>
				    &nbsp;Export Data
				  </button>
				  <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#batas_skor"><i class="bi-filter-square"></i>
				    &nbsp;Batas Skor
				  </button>
				  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#jumlah_data"><i class="bi-filter-square"></i>
				    &nbsp;Jumlah Data
				  </button>
				</div>
				<div class="col-md-4 pull-right">
				  <div class="input-group">
						<input id="searching" class="form-control form-control-sm" placeholder="Cari Data ...">
						<select id="pagelength" class="input-group-text" readonly>
						  <option value="10">10</option>
						  <option value="25">25</option>
						  <option value="50">50</option>
						  <option value="100">100</option>
						</select>
				  </div>
				</div>
			  </div>
			  <table id="table_data" class="table table-bordered table-striped" width="100%">
					<thead class="bg-secondary text-light" style="background-color: #8b8b8b">
			    	<tr>
						<th width="20">#</th>
				        <th width="100">Kecamatan</th>
				        <th width="100">Desa</th>
				        <th width="100">Nomor KK</th>
				        <th width="100">Nama Kepala Keluarga</th>
				        <th width="100">Total Skor</th>
				        <th width="100">Keterangan</th>
				        <th width="100">Status Lahan</th>
				        <th width="100">Luas Lantai</th>
				        <th width="100">Kondisi Dinding</th>
				        <th width="100">Kondisi Atap</th>
				        <th width="100">Jumlah Kamar</th>
				        <th width="20">Pilihan</th>
				    </tr>
			    </thead>
			  </table>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card" data-aos="fade-in">
				<div class="card-body">
					<h6 class="text-black-50 mb-2"><strong>Rekapitulasi Kecamatan</strong> (Batas Skor = <?= $this->session->userdata('batas_skor') ?>) <strong>:</strong></h6>
					<ol class="list-group list-group-numbered">
						<?php foreach($rekapitulasi_kecamatan as $data) { ?>
						  <li class="list-group-item d-flex justify-content-between align-items-start">
						    <div class="ms-2 me-auto">
						      <div class="fw-bold"><?= $data['kecamatan'] ?></div>
						    </div>
						    <span class="badge bg-primary rounded-pill"><?= $data['count_kecamatan'] ?></span>
						  </li>
						<?php } ?>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="export_data" data-bs-backdrop="static" data-bs-keyboard="false">
	  <div class="modal-dialog modal-dialog-scrollable">
	    <div class="modal-content">
	    	<div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Export Hasil Perangkingan</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      	</div>

	      <form id="form_export_skoring">
	      	<div class="modal-body">
			      <div class="mb-2">
					    <label class="form-label"><b>Batas Nilai Perangkingan</b></label>
					    <input id="batas_skor_value" type="number" class="form-control" value="0">
					    <div class="form-text">Isikan angka desimal dari 0.00 - 100</div>
					  </div>
		      </div>
		      <div class="modal-footer">
		        <button id="export_hasil_skoring" type="button" class="btn btn-success">Export</button>
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
		      </div>
		    </form>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="batas_skor" data-bs-backdrop="static" data-bs-keyboard="false">
	  <div class="modal-dialog modal-dialog-scrollable">
	    <div class="modal-content">
	    	<div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Tentukan Batas Perangkingan</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      	</div>

	      <form id="form_skoring">
	      	<div class="modal-body">
			      <div class="mb-2">
					    <label class="form-label"><b>Batas Nilai Perangkingan</b></label>
					    <input type="number" class="form-control" name="batas_skor" value="0" required>
					    <div class="form-text">Isikan angka desimal dari 0.00 - 100</div>
					  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Proses</button>
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
		      </div>
		    </form>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="jumlah_data" data-bs-backdrop="static" data-bs-keyboard="false">
	  <div class="modal-dialog modal-dialog-scrollable">
	    <div class="modal-content">
	    	<div class="modal-header">
	        <h5 class="modal-title" id="staticBackdropLabel">Tentukan Jumlah Data</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      	</div>

	      <form id="form_jumlah_data">
	      	<div class="modal-body">
			      <div class="mb-2">
					    <label class="form-label"><b>Jumlah Data Hasil Perangkingan</b></label>
					    <input type="number" class="form-control" name="jumlah_hasil_skor" required>
					    <div class="form-text">Isikan angka (tanpa titik atau koma)</div>
					  </div>
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary">Proses</button>
		        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
		      </div>
		    </form>
	    </div>
	  </div>
	</div>
</div>

<script>
	/* Export Data */
  $("#export_hasil_skoring").click(function () {
    let batas_skor = $('#batas_skor_value').val();

    if(batas_skor == "") {
    	Swal.fire({
        title: 'WARNING !',
        text: "Mohon isi terlebih dahulu batas nilai skoring !",
        icon: 'warning',
        showConfirmButton: true
      });
    } else {
    	window.open("<?= base_url() ?>score/export");
    }
  });

  /* Batas Skor */
	$("#form_skoring").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_skoring")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>score/setBatasSkor",
      data: data,
      dataType: "json",
      cache		: false,
			contentType	: false,
			processData	: false,
      // encode: true,
    })
    .done(function (data) {
      if(data.success == true) {
        location.reload();
      } else {
        $.each(data.errors, function(index, value) {
          $.notify(value, "error");
        })
      }
    })
    .fail(function () {
      $.notify("Terjadi masalah saat koneksi ke server !");
    });
  });

  /* Jumlah Data */
	$("#form_jumlah_data").submit(function (event) {
    event.preventDefault();
    var data = new FormData($("#form_jumlah_data")[0]);

    $.ajax({
      type: "POST",
      url: "<?= base_url() ?>score/setJumlahData",
      data: data,
      dataType: "json",
      cache		: false,
			contentType	: false,
			processData	: false,
      // encode: true,
    })
    .done(function (data) {
      if(data.success == true) {
        location.reload();
      } else {
        $.each(data.errors, function(index, value) {
          $.notify(value, "error");
        })
      }
    })
    .fail(function () {
      $.notify("Terjadi masalah saat koneksi ke server !");
    });
  });
</script>