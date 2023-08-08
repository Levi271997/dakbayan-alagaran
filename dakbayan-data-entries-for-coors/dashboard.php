
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Manually Enter Members</title>

<!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script> -->
	<!-- <script src="js/script.js"></script> -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>


</head>
<style>
     #logout{
            width: 20%;
    padding: 10px;
    background: red;
    color: white;
    font-size: 20px;
    display: flex;
    justify-content: center;
    text-align: center;
        }
    input[type="text"],select,input[type="date"],input[type="number"],input[type="email"]{
        padding:10px;
        font-size:20px;
    }
    #submit{
        cursor: pointer;
        background: red;
        padding: 10px;
        text-align: center;
        color: white;
        font-size: 25px;
        font-weight: 700;
        text-transform: uppercase;
        border-radius: 5px;
    }
    .famrepone,.famreptwo,.famrepthree{
        display:flex;
        flex-direction:row;
        gap:20px;
    }
    .container {
        max-width: 1000px;
        width: 100%;
        margin-inline: auto;
        padding-top: 20px;
    }

    .flex {
        display: flex;
        gap: 15px;
        margin-bottom: 15px;
        flex: 1;
    }
    .gap-none {
        gap: 0px !important;
    }
    .gap-30 {
        gap: 30px !important;
    }
    .mb-0 {
        margin-bottom: 0;
    }
    .flex-column {
        flex-direction: column !important;
    }
    .flex-row {
        flex-direction: row !important;
        justify-content: space-between;
    }
    .align-center {
        align-items: center;
    }
    .align-end {
        align-items: end;
    }
    .form-group > * {

    }
    .form-group {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    div#form {
        /* display: flex;
        flex-direction: column;
        gap: 15px;
        width: 40%;
        margin: 0 auto; */
    }
    .famrepone > input,.famreptwo > input,.famrepthree > input
    {width:calc(50% - 20px)}
    .checkboxcontainer{
        display:flex;
        flex-direction: column;
        
    }
    .checkboxcontainer > input[type="checkbox"]{
        transform: scale(3);
    }
    .checkboxcontainer > p{
        font-size: 22px;
        margin: 10px 0px;
    }
    .checkboxcontainer{
        align-items:center;
    }
    .divone{
        display: flex;
        flex-direction: column;
        flex-wrap: nowrap;
        justify-content: space-between;
    }
    .disabled,.disabled+p{
        pointer-events:none;
       
    }
    /* .checkboxcontainer:has(> input){
        border:2px solid red;
    } */
   .hidden{
    display:none;
   }
   
   label {
            font-size: 24px;
            text-transform: uppercase;
        }

   @media only screen and (max-width: 992px) {
        body {
            background-color: #f1f1f1;
        }
        .personal-info {
            flex-direction: column;
        }

        input#age::placeholder, 
        input#rep-name-one::placeholder, 
        input#rep-name-two::placeholder,
        input#rep-name-three::placeholder {
            color: black;
            opacity: 0.7;
        }
        ::placeholder {
            color: black;
            opacity: 0;
        }
        .personal-address {
            border-top: 2px solid black;
            margin-top: 50px;
            padding-top: 50px;
            flex-direction: column;
        }
        .gap-30 {
            flex-wrap: wrap;
        }
        .birthdate-age-992 {
            display: flex;
            flex-direction: row !important;
            width: 100%;
        }
        .birthdate-age-992 > div {
            width: 100%;
        }
        #age {
            width: 20%;
        }
        .containeralls {
            padding-inline: 10px;
        }
        .famrepone, 
        .famreptwo, 
        .famrepthree {
            flex-direction: column;
            padding-block: 25px;
            border-bottom: 1px solid black;
        }
        .famrepone input, 
        .famreptwo input, 
        .famrepthree input {
            width: 90%;
        }
       
   }
    
   
</style>
<body>
    

