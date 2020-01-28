<div class="row">
    <div class="col-12 stretch-card">
      <div class="card">
          <div class="card-body">
        <h4 class="card-title">Edit place</h4>
		  <div class="form-group row">
	          <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Place Type</label>
			  <div class="col-sm-9">
		          <select class="form-control" id="exampleFormControlSelect2" name="ID_PLACE_TYPE">
		            <option value="">select place_type</option>
					<option value="4">Klinik2</option>
                    <option value="2">Rumah Sakit</option>
                    <option value="1" selected="selected">Puskesmas</option>
                </select>
							<span class="text-danger"></span>
		  		</div>
      </div>

			<div class="form-group row">
	          <label for="exampleFormControlSelect2" class="col-sm-3 col-form-label">Place Category</label>
			  <div class="col-sm-9">
		          <select class="form-control" id="exampleFormControlSelect2" name="ID_PLACE_CATEGORY">
		            <option value="">select place category</option>
								<option value="4">rumah sakit baru</option><option value="2" selected="selected">PUSKESMAS NON RAWAT INAP</option><option value="1">PUSKESMAS RAWAT INAP</option>							</select>
							<span class="text-danger"></span>
		  		</div>
      </div>
			<div class="form-group row">
              <label for="exampleInputEmail2" class="col-sm-3 col-form-label">NAMA</label>
              <div class="col-sm-9">
                <input class="form-control" type="text" name="NAMA" value="pus non inap 1">
								<span class="text-danger"></span>
							</div>
          <a href="place"><button type="submit" class="btn btn-success mr-2">Submit </button></a>
		  <a href="place">Cancel</a>		       </div>
  </div>
      </div>
    </div>
</div>
