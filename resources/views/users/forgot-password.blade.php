
<div class="container">
    <div class="modal fade" id="myModalForgotPassword" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="sign-in">
                    <div class="container">
                        <div class="signin-content">
                            <div class="signin-image">
                                <figure><img src="{{asset('users/images/signin-image.jpg')}}" alt="sing up image">
                                </figure>
                            </div>
                            <div class="signin-form">
                                <h3 class="form-title">Forgot password</h3>
                                <form method="post" class="register-form" id="login-form"
                                      action="{{route('users.sendEmailResetPassword')}}">
                                    @csrf
                                    <div class="form-group1">
                                        <input type="email" name="email" id="your_name" placeholder="Your Email"
                                               required/>
                                    </div>
                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signin" id="signin" class="form-submit"
                                               value="Send mail"/>
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

