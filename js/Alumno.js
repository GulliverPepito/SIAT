$(document).ready(main);

var contador = 1;

function main(){
	$('.menu-bar').click(function(){
		//$('.sidebar').toggle(); 
 
		if(contador == 1){
			$('.sidebar').animate({
				left: '0'
			},500);
			contador = 0;
		} else {
			contador = 1;
			$('.sidebar').animate({
				left: '-100%'
			},500);
		}
 
	});
 
};