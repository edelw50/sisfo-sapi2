<?php 
require 'functions.php';
include('template/header.php');
echo '<title>Halaman Admin</title>';
include('template/navbar.php');
echo '<h3>Daftar Vaksin Sapi</h3>';
echo '<hr>';
echo '</div>';
echo '</div>';
?>

<div class="row vh-100 bg-light rounded">
    <div class="col">
        <br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVaksin"><i
                class="fa-solid fa-circle-plus me-2"></i>Tambah Vaksin Sapi</button>
        <br><br>
        <!-- modal vaksin -->
        <?php include ('template/modal-vaksin.php'); ?>
        <table id="tablevaksin" class="display">
            <thead>
                <tr class="">
                    <th>Id</th>
                    <th>Vaksin</th>
                    <th>Input Date</th>
                    <th>Update Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>Id</td>
                    <td>Vaksin</td>
                    <td>Input Date</td>
                    <td>Update Date</td>
                    <td>Actions</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<!-- Blank End -->

<!-- footer -->
<?php include ('template/footer.php'); ?>
</div>
<!-- Content End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> -->

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!-- Datatables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#tablevaksin').DataTable({
        // "columnDefs": [
        // { "width": "60%", "targets": 2 },
        // { "width": "13%", "targets": 5 }
        // ],
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id_vaksin', aData[0]);
        },
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': 'admin/vaksin/fetch_data.php',
            'type': 'post',
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [4]
            },

        ]
    });
});

function submitForm() {
    $.ajax({
        url: "admin/vaksin/add_data.php",
        type: "post",
        data: $('form#addVaksinForm').serialize(),
        success: function(data) {
            let json = JSON.parse(data);
            let status = json.status;
            if (status) {
                mytable = $('#tablevaksin').DataTable();
                mytable.draw();
                $('#addVaksinForm input').val('');
                $('#addPakan').modal('hide');
            } else {
                alert('failed');
            }
        }
    });
}

$(document).ready(function() {
    $('#addVaksinForm').on('submit', function() {
        submitForm();
        return false;
    });
})


function updateForm() {
    $.ajax({
        url: "admin/vaksin/update_data.php",
        type: "post",
        data: $('form#updateVaksinForm').serialize(),
        success: function(data) {
            var json = JSON.parse(data);
            var status = json.status;
            let u = $('#tablevaksin tbody tr[id_vaksin]').text();
            console.log("hasil " + u);
            table = $('#tablevaksin').DataTable();
            var row = table.row("[id='" + trid + "']");
            var dataReturn = JSON.parse(data);
            if (dataReturn.status) {
                $('.alert-true').removeClass('d-none');
                $('.alert-true').text(dataReturn.msg);
            } else {
                $('.alert-false').removeClass('d-none');
                $('.alert-false').text(dataReturn.msg);
            }
            $('#updateVaksin').on('hidden.bs.modal', function() {
                if (!$('.alert-true').hasClass('d-none')) {
                    $('.alert-true').addClass('d-none');
                    $('.alert-true').text('')
                }
                if (!$('.alert-false').hasClass('d-none')) {
                    $('.alert-false').text('')
                    $('.alert-false').addClass('d-none');
                }
                table.draw();
            })
        }
    });
}


$(document).ready(function() {
    $('#updateVaksinForm').on('submit', function() {
        updateForm();
        return false;
    });
})


$('#tablevaksin').on('click', '.editbtn ', function(event) {
    var table = $('#tablevaksin').DataTable();
    var trid = $(this).closest('tr').attr('id');
    var id = $(this).data('id');
    $('#updateVaksin').modal('show');
    $.ajax({
        url: "admin/vaksin/get_single_data.php",
        data: {
            id: id
        },
        type: 'post',
        success: function(data) {
            var json = JSON.parse(data);
            $('#id').val(id);
            $('#vaksin').val(json.vaksin);
            $('#trid').val(trid);
        }
    });
});
$(document).on('click', '.deleteBtn', function(event) {
    var table = $('#tablevaksin').DataTable();
    event.preventDefault();
    var id = $(this).data('id');
    if (confirm("Are you sure want to delete this Jenis Sapi ? ")) {
        $.ajax({
            url: "admin/vaksin/delete_data.php",
            data: {
                id: id
            },
            type: "post",
            success: function(data) {
                var json = JSON.parse(data);
                status = json.status;
                if (status == 'success') {
                    $("#" + id).closest('tr').remove();
                    table.draw();
                } else {
                    alert('Failed');
                    return;
                }
            }
        });
    } else {
        return null;
    }
});
</script>
</body>

</html>