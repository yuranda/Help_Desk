<div class="panel panel-info">
  <div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
  <div class="panel-heading" style="font-size: 18px"><b>Data Tiket Masuk</b> 
    <div class="pull-right"><a href="#tm-add" data-toggle="modal"><button type="button" class="btn btn-info btn-sm"><i class="fa fa-plus-square">  Tambah</i></button></a></div>
  </div>
    <div class="panel-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>ID Tiket</th>
            <th>Tanggal</th>
            <th>Cabang</th>
            <th>Kategori</th>
            <th>Masalah</th>
            <th>Keluhan</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach ($data as $key => $row): ?>
          <tr>
            <td align="center"><?php echo ++$key ?></td>
            <td><?php echo $row->id_masuk ?></td>
            <td><?php echo $row->tanggal ?></td>
            <td><?php echo $this->Mtiketmasuk->get_account($row->id_user)->nama; ?></td>
            <td><?php echo $this->Mtiketmasuk->kate($row->id_kategori)->isi_kategori; ?></td>
            <td><?php echo $row->deskripsi ?></td>
            <td>
              <a  class="btn btn-1x btn-warning" id="lihat-gambar1" data-src="<?php echo base_url('assets/images/documen/'.$row->foto) ?>">
                  <i class="glyphicon glyphicon-eye-open"></i>
              </a>
            </td>
            <td>
            <a href="#tm-proses1" data-toggle="modal" class="btn btn-1x btn-warning">Proses</a>
            </td>
          </tr>
          <?php endforeach ?>
          <script>
            $('a#lihat-gambar1').unbind().click(function(argument) {
              $('div#exampleModalCenter').modal('show');
              $('img#setImage').attr('src', $(this).data('src'))
            })
          </script>
          <!-- Modal Gambar -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">    
            <img width="100%" src="" id="setImage" class="img-rounded" alt="User Image">
            </div>
          </div>
          </tbody>

        </table>
        </div>
      </div>

<!--Add Tiket Masuk -->
<div id="tm-add" class="modal fade" role="dialog">
    <div class="modal-dialog">
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open_multipart(current_url(), array('class' => 'form-horizontal'));
?>
  <div class="panel panel-default">
      <div class="panel-heading bg-success">
          <h8 class="modal-title"><i class="fa fa-plus-square"><b> Entry Tiket</b></i></h8>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
           <input type="hidden" name="id_user" class="form-control" value="<?php echo $get->id_user; ?>">
      </div>
      <div class="panel-body">
              <div class="col-sm-12">
                <div class="form-group">
                  <label for="id_masuk"><b>ID Tiket</b></label>
                  <input name="id_masuk" type="text" class="form-control" value="<?php echo $id_masuk; ?>" readonly>
                </div>
                 <div class="form-group">
                 <label for="kategori"><b>Kategori</b></label>
                 <select name="id_kategori" class="form-control select2" data-placeholder="Pilih Nama Konversi" style="width: 100%;">
                  <option value="id_kategori">===Pilih Nama Category===</option>
                    <?php foreach($category as $key => $get) :?>
                      <option value="<?php echo $get->id_kategori ?>"><?php echo $get->isi_kategori ?></option> 
                    <?php endforeach; ?>
                  </select>
                  <p class="help-block"><?php echo form_error('id_kategori', '<small class="text-danger">', '</small>'); ?></p>
                </div> 
                <div class="form-group">
                  <label for="deskripsi"><b>Deskripsi</b></label>
                  <textarea class="form-control" rows="5" name="deskripsi" id="deskripsi" value="<?php echo set_value('deskripsi'); ?>" placeholder="Deskripsi TroubleT"></textarea>
                </div>
                 <p class="help-block"><?php echo form_error('deskripsi', '<small class="text-danger">', '</small>'); ?></p>

                <div class="form-group">
                  <label for="foto"><b>Lampiran</b></label>
                  <input type="file" name="foto" class="form-control">
                </div>
<<<<<<< HEAD
            </div>
        </form>
        <script>
$('#datepicker').datetimepicker({
locale:'id',
});
</script>
<!--Add Modal -->
=======
                
        </div>
      </div>
      <div class="panel-footer">
          <button type="submit" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Simpan</button>
      </div>
  </div>
<?php  
// End Form
echo form_close();
?>
</div>
<!--tutup Tiket Masuk -->

<!--Add Tiket proses -->
<div id="tm-proses1" class="modal fade" role="dialog">
    <div class="modal-dialog">
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open_multipart(current_url(), array('class' => 'form-horizontal'));
?>
  <div class="panel panel-default">
      <div class="panel-heading bg-success">
          
      </div>
      <div class="panel-body">
              
      </div>
      <div class="panel-footer">
          <button type="submit" class="btn btn-sm btn-primary"><span class="fa fa-save"></span> Simpan</button>
      </div>
  </div>
<?php  
// End Form
echo form_close();
?>
</div>
<!--tutup Tiket Masuk -->
>>>>>>> 7ceb099e3bb66d01f129b039e56efbed1a93745e
