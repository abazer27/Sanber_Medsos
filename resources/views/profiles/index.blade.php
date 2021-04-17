@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <table>
        <tbody>
            <tr>
                <!-- profile -->
                <td rowspan="3"><img src="{{Auth::user()->profile->profile_image}}" class="rounded" style="width: 200px"></td>
                <td class="fs-2 ps-3">{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <!-- bio -->
                <td class="ps-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed veniam accusantium, numquam fugiat quod commodi saepe deserunt optio perspiciatis quos illo minima ullam, officiis rerum? Animi deleniti maiores explicabo libero.</td>
            </tr>
            <tr>
                <!-- followers/ing -->
                <td class="ps-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi voluptatem soluta ipsum dolore quasi commodi molestiae at dicta nam? Eum obcaecati necessitatibus fuga ea repellat, assumenda temporibus cupiditate sed voluptatum?</td>
            </tr>
            <tr>
                <a class="" href="{{route('profiles.edit' ,'$id')}}">Update Profile</a>
            </tr>
            <tr>
                <td colspan="2">
                    <!-- post -->
                    <div class="mt-3">
                        <div class="card">
                            <div class="card-header  bg-primary">
                                <span class="text-light fs-6">{{ Auth::user()->name }}</span>
                            </div>
                            <div class="card-body">
                              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, amet culpa sed eligendi itaque harum pariatur quam magnam id rerum omnis libero officia maiores odio blanditiis in adipisci quisquam placeat?</p>
                              <img src="resources\img\social-media-users-post-banner.png" style="height: 300px" class="mx-auto d-block">
                              <!-- list comment -->
                                <div class="card mt-3">
                                    <p class="card-header">{{ Auth::user()->name }}</p>
                                    <div class="card-body">
                                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam iure neque aut commodi iste, nesciunt exercitationem aperiam alias ea, soluta fuga excepturi voluptates deserunt illo. Asperiores neque in corrupti architecto!</p>
                                        <button class="btn btn-primary btn-sm"><i class="fa fa-thumbs-o-up pe-1"></i>Suka</button>
                                    </div>
                                </div>
                              <textarea class="form-control mt-1 mb-3" rows="1" placeholder="Komentar" style="resize: none;" id="comment"></textarea>
                              <button class="btn btn-primary"><i class="fa fa-thumbs-o-up pe-1"></i>Suka</button>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection