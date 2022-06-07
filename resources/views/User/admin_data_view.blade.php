<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <table class="table-view">
                        <thead  class="thead">
                            <tr>
                                <th class="th" colspan="2">{{ $user->firstname." ". $user->lastname}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FirstName: {{ $user->firstname }}</td>
                                <td>LastName: {{ $user->lastname }}</td>
                            </tr>
                            <tr>
                                <td>Email: {{ $user->email }}</td>
                                <td>Role: {{ $user->role }} Admin</td>
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
