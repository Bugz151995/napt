<div class="row row-cols-2 g-4 mb-5">
  <div class="col-auto position-relative">
    <img 
    class="profile-picture"
    src="<?= ($user[0]['user_img']) ? $user[0]['user_img'] : base_url().'/assets/images/avatar.png' ?>" 
    default="<?= base_url() ?>/assets/images/avatar.png" 
    alt="">
    <button 
    class="btn btn-sm btn-primary shadow position-absolute bottom-0 end-0"
    data-bs-toggle="modal" 
    data-bs-target="#updateProfilePictureModal"><i class="bx bx-fw bx-camera"></i></button>
  </div>

  <div class="col-auto d-flex flex-column justify-content-center">
    <div>
      <span><?= $user[0]['fname'] ?></span>
      <span><?= $user[0]['lname'] ?></span>
    </div>
    
    <div class="col-auto">
      <?php if($user[0]['account_tier'] === 'E') : ?>
        <?= view_cell('\App\Libraries\UserBadge::expert') ?>
      <?php elseif($user[0]['account_tier'] === 'A') : ?>
        <?= view_cell('\App\Libraries\UserBadge::advance') ?>
      <?php elseif($user[0]['account_tier'] === 'N') : ?>
        <?= view_cell('\App\Libraries\UserBadge::novice') ?>
      <?php else : ?>
        <?= view_cell('\App\Libraries\UserBadge::unverified') ?>
      <?php endif ?>
    </div>
  </div>
</div>