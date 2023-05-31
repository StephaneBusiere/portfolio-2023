jQuery(function($) {
var filters = $('.filter-container').find('.filter-item');
var filter_all = $('.filter-item.all');


	filters.each(function () {
		var current = $(this);
		
		$(this).on("click", function (event) {
			if (event.target !== this) {
				return;
			}
			$(this).addClass("active");
			filter_all.addClass('stop');
		});
		$(document).on("click", function (e) {
			if (!current.is(e.target) && current.has(e.target).length === 0) {
				current.removeClass("active");
				
			}
		});
		filter_all.on("click", function (event) {
			filter_all.removeClass('stop');
		});
	})
});

$(document).on("click", ".filter-item", function (e) {
	e.preventDefault();
	var category = $(this).data("category");
	
	jQuery.ajax({
	   url: ajax_url,
	   type: "POST",
	   data: {
		  action: "archive_filters",
		  category: category,
	   },

	   success: function (result) {
		  $(".realisations-wrapper").html(result);
	   },
	   error: function (result) {
		  console.warn(result);
	   },
	});
 });

 $(document).on("click", ".filter-item.all", function (e) {
	e.preventDefault();
	var category = $(this).data("category");
	
	jQuery.ajax({
	   url: ajax_url,
	   type: "POST",
	   data: {
		  action: "filter_all",
		  category: category,
	   },

	   success: function (result) {
		  $(".realisations-wrapper").html(result);
	   },
	   error: function (result) {
		  console.warn(result);
	   },
	});
 });
