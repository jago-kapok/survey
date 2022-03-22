
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

    /* ============================ */
    /* Number Only              
    /* ============================ */
    $('.number').keypress(function(event){
      var charCode = event.keyCode
      if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
        return false;
      return true;
    });

    $.notify.defaults({
      autoHideDelay: 5000
    });

    $("#bagian_no_ruta").hide();
    $("#status_lahan").hide();
    $("#kondisi_dinding").hide();
    $("#kondisi_atap").hide();
    $("#daya_listrik").hide();
    $("#id_pelanggan").hide();
    $("#jenis_toilet").hide();
    $("#lahan_luas").attr("disabled", true);
    // $("#detail_usaha").hide();

    $("#hasil_pencacahan").change(function() {
      if(this.value == 6) {
        $("#bagian_no_ruta").show();
        $("#no_urut_ruta").focus();
      } else {
        $("#bagian_no_ruta").hide();
      }
    });

    $("#status_bangunan_value").change(function() {
      if(this.value == 1) {
        $("#status_lahan").show();
        $("#status_lahan_value").focus();
      } else {
        $("#status_lahan").hide();
        $("#status_lahan_value").val("");
      }
    });

    $("#jenis_dinding_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3) {
        $("#kondisi_dinding").show();
        $("#kondisi_dinding_value").focus();
      } else {
        $("#kondisi_dinding").hide();
        $("#kondisi_dinding_value").val("");
      }
    });

    $("#jenis_atap_value").change(function() {
      if(this.value == 1 || this.value == 2 || this.value == 3 || this.value == 4) {
        $("#kondisi_atap").show();
        $("#kondisi_atap_valuei").focus();
      } else {
        $("#kondisi_atap").hide();
        $("#kondisi_atap_value").val("");
      }
    });

    $("#sumber_listrik_value").change(function() {
      if(this.value == 1) {
        $("#daya_listrik").show();
        $("#id_pelanggan").show();
        $("#daya_listrik_value").focus();
      } else {
        $("#daya_listrik").hide();
        $("#daya_listrik_value").val("");
        $("#id_pelanggan").hide();
        $("#id_pelanggan_value").val("");
      }
    });

    $("#status_toilet_value").change(function() {
      if(this.value != 6) {
        $("#jenis_toilet").show();
        $("#jenis_toilet_value").focus();
      } else {
        $("#jenis_toilet").hide();
        $("#jenis_toilet_value").val("");
      }
    });

    $("#lahan").change(function() {
      if(this.value == "Ya") {
        $("#lahan_luas").attr("disabled", false);
        $("#lahan_luas").focus();
      } else {
        $("#lahan_luas").attr("disabled", true);
        $("#lahan_luas_value").val("");
      }
    });

    $("#memiliki_usaha").change(function() {
      if(this.value == "Ya") {
        $("#detail_usaha").show();
        $("#detail_usaha").find('input').empty();
      } else {
        $("#detail_usaha").hide();
        $("#detail_usaha_value").val("");
      }
    });

    // Penggantian Password
    $("#form_change_password").submit(function (event) {
      event.preventDefault();
      var data = new FormData($("#form_change_password")[0]);

      $.ajax({
        type: "POST",
        url: "<?= base_url() ?>admin/changePassword",
        data: data,
        dataType: "json",
        cache       : false,
        contentType : false,
        processData : false,
      })
      .done(function (data) {
        $("#ubahPassword").modal('hide');

        if(data.success == true) {
          Swal.fire({
            icon: 'success',
            title: 'Password Berhasil Diubah !',
            showConfirmButton: false,
            timer: 1200
          });
        } else {
          $.each(data.errors, function(index, value) {
            $.notify(value, "error");
          })
        }
      })
      .fail(function () {
        Swal.fire({
          icon: 'warning',
          title: 'Koneksi Bermasalah !',
          text: 'Tidak dapat terhubung dengan server.',
          showConfirmButton: true
        })
      });
    });
  </script>
</body>
</html>