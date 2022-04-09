<!-- Modal -->
<div class="modal fade" id="delete_inv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete_invLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete_invLabel">
          <i class="bx bx-edit"></i> Delete Inventory
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?= form_open('inventory/delete') ?>

      <input type="hidden" name="inventory_id" id="inventory_id_delete_field">
      <div class="modal-body">
        <div class="row row-cols-1 g-3 mb-3">
          <div class="col">
            <div class="d-flex justify-content-center gap-3">
              <img id="obverse_img_delete" src="<?= base_url() ?>/assets/images/avatar.png" alt="" class="modal-img">
              <img id="reverse_img_delete" src="<?= base_url() ?>/assets/images/avatar.png" alt="" class="modal-img">
            </div>
          </div>
          <div class="col text-center fs-5 fw-bold">
            <span id="item_name_delete_span"></span>
          </div>
        </div>
        
        <div class="alert alert-danger border-0">
          <h5 class="text-center"><i class="bx bx-fw bx-error-alt"></i> Warning!</h5>
          <p>
            Are you sure that you want to delete the data? This would mean that all the items placed on auction will also be deleted.
          </p>
        </div>
      </div>
      <div class="modal-footer justify-content-center border-0">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i class="bx bx-x-circle"></i> Cancel</button>
        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-check-circle"></i> Confirm</button>
      </div>
      
      <?= form_close() ?>
    </div>
  </div>
</div>