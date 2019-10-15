jQuery(function($){
	jQuery('.load-btn .btn-blog').click(function(){
		jQuery(this).text('Loading...'); 
		let data = {
			'action': 'loadmore',
			'query': true_posts,
			'page' : current_page
		};
		$.ajax({
			url:ajaxurl,
			data:data, 
			type:'POST', 
			success:function(data){
				if( data ) { 
					jQuery('.load-btn .btn-blog').text('Load More').before(data); 
					current_page++; 
					if (current_page == max_pages) jQuery(".load-btn .btn-blog").remove(); 
				} else {
					jQuery('.load-btn .btn-blog').remove(); 
				}
			}
		});
	});
});