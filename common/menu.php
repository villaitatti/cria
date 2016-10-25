		
		  <!-- start main menu -->
<div id= header>

    
    
    
    
    
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="/"><img height="30px" width="100px" src="/themes/cria/images/logo.svg" alt="CRIA">
		  </a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
       <li><a href="#" class="search-icon"><i class="fi-magnifying-glass large icon"></i></a> </li>
         
          <i class="fi-magnifying-glass"></i>
          <a href="#" class="search-icon"><li class="search-field"></li></a>
            <form id="search-form" action="/search" method="get">
              <div class="row collapse">
                <div class="small-12 columns">
                  <input type="text" name="query" id="query" class="dream-search" placeholder="Search">
                </div>
              </div>
            </form>
    </ul>

    <!-- Left Nav Section -->
    <ul >
      <li><a href="/#the-story">The Story</a></li>
      <li><a href="/exhibits/show/the-committee">The Committee</a></li>
      <li><a href="/exhibits/show/the-rescue">The Rescue</a></li>
    </ul>
  </section>
</nav>
    

</div>
  <!-- end main menu -->

<!-- Script for changing the Banner images -->
<script>
    var pathname = window.location.pathname; 
    //alert(pathname);
    // The Committee
    if (pathname === "/exhibits/show/the-committee") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00347/pct:4,25,94,30/full/0/native.jpg)');   
    }
    // Call to Action
    if (pathname === "/exhibits/show/the-committee/call-to-action") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!01.23.00325/pct:0,37,100,50/full/0/native.jpg)');    
    }
    // Cast of Characters
    if (pathname === "/exhibits/show/the-committee/cast-of-characters") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!25.16.00955/pct:0,18,100,20/full/0/native.jpg)');    
    }
    // Cria in Numbers
    if (pathname === "/exhibits/show/the-committee/cria-in-numbers") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!02.08.00550/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Role of I Tatti
    if (pathname === "/exhibits/show/the-committee/role-of-i-tatti") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00408/pct:4,15,95,40/full/0/native.jpg)');    
    }
    // The Archive
    if (pathname === "/exhibits/show/the-committee/the-archive") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!17.11.00572/pct:0,45,100,20/full/0/native.jpg)');    
    }
    // The Rescue
    if (pathname === "/exhibits/show/the-rescue") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!08.14.00158/pct:4,23,100,40/full/0/native.jpg)');
    }
    // Destruction
    if (pathname === "/exhibits/show/the-rescue/destruction") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // People
    if (pathname === "/exhibits/show/the-rescue/people") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Cultural Heritage
    if (pathname === "/exhibits/show/the-rescue/cultural-heritage") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Monuments & Museums
    if (pathname === "/exhibits/show/the-rescue/monuments---museums") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Painting
    if (pathname === "/exhibits/show/the-rescue/painting") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Wood & Sculpture
    if (pathname === "/exhibits/show/the-rescue/wood---sculpture") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Paper
    if (pathname === "/exhibits/show/the-rescue/paper") {
        $('#header').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
</script>