<div class="container-fluid mt-2">
<div class="card mt-3" data-aos="fade-in">
  <div class="row mb-1">
	<div class="col-md-8">
	  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#form_create" onclick="alert('Tahap Pengembangan ! Gunakan pencarian melalui input box')"><i class="bi-filter-square"></i>
	    &nbsp;&nbsp;Filter Data
	  </button>
	</div>
	<div class="col-md-4 pull-right">
	  <div class="input-group">
		<input id="searching" class="form-control form-control-sm" placeholder="Cari Data ...">
		<div class="input-group-prepend">
		  <div class="">
			<select id="pagelength" class="form-control form-control-sm" readonly>
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