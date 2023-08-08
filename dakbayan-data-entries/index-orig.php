
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>



<!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script> -->
	<!-- <script src="js/script.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


</head>
<style>
    input[type="text"],select,input[type="date"],input[type="number"],input[type="email"]{
        padding:10px;
        font-size:20px;
    }
    #submit{cursor: pointer;
        cursor: pointer;
    background: red;
    /* width: 10%; */
    padding: 10px;
    margin-top: 20px;
    text-align: center;
    color: white;
}
.famrepone,.famreptwo,.famrepthree{
    display:flex;
    flex-direction:row;
    gap:20px;
    
}
div#form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 40%;
    margin: 0 auto;
}
.famrepone > input,.famreptwo > input,.famrepthree > input
{width:calc(50% - 20px)}
.checkboxcontainer{
    display:flex;
    flex-direction:row;
    
}
.checkboxcontainer > input[type="checkbox"]{
    transform: scale(2);
    height:20px;
}
.checkboxcontainer > p{
    font-size: 27px;
    margin-left: 10px;
}
.checkboxcontainer{
    align-items:center;
}
.divone{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: space-between;
}




   
</style>
<body>
    
<div id="form">             
               <!-- <input type="text" name="barangay" id="barangay">    -->
               <label>LAST NAME</label>
               <input type="text" name="lname" id="lname" placeholder="last name">
               <label>FIRST NAME</label>
               <input type="text" name="fname" id="fname" placeholder="first name">
               <label>MIDDLE NAME</label>
               <input type="text" name="mname" id="mname" placeholder="middle name">

               <label>SUFFIX</label>
               <select name="suffix" id="suffix">
					<option value="" disabled selected>Suffix</option>
					<option value="Jr.">None</option>
					<option value="Jr.">Jr.</option>
					<option value="III">III</option>
					<option value="IV">IV</option>
				</select>

                <label>BARANGGAY</label>
                <select  id="barangay" name="barangay" >
					<option>Barangay</option>
				</select>

                <label>ZONE</label>
                <select  id="zone" name="zone" >
					<option >Zone (Purok)</option>	
				</select>
                <label>STREET ADDRESS</label>
                <input id="saddress" type="text" name="saddress" class="" placeholder="Street / Block / Building / Apartment" autocomplete="off">

                <label>BIRTHDATE</label>
                <input type="date" id="birthdate" name="birthdate">
              
                <input type="text" id="age" name="age" class="" placeholder="Age:" disabled>

                <label style="display:none">CIVIL STATUS</label>
                <select style="display:none" name="cs" id="cs">
										<option value="" disabled selected>Kahimtang Sibil (Civil Status)</option>
										<option value="Single">Single</option>
										<option value="Live-in">Live-in</option>
										<option value="Married">Married</option>
										<option value="Annulled">Annulled</option>
										<option value="Widowed">Widowed</option>
				</select>

                <label style="display:none" >GENDER</label>
                <select style="display:none" name="gender" id="gender">
										<option value="" disabled selected>Sekso (Gender)</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>

                                    <label style="display:none">VOTER</label>
                                    <select style="display:none" name="voter" id="voter">
										<option value="" disabled selected>Voter</option>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
										<option value="Undecided">Not sure</option>
									</select>

                                    <label>PHONE NUMBER</label>
                                    <input type="number" id="phone" name="phone"  placeholder="Phone Number" autocomplete="off">
                                    <label style="display:none">EMAIL</label>
                                    <input style="display:none" type="email" id="email" name="email"  placeholder="Email Address" autocomplete="off">
                                    <label style="display:none">OCCUPATION</label>
                                    <input style="display:none" id="work" type="text" name="work"  placeholder="Trabaho (Occupation)" autocomplete="off">
                                
                                <div class="famrepone">
                                    <input id="rep-name-one" type="text" name="repname-one" class="" placeholder="Pangalan (Full Name)" autocomplete="off">

                                    <!-- <input id="rep-relation-one" type="text" name="reprel-one" class="" placeholder="Relasyon (Relationship)"> -->
                                    <select id="rep-relation-one" name="reprel-one">
                                        <option value=""> relationship</option>
										<option value="Father">Father</option>
										<option value="Mother">Mother</option>
										<option value="Brother">Brother</option>
                                        <option value="sister">sister</option>
                                        <option value="Uncle">uncle</option>
                                        <option value="aunt">aunt</option>
                                        <option value="grand-father">grand father</option>
                                        <option value="grand-mother">grand mother</option>
                                        <option value="cousin">cousin</option>
                                        <option value="husband">husband</option>
                                        <option value="wife">wife</option>
                                        <option value="child">child</option>
                                        <option value="son">son</option>
                                        <option value="daughter">daughter</option>
                                        <option value="nephew">nephew</option>
                                        <option value="niece">niece</option>
                                        <option value="grand-son">grandson</option>
                                        <option value="grand-daughter">granddaughter</option>
                                        <option value="great grand-father">great grand-father</option>
                                        <option value="great grand-mother">great grand-mother</option>
                                        <option value="father-in-law">father-in-law</option>
                                        <option value="mother-in-law">mother-in-law</option>
                                        <option value="brother-in-law">brother-in-law</option>
                                        <option value="sister-in-law">sister-in-law</option>
                                        <option value="son-in-law">son-in-law</option>
                                        <option value="daughter-in-law">daughter-in-law</option>
                                        <option value="half-brother">half-brother</option>
                                        <option value="half-sister">half-sister</option>
                                        <option value="step-mother">step mother</option>
                                        <option value="step-father">step-father</option>
                                        <option value="step-son">step son</option>
                                        <option value="step-daughter">step daughter</option>
                                    </select>
                                </div>

                                <div class="famreptwo">
                                    <input id="rep-name-two" type="text" name="repname-two" class="" placeholder="Pangalan (Full Name)" autocomplete="off">
                                    <!-- <input id="rep-relation-two" type="text" name="reprel-two" class="" placeholder="Relasyon (Relationship)"> -->
                                    <select id="rep-relation-two" name="reprel-two">
                                    <option value=""> relationship</option>
										<option value="Father">Father</option>
										<option value="Mother">Mother</option>
										<option value="Brother">Brother</option>
                                        <option value="sister">sister</option>
                                        <option value="Uncle">uncle</option>
                                        <option value="aunt">aunt</option>
                                        <option value="grand-father">grand father</option>
                                        <option value="grand-mother">grand mother</option>
                                        <option value="cousin">cousin</option>
                                        <option value="husband">husband</option>
                                        <option value="wife">wife</option>
                                        <option value="child">child</option>
                                        <option value="son">son</option>
                                        <option value="daughter">daughter</option>
                                        <option value="nephew">nephew</option>
                                        <option value="niece">niece</option>
                                        <option value="grand-son">grandson</option>
                                        <option value="grand-daughter">granddaughter</option>
                                        <option value="great grand-father">great grand-father</option>
                                        <option value="great grand-mother">great grand-mother</option>
                                        <option value="father-in-law">father-in-law</option>
                                        <option value="mother-in-law">mother-in-law</option>
                                        <option value="brother-in-law">brother-in-law</option>
                                        <option value="sister-in-law">sister-in-law</option>
                                        <option value="son-in-law">son-in-law</option>
                                        <option value="daughter-in-law">daughter-in-law</option>
                                        <option value="half-brother">half-brother</option>
                                        <option value="half-sister">half-sister</option>
                                        <option value="step-mother">step mother</option>
                                        <option value="step-father">step-father</option>
                                        <option value="step-son">step son</option>
                                        <option value="step-daughter">step daughter</option>
                                    </select>
                                    </div>

                                    <div class="famrepthree">
                                    <input id="rep-name-three" type="text" name="repname-three" class="" placeholder="Pangalan (Full Name)" autocomplete="off">
                                    <!-- <input id="rep-relation-three" type="text" name="reprel-three" class="" placeholder="Relasyon (Relationship)"> -->
                                    <select id="rep-relation-three" name="reprel-three">
                                        <option value="Father">Father</option>
										<option value="Mother">Mother</option>
										<option value="Brother">Brother</option>
                                        <option value="sister">sister</option>
                                        <option value="Uncle">uncle</option>
                                        <option value="aunt">aunt</option>
                                        <option value="grand-father">grand father</option>
                                        <option value="grand-mother">grand mother</option>
                                        <option value="cousin">cousin</option>
                                        <option value="husband">husband</option>
                                        <option value="wife">wife</option>
                                        <option value="child">child</option>
                                        <option value="son">son</option>
                                        <option value="daughter">daughter</option>
                                        <option value="nephew">nephew</option>
                                        <option value="niece">niece</option>
                                        <option value="grand-son">grandson</option>
                                        <option value="grand-daughter">granddaughter</option>
                                        <option value="great grand-father">great grand-father</option>
                                        <option value="great grand-mother">great grand-mother</option>
                                        <option value="father-in-law">father-in-law</option>
                                        <option value="mother-in-law">mother-in-law</option>
                                        <option value="brother-in-law">brother-in-law</option>
                                        <option value="sister-in-law">sister-in-law</option>
                                        <option value="son-in-law">son-in-law</option>
                                        <option value="daughter-in-law">daughter-in-law</option>
                                        <option value="half-brother">half-brother</option>
                                        <option value="half-sister">half-sister</option>
                                        <option value="step-mother">step mother</option>
                                        <option value="step-father">step-father</option>
                                        <option value="step-son">step son</option>
                                        <option value="step-daughter">step daughter</option>
                                    </select>
                                    </div>


                                    <input id="dateofreg" type="date" placeholder="date of registration">

