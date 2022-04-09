<!-- Modal -->
<div class="modal fade" id="edit_usr" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit_usrLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="edit_usrLabel">
          <i class="bx bx-fw bx-edit"></i> Edit User Account
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <?php  
      /**
       * form attribute
       */
      $attribute = [
        'class' => 'needs-validation',
        'novalidate' => ''
      ];
      ?>

      <?= form_open('users/update', $attribute) ?>

      <input type="hidden" name="user_id" id="user_id_edit_field">

      <div class="modal-body">
        <div class="row row-cols-1 g-3">
          <div class="col">
            <div class="form-floating">
              <input
              required
              type="text" 
              name="fname"
              id="fname_edit_field"
              class="form-control"
              placeholder="First Name">
              <label class="small text-muted" for="fname_edit_field">First Name</label>
            </div>
          </div>
          
          <div class="col">
            <div class="form-floating">
              <input
              required
              type="text" 
              name="lname"
              id="lname_edit_field"
              class="form-control"
              placeholder="Last Name">
              <label class="small text-muted" for="lname_edit_field">Last Name</label>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input
              type="text" 
              name="fb_link"
              id="fb_link_edit_field"
              class="form-control"
              placeholder="Facebook Link">
              <label class="small text-muted" for="fb_link_edit_field">Facebook Link</label>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <select 
              required
              class="form-select"
              name="account_tier" 
              id="account_tier_edit_field">
                <option value="N">Novice</option>
                <option value="A">Advanced</option>
                <option value="E">Expert</option>
              </select>
              <label class="small text-muted" for="account_tier_edit_field">Account Tier</label>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input
              required
              type="text" 
              name="username"
              id="username_edit_field"
              class="form-control"
              placeholder="Username">
              <label class="small text-muted" for="username_edit_field">Username</label>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input
              type="password" 
              name="password"
              id="password"
              class="form-control"
              placeholder="Password">
              <label class="small text-muted" for="password">Password</label>
              <div class="small fst-italic mt-2">
                <span class="small">Leave this empty if you don't want to reset the user's password.</span>
              </div>
            </div>
          </div>
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