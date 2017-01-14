//elementDisplay.js

$(document).ready(function(){
	
	$('div:not(#elementDisplay)').click(function(event){
		
		/*Necessary to prevent the click from 'bubbling up' the heirarchy*/
		event.stopPropagation();
		
		var target = $( event.target);
		
		console.log(target);
		
		if($('#elementDisplay').css('display') != 'none'){
			
			/* Clicking on another resource*/
			if(target.is('.resource img')){
				
				$('#elementDisplay').css('display', 'block');
				$('#elementDisplay').css({'height': 'auto', 'opacity': 1});
				$('#elementDisplay').html($(this).html());
				
				$('#elementDisplay *').css('opacity', 0);
				$('#elementDisplay *').animate({'opacity': 1}, 500);
				
			}
			
			/* Disappearance animation*/
			else{
				$('#elementDisplay').animate({'height': 0, 'opacity': 0}, 300);
				setTimeout(function(){
					$('#elementDisplay').css('display', 'none');
				}, 300);
			}
		}
		
		/* Clicking on a resource if the elementDisplay is not visible*/
		else if(target.is('.resource img')){
			
			$('#elementDisplay').html($(this).html());
			$('#elementDisplay *').css('opacity', 0);
			
			$('#elementDisplay').css({'height': 'auto', 'opacity': 1});
			$('#elementDisplay').css('display', 'block');
			
			
			$('#elementDisplay *').animate({'opacity': 1}, 300);	
		}

	});
	
});