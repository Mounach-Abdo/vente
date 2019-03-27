{{ auth()->guard('staff')->user() }}

<a  href='{{ url('staff/logout') }}'> logout </a>