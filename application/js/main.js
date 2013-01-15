/* Wingkit 11/20/12
	Author: Josh Ferreira
*/
(function(){
	
	//Hover on the current navigation anchor
	
	$('a.current').mouseover(function(){
		$('div.hoverarrow').show();
	});
	
	$('a.current').mouseout(function(){
		$('div.hoverarrow').hide();
	});
	
		 
})();