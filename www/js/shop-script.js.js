$(document).ready(function(){
	       $("#newsticker").jCarouseilite({
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
			$("#block-grid").attr("src","../images/icon-grid.png";
			$("#block-list").attr("src","../images/list-text.png";
			$.cookie('select_style', 'grid');
		});
		$("#style-list").click(function(){
			$("#block-tovar-grid").hide();
			$("#block-tovar-list").show();
			$("#block-list").attr("src","../images/list-xxl.png";
			$("#block-grid").attr("src","../images/icon-grid.png";
			$.cookie('select_style', 'list');
		});
		
		if ($.cookie('select_style') =='grid')
		{
			$("#block-tovar-grid").show();
		$("#block-tovar-list").hide();
		
		$("#block-grid").attr("src","../images/icon-grid.png";
		$("#block-list").attr("src","../images/list-text.png";
	     }
		else
		{	
			
		$("#block-tovar-list").show();
		$("#block-tovar-grid").hide();
		
		$("#block-grid").attr("src","../images/icon-grid.png";
		$("#block-list").attr("src","../images/list-text.png";	
			
			}
		
	$("#select-sort").click(function(){
		$("#sorting-list").slideToggle(200);
		});

	});