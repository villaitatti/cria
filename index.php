<!DOCTYPE html>
<html lang="<?php
echo get_html_lang();
?>">
<head>
	<meta charset="utf-8">
  <?php
if ($description = option('description')):
?>
  <meta name="description" content="<?php
    echo $description;
?>" />
  <?php
endif;
?>
  
  <title><?php
echo option('site_title');
echo isset($title) ? ' | ' . strip_formatting($title) : '';
?></title>

  <?php
echo auto_discovery_link_tags();
?>
  

  <!-- Plugin Stuff -->

  <?php
fire_plugin_hook('public_head', array(
    'view' => $this
));
?>

  <!-- Stylesheets -->

  <?php
queue_css_url('https://fonts.googleapis.com/css?family=Montserrat|Open+Sans:300,300i,700,700');

queue_css_file('foundation');
queue_css_file('app');
echo head_css();
?>

  <!-- JavaScripts -->
  <?php
queue_js_file(array('app','vendor/jquery','vendor/custom.modernizr'));
?>

  <?php
echo head_js();
?>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85959362-1', 'auto');
  ga('send', 'pageview');

</script>
    

</head>

<body id="home">
    
    <?php
fire_plugin_hook('public_body', array(
    'view' => $this
));
?>
<div class="se-pre-con"></div>	

<header>
		  <?php
fire_plugin_hook('public_header');
?>
		</header>
		
  <!-- wrapper for header image starts, closed in footer, but can be closed in page as well and reopened -->
	<div class="headWrapper">

		

		
<div id="home-text">
    	        <a href="#"><img width="100%" src="themes/cria/images/logo.svg" alt="CRIA">
		  </a>
    
  <div class="justified-home">“The flood that swept across Italy cut a path
of destruction through our own cultural heritage.
CRIA - the Committee to Rescue Italian
Art - arose spontaneously among a group of
art historians, curators, and conservators
who share a deep concern for the art and
culture of our civilization. Within a matter of
days this personal commitment was transformed
into a nationwide volunteer organization
sending professional help and materials
      to Italy.”</div>

    <div class="the-story">
    <h3 class="white" > A collection of documents, videos, and over 900 photographs illustrate the story of CRIA</h3>
    </div>
    <div class="the-story">
        <a  href="#pageStart"><h1 class="white">the story<br /><b>v</b></h1></a>    
        
    </div>
    
</div>
	  

	  

        
        
	
		  <!-- open up these divs to center the content from all pages, and set max width -->
	<div class="row">
		<div class="large-12 columns">





  <!-- close out header wrappers -->

</div>
	</div>
		</div>
  <!-- start header wrappers again -->



<div id="pageStart">
    
    
                		  <!-- ************ start main ***********menu -->

	<nav class="top-bar" data-topbar role="navigation">
  
	  
  <section class="top-bar-section">	
	  
    <!-- Right Nav Section -->
    <ul class="right">

          <li><a style="font-size:1.2rem;" href="/exhibits/show/the-rescue">the rescue</a></li>

        </ul>


    <!-- Left Nav Section -->
    <ul class="left">
          <li><a style="font-size:1.2rem;" href="/exhibits/show/the-committee">the committee</a></li>
    </ul>
	  
	  
	  	  
  </section>

			
	<ul class="title-area">
    
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>			
			
			
			</nav>

	<div class="row">
		
		<div class="large-12 columns">
            

            

            
            
          <div class="row" style="padding-top:3rem">
  <div class="small-3 columns">The flood<br />
              CRIA<br />
              </div>
  <div id="flood" class="small-9 columns">
              <h1>THE FLOOD</h1>
