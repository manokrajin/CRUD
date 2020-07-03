@extends('adminLTE.master')

@section('content')
    <table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <td scope="col">Answer</td>
            <td scope="col">Created Date</td>
            <td scope="col">Updated Date</td>
            <td scope="col">For Question</td>
        </tr>
    </thead>
    <tbody>
        @foreach($pertanyaan as $key => $items)
            @if ($key + 1 == $pertanyaan_id)
                @foreach($jawaban as $k => $i)
                    @if ($key + 1 == $i->pertanyaan_id)
                        <tr>
                        <th scope="row">{{$k + 1}}</th>
                        <td scope="col">{{$i->isi}}</td>
                        <td scope="col">{{$i->created_at}}</td>
                        <td scope="col">{{$i->updated_at}}</td>
                        <td scope="col">{{$items->isi}}</td>
                        </tr>
                    @endif
                @endforeach
            @endif
        @endforeach
    </tbody>
    </table>
    <form class='ml-5 mt-5 mr-5' method='POST'>
    @csrf
        <div class="form-group">
            <label for="answer  " class="d-flex justify-content-center ">Ubah Jawaban</label>
            <input type="text" name="isi"  class="form-control" id="answer">
        </div>
        <input type="submit" value="Submit" >
    </form>
@endsection
