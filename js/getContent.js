
function getContent(_id, e){
   e.preventDefault();
   var _url = 'pages/' + _id + '.php';

   $.post( 
       _url, 
       { 
           page: _id, 
       }
   ).done(function( data ) {
       injectContent(data, _id);
   });
}

function injectContent(_html, _id){
    console.log(_id);
    $('#page_content').html(_html);
    $('#page_content').animate({
        top: '0',
		height: '100%'
    })
}

function close_menu(){
    $('#page_content').animate(
		{
			top: '100%',
			height: "0"
		},
		function(){
			$('#page_content').html('')
		}
	);
	
}