<div class="main-card mb-3 card">
    <div class="card-body">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-info">
                <div class="box-header with-border">
                  	<h3 class="box-title">Edit additional identity question</h3>
                </div>
    			<div class="box-body">
    				<div class="row clearfix">


<input type="hidden" name="ID_FORM" value="6">
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>QUESTION</label>
    						<div class="form-group">
    							<textarea name="QUESTION" class="form-control" id="QUESTION">Pendidikan Terakhir</textarea>
    							<span class="text-danger"></span>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="box-footer">
                	<a href="editform"><button type="submit" class="btn btn-success">
    					<i class="fa fa-check"></i> Save
    				</button></a>
            <a href="editform">Back</a>    	        </div></div>
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
                    <h3 class="box-title">Additinal identity option</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody><tr>
    						<!-- <th>ID ADDITIONAL IDENTITY OPTION</th>
    						<th>ID ADDITIONAL IDENTITY QUESTION</th> -->
    						<th>INPUT TYPE</th>
    						<th>OPTION</th>
    						<th>Actions</th>
                        </tr>
                                                <tr>
    						<td>Radio Button</td>
    						<td>Tidak Sekolah</td>
    						<td>
                                <a href="editIdentityOption" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>

    						<td>Radio Button</td>
    						<td>Tidak Tamat SD/Sederajat</td>
                            <td>
                                <a href="editIdentityOption" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                                <tr>

    						<td>Radio Button</td>
    						<td>Tamat SD/Sederajat</td>
                            <td>
                                <a href="editIdentityOption" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                                            </tbody></table>
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan data Baru</h3>
                    </div>
                    <div class="row clearfix">

<input type="hidden" name="ID_ADDITIONAL_IDENTITY_QUESTION" value="35">

<input type="hidden" name="ID_FORM" value="">
                        <div class="col-md-6">
    						<label for="ID_INPUT_TYPE" class="control-label"><span class="text-danger">*</span>tipe masukan</label>
    						<div class="form-group">
    							<select name="ID_INPUT_TYPE" class="form-control">
    								<option value="">select type</option>
    								<option value="3">Radio button with text field</option><option value="1">Radio Button</option>    							</select>
    							<span class="text-danger"></span>
    						</div>
    					</div>
    					<div class="col-md-6">
    						<label for="QUESTION" class="control-label"><span class="text-danger">*</span>Add new additional indentiti question here</label>
    						<div class="form-group">
    							<textarea name="OPTION" class="form-control" id="QUESTION"></textarea>
    							<span class="text-danger"></span>
    						</div>
    					</div>
    				</div>
                    <div class="box-footer">
                    	<button type="submit" class="btn btn-success">
                    		<i class="fa fa-check"></i> Add
                    	</button>
                  	</div> </div>
            </div>
        </div>
    </div>
  </div>
</div>
