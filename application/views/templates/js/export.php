<script>
  var table_export = $('#table_export').DataTable({
  	bInfo : false,
  	bLengthChange : false,
  });

  $('#search_desa').on('keyup', function(){
	  table_export.search(this.value).draw();
	});
</script>