<p>During the night of November 4, the levels of the river Arno began to rise swiftly and with little warning. The Arno flows through the very center of the city of Florence and in perilous proximity to many of its most significant monuments. The river was already swollen, and the surrounding area saturated, by heavy rains that autumn. The Uffizi, the Accademia, the national library and state archives, the Duomo and the Ponte Vecchio are among the countless artistic and cultural treasures concentrated within Florence’s historic center, and they all lay within the floodplain.</p>
<p>Intense rainfall on the evening of November 3rd continued into the small hours the following day, and the river level rose by six meters in as many hours. In Florence, the Arno soon overwhelmed its banks, its levels peaking after dawn on November 4 and showing no sign of receding until the evening. The historic center and the neighborhoods along the river were inundated in a very short time. Thousands of Florentines were forced to abandon their homes and take refuge on the highest floors of apartment buildings or even on the roofs of houses. The fire brigades and army answered thousands of calls to save people besieged by the high waters.  Twenty-nine people died.</p>
<p>The flood, the most severe ever to strike Florence, swept away everything it found in its way.  The explosion of heating oil tanks formed a slimy film on the current of water, smearing the walls of the city’s houses and monuments and lingering even as the river settled back within its banks.  By then, the heart of the city, its historic district, and many suburban neighborhoods had remained under water for more than a full day.</p>
<p>Wherever the floodwaters had reached, there was now debris and mud.  The church of Santa Croce was submerged under three meters of water and very many works of art, including Cimabue’s Crucifixion, had been irreparably damaged. Thousands of paintings and art objects housed in museums, churches, and private collections in the historic district had been destroyed. The surge had a powerfully destructive force: 
Damages were due not only to immersion in water, but to the fact that the flood hit the city with a speed of 50 miles an hour, shattering objects and transforming movable objects into missiles which were hurled against altarpieces, tearing and breaking them.
The deposits of the National Library of Florence were completely inundated, and millions of volumes and rare early printed books risked being lost forever. Untold numbers of manuscripts in the nearby State Archives faced the same fate.  
</p>
<p>In the hours following the flood, when the full extent of the catastrophe began to emerge, a massive show of solidarity erupted across the world.  National and international committees to save the artworks sprang up spontaneously in many countries, and collections of funds and material goods began in many Italian cities.</p>
<div class="video-container"> 
            
                <iframe src="https://player.vimeo.com/video/186245220" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                
            </div>
<h1><strong>Committee to Rescue Italian Art (CRIA)</strong></h1>
<p>As soon as news of the disaster reached the United States, concerned scholars of Italian art and culture leapt into action to help save the precious artistic heritage of Florence and other cities, especially Venice, ravaged by floods.  Following the impulse given by Fred Licht and Bates Lowry, professors of art history at Brown University, and Licht’s wife Meg , also an art historian, a group of distinguished scholars, curators, and conservators quickly joined forces to create the  Committee to Rescue Italian Art.  The group’s aim was to raise money to support the emergency rescue operations already underway as well as provide effective long-term assistance for the huge task of restoration ahead.  In addition to artworks and monuments, the Committee promptly expanded its scope to include damaged books and manuscripts from libraries and archives.</p>
<p>Within a week of the flood, CRIA was already functioning nationwide and had secured large pledges for the recovery efforts.  Under the honorary presidency of Jacqueline Kennedy, widow of the late president John F. Kennedy, CRIA eventually included over 200 members or affiliates from across the United States, comprising members of the advisory committee, the national executive committee, administrative staff, special consultants, and dozens of area representatives from one coast to the other.  It set as its fund-raising goal the substantial sum of $2.5 million – the rough equivalent of $20 million today.  The Committee raised money through direct mail requests, ads, special exhibits of Italian art, fashion shows and cocktail parties, video appeals by famous figures such as Ted Kennedy and Elizabeth Taylor, and screenings of Franco Zeffirelli’s powerful documentary Days of Destruction, on which it had exclusive distribution rights in the U.S.  The response of the American public and of U.S. institutions was enthusiastic and generous, and CRIA came very close to achieving its financial goal.</p>
<p>The money CRIA raised went to support a wide variety of initiatives in Italy.   In Florence CRIA’s activities were coordinated by an administrative office housed in Palazzo Pitti, and by Villa I Tatti, the Harvard University Center for Italian Renaissance Studies, the most important American cultural institution in the city, whose Director, historian Myron Gilmore, was on the advisory committee.  CRIA purchased and shipped conservation equipment and supplies.  It assembled teams of conservators and other specialists to send to Florence and Venice and paid their travel and living expenses.  The advisory committee selected damaged monuments, museums, and works of art and allocated funds for their restoration.  CRIA financed fellowships for students of restoration and for young scholars to assist with the recovery efforts onsite.  It helped establish new centers for study and restoration – one at the Palazzo Davanzati, another at the National Library, and a third, in Venice, at San Gregorio.</p>
<p>After some years, once steady progress was being made on the restorations and the situations in both Florence and Venice had returned to normal, CRIA’s original purposes had largely been achieved.  Consequently, the executive office in New York closed in 1971, followed in the spring of 1973 by the Florentine administrative office.  In its short lifetime, the Committee to Rescue Italian Art made a crucial contribution to the efforts to salvage and restore the cultural heritage of Florence and Venice, one whose significance has only recently started to come to light.  </p>
<p>&nbsp;</p>

      
                  
      
      

            

            
            
