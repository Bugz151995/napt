<?= $this->extend('Admin/Layout/app') ?>

<?= $this->section('content') ?>

<section class="container px-4 px-lg-5 pb-4">
  <div class="card small rounded rounded-3 table-responsive border-0">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table id="app-table" class="table table-striped table-hover w-100">
          <thead>

            <tr class="text-nowrap">
              <th>#</th>
              <th>User's Name</th>
              <th>Created @</th>
              <th>Updated @</th>
              <th>Action</th>
            </tr>

          </thead>
          <tbody>

            <?php if(isset($users)): ?>

            <?php foreach ($users as $key => $user) : ?>
              <tr>
                <td><?= $key + 1 ?></td>

                <td>
                  <div class="d-flex align-items-center gap-2">
                    <img src="<?= ($user['user_img']) ? $user['user_img'] : base_url() . '/assets/images/user_avatar.png' ?>" alt="" class="table-image-thumb d-none d-lg-block">
                    <div class="d-inline-flex flex-column">
                      <span class="d-block"><?= $user['fname'] . ' ' . $user['lname'] ?></span>
                      <span class="d-block small fst-italic text-muted"><?= $user['username'] ?></span>
                    </div>
                  </div>
                </td>

                <td>
                  <?php if ($user['fb_link']) : ?>
                    <a href="<?= $user['fb_link'] ?>" class="link-primary"> <i class="bx bx-md bxl-facebook-square"></i> </a>
                  <?php else : ?>
                    <div class="badge bg-warning text-dark">No Link</div>
                  <?php endif ?>
                </td>

                <td>
                  <?php if ($user['account_tier'] === 'N') : ?>
                    <span class="col-auto badge text-dark bg-light"> <i class="bx bx-check-circle"></i> Novice </span>
                  <?php elseif ($user['account_tier'] === 'A') : ?>
                    <span class="col-auto badge bg-secondary"> <i class="bx bx-leaf"></i> Advance </span>
                  <?php elseif ($user['account_tier'] === 'E') : ?>
                    <span class="col-auto badge bg-dark"> <i class="bx bx-spa"></i> Expert </span>
                  <?php endif ?>
                </td>

                <td>
                  <?php $created_at = $Time::parse($user['created_at'], 'Asia/Manila') ?>
                  <?= $created_at->humanize() ?>
                </td>

                <td>
                  <?php $updated_at = $Time::parse($user['updated_at'], 'Asia/Manila') ?>
                  <?= $updated_at->humanize() ?>
                </td>

                <td>
                  <?php if ($user['status'] === 'B') : ?>
                    <div class="badge bg-danger">Blocked</div>
                  <?php else : ?>
                    <div class="badge bg-success">Active</div>
                  <?php endif ?>
                </td>

                <td>
                  <?php $fetch_url = base_url() . '/users/fetch/' . $user['user_id']; ?>

                  <?php
                  // edit user
                  $edit_field = '[
                    user_id_edit_field,
                    fname_edit_field,
                    lname_edit_field,
                    fb_link_edit_field,
                    account_tier_edit_field,
                    username_edit_field
                  ]';
                  ?>

                  <button
                  type="button"
                  class="btn btn-sm btn-primary" 
                  onclick="populateModal('<?= $fetch_url ?>', 'edit_usr', <?= $edit_field ?>, '_edit')">
                    <i class="bx bx-edit"></i>
                  </button>

                  <?php if ($user['status'] === 'B') : ?>

                    <?php
                    // unblock user
                    $unblock_field = '[
                      user_id_unblock_field,
                      username_unblock_span
                    ]';
                    ?>

                    <button 
                    type="button" 
                    class="btn btn-sm btn-success" 
                    onclick="populateModal('<?= $fetch_url ?>', 'unblock_usr', <?= $unblock_field ?>, '_unblock')">
                      <i class="bx bx-user-check"></i>
                    </button>

                  <?php else : ?>

                    <?php
                    // block user
                    $block_field = '[
                      user_id_block_field,
                      username_block_span
                    ]';
                    ?>

                    <button 
                    type="button" 
                    class="btn btn-sm btn-warning" 
                    onclick="populateModal('<?= $fetch_url ?>', 'block_usr', <?= $block_field ?>, '_block')">
                      <i class="bx bx-block"></i>
                    </button>

                  <?php endif ?>

                  <?php
                  // delete user
                  $delete_field = '[
                    user_id_delete_field,
                    username_delete_span
                  ]';
                  ?>

                  <button 
                  type="button" 
                  class="btn btn-sm btn-danger" 
                  onclick="populateModal('<?= $fetch_url ?>', 'delete_usr', <?= $delete_field ?>, '_delete')">
                    <i class="bx bx-trash"></i>
                  </button>
                </td>
              </tr>
            <?php endforeach ?>

            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<?= $this->include('Admin/Partials/users/edit') ?>
<?= $this->include('Admin/Partials/users/unblock') ?>
<?= $this->include('Admin/Partials/users/block') ?>
<?= $this->include('Admin/Partials/users/delete') ?>

<?= $this->endSection() ?>