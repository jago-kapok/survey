<div class="container-fluid mt-2">
<div class="row" data-aos="zoom-in">
	<?php if($this->session->userdata('user_password') == $pass->default_password) { ?>
		<div class="col-md-12">
			<div class="alert alert-danger mx-1" role="alert">
				1. Mohon segera melakukan penggantian password.<br>
				2. Segala bentuk kebocoran data yang diakibatkan karena belum mengganti password, menjadi tanggungjawab pemilik akun.
			</div>
		</div>
	<?php } ?>

	<div class="col-md-3 mb-2">
		<div class="card p-4">
			<div class="d-flex justify-content-between mb-1">
				<div>
					<h6 class="text-black-50 mb-2"><strong>Survey Hari Ini</strong></h6>
					<h3 class=""><strong><?php echo $survey_hari_ini ?></strong> <span style="font-size: 1rem">KK</span></h3>
				</div>

				<div class="btn card-icon" style="background-color: #d0e1fd">
					<i class="bi-file-earmark-check text-primary"></i>
				</div>
			</div>
			<span class="text-muted">Selisih <span style="color: <?php echo $perbandingan_color ?>"><strong><?php echo $perbandingan_sekarang_kemarin ?></strong></span> dari hari sebelumnya</span>
		</div>
	</div>

	<div class="col-md-3 mb-2">
		<div class="card p-4">
			<div class="d-flex justify-content-between mb-1">
				<div>
					<h6 class="text-black-50 mb-2"><strong>Total Survey Masuk</strong></h6>
					<h3 class=""><strong><?php echo $total_survey ?></strong> <span style="font-size: 1rem">KK</span></h3>
				</div>

				<div class="btn card-icon" style="background-color: #80f1af">
					<i class="bi-file-earmark-text text-success"></i>
				</div>
			</div>
			<span class="text-muted"><span style="color: #22c55e"><strong><i class="bi-arrow-up"></i><?php echo round($total_survey_persen, 2) ?>%</strong></span> dari total sebelumnya</span>
		</div>
	</div>

	<div class="col-md-3 mb-2">
		<div class="card p-4">
			<div class="d-flex justify-content-between mb-1">
				<div>
					<h6 class="text-black-50 mb-2"><strong>Kecamatan</strong></h6>
					<h3 class=""><strong>28</strong></h3>
				</div>

				<div class="btn card-icon" style="background-color: #ead6fd">
					<i class="bi-map text-secondary"></i>
				</div>
			</div>
			<span class="text-muted"><span style="color: #22c55e"><strong></strong></span>Jumlah kecamatan</span>
		</div>
	</div>

	<div class="col-md-3 mb-2">
		<div class="card p-4">
			<div class="d-flex justify-content-between mb-1">
				<div>
					<h6 class="text-black-50 mb-2"><strong>Desa / Kelurahan</strong></h6>
					<h3 class=""><strong>430</strong></h3>
				</div>

				<div class="btn card-icon" style="background-color: #feddc7">
					<i class="bi-geo-alt text-danger"></i>
				</div>
			</div>
			<span class="text-muted">Jumlah desa dan kelurahan</span>
		</div>
	</div>
</div>

<div class="card mt-3" data-aos="fade-up">
	<?php if($this->session->userdata('user_level') == 3) { ?>
		<div class="row">
			<div class="dropdown col-md-5">
			  <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			    Urutkan berdasarkan
			  </button>
			  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			  	<li><a class="dropdown-item" href="javascript:void(0)" onclick="orderData('kecamatan', 'asc')">Kecamatan (A-Z)</a></li>
				  <li><a class="dropdown-item" href="javascript:void(0)" onclick="orderData('kecamatan', 'desc')">Kecamatan (Z-A)</a></li>
			    <li><a class="dropdown-item" href="javascript:void(0)" onclick="orderData('total', 'asc')">Data Paling Sedikit</a></li>
			    <li><a class="dropdown-item" href="javascript:void(0)" onclick="orderData('total', 'desc')">Data Terbanyak</a></li>
			  </ul>
			</div>
		</div>
	<?php } ?>
	<div id="chart" class="mt-3"></div>
</div>
</div>

<script>
	$(document).ready(function() {
		<?php if($this->session->userdata('user_password') == $pass->default_password) { ?>
			Swal.fire({
	      title: 'PENTING !',
	      text: "Harap segera melakukan penggantian password anda.",
	      icon: 'warning',
	      showCancelButton: false,
	      confirmButtonColor: '#3085d6'
	    });
		<?php } ?>
	});

	var options = {
	  chart: {
	  	id: 'homeChart',
	    type: 'bar',
	    height: 400,
	    toolbar: {
		  	show: true
		  }
	  },
	  dataLabels: {
      enabled: true,
      style: {
        fontSize: "20px",
        fontFamily: "Helvetica, Arial, sans-serif",
        fontWeight: "bold"
      }
    },
	  title: {
	    text: "Total Hasil Pencacahan di Kab. Bojonegoro (dalam satuan KK)",
	    align: 'left',
	    style: {
	    	fontSize: '15px',
	    	fontWeight: 'bold',
	    	fontFamily: 'Arial'
	    }
	  },
	  series: [{
	    name: 'Survey',
	    data: [
	    	<?php foreach ($grafik_survey as $data) : ?>
					<?= $data['total']; ?>,
				<?php endforeach; ?>
	    ]
	  }],
	  xaxis: {
	    categories: [
	    	<?php foreach ($grafik_survey as $data) : ?>
					'<?= $data['category']; ?>',
				<?php endforeach; ?>
	    ]
	  }
	}

	var chart = new ApexCharts(document.querySelector("#chart"), options);

	chart.render();

	function orderData(value, order) {
		var url = '<?= base_url() ?>admin/getChart/' + value + '/' + order;

		$.getJSON(url, function(response) {
			var categories = [];

			$.each(response, function(key, val) {
				categories.push(val.x);
			});

		 	chart.updateOptions({
		    xaxis: {
		      categories: categories
		    }
		  });

			chart.updateSeries([{
		    name: 'Survey',
		    data: response
		  }]);			
		});
	}
</script>