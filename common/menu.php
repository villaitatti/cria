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
          <li><a href="#" class="search-icon"></a> </li>
         
          <a href="#" class="search-icon"><li class="search-field"></li></a>
            <form>
              <div class="row collapse">
                <div class="small-12 columns">
                  <input type="text" class="dream-search" placeholder="Search">
                </div>
              </div>
            </form>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
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
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');   
    }
    // Call to Action
    if (pathname === "/exhibits/show/the-committee/call-to-action") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!01.23.00325/pct:0,37,100,50/full/0/native.jpg)');    
    }
    // Cast of Characters
    if (pathname === "/exhibits/show/the-committee/cast-of-characters") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!25.16.00955/pct:0,18,100,20/full/0/native.jpg)');    
    }
    // Cria in Numbers
    if (pathname === "/exhibits/show/the-committee/cria-in-numbers") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!02.08.00550/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Role of I Tatti
    if (pathname === "/exhibits/show/the-committee/role-of-i-tatti") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00408/pct:4,15,95,40/full/0/native.jpg)');    
    }
    // The Archive
    if (pathname === "/exhibits/show/the-committee/the-archive") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // The Rescue
    if (pathname === "/exhibits/show/the-rescue") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!09.09.00162/pct:5,45,90,40/full/0/native.jpg)');
    }
    // Destruction
    if (pathname === "/exhibits/show/the-rescue/destruction") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // People
    if (pathname === "/exhibits/show/the-rescue/people") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Cultural Heritage
    if (pathname === "/exhibits/show/the-rescue/cultural-heritage") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Monuments & Museums
    if (pathname === "/exhibits/show/the-rescue/monuments---museums") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Painting
    if (pathname === "/exhibits/show/the-rescue/painting") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Wood & Sculpture
    if (pathname === "/exhibits/show/the-rescue/wood---sculpture") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Paper
    if (pathname === "/exhibits/show/the-rescue/paper") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
</script>