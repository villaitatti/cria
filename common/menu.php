		
		  <!-- start main menu -->
<div id= header>

    <div class="header-menu">
              <div class="row">
		<div class="large-12 columns">	
            
            
    <nav class="top-bar" data-topbar role="navigation">

  <ul class="title-area">

    <li class="name">
      <h1><a href="/"><img  width="100px" src="/themes/cria/images/logo.svg" alt="CRIA">
		  </a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
       <li><a href="#" class="search-icon"><i class="fi-magnifying-glass large icon"></i></a> </li>
         
         
          <a href="#" class="search-icon"><li class="search-field"></li></a>
            <form  id="search-form" action="/search" method="get">
              <div class="row collapse">
                <div class="small-12 columns">
                  <input type="text" name="query" id="query" class="dream-search" placeholder="Search">
                </div>
              </div>
            </form>
    </ul>

    <!-- Left Nav Section -->
    <ul id="top-menu" class="center">
      <li><a href="/#the-story">The Story</a></li>
      <li><a href="/exhibits/show/the-committee"><span>The</span> Committee</a></li>
      <li><a href="/exhibits/show/the-rescue"><span>The</span> Rescue</a></li>
    </ul>
  </section>

</nav>
    
                  </div></div>  </div>    
</div>
  <!-- end main menu -->

<!-- Script for changing the Banner images -->
<script>
    var pathname = window.location.pathname; 
    //alert(location.pathname);
    // The Committee
    if (pathname === "/exhibits/show/the-committee") {
        $('#header').css('background-image','url(/themes/cria/images/headers/03.04.00346_H.jpg)');
        $('a[href*="' + location.pathname + '"] span').addClass('menu-current');
    }
    // Call to Action
    if (pathname === "/exhibits/show/the-committee/call-to-action") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!01.23.00325/pct:0,37,100,50/full/0/native.jpg)');
        $('a[href*="/exhibits/show/the-committee"] span').addClass('menu-current');
    }
    // Cast of Characters
    if (pathname === "/exhibits/show/the-committee/cast-of-characters") {
        $('#header').css('background-image','url(/themes/cria/images/headers/25.16.00955_H.jpg)');
        $('a[href*="/exhibits/show/the-committee"] span').addClass('menu-current');
    }
    // Cria in Numbers
    if (pathname === "/exhibits/show/the-committee/cria-in-numbers") {
        $('#header').css('background-image','url(/themes/cria/images/headers/CRIA_H.jpg)');
        $('a[href*="/exhibits/show/the-committee"] span').addClass('menu-current');
    }
    // Role of I Tatti
    if (pathname === "/exhibits/show/the-committee/role-of-i-tatti") {
        $('#header').css('background-image','url(/themes/cria/images/headers/07.15.00408_H.jpg)');
        $('a[href*="/exhibits/show/the-committee"] span').addClass('menu-current');
    }
    // The Archive
    if (pathname === "/exhibits/show/the-committee/the-archive") {
        $('#header').css('background-image','url(/themes/cria/images/headers/17.11.00572_H.jpg)');
        $('a[href*="/exhibits/show/the-committee"] span').addClass('menu-current');
    }
    // The Rescue
    if (pathname === "/exhibits/show/the-rescue") {
        $('#header').css('background-image','url(/themes/cria/images/headers/04.08.00330_H.jpg)');
        $('a[href*="' + location.pathname + '"] span').addClass('menu-current');
    }
    // Destruction
    if (pathname === "/exhibits/show/the-rescue/destruction") {
        $('#header').css('background-image','url(/themes/cria/images/headers/07.17.00442_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // People
    if (pathname === "/exhibits/show/the-rescue/people") {
        $('#header').css('background-image','url(/themes/cria/images/headers/07.11.00323_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // Cultural Heritage
    if (pathname === "/exhibits/show/the-rescue/cultural-heritage") {
        $('#header').css('background-image','url(/themes/cria/images/headers/08.01.00002_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // Monuments & Museums
    if (pathname === "/exhibits/show/the-rescue/monuments---museums") {
        $('#header').css('background-image','url(/themes/cria/images/headers/08.11.00124_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // Painting
    if (pathname === "/exhibits/show/the-rescue/painting") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.23.00316bis/pct:3,8,90,45/full/0/native.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // Wood & Sculpture
    if (pathname === "/exhibits/show/the-rescue/wood-sculpture") {
        $('#header').css('background-image','url(/themes/cria/images/headers/09.20.00193_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
    // Paper
    if (pathname === "/exhibits/show/the-rescue/paper") {
        $('#header').css('background-image','url(/themes/cria/images/headers/08.17.00182_H.jpg)');
        $('a[href*="/exhibits/show/the-rescue"] span').addClass('menu-current');
    }
</script>