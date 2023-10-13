<div class="modal fade" id="edit_user_modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Change Personal Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form role = "form" class="regiForm" action = "process.php" method = "post">
          <input class = "form-control" type = "text" id = "user_id" name = "user_id" hidden>
          <table class = "responsive">
            <tr class="form-group">
              <td style = "width: 40%"><label for="fname">First Name</label></td>
              <td><input class = "form-control" type="text" id="edit_fname" name ="edit_fname" ></td>
            </tr>
            <tr class="form-group">
              <td>Last Name</td>
              <td><input  class = "form-control" type="text" id="edit_lname" name = "edit_lname" ></td>
            </tr>
            <tr class="form-group">
              <td>Email</td>
              <td><input  class = "form-control" type="email" id="edit_email" name ="edit_email" ></td>
            </tr>
            <tr class="form-group">
              <td>Phone number</td>
              <td><input  class = "form-control" type="text" id="edit_phone" name ="edit_phone" ></td>
            </tr>
            <tr class="form-group">
              <td>ABN number</td>
              <td><input  class = "form-control" type="text" id="edit_abn" name ="edit_abn" ></td>
            </tr>
            <tr class="form-group">
              <td>Identity</td>
              <td><select  class = "form-control" name="edit_access" id="edit_access" >
                    <option  class = "form-control" value = "" disabled selected>choose your identity...</option>
                    <option  class = "form-control" value="host">host</option>
                    <option  class = "form-control" value="client">client</option>
              </select>
              </td>
            </tr>
          </table>
          <p><span id = "msg"></span></p>

          <button class = "btn btn-danger float-right" type = "submit" id = "update" name = "update">Update</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </form>
          <p class="statusMsg"></p>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
  <script>

  $(document).ready(function(){
    $('.open-edit').on('click', function(){
      var edit = $(this).attr("id");
      $('#edit_user_modal').modal('show');
      console.log(edit);
      $.ajax({
        url: "process.php",
        method: "POST",
        data: {
          edit: edit
        },
        dataType: "json",
        success: function(data) {

          $('#user_id').val(data.id);
          $('#edit_fname').val(data.firstname);
          $('#edit_lname').val(data.lastname);
          $('#edit_email').val(data.email);
          $('#edit_phone').val(data.phone);
          $('#edit_abn').val(data.abn);

          $('#edit_user_modal').modal('show');
        }
      });

    });




  });

</script>