<div id="form" class="container">     
  

    <!-- <input type="text" name="barangay" id="barangay">    -->
    
    <div class="personal-info flex">
        <div class="form-group">
            <label>last name</label>
            <input type="text" name="lname" id="lname" placeholder="last name">
        </div>
        <div class="form-group">
            <label>first name</label>
            <input type="text" name="fname" id="fname" placeholder="first name">
        </div>
        <div class="form-group">
            <label>middle name</label>
            <input type="text" name="mname" id="mname" placeholder="middle name">
        </div>

        <div class="form-group">
            <label>suffix</label>
            <select name="suffix" id="suffix">
                <option value="" disabled selected>Suffix</option>
                <option value="Jr.">None</option>
                <option value="Jr.">Jr.</option>
                <option value="III">III</option>
                <option value="IV">IV</option>
            </select>
        </div>
  
    </div>

    <div class="personal-address flex">
        <div class="form-group">
            <label>barangay</label>
            <select  id="barangay" name="barangay" >
                <option>Barangay</option>
            </select>
        </div>
        <div class="form-group">
            <label>zone</label>
            <select  id="zone" name="zone" >
                <option >Zone (Purok)</option>	
            </select>
        </div>
        <div class="form-group">
            <label>street address</label>
            <input id="saddress" type="text" name="saddress" class="" placeholder="Street / Block / Building / Apartment" autocomplete="off">
        </div>
    </div>

    <div class="personal-address flex">
        <div class="form-group">
            <label>phone number</label>
            <input type="number" id="phone" name="phone"  placeholder="Phone Number" autocomplete="off">
        </div>
        <div class="form-group flex flex-row align-end birthdate-age-992">
            <div class="flex flex-column gap-none mb-0">
                <label>birthdate</label>
                <input type="date" id="birthdate" name="birthdate">
            </div>
            <input type="text" id="age" name="age" class="" placeholder="Age:" disabled>
        </div>
    </div>


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

    <label style="display:none">EMAIL</label>
    <input style="display:none" type="email" id="email" name="email"  placeholder="Email Address" autocomplete="off">
    <label style="display:none">OCCUPATION</label>
    <input style="display:none" id="work" type="text" name="work"  placeholder="Trabaho (Occupation)" autocomplete="off">

    <div class="famrepone flex">
        <input id="rep-name-one" type="text" name="repname-one" class="" placeholder="Pangalan (Full Name)" autocomplete="off">

        <!-- <input id="rep-relation-one" type="text" name="reprel-one" class="" placeholder="Relasyon (Relationship)"> -->
        <select id="rep-relation-one" name="reprel-one">
            <option value=""> relationship</option>
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Brother">Brother</option>
            <option value="sister">sister</option>
            <option value="Live in Partner">Live-in Partner</option>
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

    <div class="famreptwo flex">
        <input id="rep-name-two" type="text" name="repname-two" class="" placeholder="Pangalan (Full Name)" autocomplete="off">
        <!-- <input id="rep-relation-two" type="text" name="reprel-two" class="" placeholder="Relasyon (Relationship)"> -->
        <select id="rep-relation-two" name="reprel-two">
            <option value=""> relationship</option>
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Brother">Brother</option>
            <option value="sister">sister</option>
            <option value="Live in Partner">Live-in Partner</option>
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

    <div class="famrepthree flex">
        <input id="rep-name-three" type="text" name="repname-three" class="" placeholder="Pangalan (Full Name)" autocomplete="off">
        <!-- <input id="rep-relation-three" type="text" name="reprel-three" class="" placeholder="Relasyon (Relationship)"> -->
        <select id="rep-relation-three" name="reprel-three">
            <option value=""> relationship</option>
            <option value="Father">Father</option>
            <option value="Mother">Mother</option>
            <option value="Brother">Brother</option>
            <option value="sister">sister</option>
            <option value="Live in Partner">Live-in Partner</option>
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

    <div class="form-group">
        <label>date registered</label>
        <input id="dateofreg" type="date" placeholder="date of registration">
    </div>

    <div class="containeralls">
        <div class="divone">

            <div id="first" data-id="2021">
                <h2>2021</h2>
                <div class="flex gap-30">
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
            </div>

            <div id="second" data-id="2022">
                <h2>2022</h2>
                <div class="flex gap-30">
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

        </div>
        <div id="submit" >Submit </div>
    </div>

</div>

</body>
<script> 

