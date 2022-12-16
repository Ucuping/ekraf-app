<!-- Varying modal content -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Pesan</h5>
            </div>
            <form id="rejectedMessageForm" action="{{ isset($data) ? route('apps.validations.rejected', $data->hashid) : '' }}" data-callback="{{ isset($data) ? route('apps.validations') : '' }}" method="POST"
                data-request="ajax">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="message" class="col-form-label">Pesan <span class="text-danger">*</span></label>
                        <textarea class="form-control" id="message" name="message" autocomplete="off" placeholder="Pesan"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light mx-1" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
