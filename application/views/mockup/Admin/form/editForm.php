<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title">Edit form</h3>
                </div>
    			<div class="box-body">
    				<div class="row clearfix">
<input type="hidden" name="ID_PLACE" value="1">
    					<div class="col-md-6">
    						<label for="ID_SERVICE_TYPE" class="control-label"><span class="text-danger">*</span>Service Type</label>
    						<div class="form-group">
    							<select name="ID_SERVICE_TYPE" class="form-control">
    								<option value="">select service_type</option>
    								<option value="4">type service baru</option><option value="2" selected="selected">Rawat Jalan</option><option value="1">Rawat inap</option>    							</select>
    							<span class="text-danger"></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="TITLE" class="control-label"><span class="text-danger">*</span>TITLE</label>
    						<div class="form-group">
    							<input type="text" name="TITLE" value="KUESIONER SURVEI KEPUASAN MASYARAKAT TERHADAP
PELAYANAN PUSKESMAS TAHUN 2019" class="form-control" id="TITLE">
    							<span class="text-danger"></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="DESCRIPTION" class="control-label"><span class="text-danger">*</span>DESCRIPTION</label>
    						<div class="form-group">
    							<!-- <input type="text" name="DESCRIPTION" value="Bapak/Ibu/Saudara/i yang kami hormati,
Dalam rangka upaya peningkatan kualitas pelayanan Puskesmas di wilayah Kabupaten Blitar, melalui kuesioner ini kami mohon kesediaan Bapak/Ibu/Saudara/i untuk menjawab beberapa pertanyaan dari kami guna mengukur tingkat kepuasan Bapak/Ibu/Saudara/i terhadap pelayanan Puskesmas. Kami mohon Bapak/Ibu/Saudara/i memberikan penilaian yang jujur sesuai dengan kenyataan yang dialami. Kami menjamin kerahasiaan jawaban yang Bapak/Ibu/Saudara/i berikan. Atas kerja sama Bapak/Ibu/Saudara/i sebelumnya kami ucapkan terima kasih." class="form-control" id="DESCRIPTION" /> -->
    							<span class="text-danger"></span>
                                <textarea class="form-control" name="DESCRIPTION" rows="8" cols="80">Bapak/Ibu/Saudara/i yang kami hormati,
Dalam rangka upaya peningkatan kualitas pelayanan Puskesmas di wilayah Kabupaten Blitar, melalui kuesioner ini kami mohon kesediaan Bapak/Ibu/Saudara/i untuk menjawab beberapa pertanyaan dari kami guna mengukur tingkat kepuasan Bapak/Ibu/Saudara/i terhadap pelayanan Puskesmas. Kami mohon Bapak/Ibu/Saudara/i memberikan penilaian yang jujur sesuai dengan kenyataan yang dialami. Kami menjamin kerahasiaan jawaban yang Bapak/Ibu/Saudara/i berikan. Atas kerja sama Bapak/Ibu/Saudara/i sebelumnya kami ucapkan terima kasih.</textarea>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<a href="listForm"><button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button></a>
                    <a href="listForm">Back</a>    	        </div>
    			</div>
        </div>
    </div>
</div>
</div>

