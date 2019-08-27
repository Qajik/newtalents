var talents = {
    init: function () {
        this.selectResumeOnClick();
        this.toggleNewProjectForm();
        this.toggleAdvenacedSearchForm();
    },

    selectResumeOnClick: function(){
        var cvDetails = $('#cv-details');
        if(cvDetails && cvDetails.length){
            cvDetails.on('click','.cv-details', function(){
                var _self = $(this);
                var cvImg = _self.find('img').clone();
                _self.addClass('active').siblings().removeClass('active');
                $('#resumeModal').find('.modal-body').html(cvImg);
            });

        }
    },

    toggleNewProjectForm: function(){
        var projects = $('#projects-block');
        if(projects && projects.length){
            projects.on('click', '.add-project, .close-icon', function(){
                var projectForm = $(this).parent();
                projectForm.fadeOut('300', function(){
                   projectForm.siblings().fadeIn('slow');
                });
            });
        }
    },

    toggleAdvenacedSearchForm: function(){
        var searchForms = $('#pills-talents-requests .details-n-request.tr form.t-search');
        if(searchForms && searchForms.length){
            searchForms.on('click', '.advanced-s', function(){
                searchForms.filter( ".t-advanced-search" ).slideToggle(600);
            });
        }
    }
    
}

talents.init();


$(document).on('click','.experienceViewMore', function(){
    $('.experienceOptionalForShowing').slideUp('lsow');
    $(this)
            .parent('.experienceEditViewMore')
            .siblings('.experienceItemDescription')
            .children('.experienceOptionalForShowing')
            .slideDown('slow');
    
});