
<div class="container">
    <div class="modal fade" id="myModalChangePassword" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="{{asset('users/images/place-1.jpg')}}" alt="sing up image">
                                </figure>

                            </div>
                            <div class="signin-form">
                                <h3 class="form-title">Change password</h3>
                                <form method="post" class="register-form" id="login-form"
                                      action="{{route('user.changePassword',\Illuminate\Support\Facades\Auth::user()->id)}}">
                                    @csrf

                                    <div class="form-group1">
                                        <label class="label-custom" for="your_pass"><i
                                                class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="oldPassword" id="your_pass" placeholder="Old Password"
                                               minlength="6" required/>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="your_pass"><i
                                                class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="password" id="your_pass" placeholder="New Password"
                                               minlength="6" required/>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="your_pass"><i
                                                class="zmdi zmdi-lock"></i></label>
                                        <input type="password" name="repeatPassword" id="your_pass" placeholder="Confirm New Password"
                                               minlength="6" required/>
                                    </div>

                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit"
                                               value="Change"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

