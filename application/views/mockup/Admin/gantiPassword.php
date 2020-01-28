<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Ganti Password</h5>

            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationCustom01">Old Password</label>
                    <input name="oldPassword" type="password" class="form-control" id="old" placeholder="Old Password" required="">
                    <div class="invalid-feedback" id="fe1Invalid">
                        Please provide the old password.
                    </div>
                    <div class="valid-feedback" id="fe1valid">
                        Good
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">New Password</label>
                    <input name="newPassword" type="password" class="form-control" id="new1" placeholder="New Password" required="">
                    <div class="invalid-feedback">
                        Please provide the new password.
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationCustom02">New Password</label>
                    <input name="newPasswordConfirmation" type="password" class="form-control" id="new2" placeholder="New Password Confirmation" required="">
                    <div class="invalid-feedback">
                        Please provide the new password confirmation.
                    </div>
                </div>
            </div>
            <a href="dashboard"><button class="btn btn-primary" type="submit">Submit form</button></a>
        </form>
    </div>
</div>