<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Pertanyaan Identitas Tambahkan</h3>
                	<div class="box-tools">
                        <!-- <a href="http://localhost/kp/form/index.php/additional_identity_question/add" class="btn btn-success btn-sm">Add</a> -->
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody><tr>
    						<!-- <th>ID ADDITIONAL IDENTITY QUESTION</th>
    						<th>ID FORM</th> -->
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                                                <tr>
    						<!-- <td>29</td>
    						<td>6</td> -->
    						<td>Status Responden</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>30</td>
    						<td>6</td> -->
    						<td>Nama Lengkap</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>31</td>
    						<td>6</td> -->
    						<td>Alamat Lengkap</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>32</td>
    						<td>6</td> -->
    						<td>No.Telp/HP</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>33</td>
    						<td>6</td> -->
    						<td>Usia</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>34</td>
    						<td>6</td> -->
    						<td>Jenis Kelamin</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>35</td>
    						<td>6</td> -->
    						<td>Pendidikan Terakhir</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>36</td>
    						<td>6</td> -->
    						<td>Pekerjaan</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>37</td>
    						<td>6</td> -->
    						<td>Pelayanan rawat jalan yang dimanfaatkan:</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>38</td>
    						<td>6</td> -->
    						<td>Frekuensi menggunakan pelayanan Puskesmas dalam 1 tahun terakhir </td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>39</td>
    						<td>6</td> -->
    						<td>Alasan menggunakan pelayanan Puskesmas </td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>40</td>
    						<td>6</td> -->
    						<td>Pihak yang merekomendasikan pasien untuk menggunakan pelayanan Puskesmas </td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>41</td>
    						<td>6</td> -->
    						<td>Diagnosa Penyakit</td>
                            <td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>
    						<!-- <td>42</td>
    						<td>6</td> -->
    						<td>Cara Pembayaran</td>
    						<td>
                                <a href="editIdentityQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                            </tbody></table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
                    </div>
                    <div class="row clearfix">

<input type="hidden" name="ID_FORM" value="6">
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>Add new additional indentiti question here</label>
    						<div class="form-group">
    							<textarea name="QUESTION" class="form-control" id="QUESTION"></textarea>
    							<span class="text-danger"></span>
    						</div>
    					</div>
    				</div>
                </div>
                <div class="box-footer">
                	<button type="submit" class="btn btn-success">
                		<i class="fa fa-check"></i> Add
                	</button>
              	</div>
                            </div>
        </div>
    </div>
</div>
</div>

<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">TINGKAT KEPUASAN MASYARAKAT</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody><tr>
    						<!-- <th>ID TKM</th>
    						<th>ID FORM</th> -->
    						<th>QUESTION</th>
    						<th>Actions</th>
                        </tr>
                                                <tr>
    						<!-- <td>1</td> -->
    						<!-- <td>1</td> -->
    						<td>PERSYARATAN</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>2</td> -->
    						<!-- <td>1</td> -->
    						<td>SISTEM, MEKANISME &amp; PROSEDUR				</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>3</td> -->
    						<!-- <td>1</td> -->
    						<td>WAKTU PELAYANAN				</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>4</td> -->
    						<!-- <td>1</td> -->
    						<td>BIAYA/TARIF</td>
                                                        <td>
                                <a href="editTKMQuestionBayar" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>5</td> -->
    						<!-- <td>1</td> -->
    						<td>PRODUK SPESIFIKASI JENIS LAYANAN</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>6</td> -->
    						<!-- <td>1</td> -->
    						<td>KOMPETENSI PELAKSANA</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>7</td> -->
    						<!-- <td>1</td> -->
    						<td>PERILAKU PELAKSANA</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>8</td> -->
    						<!-- <td>1</td> -->
    						<td>PENANGANAN PENGADUAN, SARAN DAN MASUKAN				</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                                <tr>
    						<!-- <td>9</td> -->
    						<!-- <td>1</td> -->
    						<td>SARANA DAN PRASARANA</td>
                                						<td>
                                <a href="editTKMQuestion" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                                                </tr>
                                            </tbody></table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
                    </div>
                  	<div class="box-body">
                  		<div class="row clearfix">

<input type="hidden" name="ID_FORM" value="1">
        					<div class="col-md-6">
        						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
                                <label for="QUESTION" class="control-label"><span class="text-danger"></span> [Gunakan "BIAYA/TARIF"  untuk pertanyaan tentang biaya dan tarif]</label>
        						<div class="form-group">
        							<input type="text" name="QUESTION" value="" class="form-control" id="QUESTION">
        							<span class="text-danger"></span>
        						</div>
        					</div>
        				</div>
        			</div>
                  	<div class="box-footer">
                    	<button type="submit" class="btn btn-success">
                    		<i class="fa fa-check"></i> Save
                    	</button>
                  	</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
