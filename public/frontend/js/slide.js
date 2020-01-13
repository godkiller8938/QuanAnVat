$(document).ready(function(){
	$('#itemslider').carousel({ interval: 3000 });
	$('.carousel-showmanymoveone .item').each(function(){
		var itemToClone = $(this);
		for (var i=1;i<6;i++) {
			itemToClone = itemToClone.next();
			if (!itemToClone.length) {
			itemToClone = $(this).siblings(':first');
			}
				itemToClone.children(':first-child').clone()
				.addClass("cloneditem-"+(i))
				.appendTo($(this));
		}
	});
	var max=0;
	$('div #setheight').each(function(){
	   var h = $(this).height();
	   if(h > max)
	        max = h;
    });
	$('div #setheight').height(max);
});

$(window).resize(function(){
	var max = 0;
	$('div #setheight').height('auto');
	$('div #setheight').each(function(){
	   var h = $(this).height();
	   if(h > max)
	        max = h;
 
        //$('div #setheight').height(max);
    });
    h=0;
    //$('div #setheight').css('height',max);
   
	$('div #setheight').height(max);
	});
