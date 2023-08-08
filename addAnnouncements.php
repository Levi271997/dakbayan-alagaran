<div id="addannouncements" class="addannouncements tabs" style="display:none;">
    <h2>Add new announcements</h2>

    <form id="announcements-form" action="" method="POST" enctype="multipart/form-data">
        <label class="required"><input id="announcementstitle" type="text" name="title" class="announcementstitle" placeholder="Announcement Title" autocomplete="off" ></label>
        <label class="required"><textarea id="announcementsdescription" type="text" name="title" class="announcementsdescription" placeholder="Announcement Title" autocomplete="off" ></textarea></label>
        <input id="btnaddannouncements" type="submit" name="submit" class="btn btn-orange" value="Add">
    </form>
</div>

<div class="modal fade" id="addanouncementmodal" tabindex="-1" aria-labelledby="launchModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	        <div class="modal-header">
				<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#2ddb87" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
				    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
				</svg>
				<h5 class="modal-title" id="launchModalLabel">Announcement Successfully Saved!</h5>
			</div>
			<div class="modal-body">
				<p></p>
			</div>
			<div class="modal-footer">
									<!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
				<button class="btn btn-secondary" data-bs-dismiss="modal" >Add New</button>
				<button id="viewannouncement" data-bs-dismiss="modal" type="button" class="btn btn-orange" onclick="openTab('announcements')">View Announcements</button>
			</div>
		</div>
	</div>
</div>	
<script type="text/javascript">

$(document).ready(function() {
	retrieveannouncements();

			function retrieveannouncements(){
                $.ajax({
                    type: "POST",
                    url: "viewannouncementsajax.php",	
                    success: function(html) { 
                        $("#announcements-containers").html(html);									
                    }	
                })   	
			}
		
        $(document).on('submit','#announcements-form', function(e){      
        e.preventDefault();

        var title = $("#announcementstitle").val();
        var desc = $("#announcementsdescription").val();

        var form_data ={
            title: title,
            desc: desc
        };	
        $.ajax({
                    type: "POST",
                     url: "addannouncementsajax.php",
                     data: form_data,
                      cache:false,
                     
                     success: function(data) {
                        //alert(data);
                        $('#addanouncementmodal').modal('show');
                         $("#announcements-form")[0].reset();
                         retrieveannouncements();
                     }
                    //  error: function(xhr, status, error) {
                    //      alert("oops there is an error");
                    //      console.error(xhr);
                    //  }
                });

        })

    })

</script>