<h2>The COMMITTEE</h2>
<p>&nbsp;</p>
<p>Meiss, insigne storico dell&rsquo;arte e insegnante presso l&rsquo;Institute of Advanced Studies di Princeton, viene nominato Chairman of the Advisory Committee&nbsp; del CRIA; mentre la carica di Presidente onorario del Comitato &egrave; ricoperta da Jacqueline Kennedy. Nel National Executive Committee&nbsp; &nbsp;del comitato compaiono per la storia dell&rsquo;arte i nomi di Sydney J. Freedberg, vice chairman da&nbsp; &nbsp;Harvard University, &nbsp;&nbsp;Frederic Hartt (University of Pennsylvania), Craig H. Smith (Institute of Fine Arts, New York), John Walker (direttore della National Gallery di Washington). Fra gli altri studiosi, nell&rsquo;advisory committee spiccano i nomi di Rudolf Wittkower (Columbia University), Rensselar Lee (Princeton University), e &nbsp;poi Paul Oskar Kristeller (Columbia University), l&rsquo;autore dell&rsquo;<em>Iter Italicum</em>, che grazie alla sua intima conoscenza delle ricchezze del patrimonio documentario italiano sar&agrave; fra i massimi consulenti nella scelta degli interventi di restauro da finanziare.</p>
<p>&nbsp;</p>
<h2>FUND RAISING</h2>
<p>&nbsp;</p>
<p>All&rsquo;ampio consenso che accolse l&rsquo;invito dei coniugi Licht e di Bates Lowry da parte degli studiosi, ne corrispose uno altrettanto ampio da parte della popolazione americana. Fred Licht ricorda il reportage di immagini scattate da lui e da Hartt a due giorni dall&rsquo;alluvione, e le proiezioni che furono fatte ovunque, in universit&agrave;, scuole e collegi; cos&igrave; come le somme raccolte, pi&ugrave; o meno ingenti versate da studenti, professori, gente comune. Lo scopo era raggiungere la cifra di due milioni e mezzo di dollari, da devolvere per l&rsquo;opera di restauro e ripristino di edifici storici, opere d&rsquo;arte, musei, archivi e biblioteche.</p>
<p>Negli Stati Uniti venivano raccolti i fondi, amministrati da un tesoriere, Curtis Brooks.</p>
<p>Un ufficio, con a capo Bates Lowry venne aperto prima a Providence, e poi a New York.</p>
<p>&nbsp;</p>
                        <div class="video-container"> 
                      <iframe src="https://player.vimeo.com/video/187955193" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                
            </div><br />

      <h2>ALLOCATIONS</h2>
