<label for="lots-list" class="fs-5 mb-5"><i class="bx bx-tag-alt bx-fw"></i>Lots</label>

<?php if(isset($lots) && $lots) : ?>

  <section id="lots-list" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">

    <?php foreach ($lots as $key => $lot) : ?>

    <div class="col">

      <a href="<?= base_url() ?>/auctions/lot/<?= $lot['lot_id'] ?>" class="coin-container card text-dark text-decoration-none shadow-sm border-0 position-relative">
        <div class="badge bg-danger position-absolute top-0 start-0 shadow">Live</div>
        <div class="row row-cols-2 justify-content-center g-1 p-2">
          <img src="<?= $lot['obverse_img'] ?>" alt="" class="col-5">
          <img src="<?= $lot['reverse_img'] ?>" alt="" class="col-5">
        </div>

        <div class="card-body small">
          <span class="d-block text-truncate h6"><?= $lot['item_name'] ?></span>
          <span class="d-block h6 mb-0"><i class="bx bx-fw bx-purchase-tag"></i> &#8369; <?= number_format($lot['estimate_price'] / 100, 0) ?></span>
        </div>
      </a>

    </div>

    <?php endforeach ?>

  </section>

<?php else : ?>

<section id="no-data-illlustration" class="d-flex flex-column justify-content-center">

  <div class="alert alert-dismissible shadow-sm rounded animate__animated animate__bounceInLeft animated__faster">
    <div class="d-flex gap-3">
      <div class="border-3 border border-primary"></div>

      <div id="message">
        <strong>Hello!</strong>
        <p>It seems like there are no lot in auction right now. Please come back again later. Thank you!</p>
      </div>

    </div>
    
    <input type="button" class="btn-sm btn-close" data-bs-dismiss="alert">
  </div>

  <img src="<?= base_url() ?>/assets/images/2953962.jpg" class="img-fluid animate__animated animate__fadeIn" alt=""> 
</section>

<?php endif ?>