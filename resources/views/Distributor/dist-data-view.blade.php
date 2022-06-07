<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <table class="table-view">
                        <thead  class="thead">
                            <tr>
                                <th class="th" colspan="2">{{ $distributor->bname}}
                                    <sub class="sub">Code: {{ $distributor->code }} </sub>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name: {{ $distributor->title ." ". $distributor->fname . " " . $distributor->lname }}</td>
                                <td>Business Address: {{ $distributor->badd }}</td>
                            </tr>
                            <tr>
                                <td>Email: {{ $distributor->email }}</td>
                                <td>Phone No: {{ $distributor->phone }}</td>
                            </tr>
                            <tr>
                                <td>Nationality: {{ $distributor->nationality }}</td>
                                <td>State: {{ $distributor->state }}</td>
                            </tr>
                            <tr>
                                <td>Local government: {{ $distributor->lga }}</td>
                                <td>Area of Distributorship: {{ $distributor->area }}</td>
                            </tr>
                            <tr>
                                <td>CAC Number: {{ $distributor->cac }}</td>
                                <td>TIN Number: {{ $distributor->tin }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <x-alert/>
    </body>
    </html>
    </x-layout>
