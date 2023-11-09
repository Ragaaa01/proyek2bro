@extends('layouts.main')

@section('title',$title)

@section('content')
<h1 class="align text-center">{{$profil}}</h1>
            @foreach ($dataPrf as $item)
                <a>{{$item['Nama']}}</a><br>
                <a>{{$item['Kelas']}}</a><br>
                <a>{{$item['Prodi']}}</a><br>
                <a>{{$item['Alamat']}}</a><br>
            @endforeach
        </tbody>
    </table>
@endsection