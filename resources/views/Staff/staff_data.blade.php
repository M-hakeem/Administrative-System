<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <form method="GET" action="{{ route('staff.show') }}">
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
                                        @forelse ($staffs as $staff)
                                        <tr>
                                            <td>{{ $staff->id }}</td>
                                            <td>{{ $staff->code }}</td>
                                            <td>{{ $staff->fname . ' ' . $staff->lname }}</td>
                                            <td>{{ $staff->department }}</td>
                                            <td>{{ $staff->position }}</td>
                                            <td>{{ $staff->category }}</td>
                                            <td>{{ $staff->status }}</td>
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
                <div>{{  $staffs->links() }}</div>
            </div>
        </div>
    </body>
</x-layout>
