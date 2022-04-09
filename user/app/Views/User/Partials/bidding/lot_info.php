<section>

  <div class="text-center mb-4">
    <input type="hidden" id="ends_at" value="<?= $lot['ends_at'] ?>">

    <span id="days" class="badge bg-dark"></span>
    <span id="hours" class="badge bg-dark"></span>
    <span id="minutes" class="badge bg-dark"></span>
    <span id="seconds" class="badge bg-dark"></span>

    <span id="is_closed" class="badge bg-danger"></span>
  </div>

  <div class="row row-cols-1 row-cols-lg-2">
    <div class="col">
      <div class="card border-0 mb-4 p-3">
        <div class="row row-cols-2 g-1 p-2 justify-content-center">
          <img src="<?= $lot['obverse_img'] ?>" alt="" class="col-5">
          <img src="<?= $lot['reverse_img'] ?>" alt="" class="col-5">
        </div>
        <div class="card-body small text-dark">
          <span class="text-truncate h5 text-center d-block mb-4"><?= $lot['item_name'] ?></span>
          <div class="row row-cols-2">
            <div class="col-4">Estimate Price</div>
            <div class="col">&#8369; <?= number_format($lot['estimate_price'] / 100, 0) ?></div>
          </div>

          <div class="row row-cols-2">
            <div class="col-4">Bid Increment</div>
            <div class="col">&#8369; <?= number_format($lot['bid_increment'] / 100, 0) ?></div>
          </div>

          <div class="row row-cols-2">
            <div class="col-4">Quantity <span class="small text-muted">(pc/pcs.)</span></div>
            <div class="col"><?= $lot['quantity'] ?></div>
          </div>
        </div>

        <div class="card-footer bg-white border-0">
          <div class="row row-cols-1 row-cols-lg-2 g-3">
            <?= form_open('bidding/create', ['class' => 'col needs-validation', 'novalidate' => ''], ['lot_id' => $lot['lot_id']]) ?>

            <?php $bid_increment = $lot['bid_increment'] / 100 ?>
              <div class="input-group input-group-sm">
                <span class="input-group-text border-0 border-top border-start border-bottom bg-white">&#8369;</span>
                <input 
                  required
                  type="number"
                  min="<?= $cbid + $bid_increment ?>"
                  value="<?= $cbid + $bid_increment ?>"
                  step="<?= $bid_increment ?>"
                  name="bid_price"
                  id="bid_price"
                  class="form-control form-control-sm border-0 border-top border-end border-bottom" 
                  placeholder="Place your bid here...">
                <button type="submit" class="btn btn-sm btn-primary rounded-end"><i class="fas fa-gavel fa-fw"></i> Bid</button>
                <div class="invalid-feedback small fst-italic">Please enter a correct bid.</div>
              </div>

            <?= form_close() ?>

            <div class="col d-flex justify-content-center justify-content-lg-end">
              <?= form_open('watchlist/create', ['class' => 'w-auto'], ['lot_id' => $lot['lot_id']]) ?>

                <button type="submit" class="btn btn-sm btn-secondary"><i class="bx bx-fw bx-plus"></i>Add to Watchlist</button>
                
              <?= form_close() ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="bg-white p-4">
        <i class="bx bx-fw bx-tag-alt"></i>Current Bid:
        <span class="float-end">&#8369; <?= ($cbid) ? $cbid : 0 ?></span>
      </div>

      <div class="accordion" id="top-bidder">
        <div class="accordion-item border-0">
          <h2 class="accordion-header" id="top-bidder-heading">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#top-bidder-collapsible-container" aria-expanded="true" aria-controls="top-bidder-collapsible-container">
              Top 10 Bidders
            </button>
          </h2>

          <div id="top-bidder-collapsible-container" class="accordion-collapse collapse show" aria-labelledby="top-bidder-heading" data-bs-parent="#top-bidder">
            <div class="accordion-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bidder</th>
                      <th>Bid</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bids as $key => $bid) : ?>

                      <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $bid['username'] ?></td>
                        <td><?= $bid['bid_price'] ?></td>
                      </tr>

                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>