<p>L&rsquo; Advisory Committee decideva sull&rsquo;organizzazione degli aiuti e sulla scelta delle opere di cui finanziare il restauro. A Firenze il CRIA aveva due &ldquo;headquarters&rdquo;: un ufficio organizzativo e contabile in citt&agrave;, che fu ospitato fino al 1971 in uno dei locali al piano terreno di Palazzo Pitti, aperto sul cortile interno; e Villa I Tatti, allora diretta da Myron Gilmore, membro del CRIA con le funzioni di rappresentante per l&rsquo;Italia, e dove Millard Meiss era presenza quasi costante (e per un periodo direttore <em>pro tempore</em>).</p>
<p>Fu presa la decisione che ogni anno dovesse essere nominato un rappresentante del CRIA per la supervisione dei restauri a Firenze, ma anche a Venezia e nel Veneto, luoghi altrettanto danneggiati negli stessi giorni dalle piogge e dall&rsquo;acqua alta. L&rsquo;Ufficio di Palazzo Pitti venne affidato ad una segretaria, Judith Munat, con il compito di organizzare l&rsquo;attivit&agrave; e di pagare le fatture presentate da restauratori e maestranze diverse coinvolte nei lavori di ripristino.</p>
<p>Accanto alla segretaria vi era sempre il rappresentante ad incarico annuale. In questa posizione si alternarono, nel tempo, Juergen Schulz, Curtis Shell, Maurice Cope, Joseph Polzer, e Fred Licht.</p>
<p>A Firenze furono individuati quattro grandi nuclei di intervento: il settore delle opere d&rsquo;arte propriamente dette, sottoposte alla tutela della Soprintendenza delle Gallerie (dipinti su tavola, su tela, affreschi, sculture e opere in legno), il settore degli edifici, sottoposto alla Soprintendenza ai Monumenti; le biblioteche e gli archivi, per il recupero dei documenti cartacei; infine i musei, per oggetti artistici di natura diversa.</p>
<h3>PALAZZO DAVANZATI</h3>
<p>La necessit&agrave; di intervenire contemporaneamente e in tempi brevi su moltissimo materiale, impose la nascita di centri di studio e di attivit&agrave; per il restauro, in cui operassero allo stesso tempo molte persone. Nacquero perci&ograve; il centro di restauro di Palazzo Davanzati per affiancare sia il Gabinetto di Restauri istituito da Ugo Procacci presso la Vecchia Posta, gi&agrave; nel 1932, sia il laboratorio alla Fortezza da Basso, con lo scopo, oltre che quello del restauro, di approfondire lo studio del degrado apportato dagli agenti atmosferici e fisici sul patrimonio monumentale, scopo realizzato grazie all&rsquo;aiuto di un&rsquo;equipe di chimici, per la prima volta coinvolti nel campo del restauro, in Italia.</p>
<p>&nbsp;</p>
<h3>BIBLIOTECA NAZIONALE</h3>
<p>&nbsp;</p>
<p>Presso la Biblioteca Nazionale Centrale fu istituito poi un laboratorio per salvare e restaurare il materiale librario.</p>
<h2>PERSONNEL</h2>
<p>&nbsp;</p>
<p>All&rsquo;interno di queste istituzioni lavoravano specialisti e restauratori, nonch&eacute; borsisti e studenti, italiani e stranieri il cui lavoro risulta finanziato dal CRIA, come mostrano i documenti dell&rsquo;archivio dell&rsquo;ufficio di Palazzo Pitti. Relazioni mensili, riassuntive e finali dei singoli lavoratori, permettono di seguire nel dettaglio la loro opera.</p>
<h1>VENEZIA</h1>
<p>Un&rsquo;organizzazione simile fu applicata anche a Venezia, dove gli interventi furono ripartiti fra Soprintendenza alle Gallerie, ai Monumenti, Biblioteche e Archivi, dove sul modello dei laboratori fiorentini di Palazzo Davanzati e della Fortezza da Basso, fu istituito il laboratorio di restauro nell&rsquo;ex chiesa di S. Gregorio.</p>
<p>&nbsp;</p>
<p>All&rsquo;interno di queste grandi suddivisioni, il CRIA ne operava di ulteriori, selezionando opere su cui intervenire, e fissando cos&igrave; quelli che l&rsquo;allora segretaria Judith Munat, indica come<em> Projects</em>: progetti di restauro per cui venivano stanziati fondi appositi.</p>
<p>&nbsp;</p>
<p>Con il procedere dei restauri e con il ristabilimento della normalit&agrave; sia a Firenze che a Venezia, vennero meno i principi ispiratori del CRIA. Cos&igrave;, nel 1971 fu chiuso per primo l&rsquo;ufficio di New York e nella primavera del 1973, dopo aver trasferito l&rsquo;ufficio contabile da Palazzo Pitti nei locali della Vecchia Posta sotto il loggiato degli Uffizi, anche quello di Firenze.&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

              </div>
</div>  

<script>	
	$(document).ready(function () {
  $(window).bind('resizeEnd', function () {
    $(".headWrapper").height($(window).height());
  });

  $(window).resize(function () {
    if (this.resizeTO) clearTimeout(this.resizeTO);
    this.resizeTO = setTimeout(function () {
      $(this).trigger('resizeEnd');
    }, 300);
  }).trigger("resize");
});
    
       $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = $( window ).height();
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});  
      
    
			</script>
            
            
<style>
    #mainMenu {background-image: none !important;}
            </style>
            
<footer>
<?php
echo foot();
?></footer>

