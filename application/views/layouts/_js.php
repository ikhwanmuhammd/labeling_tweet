<!-- JavaScript -->
<script src="<?php echo base_url('assets'); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/dist/js/demo.js"></script>
<!-- Sweet Alert -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- DateTime Picker -->
<script src="<?php echo base_url('assets'); ?>/vendor/AdminLTE-3/plugins/datetimepicker/jquery.datetimepicker.full.min.js"></script>


<script>
  window.onload = function() {
    <?php if ($this->session->flashdata('msg') != '') {
      echo "effect_msg();";
    } ?>
  }

  function effect_msg_form() {
    $('.form-msg').slideDown(1000),
      setTimeout(function() {
        $('.form-msg').slideUp(1000);
      }, 3000)
  }

  function effect_msg() {
    $('.msg').show(1000),
      setTimeout(function() {
        $('.msg').fadeOut(1000);
      }, 3000)
  }
</script>

<script>
  $(function() {
    $("#example1_tweet").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/tweet/get_data_tweet') ?>",
        "type": "POST"

      },


      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      },

    });

    $("#example1_tweet2").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/tweet_2/get_data_tweet') ?>",
        "type": "POST"

      },


      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      },

    });

    $("#example2_survei1").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/survei_1/get_data_survei_1') ?>",
        "type": "POST"
      },

      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      }
    });

    $("#example2_survei2").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/survei_2/get_data_survei_2') ?>",
        "type": "POST"
      },

      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      }
    });

    $("#example2_survei3").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/survei_3/get_data_survei_3') ?>",
        "type": "POST"
      },

      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      }
    });

    $("#example2_survei4").DataTable({
      "processing": true,
      "serverSide": true,
      "order": [],

      "ajax": {
        "url": "<?php echo site_url('admin/survei_4/get_data_survei_4') ?>",
        "type": "POST"
      },

      "columnDefs": [{
        "targets": [0],
        "orderable": false,
      }, ],
      "language": {
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Maaf, data tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total data)"
      }
    });

    $("#example1_user").DataTable({
      "responsive": true,
      "autoWidth": false,
      "language": {
        "lengthMenu": "Tampilkan _MENU_ user per halaman",
        "zeroRecords": "Maaf, user tidak ditemukan",
        "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
        "infoEmpty": "Tidak ditemukan",
        "infoFiltered": "(hasil dari _MAX_ total user)"
      }
    });
  });
</script>


<!-- modal -->
<script>
  $('#modal-edit-anotator').on('show.bs.modal', function(event) {

    var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
    var modal = $(this)

    // Isi nilai pada field
    $('#id_tweet').val(div.data('id'));
    $('#idtweet').val(div.data('id'));
    $('#ubahanotator').val(div.data('anotator'));
  })
</script>

<!-- Flashdata -->
<script type="text/javascript">
  const flashData = $('.flash-data').data('flashdata');
  const halaman = $('.halaman').data('halaman');
  if (flashData) {
    Swal.fire({
      title: halaman,
      text: 'Berhasil ' + flashData,
      icon: 'success'
    });
  }

  $('#tombol_hapus').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success m-3',
        cancelButton: 'btn btn-danger m-3'
      },
      buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
      title: 'Apakah Anda Yakin?',
      text: "Hapus " + halaman,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          halaman,
          'Batal Dihapus ',
          'error'
        );
      }
    });
  });

  $('#tombol_ulang').on('click', function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success m-3',
        cancelButton: 'btn btn-danger m-3'
      },
      buttonsStyling: false
    });

    swalWithBootstrapButtons.fire({
      title: 'Apakah Anda Yakin?',
      text: "Ulangi " + halaman,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Ya',
      cancelButtonText: 'Tidak',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        document.location.href = href;
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          halaman,
          'Batal Ulangi ',
          'error'
        );
      }
    });
  });
</script>

<!-- datetimepicker -->
<script>
  $('#dnt_tweet').datetimepicker({
    timepicker: true,
    datepicker: true,
    format: 'd-m-Y h:m',
    value: Date.now(),
    hours12: false,
    step: 30,
    yearStart: 2000,
    yearEnd: 2020
  })
  $('#dnt_reply').datetimepicker({
    timepicker: true,
    datepicker: true,
    format: 'd-m-Y h:m',
    value: Date.now(),
    hours12: false,
    step: 30,
    yearStart: 2000,
    yearEnd: 2020
  })
</script>

<script>
  $('#modal-tambah-anotator').on('show.bs.modal', function(event) {
    var total_anotator = document.getElementById("example1_anot").rows.length;
    var anotator_baru = total_anotator;

    $('#id_anotator').val(anotator_baru);
    $('#nama_anotator').val('Anotator ' + anotator_baru);
  })
</script>

<script>
  $('#password, #confirm_password').on('keyup', function() {
    if ($('#password').val() == $('#confirm_password').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else
      $('#message').html('Not Matching').css('color', 'red');
  });
</script>