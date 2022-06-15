<x-layout>
<body>
    <div id="wrapper">
        <div id="page-inner">
            <div class="form_wrapper">
                <form method="POST" action="{{ route('distributor.store') }}" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <legend>Distributor Form</legend>
                        <div class="row clearfix">
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                            <select id="title" name="title">
                            <option value="{{ old('title') }}">Title..</option>
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Miss">Miss</option>
                            </select>
                            </div>
                            @error('title')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}" />
                            </div>
                            @error('fname')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                <input type="text" id="lname" name="lname" placeholder="Last Name" value="{{ old('lname') }}"/>
                            </div>
                            @error('lname')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" />
                            </div>
                            @error('email')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                                <input type="tel" id="phone" name="phone" placeholder="Telephone 1" value="{{ old('phone') }}" />
                            </div>
                            @error('phone')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                                <input type="tel" id="phone2" name="phone2" placeholder="Telephone 2" value="{{ old('phone2') }}" />
                            </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-globe"></i></span>
                            <select id="nationality" name="nationality">
                            <option value="{{ old('nationality') }}">Nationality..</option>
                            <option value="Nigerian">Nigerian</option>
                                <option value="Other">Other</option>
                            </select>
                            </div>
                            @error('nationality')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-globe"></i></span>
                                <select id="state" name="state">
                            <option value="{{ old('state') }}">State..</option>
                            <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="8">Borno</option>
                                <option value="Borno">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Koggi">Koggi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">FCT</option>
                            </select>
                            </div>
                            @error('state')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-globe"></i></span>
                                <input type="text" id="lga" name="lga" placeholder="LGA" value="{{ old('lga') }}"/>
                            </div>
                            @error('lga')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-home"></i></span>
                                <input type="text" id="bname" name="bname" placeholder="Business Name" value="{{ old('bname') }}" />
                            </div>
                            @error('bname')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
                                <input type="text" id="badd" name="badd" placeholder="Business Address" value="{{ old('badd') }}" />
                            </div>
                            @error('badd')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-map-marker"></i></span>
                                <input type="text" id="area" name="area" placeholder="Area of Distributorship" value="{{ old('area') }}" />
                            </div>
                            </div>
                            @error('area')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row clearfix">
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-file"></i></span>
                                <input type="file" name="cac" placeholder="Means of Identification"/>
                            </div>
                            @error('cac')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-file"></i></span>
                                <input type="text" id="tin" name="tin" placeholder="TIN" value="{{ old('tin') }}"/>
                            </div>
                            @error('tin')
                            <p style="color:red;font-size:14px">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col_half">
                            <input class="button" type="submit" value="Sumbit" />
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <x-alert/>
</body>
</html>
</x-layout>
