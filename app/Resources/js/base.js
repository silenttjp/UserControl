$( document ).ready(function() {

        $('#view_users').click(function(){
        	$.post(Routing.generate('user_bundle_routing'),{
                	getUsers:1
            },function(data){
                   	$('#user_list').html(data);             
            });
        });

        $('#view_lists').click(function(){
        	$.post(Routing.generate('get_lists_routing'),{
                	getLists:1
            },function(data){
                   $('#user_list').html(data);             
            });
        });
        
        $('#add_user').click(function(){
        	$.post(Routing.generate('new_user_routing'),{
                	getUsers:1
            },function(data){
                   	$('#user_list').html(data);             
            });
        });

        $('#add_list').click(function(){
        	$.post(Routing.generate('new_lists_routing'),{
                	getUsers:1
            },function(data){
                   	$('#user_list').html(data);             
            });
        });

        $('#user_list').on("submit","#new_user", function(){

    	    var FN = $('#user_firstName').val();
    	    var LN = $('#user_lastName').val();
    	    var id = $('#user_id').val();
    	    var list = $('#user_Lists option:selected' ).val();

    	    $.post(Routing.generate('new_user_save_routing'),{
    	    		user_firstname:FN,
    	    		user_lastname:LN,
    	    		user_id:id,
    	    		user_list:list
            },function(data){
         	   	$('#user_list').html(data); 
          	  	$.post(Routing.generate('get_user_count_routing'),{
          	  			getUser:1
                },function(data){
             	   		$('#user_count').html(data);          
                });         
            });

    	    
            return false;
       });  


       $('#user_list').on("submit","#new_list", function(){

    	    var FN = $('#lists_name').val();
    	    var id = $('#lists_id').val();
    	    
    	    $.post(Routing.generate('new_list_save_routing'),{
    	    	list_name:FN,
    	    	list_id:id
            },function(data){
            	$('#user_list').html(data); 
          	  	$.post(Routing.generate('get_lists_count_routing'),{
        	    	getUser:1
                },function(data){
             	   $('#lists_count').html(data);          
                });         
            });

    	    
            return false;
       }); 

       $('#user_list').on("click",".user_id", function(){
   	            var id = $(this).attr("ref");

      	         $.post(Routing.generate('delete_user_routing'),{
      	             id:id
   	   	        },function(data){
     	   	        
      	             $('#user_list').html(data); 
                	 $.post(Routing.generate(''get_user_count_routing'),{
              	    	getUser:1
                     },function(data){
                   	    $('#user_count').html(data);          
                     });   
   	   	   	   	 });
       });

       $('#user_list').on("click",".list_id", function(){
           var id = $(this).attr("ref");

         $.post(Routing.generate('delete_list_routing'),{
             id:id
  	        },function(data){
  	        
             $('#user_list').html(data); 
      	 $.post(Routing.generate('get_lists_count_routing'),{
    	    	getUser:1
           },function(data){
         	    $('#lists_count').html(data);          
           });   
  	   	   	 });
        });

       $('#user_list').on("click",".user_edit", function(){
           var id = $(this).attr("ref");

           $.post(Routing.generate('new_user_routing'),{
               id:id
           },function(data){
                  $('#user-' + id).html(data);             
           });
        });

       $('#user_list').on("click",".list_edit", function(){
           var id = $(this).attr("ref");

           $.post(Routing.generate('new_lists_routing'),{
               id:id
           },function(data){
                  $('#lists-' + id).html(data);             
           });
        });
    }); 