<div class="tab-pane fade active in" id="pills-profileDetails" role="tabpanel" aria-labelledby="pills-profileDetails-tab">
    <div class="details-n-request dragableArea">
        <form action="/" method="post" class="row">
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Company name</label>
                    <input type="text" class="form-control" name="companyData[name]" aria-required="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Company legal form</label>
                    <input type="text" class="form-control" name="companyData[legal_form]" aria-required="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Founded in</label>
                    <input type="text" class="form-control" id="companyFoundeYear" name="companyData[founded_year]" aria-required="true">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>About the company</label>
                    <textarea name="companyData[about]" class="form-control" cols="30" rows="10" placeholder="Write about your company ..."></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Taxpayers Identification Number (TIN)</label>
                    <input type="text" class="form-control" name="companyData[tin]" aria-required="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Industry</label>
                    <select class="form-control"name="companyData[industry]" aria-required="true">
                        <option value="" selected="">Industry 1</option>
                        <option value="">Industry 2</option>
                        <option value="">Industry 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Segment</label>
                    <select class="form-control"name="companyData[segment]" aria-required="true">
                        <option value="" selected="">Segment 1</option>
                        <option value="">Segment 2</option>
                        <option value="">Segment 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Employees</label>
                    <select class="form-control"name="companyData[employees]" aria-required="true">
                        <option value="" selected="">Employeer 1</option>
                        <option value="">Employeer 2</option>
                        <option value="">Employeer 3</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-6">
                <div class="form-group required">
                    <label>Company's website</label>
                    <input type="text" class="form-control" name="companyData[website]" aria-required="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group required">
                    <label>Email</label>
                    <input type="email" class="form-control" name="companyData[email]" aria-required="true">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group required">
                    <label>Country</label>
                    <select class="form-control"name="companyData[country]" aria-required="true">
                        <option value="" selected="">Country 1</option>
                        <option value="">Country 2</option>
                        <option value="">Country 3</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group required">
                    <label>Address</label>
                    <input type="text" class="form-control" name="companyData[zddress]" aria-required="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Phone number</label>
                    <input type="text" class="form-control" name="companyData[phune_number]" aria-required="true">
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Contact person name</label>
                    <input type="text" class="form-control" name="companyData[contatc_person_name]" aria-required="true">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Contact person position</label>
                    <select class="form-control" name="companyData[contatc_person_postion]" aria-required="true">
                        <option value="" selected="">Position 1</option>
                        <option value="">Position 2</option>
                        <option value="">Position 3</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group required">
                    <label>Contact person mobile</label>
                    <input type="text" class="form-control" name="companyData[contatc_person_mobile]" aria-required="true">
                </div>
            </div>
            <div class="info-update-section">
                <input type="reset" value="Cancel"/>
                <input type="submit" value="Update"/>
            </div>
        </form>
    </div>
</div>