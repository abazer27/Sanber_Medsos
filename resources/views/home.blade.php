@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="{{Auth::user()->profile->profile_image}}" class="rounded-circle" style="width: 50px"></td>
                                    <td class="ps-3 align-middle"><a href="/profile" class="text-light fs-6" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li class="list-group-item">Mengikuti</li>
                    <li class="list-group-item">Pengikut</li>
                    <li class="list-group-item">Profile</li>
                </ul>
            </div>
        </div>
        <!-- create post -->
        
        <div class="col-md">
            <div>
                <form action="/post" class="row gy-2 gx-3 align-items-center" method="POST" enctype="multipart/form-data">
                    @csrf
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2"><textarea class="form-control" name="post" rows="3" placeholder="Apa yang Anda pikirkan?" style="resize: none;"></textarea></td>
                            </tr>
                            <tr>
                                <td><input id="post_image" type="file" class="form-control" name="post_image"></td>
                                <td class="text-end"><button type="submit" class="btn btn-primary">Post</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!-- post -->
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
        </div> 
    </div>
</div>
@endsection
