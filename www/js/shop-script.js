$(document).ready(function(){
	       $("#newsticker").jCarouselLite({
			   vertical:true;
			   hoverPause:true;
			   btnPrev:"#news-prev";
			   btnNext:"#news-next";
			   visible:3;
			   auto:3000;
			   speed:500;
	
	     });
		 
		$("#style-grid").click(function(){
			$("#block-tovar-grid").show();
			$("#block-tovar-list").hide();
			$("#style-grid").attr("src","images/icon-grid.png";
			$("#style-list").attr("src","images/list-text.png";
			
			$.cookie('select_style', 'grid');
		});
		
		$("#style-list").click(function(){
			$("#block-tovar-grid").hide();
			$("#block-tovar-list").show();
			$("#style-list").attr("src","images/list-xxl.png";
			$("#style-grid").attr("src","images/icon-grid.png";
			
			$.cookie('select_style', 'list');
		})
		
		if ($.cookie('select_style') =='grid')
		{
			$("#block-tovar-grid").show();
		$("#block-tovar-list").hide();
		
		$("#style-grid").attr("src","images/icon-grid.png";
		$("#style-list").attr("src","images/list-text.png";
	     }
		else
		{	
			
		$("#block-tovar-list").show();
		$("#block-tovar-grid").hide();
		
		$("#style-grid").attr("src","images/icon-grid.png";
		$("#style-list").attr("src","images/list-text.png";	
			
			}
		
	$("#select-sort").click(function(){
		
		/if ($(this).arrt('class') != 'active'){/
			 
	$("#sorting-list").slideToggle(200);
		});
		
		
$('#block-category > ul > li > a').click(function){
	 
	 if ($(this).arrt('class') != 'active'){

$('#block-category > ul > li > ul').slideUp(400);		
$(this).next().slideToggle(400);
      
	    $('#block-category >ul > li >a').removeClass('active');
		$(this).addClass('active');
		$.cookie('select_cat', $(this).attr('id'));
	}else
	{
		 $('#block-category >ul > li >a').removeClass('active');
		 $('#block-category > ul > li > ul').slideUp(400);
		 $.cookie('select_cat', '');
	  };
if ($.cookie('select_cat') != '')
{
	$('#block-category >ul >li > #'+$.cookie('select_cat')).addClass('active').next().show();
	
	}
	  
	  
	  
	  
	});