<div class="modal fade" id="updateProfilePictureModal" tabindex="-1" aria-labelledby="updateProfilePictureModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateProfilePictureModalLabel"><i class="bx bx-camera bx-fw"></i>Change Profile Picture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <?= form_open_multipart('account/update_pic')  ?>
      <div class="modal-body border-0">
        <input type="file" name="user_img" id="user_img" accept="image/*">
      </div>
      <div class="modal-footer justify-content-center  border-0">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"><i class="bx bx-save bx-fw"></i>Save</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>