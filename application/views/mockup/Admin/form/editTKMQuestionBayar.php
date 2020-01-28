<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <div class="box-header">
                    <h3 class="box-title">BIAYA/TARIF</h3>
                    <a href="http://localhost/kp/form/form/edit/1">Kembali</a>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody><tr>
    						<!-- <th>ID BIAYA QUESTION</th> -->
    						<th>ID TIPE BAYAR</th>
    						<!-- <th>ID FORM</th> -->
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                                                <tr>
    						<td>NON BAYAR SENDIRIR</td>
    						<td>Kejelasan informasi mengenai biaya / tarif pelayanan rawat jalan pasien BPJS/Asuransi Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>NON BAYAR SENDIRIR</td>
    						<td>Besarnya biaya /tarif pelayanan rawat jalan pasien BPJS/Asuransi Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>NON BAYAR SENDIRIR</td>
    						<td>Keterjangkauan biaya pelayanan rawat jalan Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>
    						<td>Keberadaan informasi mengenai biaya / tarif pelayanan rawat jalan pasien umum / bayar sendiri Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>
    						<td>Kejelasan informasi mengenai biaya / tarif pelayanan rawat jalan pasien umum / bayar sendiri Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>
    						<td>Keberadaan informasi mengenai prosedur pembayaran rawat jalan pasien umum / bayar sendiri Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>
    						<td>Kejelasan informasi mengenai prosedur pembayaran rawat jalan pasien umum / bayar sendiri Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>

    						<td>Kemudahan cara pembayaran  rawat jalan pasien umum / bayar sendiri Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<td>BAYAR SENDRIRI</td>

    						<td>Keterjangkauan biaya pelayanan rawat jalan Puskesmas</td>
    						<td>
                                <a href="editTKMQuestionBayarSub" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                            </tbody></table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data baru</h3>
                    </div>
                    <div class="col-md-6">
                        <label for="ID_TIPE_BAYAR" class="control-label"><span class="text-danger">*</span>Tipe Bayar</label>
                        <div class="form-group">
                            <select name="ID_TIPE_BAYAR" class="form-control">
                                <option value="">select tipe_bayar</option>
                                <option value="2">BAYAR SENDRIRI</option><option value="1">NON BAYAR SENDIRIR</option>                            </select>
                            <span class="text-danger"></span>
                        </div>
                    </div>

<input type="hidden" name="ID_FORM" value="1">
                    <div class="col-md-6">
                        <label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
                        <div class="form-group">
                            <textarea name="QUESTION" class="form-control" id="QUESTION"></textarea>
                            <span class="text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
              <!-- <a href="http://localhost/kp/form/biaya_question/load/1">back</a> -->
            </div>
                            </div>
            </div>
        </div>
    </div>
