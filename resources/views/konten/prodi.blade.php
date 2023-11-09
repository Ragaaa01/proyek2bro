@extends('layouts.main')

@section('title',$title)

@section('content')
    <h2 class="align text-center">{{ $prodi }}</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">PRODI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataPrd as $item)
            <tr>
                <td>{{$item['no']}}</td>
                <td>{{$item['nama']}}</td>
                <td>{{$item['prodi']}}</td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection
