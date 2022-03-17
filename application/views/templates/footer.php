
    </div>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script> -->
  <script src="<?= base_url('assets/'); ?>dist/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.js"></script>
  <script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url('assets/'); ?>dist/js/fnPagingInfo.js"></script>

  <!-- AOS -->
  <script src="<?= base_url('assets/'); ?>dist/js/aos.js"></script>
  <script>
    AOS.init({
      delay: 100,
      duration: 1000,
    });
  </script>

  <script>
    $(".form-control").attr("autocomplete", "off");

    $("#bagian_no_ruta").hide();
    $("#status_lahan").hide();
    $("#kondisi_dinding").hide();
    $("#kondisi_atap").hide();
    $("#daya_listrik").hide();
    $("#id_pelanggan").hide();
    $("#jenis_toilet").hide();
    $("#lahan_luas").attr("disabled", true);
    $("#detail_usaha").hide();

    $("#hasil_pencacahan").change(function() {
      if(this.value == 6) {
        $("#bagian_no_ruta").show();
        $("#no_urut_ruta").focus();
      } else {
        $("#bagian_no_ruta").val("");
        $("#bagian_no_ruta").hide();
      }
    });

    $("#status_bangunan_value").change(function() {
      if(this.value == 1) {
        $("#status_lahan").show();
        $("#status_lahan_value").focus();
      } else {
        $("#status_lahan").val("");
        $("#status_lahan").hide();
      }
    });

    $("#jenis_dinding_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3) {
        $("#kondisi_dinding").show();
        $("#kondisi_dinding_value").focus();
      } else {
        $("#kondisi_dinding").hide();
        $("#kondisi_dinding").val("");
      }
    });

    $("#jenis_atap_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3 || this.value == 4) {
        $("#kondisi_atap").show();
        $("#kondisi_atap_valuei").focus();
      } else {
        $("#kondisi_atap").hide();
        $("#kondisi_atap").val("");
      }
    });

    $("#sumber_listrik_value").change(function() {
      if(this.value == 1) {
        $("#daya_listrik").show();
        $("#id_pelanggan").show();
        $("#daya_listrik_value").focus();
      } else {
        $("#daya_listrik").hide();
        $("#daya_listrik").val("");
        $("#id_pelanggan").hide();
        $("#id_pelanggan").val("");
      }
    });

    $("#status_toilet_value").change(function() {
      if(this.value != 6) {
        $("#jenis_toilet").show();
        $("#jenis_toilet_value").focus();
      } else {
        $("#jenis_toilet").hide();
        $("#jenis_toilet").val("");
      }
    });

    $("#lahan").change(function() {
      if(this.value == "Ya") {
        $("#lahan_luas").attr("disabled", false);
        $("#lahan_luas").focus();
      } else {
        $("#lahan_luas").attr("disabled", true);
        $("#lahan_luas").val("");
      }
    });

    $("#memiliki_usaha").change(function() {
      if(this.value == "Ya") {
        $("#detail_usaha").show();
        $("#detail_usaha").find('input').empty();
      } else {
        $("#detail_usaha").hide();
        $("#detail_usaha").val("");
      }
    });
  </script>
</body>
</html>