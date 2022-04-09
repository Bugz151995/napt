<?= $this->extend('Admin/Layout/app') ?>

<?= $this->section('content') ?>

<section class="container px-4 px-lg-5 pb-4">
  <div class="d-flex justify-content-center justify-content-lg-start mb-5 pt-3">
    <button class="btn btn-dark shadow" data-bs-toggle="modal" data-bs-target="#create_inv">
      <i class="bx bx-layer-plus"></i> New Inventory
    </button>
  </div>
  <div class="card small rounded rounded-3 border-0">
    <div class="card-body p-0">
      <table id="app-table" class="table table-striped table-hover w-100">
        <thead>

          <tr>
            <th>#</th>
            <th>Lot</th>
            <th>Price</th>
            <th>Composition</th>
            <th>Weight</th>
            <th>Diameter</th>
            <th>Starts</th>
            <th>Ends</th>
            <th>Status</th>
            <th>Action</th>
          </tr>

        </thead>
        <tbody>
          <?php if (isset($inventories)) : ?>
            <?php foreach ($inventories as $key => $item) : ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td>
                  <div class="card border-0 p-0 bg-transparent">
                    <div class="d-flex card-img-top">
                      <img src="<?= $item['obverse_img'] ?>" alt="" class="table-image-thumb">
                      <img src="<?= $item['reverse_img'] ?>" alt="" class="table-image-thumb">
                    </div>
                    <span class="small fst-italic"><?= $item['item_name'] ?></span>
                  </div>
                </td>
                <td>
                  &#8369; <?= number_format($item['unit_price'] / 100, 2) ?>
                </td>
                <td>
                  <?= $item['in_stock'] ?>
                </td>
                <td>
                  <?= $item['in_live'] ?>
                </td>
                <td>
                  <?= $item['in_unsold'] ?>
                </td>
                <td>
                  <?= $item['in_sold'] ?>
                </td>
                <td>
                  <?php
                  // create auction
                  $auction_url = base_url() . '/inventory/fetch/' . $item['inventory_id'];
                  $auction_arr = '[
                  obverse_img_auction,
                  reverse_img_auction,
                  item_name_auction_span,
                  inventory_id_auction_field,
                  in_stock_auction_numbermax
                ]';
                  ?>

                  <?php if ($item['in_stock'] != 0) : ?>

                    <button type="button" class="btn btn-sm btn-success" onclick="populateModal('<?= $auction_url ?>', 'auction_inv', <?= $auction_arr ?>, '_auction')">
                      <i class="bx bx-purchase-tag"></i>
                    </button>

                  <?php else : ?>

                    <button disabled type="button" id="auction-btn-disabled" class="btn btn-sm btn-success">
                      <i class="bx bx-purchase-tag"></i>
                    </button>

                  <?php endif ?>

                  <?php
                  // edit inventory
                  $edit_url = base_url() . '/inventory/fetch/' . $item['inventory_id'];
                  $edit_arr = '[
                  obverse_img_edit, 
                  reverse_img_edit, 
                  inventory_id_edit_field,
                  item_name_edit_field,
                  unit_price_edit_field_divisible,
                  in_stock_edit_field,
                  composition_edit_field,
                  weight_edit_field_divisible,
                  diameter_edit_field_divisible
                ]';
                  ?>

                  <button type="button" class="btn btn-sm btn-primary" onclick="populateModal('<?= $edit_url ?>', 'edit_inv', <?= $edit_arr ?>, '_edit')">
                    <i class="bx bx-edit"></i>
                  </button>

                  <?php
                  // delete inventory
                  $delete_url = base_url() . '/inventory/fetch/' . $item['inventory_id'];
                  $delete_arr = '[
                  obverse_img_delete, 
                  reverse_img_delete, 
                  item_name_delete_span, 
                  inventory_id_delete_field
                ]';
                  ?>

                  <button type="button" class="btn btn-sm btn-danger" onclick="populateModal('<?= $delete_url ?>', 'delete_inv', <?= $delete_arr ?>, '_delete')">
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
</section>

<?= $this->include('Admin/Partials/inventory/create_auction') ?>
<?= $this->include('Admin/Partials/inventory/create') ?>
<?= $this->include('Admin/Partials/inventory/edit') ?>
<?= $this->include('Admin/Partials/inventory/delete') ?>

<?= $this->endSection() ?>