<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div class="form_wrapper">
                    <form method="POST" action="{{ route('admin.resetPassword') }}">
                        @csrf
                        @method('PUT')
                        <fieldset>
                            <legend>Update Profile</legend>
                            <div class="row clearfix">
                                <div class="col_full">
                                    <label>Password Reset</label>
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                        <input type="Password" name="currentPassword" placeholder="Current Password">
                                    </div>
                                    @error('currentPassword')
                                    <p style="color: red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col_full">
                                    <label>&nbsp</label>
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                        <input type="Password" name="password" placeholder="New Password">
                                    </div>
                                    @error('password')
                                    <p style="color: red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col_full">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                        <input type="Password" name="password_confirmation" placeholder="Confirm Password">
                                    </div>
                                    @error('password_confirmation')
                                    <p style="color:red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col_full">
                                    <input class="button" type="submit" name="reset" value="Reset" />
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </body>
</x-layout>
