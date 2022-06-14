<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    {{-- <form method="GET" action="{{ route('admin.show') }}"> --}}
                        {{-- <fieldset> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">last Name</th>
                                            <th scope="col">Mailing Address</th>
                                            <th colspan="3" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @forelse ($users as $key => $user)
                                        <tr>
                                            <td>{{ ++$key }}
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->firstname }}</td>
                                            <td>{{ $user->lastname }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('admin.view',['user' => $user]) }}">
                                                    <p  style="color: green"; class="glyphicon glyphicon-eye-open fa-1x"></p>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.edit',['user' => $user]) }}">
                                                    <p  style="color: blue"; class="glyphicon glyphicon-edit fa-1x"></p>
                                                </a>
                                            </td>
                                            <form method="POST" action="{{ route('admin.delete',['user' => $user]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td style="color: red">
                                                    <button style="border:0px;" class="glyphicon glyphicon-trash fa-1x" type="submit"></button>
                                                </td>
                                            </form>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>Empty List</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        {{-- </fieldset> --}}
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </body>
</x-layout>
