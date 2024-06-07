<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rase</title>
    <link rel="">
</head>
<body>
 <header class="title">
    <div class="logo">
      Rase
    </div>
    <div class="menu">
        <label for="input"><div class="line"></div></label>
        <div id="list-wrapper">
            <ul class="list">
             <ul>
                <li><a href="#">Login</a></li>
             </ul>
             <ul>
                <li><a href="#">HOME</a></li>
             </ul>
             <ul>
                <li><a href="#">REGISTRATION</a></li>
             </ul>
           </ul>
       </div>
    </div>
  </header>
</body>
</html>



<body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <h1>
          Rase
        </h1>
        <nav>
          <ul class="header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
              <a class="header-nav__link" href="/mypage">Home</a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/ragister">Registration</a>
            </li>
            <li class="header-nav__item">
              <a class="header-nav__link" href="/login">Login
              </a>
            </li>
            @endif
          </ul>
         </nav>
      </div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>