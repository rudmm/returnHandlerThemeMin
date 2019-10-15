function menu(){
    let scroll = jQuery(window).scrollTop();
    let header = jQuery('.header header .bg');
    if(scroll>0){
        header.addClass('fixed');
    }else{
        header.removeClass('fixed');
    }
}

function clickBurger(){
    let btn = jQuery('.btn-menu');
    let navbar = jQuery('.navbar');
    let header = jQuery('.header header .bg');
    let fixedblock = jQuery('.header header .fixedblock');
    btn.click(function(){
        
        btn.prev().toggleClass('openlogo');
        navbar.slideToggle(10);
        btn.toggleClass('open');
        header.toggleClass('fixed mobile','easeInQuad');
        fixedblock.toggleClass('mobilefixedblock','easeInQuad');
        
       
    });
}

function answerOpen(){
    let btn = jQuery('.question');
    for(let i=0;i<btn.length;i++){
        btn.eq(i).click(function(){
            let lines = btn.eq(i).find('.arrow-lines');
            let answer = btn.eq(i).parents('.list-item').find('.answer');
            let answerLine = btn.eq(i).parents('.list-item').find('.answer_line');
            lines.toggleClass('open');
            answer.slideToggle();
            answerLine.toggleClass('openLine');
        });
    }
}

function resize() {
    let $image = jQuery(".image_animate");
    let $wrapper = jQuery(".top-image");
    let basWidth = 929;
    let basHeight = 629;
    let transformRule = '';
    let wrapperHeight = $wrapper.height();
    let scale = Math.min($wrapper.width() / basWidth, wrapperHeight / basHeight);
    let realyHeightImage = $image.height()/(Math.max(basWidth/ $wrapper.width() , basHeight /wrapperHeight  )); 
    let procentTranslateY = 50;
    let windowWidth = jQuery(window).outerWidth();
    if(windowWidth>768){ 
        procentTranslateY = (100 - realyHeightImage/( wrapperHeight/100))/2 +50;
    }
    transformRule = "translate(-50%, -"+procentTranslateY+"%) scale(" + scale + ")";

    $image.css({
        transform: transformRule
    });
}

function sizeImageBlock(){
    let imageBlock = jQuery('.infoflex .image_block');
    let imageSize = [];
    for(let i=0;i<imageBlock.length;i++){
        imageSize.push(imageBlock.eq(i).height());
    }
    let size =0;
    imageSize.sort(function(a,b){
        if(a>b){
            size = a;
            return -1;
        }
    });
    for(let i=0;i<imageBlock.length;i++){
        imageBlock.eq(i).css('height', size);
    }
}

function resizeBrain(){
    let widthWindow = jQuery(window).width();
    if(widthWindow<667){
        return false;
    }else{
        let $image = jQuery(".animate");
        let $wrapper = jQuery(".brain-image");
        let basWidth = 1920;
        let basHeight = 555;
        let transformRule = '';
        let wrapperHeight = $wrapper.height();
        let wrapperWidth = $wrapper.width();
        let scale = Math.min(wrapperWidth / basWidth, wrapperHeight / basHeight);
        let realyHeightImage = $image.height()/(Math.max(basWidth/ $wrapper.width() , basHeight /wrapperHeight  )); 
        //let procentTranslateY = (100 - realyHeightImage/( wrapperHeight/100))/2 +50;
        transformRule = "translate(-50%, -"+50+"%) scale(" + (scale) + ")";
        let height = basHeight*(scale);
        let section = jQuery('.brain');
        let margin = 325;
        $wrapper.css({
            height : height
        });

        section.css({
            marginBottom: margin*(scale)
        });

        $image.css({
            transform: transformRule
        });
    }
    

}

function wp_admin_menu_position(){
    let wpAdmin = jQuery('#wpadminbar');
    if(wpAdmin.length){
        let bgblock = jQuery('header .bg');
        bgblock.parent().addClass('wp_custom');
    }
}

function scrollReveal(){
    ScrollReveal().reveal('.infosection.col .info', { 
        interval: 100,
        delay: 700,
        reset: false,
        easing: 'ease-in',
        
      });
    ScrollReveal().reveal('.infoflex .info_block.col1',{
        duration: 2000,
        origin: 'left',
        distance: '100px',
        viewFactor: 0.4
    });
    ScrollReveal().reveal('.infoflex .info_block.col2',{
        duration: 2000,
        origin: 'bottom',
        distance: '100px',
        viewFactor: 0.4
    });
    ScrollReveal().reveal('.infoflex .info_block.col3',{
        duration: 2000,
        origin: 'right',
        distance: '100px',
        viewFactor: 0.4
    });
}

function buttonsNavigation(){
    let prev = jQuery('.share .buttons a[rel="prev"]');
    let next = jQuery('.share .buttons a[rel="next"]');
    prev.html('<img src="'+ theme_location + '/assets/img/blog/prev.svg" alt="">Prev ');
    next.html('Next <img src="'+ theme_location + '/assets/img/blog/next.svg" alt="">');
}

jQuery(window).scroll(function(){
    menu();
    wp_admin_menu_position();
});

jQuery(document).ready(function(){
    clickBurger();
    resize();
    answerOpen();
    sizeImageBlock();
    resizeBrain();
    wp_admin_menu_position();
    //scrollReveal();
    buttonsNavigation();
});

jQuery(window).resize(function () {
    resize();
    resizeBrain();
    wp_admin_menu_position();
});
jQuery(window).on("orientationchange", function () {
    resize();
    resizeBrain();
    wp_admin_menu_position();
});
