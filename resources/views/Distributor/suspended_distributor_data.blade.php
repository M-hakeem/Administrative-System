<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <form method="GET" action="{{ route('distributor.suspended') }}">
                        <fieldset>
                            {{-- <input type="submit" class="btn" value="Search" name="filter">
                            <input type="text" class="search" placeholder="Search Data" name="valuetosearch">
                            &nbsp --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Business Name</th>
                                            <th scope="col">Business Add</th>
                                            <th colspan="2" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($suspended as $distributor)
                                        <tr>
                                            <td>{{ $distributor->id }}</td>
                                            <td>{{ $distributor->code}}</td>
                                            <td>{{ $distributor->fname." ".$distributor->lname }}</td>
                                            <td>{{ $distributor->phone }}</td>
                                            <td>{{ $distributor->bname }}</td>
                                            <td>{{ $distributor->badd }}</td>
                                            <td style="color: blue";><p  class="glyphicon glyphicon-edit fa-1x"></p></td>
                                            <form method="POST" action="{{ route('distributor.delete',['distributor' => $distributor]) }}">
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
                <div>{{ $suspended->links() }}</div>
            </div>
        </div>
        <x-alert/>
    </body>
    </html>
    </x-layout>
