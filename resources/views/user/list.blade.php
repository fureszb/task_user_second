<form action="/api/users/{{$user->id}}" method="post">
     {{csrf_field()}}
     {{method_field('GET')}}
     @foreach($userss as $user)
     <div class="form-group">
         {{$user->name}}
     </div>
     @endforeach
 </form>