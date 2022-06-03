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
                                            <th scope="col">Status</th>
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
                                            <td>{{ $casual->status }}</td>
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
