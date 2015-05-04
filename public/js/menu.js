
var $buttonShowMenu = document.getElementById('showmenu');
var $buttonHideMenu = document.getElementById('hidemenu');

var $menu = document.getElementById('menu');

var $body = document.querySelector('body');
// Instancia Hammer
var body = new Hammer( $body );
// Eventos
body.on('tap', function(){
	console.log("Esto es un tap");
})

var showMenu = function()
{
	$buttonShowMenu.classList.remove('is-active');
	$buttonHideMenu.classList.add('is-active');
	$menu.classList.add('is-active');
}

var hideMenu = function()
{
	$buttonShowMenu.classList.add('is-active');
	$buttonHideMenu.classList.remove('is-active');
	$menu.classList.remove('is-active');
}
// Escuchar 
$buttonShowMenu.addEventListener( "click", showMenu );

$buttonHideMenu.addEventListener( "click", hideMenu );

body.on('panright' , showMenu);
body.on('panleft' , hideMenu);

// SCROLL
$(document).ready(function(){
	$("a[href^='#']").click(function(event){
		var id =  $(this).attr("href");
		var target = $(id).offset().top;
		// ANIMATION SCROLL
		$('html,body').animate({scrollTop:target}, 'slow');
		event.preventDefault();	
	})
});