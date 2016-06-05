$(document).ready(function(){
    
    var click=0; //count user click on "load more" button, start from 0

    //initial data to load
    $('#results').load("load_more.php", {'click':click}, function() {click++;}); 
 
    //click load more button
	$('#load_more').click(function(){
		  $('#loading').show();
		  $.ajax({
                type:'POST',
                url:'load_more.php',
                data:'click='+click,
                success:function(html){
                    $('#loading').hide();
                    $('#results').append(html);
                    click++;
                }
            });
        
		
	});

});