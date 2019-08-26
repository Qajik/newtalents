<div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">
    <div class="row">
        <div id="projects-block" class="col-md-12">
            <div class="projects-block-add">
                <button class="btn add-project">Add New Projects</button>
                <div class="text-center projects-empty">
                    <p>Your Projecte page is currently empty</p>
                    <p>Create your portfolio by clicking the Add New Porject Button</p>
                </div>
            </div>
            <div class="row add-project-form">
                <form action="#" method="post">
                    <div class="col-md-4 form-group clearfix">
                        <label>Title</label>
                        <input type="text" class="form-control" name="NewProject[title]" placeholder="Project 1">
                    </div>
                    <div class="col-md-3 col-md-offset-2 form-group clearfix ">
                        <label>View</label>
                        <select class="form-control" name="NewProject[view]">
                            <option value="Public">Public</option>
                            <option value="friends_only">Friends only</option>
                            <option value="only_me">Only me</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-md-10">
                        <label>Description</label>
                        <textarea name="companyData[description]" class="form-control" rows="5" placeholder="Add a description for your project here"></textarea>
                    </div>
                    <div class="col-md-3 form-group">
                        <input type="file" class="form-control" name="NewProject[files]">
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-12 project-video-url form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Video Url</label>
                                <span class="video-url-value"></span>
                            </div>
                            <div class="col-md-4 pr-0">
                                <input type="text" class="form-control" name="NewProject[video_url]" placeholder="Add your video url here">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="form-control btn">Add</button>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div id="project-update-section">
                        <input type="reset" value="Cancel">
                        <input type="submit" value="Save">
                    </div>
                </form>
                <span class="close-icon">x</span>
            </div>

        </div>
    </div>
</div>