<div class="containeralls">
<div class="divone">


<div id="first" data-id="2021">
<h2>2021</h2>

<div class="checkboxcontainer"><input data-id="1" type="checkbox"  name="chk" class="chkbx" value="january"><p>jan</p></div>                                
 <div class="checkboxcontainer"><input data-id="2" type="checkbox"  name="chk" class="chkbx" value="feb" ><p>Feb</p></div>
 <div class="checkboxcontainer"><input data-id="3" type="checkbox" name="chk" class="chkbx" value="mar"><p>mar</p></div>
 <div class="checkboxcontainer"> <input data-id="4" type="checkbox" name="chk" class="chkbx" value="apr"><p>apr</p></div>
 <div class="checkboxcontainer"><input data-id="5" type="checkbox" name="chk" class="chkbx" value="may"><p>may</p></div>
 <div class="checkboxcontainer"><input data-id="6" type="checkbox"  name="chk" class="chkbx" value="jun"><p>jun</p></div>
 <div class="checkboxcontainer"><input data-id="7" type="checkbox"  name="chk" class="chkbx" value="jul"><p>jul</p></div>
 <div class="checkboxcontainer"><input data-id="8" type="checkbox"  name="chk" class="chkbx" value="aug"><p>aug</p></div>
 <div class="checkboxcontainer"><input data-id="9" type="checkbox"  name="chk" class="chkbx" value="sep"><p>sep</p></div>
 <div class="checkboxcontainer"> <input data-id="10" type="checkbox"  name="chk" class="chkbx" value="oct"><p>oct</p></div>
 <div class="checkboxcontainer"><input data-id="11" type="checkbox" name="chk" class="chkbx" value="nov"><p>nov</p></div>
 <div class="checkboxcontainer"> <input data-id="12" type="checkbox"  name="chk" class="chkbx" value="dec"><p>dec</p></div>

 </div>


 <div id="second" data-id="2022">

 <h2>2022</h2>
 <div class="checkboxcontainer"><input data-id="1" type="checkbox" name="chk" class="chkbx" value="january"><p>jan</p></div>
 <div class="checkboxcontainer"><input data-id="2" type="checkbox"name="chk" class="chkbx" value="feb"><p>Feb</p></div>
 <div class="checkboxcontainer"><input data-id="3" type="checkbox"  name="chk" class="chkbx" value="mar"><p>mar</p></div>
 <div class="checkboxcontainer"> <input data-id="4" type="checkbox"  name="chk" class="chkbx" value="apr"><p>apr</p></div>
 <div class="checkboxcontainer"><input data-id="5" type="checkbox"  name="chk" class="chkbx" value="may"><p>may</p></div>
 <div class="checkboxcontainer"><input data-id="6" type="checkbox"  name="chk" class="chkbx" value="jun"><p>jun</p></div>
 <div class="checkboxcontainer"><input data-id="7" type="checkbox"  name="chk" class="chkbx" value="jul"><p>jul</p></div>
 <div class="checkboxcontainer"><input data-id="8" type="checkbox"  name="chk" class="chkbx" value="aug"><p>aug</p></div>
 <div class="checkboxcontainer"><input data-id="9" type="checkbox"  name="chk" class="chkbx" value="sep"><p>sep</p></div>
 <div class="checkboxcontainer"> <input data-id="10" type="checkbox"  name="chk" class="chkbx" value="oct"><p>oct</p></div>
 <div class="checkboxcontainer"><input data-id="11" type="checkbox"  name="chk" class="chkbx" value="nov"><p>nov</p></div>
 <div class="checkboxcontainer"> <input data-id="12" type="checkbox"  name="chk" class="chkbx" value="dec"><p>dec</p></div>
