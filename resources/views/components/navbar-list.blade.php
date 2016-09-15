
{{-- <li><a href="/food">Food</a></li> --}}
<li><a href="{{url("/")}}">Map</a></li>
<li><a href="{{url("/learning")}}">Learning Resources</a></li>
@if(Auth::guest())
	<li><a href="{{url("/login")}}">Login</a></li>
	<li><a href="{{url("/register")}}">Register</a></li>
@else
<?php
//This is to make sure the dropdown works on mobile and desktop.
//->Can't be having 2 entities with the same ID
//This should hopefully be unique between 2 calls.
$identity = rand(0, 1000);
?>
<li><a class="dropdown-button" data-beloworigin="true" data-activates='account-{{$identity}}'>{{ Auth::user()->name }}</a></li>
    <ul id="account-{{$identity}}"  class='dropdown-content'>
      {{-- <li><a href="/friends">Friends</a></li> --}}
      <li><a href="{{url("/settings")}}">Settings</a></li>
      <li><a href="{{url("/logout")}}">Logout</a></li>
    </ul>
@endif
