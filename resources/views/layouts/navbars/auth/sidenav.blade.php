<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main" >
    <div class="sidenav-header" style="background-color: #b22331;">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="/dashboard">                     <div
            target="_blank">
            <img src="/assets/img/téléchargement-removebg-preview.png" class="navbar-brand-img h-100"  style="width:60px; height:50px;">
            <span class="nav-link-text ms-1"style="color:white;">Ibn_Tofail_Covoiturage</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="background-color: #b22331;">
        <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="/trajets">                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Gestion de trajets </span>
                </a>
            </li>

            <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="/contactclient">                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Les contacts de Clients </span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="/réservation">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Les Réservation</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'profile' ? 'active' : '' }}" href="/commentaireclient">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Les Commentaires</span>
                </a>
            </li>
           
           
        </ul>
    </div>

</br>

</br>
</br>
</br>

</br>
</br>
</br>
</br>
</br>

<div class="sidenav-footer mx-3 " style="background-color: #b22331;">
       
        <a class="btn btn-primary btn-sm mb-0 w-100"
            href="index.php" target="_blank" type="button" style="background-color: white; color:#508bc8;">Ibn_Tofail_Covoiturage</a>
    </div>
</aside>
