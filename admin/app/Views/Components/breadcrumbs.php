<?php

//filter page name
foreach ($page as $page_key => $p) {
  $res = explode('_', $p);
  $filtered_page = null;

  foreach ($res as $res_key => $r) {
    $filtered_page .= $r . " ";
  }

  $page[$page_key] = $filtered_page;
}

?>

<section class="my-4">
  <div class="rounded rounded-3 bg-light d-flex justify-content-between align-items-center small p-3">
    <span class="text-capitalize">
      <?= end($page) ?>
    </span>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?= base_url() ?>/dashboard">Home</a></li>
  
        <?php foreach ($page as $key => $p) : ?>
          <li class="breadcrumb-item active text-capitalize">
            <?= $p ?>
          </li>
        <?php endforeach ?>
      </ol>
    </nav>
  </div>
</section>