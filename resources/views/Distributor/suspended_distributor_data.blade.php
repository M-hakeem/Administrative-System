<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    {{-- <form method="GET" action="{{ route('distributor.suspended') }}">
                        <fieldset> --}}
                            {{-- <input type="submit" class="btn" value="Search" name="filter">
                            <input type="text" class="search" placeholder="Search Data" name="valuetosearch">
                            &nbsp --}}
                            <div class="table-responsive">
                                <form action="">
                                    <button type="submit" class="btn">Search</button>
                                    <input type="text" class="search" placeholder="Search Distributor Data..." name="search">
                                </form>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Code</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Business Name</th>
                                            <th colspan="3" scope="col">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($suspended as $distributor)
                                        <tr>
                                            <td>{{ $distributor->code}}</td>
                                            <td>{{ $distributor->title}}</td>
                                            <td>{{ $distributor->fname." ".$distributor->lname }}</td>
                                            <td>{{ $distributor->phone }}</td>
                                            <td>{{ $distributor->bname }}</td>
                                            <td>
                                                <a href="{{ route('distributor-data.view',['distributor' => $distributor]) }}">
                                                    <p  style="color: green"; class="glyphicon glyphicon-eye-open fa-1x"></p>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('distributor.edit',['distributor' => $distributor]) }}">
                                                    <p  style="color: blue"; class="glyphicon glyphicon-edit fa-1x"></p>
                                                </a>
                                            </td>
                                            <form method="POST" action="{{ route('distributor.delete.suspended',['distributor' => $distributor]) }}">
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
                <div>{{ $suspended->links() }}</div>
            </div>
        </div>
        <x-alert/>
    </body>
    </html>
    </x-layout>
