
// Custom JS functions for Brandify


// Top of Page Scroll
$(document).ready(function() {
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});


// Make Portfolio block clickable
$(document).ready(function(){
		var block = $(".portfolio-list li");
		block.click(function(){
			window.location = $(this).find("a:first").attr("href")
		});
		block.addClass("clickable");
		block.hover(function(){
			window.status = $(this).find("a:first").attr("href")
		}, function(){
			window.status = ""
		})
});

