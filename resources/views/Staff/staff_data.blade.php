<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    {{-- <form method="GET" action="{{ route('staff.show') }}">
                        <fieldset> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Department</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Category</th>
                                            <th colspan="2" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($staffs as $staff)
                                        <tr>
                                            <td>{{ $staff->code }}</td>
                                            <td>{{ $staff->fname . ' ' . $staff->lname }}</td>
                                            <td>{{ $staff->department }}</td>
                                            <td>{{ $staff->position }}</td>
                                            <td>{{ $staff->category }}</td>
                                            <td style="color: green";><p  class="glyphicon glyphicon-eye-open fa-1x"></p></td>
                                            <td style="color: blue";><p  class="glyphicon glyphicon-edit fa-1x"></p></td>
                                            <form method="POST" action="{{ route('staff.delete',['staff' => $staff]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <td style="color: red">
                                                    <button type="submit" style="border:0px;" class="glyphicon glyphicon-trash fa-1x"></button>
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
                        {{-- </fieldset>
                    </form> --}}
                </div>
                <div>{{  $staffs->links() }}</div>
            </div>
        </div>
    </body>
</x-layout>
