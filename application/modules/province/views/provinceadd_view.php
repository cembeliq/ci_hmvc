<div class="text-center">
  <h1>Add province</h1>  
</div>

<div class="container" style="margin-top: 40px">
        <div class="col-md-12">
            <?php echo form_open('province/save') ?>

              <div class="form-group">
                <label for="text">Province Name</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama province" required>
              </div>



              <button type="submit" class="btn btn-md btn-success">Simpan</button>
              <button type="reset" class="btn btn-md btn-warning">reset</button>
            <?php echo form_close() ?>
        </div>
    </div>