/*$('body').bind('contextmenu', function(e){
		return false;

});*/

$('.en').show();
$('.th').hide();
		
/*$('.en').on("click",function(){$('.th').show();});*/

var clicked=true;
$("#lang").on('click', function(){
    if(clicked)
    {
    	clicked=false;
        $('.th').show();
        $('.en').hide();
    }
    else
    {
        clicked=true;
        $('.th').hide();
        $('.en').show();
    }
});