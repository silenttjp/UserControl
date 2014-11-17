$( document ).ready(function() {

        $('#view_users').click(function(){
        	$.post(Routing.generate('user_bundle_routing'),{
                	getUsers:1
            },function(data){
                   	$('#user_list').html(data);             
            });
        });

        
    }); 