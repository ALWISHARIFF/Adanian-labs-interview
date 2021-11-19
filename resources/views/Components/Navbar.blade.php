   
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="{{route('landing')}}" class="navbar-brand">PHEMA AGRI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                @if (auth()->user()&&auth()->user()->role=='FARMER')
                <li class="nav-item p-3">
                    <a href="{{route('agrovet')}}" class="nav-link" aria-current="page" >Agrovet</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('forums')}}" class="nav-link" aria-current="page" >Farmer Forums</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('loans')}}" class="nav-link" aria-current="page" >Loans</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('farming')}}" class="nav-link" aria-current="page" >Farming</a>
                </li>
                @elseif(auth()->user()&&auth()->user()->role=='BANK_INVESTOR')
                <li class="nav-item p-3">
                    <a href="{{route('manage')}}" class="nav-link" aria-current="page" >Business Operations</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('reports')}}" class="nav-link" aria-current="page">Reports</a>
                </li>
                
                <li class="nav-item p-3">
                    <a href="{{route('investment')}}" class="nav-link" aria-current="page" href="#">Investments</a>
                </li>
                @elseif(auth()->user()&&auth()->user()->role=='INPUT_PROVIDER')
                <li class="nav-item p-3">
                    <a href="" class="nav-link " aria-current="page" href="{{route('manage')}}">Business Operations</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('operations')}}" class="nav-link" aria-current="page" href="#">Manage Operations</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('loans')}}" class="nav-link" aria-current="page" href="#">Provide Loans</a>
                </li>
                
                <li class="nav-item p-3">
                    <a href="{{route('investment')}}" class="nav-link" aria-current="page" href="#">Investments</a>
                </li>
                @elseif(auth()->user()&&auth()->user()->role=='VENDOR')
                <li class="nav-item p-3">
                    <a href="{{route('manage')}}" class="nav-link" aria-current="page" >Business Operations</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('agrovet')}}" class="nav-link" aria-current="page" href="#">Agrovets</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('goods')}}" class="nav-link" aria-current="page" href="#">Provide Goods</a>
                </li>
                
                <li class="nav-item p-3">
                    <a href="{{route('sales')}}" class="nav-link" aria-current="page" href="#">Sales</a>
                </li>
                @endif
                
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if (auth()->user())

                <li class="nav-item p-3">
                    <a href="{{route('profile')}}" class="nav-link" aria-current="page" href="#">Profile</a>
                </li>
                <li class="nav-item p-3">
                    <form action="{{route('logout')}}" method="post" class="inline">
                        @csrf
                    <button type="submit" class="btn lg">Logout</button>
                     </form>
                </li>
                @else
                <li class="nav-item p-3">
                    <a href="{{route('login')}}" class="nav-link active" aria-current="page" >Login</a>
                </li>
                <li class="nav-item p-3">
                    <a href="{{route('register')}}" class="nav-link" aria-current="page">SignUp</a>
                </li>
                @endif
                
            </ul>
        </div>
    </div>
</nav>
  
