<div class="modal fade" id="auction_inv" data-bs-backdrop="static" tabindex="-1" aria-labelledby="auction_invLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="auction_invLabel"><i class="bx bx-purchase-tag"></i> Place Item On Auction</h5>
        <button type="button" id="modal-close-btn" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

      <?= form_open('auctions/create', $attribute) ?>

      <input type="hidden" name="inventory_id" id="inventory_id_auction_field">

      <div class="modal-body">
        <div class="row row-cols-1 g-3 mb-3">
          <div class="col">
            <div class="d-flex justify-content-center gap-3">
              <img id="obverse_img_auction" src="<?= base_url() ?>/assets/images/avatar.png" alt="" class="modal-img">
              <img id="reverse_img_auction" src="<?= base_url() ?>/assets/images/avatar.png" alt="" class="modal-img">
            </div>
          </div>
          <div class="col text-center fs-5 fw-bold">
            <span id="item_name_auction_span"></span>
          </div>
        </div>
        <div class="row row-cols-1 g-3">
          <div class="col">
            <div class="form-floating">
              <input
                required
                type="number"
                step=".01"
                min="0"
                class="form-control"
                placeholder="Reserve Price"
                name="reserve_price"
                id="reserve_price">
              <label for="reserve_price">Reserve Price <span class="text-danger">*</span></label>
              <div class="invalid-feedback">
                <i class="bx bx-error-alt"></i>
                Please provide a reserve price
              </div>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input 
                required
                type="number"
                step=".01"
                min="0"
                class="form-control" 
                placeholder="Estimate Price"
                name="estimate_price"
                id="estimate_price">
              <label for="estimate_price">Estimated Price <span class="text-danger">*</span></label>
              <div class="invalid-feedback">
                <i class="bx bx-error-alt"></i>
                Please provide an estimate price
              </div>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input 
                required
                type="number"
                step=".01" 
                min="0"
                class="form-control"
                placeholder="Increment"
                name="bid_increment"
                id="bid_increment">
              <label for="bid_increment">Increment <span class="text-danger">*</span></label>
              <div class="invalid-feedback">
                <i class="bx bx-error-alt"></i>
                Please provide an increment
              </div>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input 
                required
                type="number"
                value="1"
                min="1"
                class="form-control"
                placeholder="Quantity"
                name="quantity"
                id="in_stock_auction_numbermax">
              <label for="quantity">Quantity <span class="text-danger">*</span></label>
              <div class="invalid-feedback">
                <i class="bx bx-error-alt"></i>
                Please provide a quantity less than or equal to the number of stocks
              </div>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input
                required
                type="datetime-local"
                class="form-control"
                placeholder="End of Auction"
                name="ends_at"
                id="ends_at">
              <label for="ends_at">End of Auction</label>
              <div class="invalid-feedback">
                <i class="bx bx-error-alt"></i>
                Please select a datetime greater than today's date or time
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center border-0">
        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i class="bx bx-x-circle"></i> Cancel</button>
        <button type="submit" class="btn btn-sm btn-primary"><i class="bx bx-save"></i> Save</button>
      </div>

      <?= form_close() ?>

    </div>
  </div>
</div>