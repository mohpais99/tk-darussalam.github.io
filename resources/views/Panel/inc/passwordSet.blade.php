<form class="form-horizontal" action="/profile/{{$user->id}}/changePassword" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="InputSkills" class="col-sm-2 control-label">Old Password</label>
        <div class="col-sm-10">
            <div class="form-line">
                <input type="password" class="form-control" name="old_password" placeholder="Enter Ur Old Password....">
            </div>
                {{-- <div class="help-info">Numbers only</div>  --}}
        </div>
    </div>
    <div class="form-group">
        <label for="InputSkills" class="col-sm-2 control-label">New Password</label>
        <div class="col-sm-10">
            <div class="form-line">
                <input type="password" class="form-control" id="new_password" name="new_password" minlength="8" placeholder="Enter New Password if U Want to Change... ">
            </div>
             {{-- <div class="help-info">Numbers only</div>  --}}
        </div>
    </div>
    <div class="form-group">
        <label for="InputSkills" class="col-sm-2 control-label">Re-Password</label>
        <div class="col-sm-10">
            <div class="form-line">
                <input type="password" class="form-control" id="re_password" placeholder="Enter Re-Password...">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-danger">SUBMIT</button>
        </div>
    </div>
</form>

    

<script>     
    var password = document.getElementById("new_password"),
        confirm_password = document.getElementById("re_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
</script>