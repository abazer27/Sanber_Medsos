@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <table>
        <tbody>
            <tr>
                <!-- profile -->
                <td rowspan="3"><img src="{{Auth::user()->profile->profile_image}}" class="rounded" style="width: 200px"></td>
                <td class="fs-2 ps-3" colspan="3">{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <!-- bio -->
                <td class="ps-3" colspan="3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed veniam accusantium, numquam fugiat quod commodi saepe deserunt optio perspiciatis quos illo minima ullam, officiis rerum? Animi deleniti maiores explicabo libero.</td>
            </tr>
            <tr>
                <!-- followers/ing -->
                <td class="ps-3">Mengikuti</td>
                <td class="col-3">Diikuti</td>
                <td class="text-end"><a href="" class="btn btn-primary">Update</a></td>
            </tr>
            <tr>
                <td colspan="4">
                    @foreach ($post as $item)
                    <div class="mt-3">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{Auth::user()->profile->profile_image}}" class="rounded-circle" style="width: 30px"></td>
                                            <td class="ps-2 align-middle"><a href="/profile" class="text-light fs-6" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
                                            <td class="text-end"><a href="" class="badge badge-danger">Hapus</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @if(empty($item->image))
                            <div class="card-body">
                            <p class="card-text">{{$item->post}}</p>
                            @elseif (empty($item->post))
                            <div class="card-body">
                            <img src="{{asset("storage/img/$item->image")}}" style="height: 300px" class="mx-auto d-block">
                            @else
                            <div class="card-body">
                                <p class="card-text">{{$item->post}}</p>
                                <img src="{{asset("storage/img/$item->image")}}" style="height: 300px" class="mx-auto d-block">
                            @endif
                            <!-- list comment -->
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td><img src="{{Auth::user()->profile->profile_image}}" class="rounded-circle" style="width: 30px"></td>
                                                    <td class="ps-2 align-middle"><a href="/profile" class="text-dark" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam iure neque aut commodi iste, nesciunt exercitationem aperiam alias ea, soluta fuga excepturi voluptates deserunt illo. Asperiores neque in corrupti architecto!</p>
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up pe-1"></i>Suka</button>
                                    </div>
                                </div>
                                <form action="/post/comment" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <textarea type="text" class="form-control mt-1" placeholder="Komentar" aria-label="Recipient's username" rows="1" aria-describedby="button-addon2" style="resize: none;"></textarea>
                                        <button class="btn btn-outline-primary mt-1" type="button" id="button-addon2">Kirim</button>
                                    </div>
                                </form>
                                <button class="btn btn-primary"><i class="fa fa-thumbs-o-up pe-1"></i>Suka</button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection