<header class="page-header gradient">
    <div class="container pt-2">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-5 col-lg-7 col-sm-8">
                <h2>Phema Agriculture Portal</h2>
                <p>Phema Agri is a farm management platform with the ability to provide farmers with management assistance to help them track the daily operations, expenses and sales of their farm. The platform also gives farmers the ability to access certain value added services like financing, insurance and input services. </p>
                @if (!auth()->user())
                <form action="{{route('register')}}" method="get">
                  @csrf
                <button type="submit" class="btn btn-outine-success">Sign Up</button>
              </form>
                @endif
                
            </div>
            <div id="farm-1" class="col-md-7 col-sm-4 col-lg-5 small"><img src="{{asset('img/farm.png')}}" alt="Farm"></div>
        </div>
    </div>
      <!-- WAVES BREAK-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#fff" fill-opacity="1"
      d="M0,320L17.1,293.3C34.3,267,69,213,103,197.3C137.1,181,171,203,206,229.3C240,256,274,288,309,256C342.9,224,377,128,411,112C445.7,96,480,160,514,176C548.6,192,583,160,617,144C651.4,128,686,128,720,149.3C754.3,171,789,213,823,240C857.1,267,891,277,926,266.7C960,256,994,224,1029,202.7C1062.9,181,1097,171,1131,192C1165.7,213,1200,267,1234,282.7C1268.6,299,1303,277,1337,266.7C1371.4,256,1406,256,1423,256L1440,256L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z">
    </path>
  </svg>
</header>