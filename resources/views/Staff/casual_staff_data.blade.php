<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    {{-- <form method="GET" action="{{ route('staff.casual') }}">
                        <fieldset> --}}
                            <div class="table-responsive">
                                <form action="">
                                    <button type="submit" class="btn">Search</button>
                                    <input type="text" class="search" placeholder="Search Staff Data..." name="search">
                                </form>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Category</th>
                                            <th colspan="3" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($casuals as $key=>$casual)
                                        <tr>
                                            <td>{{ ++$key}}</td>
                                            <td>{{ $casual->code}}</td>
                                            <td>{{ $casual->fname." ".$casual->lname }}</td>
                                            <td>{{ $casual->department }}</td>
                                            <td>{{ $casual->position }}</td>
                                            <td>{{ $casual->category }}</td>
                                            <td>
                                                <a href="{{ route('staff.data.view',['staff'=>$casual]) }}">
                                                    <p  style="color: green"; class="glyphicon glyphicon-eye-open fa-1x"></p>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('staff.edit',['staff' => $casual]) }}">
                                                    <p style="color: blue";  class="glyphicon glyphicon-edit fa-1x"></p>
                                                </a>
                                            </td>
                                            <form method="POST" action="{{ route('staff.delete.casual',['staff' => $casual]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td style="color: red">
                                                    <button type="submit" style="border:0px;" class="glyphicon glyphicon-trash fa-1x">
                                                    </button></td>
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
                        {{-- </fieldset>
                    </form> --}}
                </div>
                <div>{{  $casuals->links() }}</div>
            </div>
        </div>
    </body>
    </html>
    </x-layout>
