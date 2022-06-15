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
                                <td> CAC Certificate:
                                @if ($distributor->cac)
                                <a href="{{asset('storage/'.$distributor->cac)}}"><img src="{{ asset('images/pdf.png')}}" class="pdf"/> </a>
                                @else
                                <a href="#"><img src="{{ asset('images/empty.png') }}" class="pdf"> </a>
                                @endif
                                </td>
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
