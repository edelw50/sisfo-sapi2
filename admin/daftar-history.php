<?php 
require 'functions.php';
include('template/header.php');
echo '<title>Halaman Peternak</title>';
include('template/navbar-peternak.php');
echo '<h3>Daftar History</h3>';
echo '<hr>';
echo '</div>';
echo '</div>';

// print_r($_POST);

if(isset($_POST["generate-qr"]) ){
    
    //cek data berhasil ditambahkan/tidak
    if( generateqr($_POST) > 0){
         ?> .
<div class="alert alert-success mt-4" role="alert">
    Data berhasil ditambahkan!
</div>
.
<?php 
    } else {
         ?> .
<div class="alert alert-danger" role="alert">
    Data gagal ditambahkan!
</div> . <?php
    }
}

?>

<div class="row vh-100 bg-light rounded">
    <div class="col">
        <br>
        <!-- modal jenis -->
        
        <table id="tablehistory" class="display">
            <thead>
                <tr class="">
                    <th>id</th>
                    <th>id_user</th>
                    <th>action</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td>id</td>
                    <td>id_user</td>
                    <td>action</td>
                    <td>created_at</td>
                    <td>updated_at</td>
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

<!-- Select -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> -->


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
    $('#tablehistory').DataTable({
        "fnCreatedRow": function(nRow, aData, iDataIndex) {
            $(nRow).attr('id', aData[0]);
        },
        // 'scrollX': 'true',
        'serverSide': 'true',
        'processing': 'true',
        'paging': 'true',
        'order': [],
        'ajax': {
            'url': 'admin/history/fetch_data.php',
            'type': 'post',
        },
        "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [4]
            },

        ]
    });
});
</script>
</body>

</html>