<div class="tab-pane fade" id="pills-talents-requests" role="tabpanel" aria-labelledby="pills-talents-requests-tab">
    <div class="details-n-request tr dragableArea">
    	<div class="dr-inner">
	        <form action="/" method="get" class="t-search t-simple-search row">
	            <div class="col-md-3">
	                <div class="form-group required">
	                    <input type="text" class="form-control" name="talentsRequest[keywords]" aria-required="true" placeholder="All keywords">
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="form-group required">
	                    <input type="text" class="form-control" name="talentsRequest[categories]" aria-required="true" placeholder="All categories">
	                </div>
	            </div>
	            <div class="col-md-3">
	                <div class="form-group required">
	                    <input type="text" class="form-control" name="talentsRequest[location]" aria-required="true" placeholder="Location">
	                </div>
	            </div>
	            <div class="col-md-2">
	            	<div class="form-group">
		                <input type="submit" placeholder="" value="" class="form-control with-search-icon"/>
		            </div>
		            <p class="advanced-s text-center">Advanced search</p>
	            </div>
	        </form>

	        <form  action="/" method="get" class="t-search t-advanced-search">
	        	<h3 class="mb-5 col-md-12">Advanced search</h3>
	            <div class="col-md-5">
	                <div class="form-group required">
	                    <label>Industry:</label>
	                    <select class="form-control"name="talentsRequest[industry]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">Industry 1</option>
	                        <option value="">Industry 2</option>
	                        <option value="">Industry 3</option>
	                    </select>
	                </div>
	            </div>

	            <div class="col-md-5 col-md-offset-1">
	                <div class="form-group required">
	                    <label>Gender</label>
	                    <div class="form-control radio-selects">
	                    	<label class="text-muted">
			                    <input type="radio" name="talentsRequest[gender]">
			                    <span>male</span>
			                </label>
		                    <label class="text-muted">
			                    <input type="radio" name="talentsRequest[gender]">
			                    <span>female</span>
			                </label>
			                <label class="text-muted">
			                    <input type="radio" name="talentsRequest[gender]">
			                     <span>both</span>
			                </label>
		                </div>
	                </div>
	            </div>

	            <div class="col-md-5">
	                <div class="form-group required">
	                    <label>Experience:</label>
	                    <select class="form-control"name="talentsRequest[experience]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">Experience 1</option>
	                        <option value="">Experience 2</option>
	                        <option value="">Experience 3</option>
	                    </select>
	                </div>
	            </div>
	            <div class="col-md-2 col-md-offset-1">
	                <div class="form-group required">
	                    <label>Age</label>
	                    <select class="form-control"name="talentsRequest[age]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">22</option>
	                        <option value="">33</option>
	                        <option value="">44</option>
	                    </select>
	                </div>
	            </div>
				<div class="col-md-5">
	                <div class="form-group required">
	                    <label>Education:</label>
	                    <select class="form-control"name="talentsRequest[education]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">Education 1</option>
	                        <option value="">Education 2</option>
	                        <option value="">Education 3</option>
	                    </select>
	                </div>
	            </div>
	            <div class="col-md-5 col-md-offset-1">
	                <div class="form-group required">
	                    <label>Country</label>
	                    <select class="form-control"name="talentsRequest[country]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">Country 1</option>
	                        <option value="">Country 2</option>
	                        <option value="">Country 3</option>
	                    </select>
	                </div>
	            </div>
	            <div class="col-md-5">
	                <div class="form-group required">
	                    <label>Title</label>
	                    <select class="form-control"name="talentsRequest[title]" aria-required="true">
	                    	<option selected disabled>Entry</option>
	                        <option value="">Title 1</option>
	                        <option value="">Title 2</option>
	                        <option value="">Title 3</option>
	                    </select>
	                </div>
	            </div>
	            <div class="col-md-5 col-md-offset-1">
	                <div class="form-group required">
	                    <label>Languages</label>
	                    <input type="text" class="form-control" name="talentsRequest[languages]" aria-required="true" placeholder="Entry">
	                </div>
	            </div>
	            
	            <div class="col-md-5">
	                <div class="form-group required">
	                    <label>Job type</label>
	                    <div class="form-control radio-selects">
	                    	<label class="text-muted">
			                    <input type="radio" name="talentsRequest[job_type]">
			                    <span>full time</span>
			                </label>
		                    <label class="text-muted">
			                    <input type="radio" name="talentsRequest[job_type]">
			                    <span>part time</span>
			                </label>
			                <label class="text-muted">
			                    <input type="radio" name="talentsRequest[job_type]">
			                     <span>freelance</span>
			                </label>
		                </div>
	                </div>
	            </div>

	            <div class="col-md-5 col-md-offset-1">
	                <div class="form-group required">
	                    <label>Interests</label>
	                    <input type="text" class="form-control" name="talentsRequest[interests]" placeholder="Entry">
	                </div>
	            </div>
	            <div class="col-md-5">
	                <div class="form-group required">
	                    <label>Skills</label>
	                    <input type="text" class="form-control" name="talentsRequest[skills]" placeholder="Entry">
	                </div>
	            </div>

	            <div class="clearfix"></div>
	            <div class="info-update-section">
	                <input type="reset" value="Cancel"/>
	                <input type="submit" value="Search"/>
	            </div>

	        </form>
	    </div>
    </div>

    <div class="details-n-request tr dragableArea row status-block">
    	<div class="dr-inner row">
	    	<h3 class="mb-5 col-md-12">Talents requests status</h3>
	    	<div class="col-md-12">
		    	<div class="col-md-4">
		    		<img src="../assets/img/defaultManPictureBig.png" alt="Talent image" class="col-md-6">
		    		<div class="col-md-6 t-info">
			    		<h4 class="talent-name">Davit Yan</h4>
			    		<p class="talent-position">Position Title</p>
			    	</div>
		    	</div>
		    	<div class="col-md-4"></div>

		    	<div class="col-md-4">
		    		<div class="text-right"><button class="btn r-pending">Request pending</button></div>
		    		<div class="text-right"><button class="btn r-cancel">Cancel request</button></div>
		    	</div>
		    	<div class="col-md-12 border-dashed"></div>
		    </div>

		    <div class="col-md-12">
		    	<div class="col-md-4">
		    		<img src="../assets/img/defaultManPictureBig.png" alt="Talent image" class="col-md-6">
		    		<div class="col-md-6 t-info">
			    		<h4 class="talent-name">Babken Yan</h4>
			    		<p class="talent-position">Position Title</p>
			    	</div>
		    	</div>
		    	<div class="col-md-4"></div>

		    	<div class="col-md-4">
		    		<div class="text-right"><button class="btn r-pending">Request pending</button></div>
		    		<div class="text-right"><button class="btn r-cancel">Cancel request</button></div>
		    	</div>
		    	<div class="col-md-12 border-dashed"></div>
		    </div>
	    	
	    </div>
    </div>
    <div class="details-n-request tr dragableArea row status-block">
    	<div class="dr-inner row">
	    	<h3 class="mb-5 col-md-12">Latest Talents added</h3>
	    	<div class="col-md-12">
		    	<div class="col-md-4">
		    		<img src="../assets/img/defaultManPictureBig.png" alt="Talent image" class="col-md-6">
		    		<div class="col-md-6 t-info">
			    		<h4 class="talent-name">Gevorg Yan</h4>
			    		<p class="talent-position">Position Title</p>
			    	</div>
		    	</div>
		    	<div class="col-md-12 border-dashed"></div>
		    </div>
	    </div>
    </div>

</div>