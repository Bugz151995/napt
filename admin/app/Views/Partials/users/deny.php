<!-- Modal -->
<div class="modal fade" id="deny_usr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deny_usrLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deny_usrLabel">
          <i class="bx bx-fw bx-user-x"></i> Deny User Account
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?= form_open('users/deny') ?>

      <input type="hidden" name="user_id" id="user_id_deny_field">
      <div class="modal-body">
        <div class="alert alert-warning border-0">
          <p>
            Are you sure that you want to deny a user account with username <span id="username_deny_span" class="fst-italic fw-bold"></span> ?
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