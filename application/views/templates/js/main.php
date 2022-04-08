<script>
var table = $("table#table_data").DataTable({
  processing 	: true,
  language	: {
    lengthMenu	: "_MENU_",
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
    url	: "<?= base_url('admin/getData'); ?>",
    type: "GET"
  },
  iDisplayLength: 10,
  columns: [
    {data: null,			    className: "text-left"},
    {data: "created_at",	className: "text-left"},
    {data: "kecamatan",	  className: "text-left"},
    {data: "nama_desa",	  className: "text-left"},
    {data: "no_kk_krt",		className: "text-left"},
    {data: "nama_krt",	  className: "text-left"},
    {data: "jumlah_art",	className: "text-right"},
    {
      data: "main_id",
        render: function(data, type, row) {
          <?php if($this->session->userdata('user_level') == 1) { ?>
            return '<a href="<?php base_url() ?>admin/view/' + data + '" class="btn btn-success btn-sm"><i class="bi-search"></i></a>&nbsp;<a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="hapusData(' + data + ')"><i class="bi-trash"></i></a>';
          <?php } else { ?>
            return '<a href="<?php base_url() ?>admin/view/' + data + '" class="btn btn-success btn-sm"><i class="bi-search"></i></a>';
          <?php } ?>
      }
    }	
  ],
  order: [0, 'desc'],
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

function hapusData(id)
{
  Swal.fire({
    title: 'PERHATIAN !',
    text: "Anda yakin ingin menghapus data survey ?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Ya',
    cancelButtonText: 'Batal'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "GET",
        url: "<?= base_url() ?>admin/delete_data/" + id,
        dataType: "json",
        processData: false,
        contentType: false,
        cache: false,
        // encode: true,
      })
      .done(function (data) {
        console.log(data);
        Swal.fire({
          icon: 'success',
          title: 'Data survey berhasil dihapus !',
          showConfirmButton: false,
          timer: 2000
        })

        table.draw();
      });
    }
  })
}
</script>