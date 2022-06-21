<form method="post" action="{{ route('register') }}">
  @csrf
<div class="form-group">
  <label>Username</label>
  <input type="text" name="name" class="form-control p_input">
</div>
<div class="form-group">
  <label>Email</label>
  <input type="email" name="email" class="form-control p_input">
</div>
<div class="form-group">
  <label>Password</label>
  <input type="password" name="password" class="form-control p_input">
</div>

<div class="text-center">
  <button type="submit" class="btn btn-primary btn-block enter-btn">Register</button>
</div>

<p class="sign-up text-center">Already have an Account?<a href="{{ route('login') }}"> Sign In</a></p>
<p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
</form>
<li class="nav-item menu-items">
      <a class="nav-link href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
        
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Logout</span>
    </a>    
    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    </li> 