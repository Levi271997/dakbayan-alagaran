
	$(document).ready(function(){
       
       let tag ="barangaylist"; 
       let select_menu= $('#barangay')[0]; 
       $.ajax({
            url:"ajax.php",
            dataType:"json",
            method:"POST",
            data:{tag:tag},
            success:function(response){      
                console.log($.isArray(response)); 
                response.forEach((item,index)=>{
                    console.log(index,item);
                    var option = document.createElement("option");
                    option.value = item['id'];
                    option.text = item['barangay_name'];
                    select_menu.appendChild(option);
                })
            }		
        })
	});
    
    function getZoneList(barangay_id)
    {
		console.log(barangay_id);
        let tag = "zonelist";
        let itemMenu = $('#zone')[0];
 
        $('#zone').empty().append('<option>Zone (Purok)</option>');
    
        $.ajax({
            url:"ajax.php",
            dataType:"json",
            method:"post",
            data:{tag:tag,barangay_id:barangay_id},

            success:function(response){	
                response.forEach((item,index)=>{
                    var option = document.createElement("option");
                    option.value = item['zone_id'];
                    option.text = item['zone_name'];
                    itemMenu.appendChild(option);
                })
            }
        })
    }
