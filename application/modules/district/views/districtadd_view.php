<div class="text-center">
  <h1>Add District</h1>  
</div>

<div class="container" style="margin-top: 40px">
        <div class="col-md-12">
            <?php echo form_open('district/save') ?>

              <div class="form-group">
                <label for="text">District Name</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama district" required>
              </div>

              <div class="form-group">
                <label for="text">Province Name</label>
                <select name="province" class="form-control">
                          <option value="" selected="selected">Select Province</option>
                          <?php foreach ($provinces as $province) { ?>
                              <option value="<?php echo $province->id; ?>"><?php echo $province->name; ?></option>  
                           <?php }  ?>
                        </select>
              </div>

              <div class="form-group">
                <label for="text">Population</label>
                <input type="text" name="population" class="form-control" placeholder="Masukkan jumlah populasi" required>
              </div>



              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>