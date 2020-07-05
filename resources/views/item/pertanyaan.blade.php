
@extends('adminLTE.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
        <th scope="col">No</th>
        <td scope="col">Question</td>
        <td scope="col">Created Date</td>
        <td scope="col">Updated Date</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $key => $items)
        <tr>
        <th scope="row">{{$key + 1}}</th>
        <td scope="col">{{$items->isi}}</td>
        <td scope="col">{{$items->created_at}}</td>
        <td scope="col">{{$items->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
@endsection
