<x-layout>
<body>
    <div id="wrapper">
        <div id="page-inner">
            <div style="overflow-x:auto;">
                <form method="GET" action="{{ route('distributor.show') }}">
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
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($distributors as $distributor)
                                    <tr>
                                        <td>{{ $distributor->id }}</td>
                                        <td>{{ $distributor->code}}</td>
                                        <td>{{ $distributor->fname." ".$distributor->lname }}</td>
                                        <td>{{ $distributor->phone }}</td>
                                        <td>{{ $distributor->bname }}</td>
                                        <td>{{ $distributor->badd }}</td>
                                        <td>{{ $distributor->status }}</td>
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
            <div>{{ $distributors->links() }}</div>
        </div>
    </div>
    <x-alert/>
</body>
</html>
</x-layout>
