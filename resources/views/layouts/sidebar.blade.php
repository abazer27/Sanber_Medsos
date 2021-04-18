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
                    <li class="list-group-item">Mengikuti<p>A</p></li>
                    <li class="list-group-item">Pengikut<p>B</p></li>
                </ul>
            </div>
        </div>
        <div class="col-md">
            <div>
                <form action="/create" class="row gy-2 gx-3 align-items-center" method="POST">
                    @csrf
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="2"><textarea class="form-control" name="post" rows="3" placeholder="Apa yang Anda pikirkan?" style="resize: none;"></textarea></td>
                            </tr>
                            <tr>
                                <td><input id="profile_image" type="file" class="form-control" name="post_image"></td>
                                <td class="text-end"><button type="submit" class="btn btn-primary">Post</button></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
    </div>
</div>