
        <div class="modal fade" id="myModalEditUser" role="dialog">
            <div class="modal-dialog modal-dialog modal-lg">
                <div class="modal-content">
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content">
                                <div class="signup-form" style=" margin-left: -10px; margin-right: -20px">
                                    <h2 class="form-title">Edit User</h2>
                                    <form id="editForm" method="POST" enctype="multipart/form-data"
                                          action="{{route('user.update',\Illuminate\Support\Facades\Auth::user()->id)}}">
                                        @csrf
                                        <div class="form-group1">
                                            <label class="label-custom" for="name"><i
                                                    class="zmdi zmdi-account material-icons-name"></i></label>
                                            <input type="text" name="name" id="nameInput" value="{{\Illuminate\Support\Facades\Auth::user()->name}}"
                                                   placeholder="Your Name" minlength="3" required/>
                                        </div>
                                        <div role="alert" id="nameError">
                                            <strong></strong>
                                        </div>
                                        <div class="form-group1">
                                            <label class="label-custom" for="email"><i
                                                    class="zmdi zmdi-email"></i></label>
                                            <input type="email" name="email" id="emailInput" value="{{\Illuminate\Support\Facades\Auth::user()->email}}"
                                                   placeholder="Your Email" required readonly/>
                                        </div>

                                        <div class="form-group1">
                                            <label class="label-custom" for="pass"><i class="fas fa-phone"></i></label>
                                            <input type="number" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" name="phone" id="phoneInput"
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
                                                   value="Save" required/>
                                        </div>
                                    </form>
                                </div>
                                <div class="signup-image">
                                    <figure><img src="{{asset('storage/'.\Illuminate\Support\Facades\Auth::user()->image)}}" alt="sing up image">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Back</button>
                    </div>
                </div>
            </div>
        </div>
