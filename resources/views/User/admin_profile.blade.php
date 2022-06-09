<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius">
                                <h2>Administrator</h2></div>
                                <label>&nbsp</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h4 class="m-b-20 p-b-5 b-b-default f-w-600"><b>Information</b></h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Email</b></p>
                                        <h5 class="text-muted f-w-400">{{ $user->email }}</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600"><b>Name</b></p>
                                        <h5 class="text-muted f-w-400">{{ $user->firstname." ".$user->lastname }}</h5>
                                    </div>
                                </div>
                                <h4 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"><b>Settings</b></h4>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Reset Password</p>
                                        <h5 class="text-muted f-w-400"><a href=""><img src='{{ asset('icons/reset.svg') }}'/></h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Social Media</p>
                                    </div>
                                    <ul class="social-link list-unstyled m-t-40 m-b-10">
                                        <li><a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.twitter.com/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-layout>
