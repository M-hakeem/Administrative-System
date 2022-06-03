<x-layout>
<body>
    <div id="wrapper">
        <div id="page-inner">
            <div class="form_wrapper">
                <div class="form_container">
                    <form method="POST" action="{{ route('staff.store') }}">
                        @csrf
                        <fieldset>
                            <legend>Staff Form</legend>
                            <div class="row clearfix">
                                <div class="col_half">
                                <label>Name</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" id="fname" name="fname" placeholder="First Name"/>
                                </div>
                                @error('fname')
                                    <p style="color:red;font-size:14px">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="col_half">
                                <label>&nbsp</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" id="lname" name="lname" placeholder="Last Name"/>
                                </div>
                                @error('lname')
                                    <p style="color:red;font-size:14px">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="col_half">
                                <label>&nbsp</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <select id="gender" name="gender">
                                <option value="">Select..</option>
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
                                <label>Department</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                <select id="department" name="department">
                                <option value="">Department..</option>
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
                                <div class="col_half">
                                <label>&nbsp</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                    <input type="text" id="position" name="position" placeholder="Position" />
                                </div>
                                @error('position')
                                    <p style="color: red;font-size:14px">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="col_half">
                                <label>&nbsp</label>
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-list"></i></span>
                                <select id="category" name="category">
                                <option value="">Category..</option>
                                <option value="Permanent">Permanent</option>
                                <option value="Casual">Casual</option>
                                </select>
                                </div>
                                @error('category')
                                    <p style="color: red;font-size:14px">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col_half">
                                <label></label>
                                </div>
                                <div class="col_half">
                                <label></label>
                                </div>
                                <div class="col_half">
                                <label></label>
                                <input class="button" type="submit" name="save" value="Register" />
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
