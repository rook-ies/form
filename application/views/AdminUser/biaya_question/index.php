<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">BIAYA/TARIF</h3>
                    <a href="<?php echo base_url(); ?>form/edit/<?php echo $this->session->currentForm; ?>">Kembali</a>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
    						<!-- <th>ID BIAYA QUESTION</th> -->
    						<th>ID TIPE BAYAR</th>
    						<!-- <th>ID FORM</th> -->
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                        <?php foreach($biaya_question as $B){ ?>
                        <tr>
    						<!-- <td><?php echo $B['ID_BIAYA_QUESTION']; ?></td> -->
    						<td><?php echo $B['NAMA_TYPE_BAYAR']; ?></td>
    						<!-- <td><?php echo $B['ID_FORM']; ?></td> -->
    						<td><?php echo $B['QUESTION']; ?></td>
    						<td>
                                <a href="<?php echo site_url('biaya_question/edit/'.$B['ID_BIAYA_QUESTION']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('biaya_question/remove/'.$B['ID_BIAYA_QUESTION']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data baru</h3>
                    </div>
                    <?php echo form_open('biaya_question/add'); ?>
                    <div class="col-md-6">
                        <label for="ID_TIPE_BAYAR" class="control-label"><span class="text-danger">*</span>Tipe Bayar</label>
                        <div class="form-group">
                            <select name="ID_TIPE_BAYAR" class="form-control">
                                <option value="">select tipe_bayar</option>
                                <?php
                                foreach($all_tipe_bayar as $tipe_bayar)
                                {
                                    $selected = ($tipe_bayar['ID_TYPE_BAYAR'] == $this->input->post('ID_TIPE_BAYAR')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$tipe_bayar['ID_TYPE_BAYAR'].'" '.$selected.'>'.$tipe_bayar['NAMA_TYPE_BAYAR'].'</option>';
                                }
                                ?>
                            </select>
                            <span class="text-danger"><?php echo form_error('ID_TIPE_BAYAR');?></span>
                        </div>
                    </div>
                    <?php echo form_hidden('ID_FORM',$this->session->currentForm); ?>
                    <div class="col-md-6">
                        <label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
                        <div class="form-group">
                            <textarea name="QUESTION" class="form-control" id="QUESTION"><?php echo $this->input->post('QUESTION'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('QUESTION');?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
              <!-- <?php echo anchor(base_url('biaya_question/load/'.$this->session->currentForm), 'back'); ?> -->
            </div>
            <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
