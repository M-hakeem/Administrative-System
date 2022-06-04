<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <form method="GET" action="{{ route('staff.casual') }}">
                        <fieldset>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Category</th>
                                            <th colspan="2" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($casuals as $casual)
                                        <tr>
                                            <td>{{ $casual->id }}</td>
                                            <td>{{ $casual->code}}</td>
                                            <td>{{ $casual->fname." ".$casual->lname }}</td>
                                            <td>{{ $casual->department }}</td>
                                            <td>{{ $casual->position }}</td>
                                            <td>{{ $casual->category }}</td>
                                            <td style="color: blue";><p  class="glyphicon glyphicon-edit fa-1x"></p></td>
                                            <form method="POST" action="">
                                                @csrf
                                                @method('DELETE')
                                                <td style="color: red"><button style="border:0px;" class="glyphicon glyphicon-trash fa-1x"></button></td>
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
                        </fieldset>
                    </form>
                </div>
                <div>{{  $casuals->links() }}</div>
            </div>
        </div>
    </body>
    </html>
    </x-layout>
