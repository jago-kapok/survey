<script>
var table = $("table#table_data").DataTable({
  processing 	: true,
  language	: {
    lengthMenu	: "_MENU_",
    infoFiltered : "",
    zeroRecords	: "<center>Tidak Ada Data</center>",
    processing	: "<center>Silakan Tunggu</center>",
    paginate	: {
      previous: "<<",
      next: ">>"
    },
  },
  bInfo 		: true,
  bLengthChange : false,
  serverSide	: true,
  scrollX		: true,
  ajax	: {
    url	: "<?= base_url('score/getData'); ?>",
    type: "GET"
  },
  iDisplayLength: 25,
  columns: [
    {data: null,			    className: "text-left"},
    {data: "kecamatan",	  className: "text-left"},
    {data: "nama_desa",	  className: "text-left"},
    {data: "no_kk_krt",		className: "text-left"},
    {data: "nama_krt",	  className: "text-left"},
    {data: "total_skor",	className: "text-right"},
    {data: "keterangan",  className: "text-left", visible: true},
    {data: "status_lahan",  className: "text-left", visible: false},
    {data: "luas_lantai",  className: "text-left", visible: false},
    {data: "kondisi_dinding",  className: "text-left", visible: false},
    {data: "kondisi_atap",  className: "text-left", visible: false},
    {data: "jumlah_kamar",  className: "text-left", visible: false},
    {
      data: "main_id",
        render: function(data, type, row) {
          <?php if($this->session->userdata('user_level') == 1) { ?>
            return '<a href="<?= base_url() ?>admin/view/' + data + '" class="btn btn-success btn-sm"><i class="bi-search"></i></a>';
          <?php } else { ?>
            return '<a href="<?= base_url() ?>admin/view/' + data + '" class="btn btn-success btn-sm"><i class="bi-search"></i></a>';
          <?php } ?>
      }
    }	
  ],
  order: [
    [5, 'desc'],
    [8, 'desc'],
    [9, 'asc'],
    [10, 'desc'],
    [11, 'desc'],
    [12, 'asc'],
  ],
  rowCallback: function(row, data, iDisplayIndex){
  	var info 	= this.fnPagingInfo();
  	var page 	= info.iPage;
  	var length 	= info.iLength;
  	var index 	= page * length + (iDisplayIndex + 1);
  	$("td:eq(0)", row).html(index);
  }
});

$('#searching').on('keyup', function(){
  table.search(this.value).draw();
});

$('select#pagelength').on('change', function(){
  table.page.len(this.value).draw();
});

$('.filter-category').on('click', function(){
  table.search(this.id).draw();
});
</script>