function validate() {
				var $valid = true;
				
				document.getElementById("fname").style.outline = "none";
				document.getElementById("lname").style.outline = "none";
				//document.getElementById("mname").style.outline = "none";
				document.getElementById("barangay").style.outline = "none";
				document.getElementById("zone").style.outline = "none";
				//document.getElementById("birthdate").style.outline = "none";
				//document.getElementById("saddress").style.outline = "none";
				document.getElementById("rep-name-one").style.outline = "none";
				document.getElementById("rep-relation-one").style.outline = "none";
                document.getElementById("dateofreg").style.outline = "none";

				
				var fname  = document.getElementById("fname").value;
				var lname = document.getElementById("lname").value;
				//var mname = document.getElementById("mname").value;
				var barangay = document.getElementById("barangay").value;
				var zone = document.getElementById("zone").value;
				//var birthdate  = document.getElementById("birthdate").value;
				//var cs = document.getElementById("saddress").value;
				var repname = document.getElementById("rep-name-one").value;
				var reprel = document.getElementById("rep-relation-one").value;
                var dateofreg = document.getElementById("dateofreg").value;
				
			
				var regex = /^[a-zA-Z\s]+$/;
				var numericregex = /^\d*[.]?\d*$/;

                if(dateofreg == ""){
                    document.getElementById("dateofreg").style.outline = "1px solid red"; 
					$valid = false;
                }
				if( fname == "" || !regex.test($("#fname").val())) 
				{
					document.getElementById("fname").style.outline = "1px solid red"; 
					$valid = false;
				}
				
				if( lname== "" && !regex.test($("#lname").val())) 
				{
					document.getElementById("lname").style.outline = "1px solid red"; 
					$valid = false;
				}
				// if( mname == "" && !regex.test($("#mname").val())) 
				// {
				// 	document.getElementById("mname").style.outline = "1px solid red"; 
				// 	$valid = false;
				
				// }
				if(barangay == "") 
				{
					document.getElementById("barangay").style.outline = "1px solid red"; 
					$valid = false;
				}
				if( zone == "") 
				{
					document.getElementById("zone").style.outline = "1px solid red"; 
					$valid = false;
				}
				// if( birthdate == "") 
				// {
				// 	document.getElementById("birthdate").style.outline = "1px solid red"; 
				// 	$valid = false;
				// }
				// if(cs == "") 
				// {
				// 	document.getElementById("saddress").style.outline = "1px solid red"; 
				// 	$valid = false;
				// }
				
			
				if( repname == "" ) 
				{
					document.getElementById("rep-name-one").style.outline = "1px solid red"; 
					$valid = false;
				}
				if( reprel== "") 
				{
					document.getElementById("rep-relation-one").style.outline = "1px solid red"; 
					$valid = false;
				}
				return $valid;
		}

    $(document).ready(function() {

$('.containeralls').css("pointer-events","none");

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
            $(".containeralls").css("pointer-events","auto");
            reset();
           var date = new Date($(this).val());
           var yearofdate= date.getFullYear();
         
           if(yearofdate == 2022){
             $(".containeralls .divone #first").css("display","none");
           }else{
            $(".containeralls .divone #first" ).css("display","block");
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
                for(var xy=0;xy < startingpoint;xy++){
                        classes[xy].classList.add("disabled");   
                        $(classes[xy]).parent().addClass("hidden"); 
 
                       
                }
        })
        function reset(){
            
            var classes= document.querySelectorAll('.containeralls .divone .checkboxcontainer .chkbx');
            for(var x=0;x< classes.length;x++){

                        classes[x].classList.remove("checked"); 
                        classes[x].checked=false;
                        classes[x].classList.remove("disabled");
        
            }
            var c=document.querySelectorAll('.containeralls .divone .checkboxcontainer');
            for(var y=0;y< c.length;y++){
                c[y].classList.remove("hidden");
            }
        }
        var startingpoint=0;
        $('body').on('keyup','#dateofreg', function(e){
            $('.containeralls').css("pointer-events","auto");
            reset();
           var date = new Date($(this).val());
           var yearofdate= date.getFullYear();
         
           if(yearofdate == 2022){
             $(".containeralls .divone #first").css("display","none");
           }else{
            $(".containeralls .divone #first" ).css("display","block");
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
                for(var xy=0;xy < startingpoint;xy++){
                        classes[xy].classList.add("disabled"); 
                        $(classes[xy]).parent().addClass("hidden"); 

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
                        //console.log("start: " + startingpoint)
                      
               
            }
            
              
         })
        

      



        $('body').on('click','#submit', function(e){
            e.preventDefault();	
           
            
            validate();
				 if(validate()){
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
                                            $(".containeralls").css("pointer-events","none");
                            }
                })

            }else{
                Swal.fire('Please make sure that all required inputs are filled and valid',);
            }
              

          
        })
       

    })
    
    </script>
</html>