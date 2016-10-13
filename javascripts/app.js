jQuery(document).ready(function($){
	
	// add foundation classes 
	$("ul#sort-links-list").addClass("sub-nav");
	$(".item-pagination").addClass("pagination");
	$("#primary-nav").addClass("nav"); 
	
	$(":submit").addClass("button");
	$("#submit_search_advanced").addClass("button small");
	$("#advanced-search-form").addClass("custom large-6 small-6");
	$(".add_search").addClass("tiny button dropdown");
	$(".remove_search").addClass("tiny button secondary");
	
	$(document).ready(function () {
  $(window).bind('resizeEnd', function () {
    $(".headWrapper").height($(window).height());
  });

  $(window).resize(function () {
    if (this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function () {
      $(this).trigger('resizeEnd');
    }, 300);
  }).trigger("resize");
});
	
});

