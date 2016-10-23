		
		  <!-- start main menu -->
<div id= mainMenu>
	<nav class="top-bar" data-topbar role="navigation">
  
	  
  <section class="top-bar-section">	
	  
	        <h1 class="header-logo-centered"><a href="#"><?php
echo link_to_home_page(theme_logo());
?>
		  </a></h1>
	  
  </section>
</nav>
    <div style="margin-top: 14rem;position:absolute;left:38%">
    <a style="color:#fff;margin-right:2rem;font-size:1.8rem;" href="/exhibits/show/the-committee">The Committee &darr;</a>    
    <a style="color:#fff;margin-right:2rem;font-size:1.8rem;" href="/exhibits/show/the-rescue">The Rescue &darr;</a>
    <a style="color:#fff;margin-right:2rem;font-size:1.8rem;" href="/#pageStart">The Story &darr;</a>
    </div>
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
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!01.23.00325/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Cast of Characters
    if (pathname === "/exhibits/show/the-committee/cast-of-characters") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!25.16.00955/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Cria in Numbers
    if (pathname === "/exhibits/show/the-committee/cria-in-numbers") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!02.08.00550/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // Role of I Tatti
    if (pathname === "/exhibits/show/the-committee/role-of-i-tatti") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!07.15.00408/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // The Archive
    if (pathname === "/exhibits/show/the-committee/the-archive") {
        $('#mainMenu').css('background-image','url(http://iiif.itatti.harvard.edu/Scaler/IIIF/CRIA!03.04.00349/pct:5,5,90,40/full/0/native.jpg)');    
    }
    // The Rescue
    if (pathname === "/prod/exhibits/show/the-rescue") {
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