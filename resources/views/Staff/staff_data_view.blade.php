<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <table class="table-view">
                        <thead  class="thead">
                            <tr>
                                <th class="th" colspan="2">{{ $staff->fname." ". $staff->lname}} <sub class="sub">Code: {{ $staff->code }}</sub></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Email: {{ $staff->email }}</td>
                                <td>Phone No: {{ $staff->phone }}</td>
                            </tr>
                            <tr>
                                <td>Gender: {{ $staff->gender }}</td>
                                <td>Category: {{ $staff->category }}</td>
                            </tr>
                            <tr>
                                <td>Department: {{ $staff->department }}</td>
                                <td>Position: {{ $staff->position }}</td>
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
