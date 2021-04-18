@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <table>
        <tbody>
            <tr>
                <!-- profile -->
                <td rowspan="3"><img src="{{Auth::user()->profile->profile_image}}" class="rounded" style="width: 200px"></td>
                <td class="fs-2 ps-3" colspan="3">{{Auth::user()->profile->nama}}</td>
            </tr>
            <tr>
                <!-- bio -->
                <td class="ps-3" colspan="3">{{Auth::user()->profile->biodata}}</td>
            </tr>
            <tr>
                <!-- followers/ing -->
                <td class="ps-3">Mengikuti</td>
                <td class="col-3">Diikuti</td>
                <td class="text-end"><a href="" class="btn btn-primary">Ubah profile</a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection