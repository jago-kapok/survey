<div class="container-fluid">
	<div class="card" data-aos="fade-in">
	  <div class="row mb-1">
		<div class="col-md-8">
		  <!-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#form_create" onclick="alert('Tahap Pengembangan ! Gunakan pencarian melalui input box')"><i class="bi-filter-square"></i>
		    &nbsp;&nbsp;Filter Data
		  </button> -->
		  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#export_data"><i class="bi-file-arrow-down"></i>
		    &nbsp;Export Data
		  </button>
		  <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#skoring_data"><i class="bi-bar-chart-line-fill"></i>
		    &nbsp;Perangkingan
		  </button>
		</div>
		<div class="col-md-4 pull-right">
		  <div class="input-group">
			<input id="searching" class="form-control form-control-sm" placeholder="Cari Data ...">
			<div class="input-group-prepend">
			  <div class="">
				<select id="pagelength" class="input-group-text" readonly>
				  <option value="10">10</option>
				  <option value="25">25</option>
				  <option value="50">50</option>
				  <option value="100">100</option>
				</select>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <table id="table_data" class="table table-bordered table-striped" width="100%">
			<thead class="bg-secondary text-light" style="background-color: #8b8b8b">
	    	<tr>
					<th width="20">#</th>
	        <th width="100">Tanggal Input</th>
	        <th width="200">Kecamatan</th>
	        <th width="200">Desa</th>
	        <th width="200">Nomor KK</th>
	        <th width="200">Nama Kepala Keluarga</th>
	        <th width="200">Jumlah Anggota Keluarga</th>
	        <th width="100">Pilihan</th>
	      </tr>
	    </thead>
	  </table>
	</div>
</div>

<div class="modal fade" id="export_data" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Export Data ke Excel</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<input id="search_desa" class="form-control form-control-sm" placeholder="Cari Nama Desa / Kelurahan ...">
        <table id="table_export" class="table">
        	<thead>
        		<tr>
        			<th>Nama Desa / Kelurahan</th>
        			<th>Export data KK</th>
        			<th>Export data Anggota KK</th>
        		</tr>
        	</thead>
        	<tbody>
        		<?php foreach($data_export as $data) { ?>
	        		<tr>
		        		<td><?php echo $data['user_fullname'] ?></td>
		        		<td>
		        			<a href="<?= base_url() ?>export/data_kk/<?php echo $data['user_name'] ?>" class="btn btn-sm btn-success btn-block" target="_blank">
		        				<i class="bi-file-arrow-down"></i>&nbsp;&nbsp;Export KK
		        			</a>
		        		</td>
		        		<td>
		        			<a href="<?= base_url() ?>export/data_anggota/<?php echo $data['user_name'] ?>" class="btn btn-sm btn-success btn-block" target="_blank">
		        				<i class="bi-file-arrow-down"></i>&nbsp;&nbsp;Export Anggota
		        			</a>
		        		</td>
		        	</tr>
		        <?php } ?>
        	</tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="skoring_data" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <form id="form_skoring">
      	<input type="hidden" name="batas_skor" value="0">
      	<input type="hidden" name="jumlah_hasil_skor" value="<?= $total_survey ?>">
	      <div class="modal-body">
	      	<center>
	      		<br>
	      		<span class="text-info" style="font-size: 5rem"><i class="bi-question-circle"></i></span>
	      		<br>
	      		<h6>Jalankan proses generate perangkingan ?</h6>
	      	</center>
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-primary">Proses</button>
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
	      </div>
	    </form>
    </div>
  </div>
</div>

<script>
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
        window.location = "<?= base_url() ?>admin/score";
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