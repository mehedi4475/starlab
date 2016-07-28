$(function () {
    $('.datetimepicker').datetimepicker({  
        format: 'YYYY-MM-DD',
     
    });

    $("input[name='height']").TouchSpin({
    	min: 0,
        max: 600,
    });
    $("input[name='weight']").TouchSpin({
    	min: 0,
        max: 200,
    });
    
	$("#avatar").fileinput({
	    allowedFileExtensions: ["jpg", "png", "gif"]
	});
    
    //confirm before delete  
    $("a.delete_patient").click("submit", function(){
        return confirm("Do you want to delete this patient?");
    });
    
    
    //confirm before approve  
    $("a.approve_patient").click("submit", function(){
        return confirm("Do you want to approve this patient?");
    });   
    
    //confirm before Reject  
    $("a.reject_patient").click("submit", function(){
        return confirm("Do you want to reject this patient?");
    });
  
   
    
    

    
});