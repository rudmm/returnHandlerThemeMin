function form(){
    let btn = jQuery('.header header .header_btn a');
    let topBtn = jQuery('.top-btn a');
    let helpbtn = jQuery('.help .help_content_btn a');
    let questionbtn = jQuery('.questions .btn-questions');
    let brainbtn = jQuery('.brain .btn');
    let close = jQuery('.contact-form .close');
    let form = jQuery('#form_connect');
    let sectionForm = jQuery('#myform');
    brainbtn.click(function(){
        myFancybox(btn);
    });
    questionbtn.click(function(){
        myFancybox(btn);
    });
    helpbtn.click(function(){
        myFancybox(btn);
    });
    topBtn.click(function(event){
        myFancybox(btn);
    });
    btn.click(function(event){
        myFancybox(jQuery(this));
    });
    close.click(function(){
        form.trigger('reset');
        jQuery.fancybox.close(); 
    });
}

function myFancybox(btn){
    //btn.fancybox({
	//	'modal' : true
    //});
    jQuery.fancybox.open(btn);
}

function connect(){
    let form = jQuery('#form_connect');
    let action = adminUrl;
    form.on('submit',function(e){
        
        let name = jQuery('#name').val();
        let email = jQuery('#email').val();
        let website = jQuery('#website').val();
        let platform = jQuery('#platform').val();
        let comment = jQuery('#comment').val();
        let formData = {
            name: name,
            email: email,
            website: website,
            platform: platform,
            comment: comment
        };
        jQuery.ajax({
            url: action,
            type: 'POST',
            data: formData,
            error: function(){
                jQuery('.success').html(jQuery('.success').html()+'Error sending.');
            },
            success: function(){
                form.trigger('reset');
                jQuery('.success').html(jQuery('.success').html()+'<br><span>Your application  is sent. We will get back to you soon!</span>');
            }
        });
        return false;
        
    });
    
}

jQuery(document).ready(function(){
    form();
    connect();
});