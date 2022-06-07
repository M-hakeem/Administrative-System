<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div class="form_wrapper">
                    <div class="form_container">
                        <form method="POST" action="{{ route('admin.update',['user' => $user]) }}">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <legend>Update Admin: {{ $user->firstname." ".$user->lastname }}</legend>
                                <div class="row clearfix">
                                    <div class="col_full">
                                            <label>First Name</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                            <input type="text" name="firstname" placeholder="FirstName" value={{ $user->firstname }}>
                                        </div>
                                        @error('fname')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                        </div>
                                    <div class="col_full">
                                        <label>last Name</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                            <input type="text" name="lastname" placeholder="LastName" value={{ $user->lastname }}>
                                        </div>
                                        @error('lname')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col_full">
                                        <label>Mailing Address</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                            <input type="email" name="email" placeholder="Email"  value={{ $user->email }}>
                                        </div>
                                        @error('email')
                                            <p style="color:red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_full">
                                        <label>Password</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        @error('password')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col_full">
                                        <label>Role</label>
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                            <select id="role" name="role">
                                            <option value="{{ $user->role }}">{{ $user->role }}</option>
                                            <option value="Super">Super</option>
                                            <option value="Sub">Sub</option>
                                            </select>
                                        </div>
                                        @error('category')
                                            <p style="color: red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_full">
                                        <label>&nbsp</label>
                                        <input class="button" type="submit" name="register" value="Update" />
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-alert/>
    </body>
    </x-layout>
