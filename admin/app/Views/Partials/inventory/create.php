<!-- Modal -->
<div class="modal fade" id="create_inv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="create_invLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="create_invLabel">
          <i class="bx bx-layer-plus"></i> Create Inventory
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

      <?= form_open_multipart('inventory/create', $attribute) ?>
      <div class="modal-body">
        <div class="row row-cols-1 g-4">
          <div class="col">
            <div class="row row-cols-2 g-3 justify-content-around">
              <div class="col-auto">
                <label for="obverse_img" class="form-label">
                  Obverse Image <span class="text-danger">*</span>
                </label>
                <br>
                <div class="drop-zone">
                  <span class="drop-zone__prompt">Drop file here or click to upload</span>
                  <input 
                    required
                    type="file" 
                    id="obverse_img" 
                    name="obverse_img" 
                    class="drop-zone__input">
                </div>
              </div>

              <div class="col-auto">
                <label for="reverse_img" class="form-label">
                  Reverse Image <span class="text-danger">*</span>
                </label>
                <br>
                <div class="drop-zone">
                  <span class="drop-zone__prompt">Drop file here or click to upload</span>
                  <input
                    required 
                    type="file"
                    id="reverse_img"
                    name="reverse_img"
                    class="drop-zone__input">
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="form-floating">
              <input 
                required 
                value="<?= set_value('item_name') ?>"
                type="text" 
                id="item_name" 
                name="item_name" 
                class="form-control form-control-sm" 
                placeholder="Item Name">
              <label for="item_name">Item Name <span class="text-danger">*</span></label>
              <div class="invalid-feedback text-start">
                <i class="bx bx-error-alt bx-fw"></i>
                <?php if(isset($validation)): ?>
                <?php else: ?>
                  Please provide an Item Name
                <?php endif ?>                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <input 
                required 
                value="<?= set_value('unit_price') ?>"
                type="number" 
                step="0.01"
                min="1" 
                max="999999" 
                id="unit_price" 
                name="unit_price" 
                class="form-control form-control-sm" 
                placeholder="Unit Price">
              <label for="unit_price">Unit Price <span class="text-danger">*</span></label>
              <div class="invalid-feedback text-start">
                <i class="bx bx-error-alt bx-fw"></i>
                <?php if(isset($validation)): ?>
                <?php else: ?>
                  Please provide a Unit Price
                <?php endif ?>                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <input 
                required 
                value="<?= set_value('in_stock') ?>"
                type="number" 
                min="1" 
                max="999999" 
                id="in_stock" 
                name="in_stock" 
                class="form-control form-control-sm" 
                placeholder="Quantity">
              <label for="in_stock">Quantity <span class="text-danger">*</span></label>
              <div class="invalid-feedback text-start">
                <i class="bx bx-error-alt bx-fw"></i>
                <?php if(isset($validation)): ?>
                <?php else: ?>
                  Please provide a Quantity of the Item
                <?php endif ?>                
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <input 
                value="<?= set_value('composition') ?>"
                type="text" 
                id="composition" 
                name="composition" 
                class="form-control form-control-sm" 
                placeholder="Composition">
              <label for="composition">Composition <span class="text-muted fst-italic small">[optional]</span></label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <input 
                value="<?= set_value('weight') ?>"
                type="number" 
                step="0.01"
                min="1" 
                id="weight" 
                name="weight" 
                class="form-control form-control-sm" 
                placeholder="Weight">
              <label for="weight">Weight <span class="text-muted fst-italic small">[optional]</span></label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating">
              <input 
                value="<?= set_value('diameter') ?>"
                type="number" 
                step="0.01"
                min="1" 
                id="diameter" 
                name="diameter" 
                class="form-control form-control-sm" 
                placeholder="Diameter">
              <label for="diameter">Diameter <span class="text-muted fst-italic small">[optional]</span></label>
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