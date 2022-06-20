<x-layout>
    <body>
        <div id="wrapper">
            <div id="page-inner">
                <div style="overflow-x:auto;">
                    <table class="table-view">
                        <thead  class="thead">
                            <tr>
                                <th class="th" colspan="2">{{ $user->firstname." ". $user->lastname}}
                                    @if ($user->status == 'Active')
                                        <sub class="sub">Status: <span style="color:blue;">{{ $user->status }}</span></sub>
                                    @elseif($user->status == 'Deactivated')
                                        <sub class="sub">Status:<span  style="color:red;"> {{ $user->status }}</span></sub>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>First Name: {{ $user->firstname }}</td>
                                <td>Last Name: {{ $user->lastname }}</td>
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
