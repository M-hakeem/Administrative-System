<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div class="form_wrapper">
                    <div class="form_container">
                        <form method="POST" action="{{ route('staff.update',['staff' => $staff]) }}">
                            @csrf
                            @method('PUT')
                            <fieldset>
                                <legend>Update Staff: {{ $staff->fname." ".$staff->lname }}</legend>
                                <div class="row clearfix">
                                    <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ $staff->fname}}"/>
                                    </div>
                                    @error('fname')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col_half">
                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                        <input type="text" id="lname" name="lname" placeholder="Last Name" value="{{ $staff->lname }}"/>
                                    </div>
                                    @error('lname')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                    @enderror
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                            <select id="gender" name="gender">
                                                <option value="{{ $staff->gender }}">{{ $staff->gender }}</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        @error('gender')
                                            <p style="color: red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                            <input type="email" id="email" name="email" placeholder="Email" value="{{ $staff->email }}" />
                                        </div>
                                        @error('email')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                                            <input type="tel" id="phone" name="phone" placeholder="Telephone 1" value="{{ $staff->phone }}" />
                                        </div>
                                        @error('phone')
                                        <p style="color:red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                            <select id="department" name="department">
                                                <option value="{{ $staff->department }}">{{ $staff->department }}</option>
                                                <option value="Administration/HR">Administration/HR</option>
                                                <option value="Finance">Finance</option>
                                                <option value="E-Commerce">E-Commerce</option>
                                                <option value="R & D">R & D</option>
                                                <option value="Production">Production</option>
                                                <option value="Quality Assurance">Quality Assurance</option>
                                                <option value="Maintenance">Maintenance</option>
                                            </select>
                                        </div>
                                        @error('department')
                                            <p style="color:red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                            <input type="text" id="position" name="position" placeholder="Position" value="{{ $staff->position }}"/>
                                        </div>
                                        @error('position')
                                            <p style="color: red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_half">
                                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                            <select id="category" name="category">
                                            <option value="{{ $staff->category }}">{{ $staff->category }}</option>
                                            <option value="Permanent">Permanent</option>
                                            <option value="Casual">Casual</option>
                                            </select>
                                        </div>
                                        @error('category')
                                            <p style="color: red;font-size:14px">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col_half">
                                        </div>
                                        <div class="col_half">
                                        </div>
                                        <div class="col_half">
                                        <input class="button" type="submit" name="save" value="Update" />
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
    </html>
    </x-layout>
