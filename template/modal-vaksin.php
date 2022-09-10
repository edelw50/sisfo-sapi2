 <!-- modal edit vaksin -->
 <div class="modal fade" id="updateVaksin" tabindex="-1" aria-labelledby="updateVaksinLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateVaksinLabel">Update Vaksin Sapi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="updateVaksinForm" role="form">
                <input type="hidden" name="id" id="id" value="">
                <input type="hidden" name="trid" id="trid" value="">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text text-bg-primary"><i class="fa-solid fa-syringe"></i></span>
                        <input type="text" name="vaksin" id="vaksin" class="form-control" aria-label="Vaksin Sapi" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" onclick="javascript:window.location.reload()">Update Vaksin Sapi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of modal edit vaksin -->
<!-- modal add vaksin -->
<div class="modal fade" id="addVaksin" tabindex="-1" aria-labelledby="addVaksinLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addVaksinLabel">Tambah Vaksin Sapi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addVaksinForm" role="form">
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text text-bg-primary"><i class="fa-solid fa-syringe"></i></span>
                        <input type="text" name="vaksin" id="vaksin" class="form-control" placeholder="Vaksin Sapi" aria-label="Vaksin Sapi" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="addVaksinFormButton" class="btn btn-success">Tambah Vaksin Sapi</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end of modal add vaksin -->