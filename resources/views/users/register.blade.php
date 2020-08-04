<div class="container">
    <div class="modal fade" id="myModalRegister" role="dialog">
        <div class="modal-dialog modal-dialog modal-lg">
            <div class="modal-content">
                <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form" style=" margin-left: -10px; margin-right: -20px">
                                <h2 class="form-title">Register</h2>
                                <form id="registerForm" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group1">
                                        <label class="label-custom" for="name"><i
                                                class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="nameInput" value="{{old('name')}}"
                                            placeholder="Your Name" minlength="3" required/>
                                    </div>
                                    <div role="alert" id="nameError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="email"><i class="zmdi zmdi-email"></i></label>
                                        <input type="email" name="email" id="emailInput" value="{{old('email')}}"
                                            placeholder="Your Email" required/>
                                    </div>
                                    <div role="alert" id="emailError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="pass"><i class="zmdi zmdi-lock"></i></label>
                                        <input type="password" value="{{old('password')}}" name="password"
                                            id="passwordInput" placeholder="Password" minlength="6" required/>
                                    </div>
                                    <div role="alert" id="passwordError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="re-pass"><i
                                                class="zmdi zmdi-lock-outline"></i></label>
                                        <input type="password" name="repeatPassword" id="repeatPasswordInput"
                                            placeholder="Repeat your password" minlength="6" required/>
                                    </div>
                                    <div role="alert" id="repeatPasswordError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1">
                                        <label class="label-custom" for="pass"><i class="fas fa-phone"></i></label>
                                        <input type="number" value="{{old('phone')}}" name="phone" id="phoneInput"
                                            placeholder="Phone" required/>
                                    </div>
                                    <div role="alert" id="phoneError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="image" id="imageInput">
                                    </div>
                                    <div role="alert" id="imageError">
                                        <strong></strong>
                                    </div>
                                    <div class="form-group1 form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit"
                                            value="Register" required/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image" style="margin-right: -20px">
                                <figure><img src="{{asset('users/images/signup-image.jpg')}}" alt="sing up image">
                                </figure>
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
<script>
    $(function () {
        $('#registerForm').submit(function (e) {
            e.preventDefault();
            let formData = new FormData(this);
            $.ajax({
                method: "POST",
                headers: {
                    Accept: "application/json"
                },
                url: "{{route('users.store')}}",
                data: formData,
                contentType: false,
                processData: false,
                success: () => {
                    swal({ title: 'Register account successfully!!!', type: 'success' });
                    $('*').click(function () {
                        window.location.reload()
                    })
                },
                error: (response) => {
                    if (response.status === 422) {
                        let errors = response.responseJSON.errors;
                        Object.keys(errors).forEach(function (key) {
                            $("#" + key + "Input").addClass('form-control is-invalid');
                            $("#" + key + "Error").css({'margin-top':'-20px','margin-bottom':'30px'}).children('strong').css('color','red').text(errors[key][0]);
                        });
                    } else {
                        $("#emailInput").addClass('form-control is-invalid');
                        $('#emailError').css({
                            'margin-top': '-20px',
                            'margin-bottom': '30px'
                        }).children('strong').css('color', 'red').text('Email already exist!!!')
                    }
                }
            })
        });
    })
</script>
