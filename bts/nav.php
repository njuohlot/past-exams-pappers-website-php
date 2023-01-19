
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
 <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="assets/img/logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          <li class="dropdown"><a href="index.php"><span>Accueil</span></a></li>          
          <li class="dropdown"><a href="#"><span>Départements</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                               <?php include 'getNavCourse.php'?>
              </li>
            
            </ul>
          </li>
          </li>
          <li><a class="nav-link scrollto" href="index.php?page=contacte">Contactez-nous</a></li>
          <li>

<div class="dropdown">
    <a class="dropdown-toggle" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
        Langue
    </a>

    <ul class="dropdown-menu" aria-labelledby="Dropdown">
        <li>
            <a class="dropdown-item" href="http://localhost/gateways/index.php?language=1">Anglais</i></a>
        </li>
    
        <li>
        <li>
            <a class="dropdown-item" href="http://localhost/gateways/index.php?language=1">Français</a>
        </li>
    </ul>
</div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      <button class='btn btn-primary'>
         <a class="scrollto" href="http://localhost/gateways/bts/index.php">Commencer</a> 
      </button> 
      

    </div>
  </header><!-- End Header -->
  <style>
      /*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
.header {
  padding: 15px 0;
  transition: all 0.5s;
  z-index: 997;
  background:ivory;
  box-shadow: 1px 1px 1px rgba(0,0,0,0.1);
  
}



.header .logo img {
  max-height: 70px;
  margin-right: 6px;
}


.header button,
.header button:focus {
  font-size: 16px;
  color: var(--color-white);
  background: var(--color-primary);
  padding: 8px 23px;
  border: none;
  border-radius: 4px;
  transition: 0.3s;
  font-family: var(--font-secondary);
}

.header button:hover,
.header button:focus:hover {
  color: var(--color-white);
  background: rgba(var(--color-primary-rgb), 0.85);
}

@media (max-width: 1279px) {

  .header button,
  .header button:focus {
    margin-right: 50px;
  }
}

/*--------------------------------------------------------------
# Desktop Navigation 
--------------------------------------------------------------*/
@media (min-width: 1280px) {
  .navbar {
    padding: 0;
    position: relative;
  }

  .navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
  }

  .navbar li {
    position: relative;
  }

  .navbar>ul>li {
    white-space: nowrap;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 20px;
    font-family: var(--font-secondary);
    font-size: 16px;
    font-weight: 400;
    color: rgba(var(--color-secondary-dark-rgb), 0.7);
    white-space: nowrap;
    transition: 0.3s;
    position: relative;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar>ul>li>a:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: var(--color-primary);
    visibility: hidden;
    transition: all 0.3s ease-in-out 0s;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out 0s;
  }

  .navbar a:hover:before,
  .navbar li:hover>a:before,
  .navbar .active:before {
    visibility: visible;
    transform: scaleX(0.7);
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: var(--color-primary);
  }

  .navbar .dropdown a:hover:before,
  .navbar .dropdown:hover>a:before,
  .navbar .dropdown .active:before {
    visibility: hidden;
  }

  .navbar .dropdown a:hover,
  .navbar .dropdown .active,
  .navbar .dropdown .active:focus,
  .navbar .dropdown:hover>a {
    color: var(--color-white);
    background: var(--color-secondary);
  }

  .navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 0;
    top: 145%;
    margin: 0;
    padding: 0 0 10px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: #f1f1f1;
    transition: 0.3s;
    border-radius: 10px;
  }

  .navbar .dropdown ul li {
    min-width: 200px;
    
  }

  .navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 15px;
    text-transform: none;
    border-bottom: 1px solid pink;
    font-weight: 400;
    color: rgba(var(--color-white-rgb), 0.7);
  }

  .navbar .dropdown ul a i {
    font-size: 12px;
  }

  .navbar .dropdown ul a:hover,
  .navbar .dropdown ul .active,
  .navbar .dropdown ul .active:hover,
  .navbar .dropdown ul li:hover>a {
    color: var(--color-white);
    background: var(--color-primary);
  }

  .navbar .dropdown:hover>ul {
    opacity: 1;
    visibility: visible;
  }

 
  .navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
  }

  .navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
  }
}

@media (min-width: 1280px) and (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/*--------------------------------------------------------------
# Mobile Navigation
--------------------------------------------------------------*/
@media (max-width: 1279px) {
    .header{
        height: 12vh;
    }
  .navbar {
    position: fixed;
    top: 80px;
    left: -100%;
    width: calc(100% - 70px);
    bottom: 0;
    transition: 0.3s;
    background-color: #121212;
    z-index: 9997;
    border-radius: 5px;
  }

  .navbar ul {
    position: absolute;
    inset: 0;
    padding: 10px 0;
    margin: 0;
    background: rgba(var(--color-secondary-rgb), 0.9);
    overflow-y: auto;
    transition: 0.3s;
    z-index: 9998;
  }

  .navbar a,
  .navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: 500;
    color: wheat;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navbar a i,
  .navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: var(--color-white);
  }

  .navbar .dropdown ul,
  .navbar .dropdown .dropdown ul {
    position: static;
    display: none;
    padding: 10px 0;
    margin: 10px 20px;
    transition: all 0.5s ease-in-out;
    border: 1px solid rgba(var(--color-secondary-light-rgb), 0.3);
  }

  .navbar .dropdown>.dropdown-active,
  .navbar .dropdown .dropdown>.dropdown-active {
    display: block;
  }

  .mobile-nav-toggle {
    display: block !important;
    color: var(--color-secondary);
    font-size: 28px;
    cursor: pointer;
    line-height: 0;
    transition: 0.5s;
    position: fixed;
    top: 20px;
    z-index: 9999;
    right: 20px;
  }

  .mobile-nav-toggle.bi-x {
    color: var(--color-white);
  }

  .mobile-nav-active {
    overflow: hidden;
    z-index: 9995;
    position: relative;
  }

  .mobile-nav-active .navbar {
    left: 0;
  }

  .mobile-nav-active .navbar:before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(var(--color-secondary-rgb), 0.8);
    z-index: 9996;
  }
  .header .logo {
    height: 30px;
  }
}

  </style>