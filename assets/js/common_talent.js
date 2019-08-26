var main;


var talents = {
    
    
    init: function () {

        main = this;
        this.selectResumeOnClick();
    },

    selectResumeOnClick: function(){
        $(document).on('click','#cv-details > div', function(){
            var _self = $(this);
            var cvImg = _self.find('img').clone();
            _self.addClass('active').siblings().removeClass('active');
            $('#resumeModal').find('.modal-body').html(cvImg);
        });
    },
    
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