</div>

</div>
                                  

               <div id="submit" >Submit </div>
</div>
</body>
<script> 

   

    $(document).ready(function() {
    var year=0;
    var starting=0;
    var day="5";



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
                    console.log(item,index);
                    var option = document.createElement("option");
                    option.value = item['id'];
                    option.text = item['barangay_name'];
                    select_menu.appendChild(option);
                })
            }		
        })

        
        $('body').on('change','#birthdate', function(e){  
                var dateinput =  document.getElementById("birthdate").value;
                var dob = new Date(dateinput);
                var today = new Date();
                var age = new Date(today - dob).getFullYear() - 1970;
                document.querySelector('input[name="age"]').value = age;
            })
        $('body').on('change','#barangay', function(e){
            
            const barangay_id = document.getElementById("barangay").value;
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
        })



        $('body').on('change','#dateofreg', function(e){
            reset();
           var date = new Date($(this).val());
           var yearofdate= date.getFullYear();
         
           if(yearofdate == 2022){
             $(".containeralls .divone div:first-child").css("display","none");
           }else{
            $(".containeralls .divone div:first-child" ).css("display","block");
           }

           var month = date.getMonth();
          var d=month + 1;
           
            var classes="";


          if($("#first").css("display")=="block" && $("#second").css("display")=="block"){
            classes= document.querySelectorAll('.containeralls .divone #first .checkboxcontainer .chkbx');
          }else if($("#first").css("display")=="none"){
            classes= document.querySelectorAll('.containeralls .divone #second .checkboxcontainer .chkbx');
          }
           
                  

                for(var x=0;x< classes.length;x++){
                    
                  
                    if(classes[x].getAttribute("data-id") == d){
                        var c=classes[x].getAttribute("data-id");
                     
                        classes[x].classList.add("checked"); 
                        classes[x].checked=true;
                        startingpoint=x;
                    }else{
                        classes[x].classList.remove("checked"); 
                        classes[x].checked=false;
                    }
                }
        })
        function reset(){
            var classes= document.querySelectorAll('.containeralls .divone .checkboxcontainer .chkbx');
            for(var x=0;x< classes.length;x++){

                        classes[x].classList.remove("checked"); 
                        classes[x].checked=false;
        
            }
        }
        var startingpoint=0;
        $('body').on('keyup','#dateofreg', function(e){


           
            reset();
           var date = new Date($(this).val());
           var yearofdate= date.getFullYear();
         
           if(yearofdate == 2022){
             $(".containeralls .divone div:first-child").css("display","none");
           }else{
            $(".containeralls .divone div:first-child" ).css("display","block");
           }

           var month = date.getMonth();
          var d=month + 1;
           
            var classes="";


          if($("#first").css("display")=="block" && $("#second").css("display")=="block"){
            classes= document.querySelectorAll('.containeralls .divone #first .checkboxcontainer .chkbx');
          }else if($("#first").css("display")=="none"){
            classes= document.querySelectorAll('.containeralls .divone #second .checkboxcontainer .chkbx');
          }
           
                  

                for(var x=0;x< classes.length;x++){
                    
                  
                    if(classes[x].getAttribute("data-id") == d){
                        var c=classes[x].getAttribute("data-id");                    
                        classes[x].classList.add("checked"); 
                        classes[x].checked=true;
                        startingpoint=x;
                       
                    }else{
                        classes[x].classList.remove("checked"); 
                        classes[x].checked=false;
                        
                    }
                } 
               
        })

        $('[name="chk"]').change(function()
      {

        var d=0;
        if ($(this).is(':checked')) {
            $(this).addClass("checked");      
        }else{
            $(this).removeClass("checked");    
        }
      
        if($("#first").css("display")=="block" && $("#second").css("display")=="block"){
         var classes = document.querySelectorAll(".containeralls .divone .checkboxcontainer .chkbx");
        }else{
            var classes = document.querySelectorAll(".containeralls .divone #second .checkboxcontainer .chkbx");
        }
        var c=document.querySelectorAll(".containeralls .divone .checkboxcontainer .chkbx.checked").length;
        
        if(c > 1){
var i;
            if($("#first").css("display")=="block" && $("#second").css("display")=="block"){
                 i=$(".containeralls .divone .checkboxcontainer .chkbx").index(this);
            }else{
                i=$(".containeralls .divone #second .checkboxcontainer .chkbx").index(this);
            }
        
      
                        for(var x = startingpoint ;x < i ;x++){    
                    
                            classes[x].classList.add("checked");
                            classes[x].checked=true;
                    
                        }
               
            }
            
              
         })
        

      



        $('body').on('click','#submit', function(e){
            e.preventDefault();	
            	 
                
            var reg;
            if($("#first").css("display")=="none"){
                reg=document.querySelectorAll('.containeralls > .divone #second .checkboxcontainer .chkbx.checked').length;	
            }else{
                reg=document.querySelectorAll('.containeralls > .divone .checkboxcontainer .chkbx.checked').length;	
            }
      
       

                var fname = $("#fname").val();
                var lname = $("#lname").val();
				var mname = $("#mname").val();			
				var suffix = $("#suffix").val();
				var status = $("#cs").val();
				var voter = $("#voter").val();
				var gender = $("#gender").val();
				var barangay=$("#barangay").val();
				var zone=$("#zone").val();
				var saddress = $("#saddress").val();
				 var birthdate = $("#birthdate").val();
				var age = $("#age").val();
				var phone = $("#phone").val();
				var email = $("#email").val();
				var work = $("#work").val();
				var rep_name_one = $("#rep-name-one").val();
				var rep_name_two = $("#rep-name-two").val();
				var rep_name_three = $("#rep-name-three").val();
				var rep_rel_one = $("#rep-relation-one").val();
				var rep_rel_two = $("#rep-relation-two").val();
				var rep_rel_three = $("#rep-relation-three").val();
                var dateofreg = $("#dateofreg").val();

                var classlists = document.querySelectorAll('.containeralls > .divone .checkboxcontainer .chkbx.checked').length;	
          
                $.ajax({		
                    type: "POST",
                            url: "store.php",
                            data: 
                            {
                                fname:fname,
                                lname:lname,
                                mname:mname,
                                suffix:suffix,
                                status:status,
                                voter:voter,
                                gender:gender,
                                barangay:barangay,
                                zone:zone,
                                saddress:saddress,
                                birthdate:birthdate,
                                age:age,
                                phone:phone,
                                email:email,
                                work:work,
                                rep_name_one:rep_name_one,
                                rep_name_two:rep_name_two,
                                rep_name_three:rep_name_three,
                                rep_rel_one:rep_rel_one,
                                rep_rel_two:rep_rel_two,
                                rep_rel_three:rep_rel_three,
                                dateofreg:dateofreg,
                                classlists:classlists
                            },
                            success: function(results) {	
                               alert(results);
                              $("#fname").val('');
                               $("#lname").val('');
                                $("#mname").val('');			
                                $("#suffix").val('');
                               $("#cs").val('');
                                $("#voter").val('');
                                 $("#gender").val('');
                               $("#barangay").val('');
                               $("#zone").val('');
                                 $("#saddress").val('');
                                 $("#birthdate").val('');
                               $("#age").val('');
                                 $("#phone").val('');
                                 $("#email").val('');
                                $("#work").val('');
                                 $("#rep-name-one").val('');
                                $("#rep-name-two").val('');
                                 $("#rep-name-three").val('');
                                $("#rep-relation-one").val('');
                                $("#rep-relation-two").val('');
                                $("#rep-relation-three").val('');
                                $("#dateofreg").val('');
                                			reset();
                                            $("#first").css("display","block");
                            }
                })
              

          
        })
       

    })
    
    </script>
</html>