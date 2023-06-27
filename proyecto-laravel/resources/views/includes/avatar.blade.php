@if(Auth::User()->image)
<div class="container-avatar">
    <img src="{{route('user.avatar',['filename'=>Auth::user()->image])}}" alt="" class="avatar">
</div>
@endif