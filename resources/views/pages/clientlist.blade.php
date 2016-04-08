@extends('pages/layouts')

@section('content')
    <h2>Clients List</h2>
    <div>
        <table class="table table-striped">
            <thead>
                <th colspan="60">Client Name</th>
                <th colspan="60>">Email</th>
                <th colspan="60>">Manage</th>
            </thead
        @foreach($clientlist as $client)
            <table class="table table-striped">
                <tbody>
                <tr>
                    <td colspan="60">{{$client->name}}</td>
                    <td colspan="60">{{$client->email}}</td>
                    <td colspan="60">
                        <a href="{{URL::to('clientUpdate',array($client->id))}}"><button type="button">Edit</button></a>
                        <a href="{{URL::to('clientDelete',array($client->id))}}"><button type="button">Delete</button></a>
                    </td>
                </tr>
                </tbody>
            </table>
        @endforeach
    </div>
@stop