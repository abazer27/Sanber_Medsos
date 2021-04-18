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
                                    <td class="ps-3 align-middle"><a href="{{route('profiles.index')}}" class="text-light fs-6" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                    <li class="list-group-item">Mengikuti<br> {{Auth::user()->follow->follower}}</li>
                    <li class="list-group-item">Pengikut<br> {{Auth::user()->follow->following}}</li>
                    <li class="list-group-item">Profile</li>
                </ul>
            </div>
        </div>
        <!-- create post -->
        <div class="col-md">
            <div>
                <form action="/article" class="row gy-2 gx-3 align-items-center" method="POST">
                    @csrf
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2"><textarea class="form-control" type="text" name="blog" rows="3" placeholder="Apa yang Anda pikirkan?" style="resize: none;"></textarea></td>
                            </tr>
                            <tr>
                                <td><input id="profile_image" type="file" class="form-control" name="image"></td>
                                <td class="text-end"><button type="submit" class="btn btn-primary">Post</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
            <!-- post -->
            <div class="mt-3">
                <div class="card">
                    <div class="card-header bg-primary">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="{{Auth::user()->profile->profile_image}}" class="rounded-circle" style="width: 30px"></td>
                                    <td class="ps-2 align-middle"><a href="{{route('profiles.index')}}" class="text-light fs-6" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, amet culpa sed eligendi itaque harum pariatur quam magnam id rerum omnis libero officia maiores odio blanditiis in adipisci quisquam placeat?</p>
                      <img src="{{Auth::user()->profile->profile_image}}" style="height: 300px" class="mx-auto d-block">
                      <!-- list comment -->
                        <div class="card mt-3">
                            <div class="card-header">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{Auth::user()->profile->profile_image}}" class="rounded-circle" style="width: 30px"></td>
                                            <td class="ps-2 align-middle"><a href="{{route('profiles.index')}}" class="text-dark" style="text-decoration: none">{{ Auth::user()->name }}</a></td>
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
                            <textarea class="form-control mt-1 mb-3" rows="1" placeholder="Komentar" style="resize: none;" id="comment"></textarea>
                            <button class="btn btn-primary"><i class="fa fa-thumbs-o-up pe-1"></i>Suka</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection