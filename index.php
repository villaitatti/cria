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

		

		

	  
	        <h1 class="header-logo-centered"><a href="#"><img width="150px" src="themes/cria/images/CRIA_logo_centered.svg" alt="CRIA">
		  </a></h1>
	  

        
        
	
		  <!-- open up these divs to center the content from all pages, and set max width -->
	<div class="row">
		<div class="large-12 columns">

<article>
  on november 4, 1966<br />
the Arno river flooded the city of Florence<br />

	<br />a group of intellectuals took action<br />
	
	<br />over 900 photographs<br />
	and documents tell their story, <br />
	the story of <b>CRIA</b> and <b>I Tatti</b>
    <p><br /><br /><br /></p>
    <h1> <a style="color:white;" href="#pageStart">the story<br /><b>↓</b></a></h1>
</article>



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

          <li><a href="/exhibits/show/the-rescue">the rescue</a></li>

        </ul>


    <!-- Left Nav Section -->
    <ul class="left">
          <li><a href="/exhibits/show/the-committee">the committee</a></li>
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
<p>L&rsquo;autunno del 1966 fu molto piovoso in Italia. I fiumi cominciarono ad ingrossarsi e a trascinare a valle tutto ci&ograve; che incontravano nella loro strada, e in Toscana l&rsquo;Arno, il suo principale fiume, inizi&ograve; a salire di livello nei primi giorni di novembre.</p>
<p>Cos&igrave; nella notte del quattro novembre, alla vigilia della festa dell&rsquo;Unit&agrave; Nazionale, l&rsquo;Arno ruppe gli argini, e inond&ograve; i paesi e le citt&agrave; sparsi sul suo cammino. Una grandissima quantit&agrave; d&rsquo;acqua, di melma e di detriti si rivers&ograve; nelle campagne a nord e a sud di Firenze isolando la citt&agrave;. Poi il fiume inizi&ograve; a rompere gli argini anche in citt&agrave;. Il centro storico e i quartieri limitrofi al fiume in poco tempo furono ricoperti d&rsquo;acqua. L&rsquo;alluvione travolse tutto quello che trov&ograve; sulla sua strada; l&rsquo;esplosione dei serbatoi di nafta per riscaldamento produsse una macchia, oleosa che, galleggiando sulla corrente insozz&ograve; i muri delle case e dei monumenti della citt&agrave;. L&rsquo;ondata di piena ebbe il suo picco d&rsquo;altezza nelle ore susseguenti all&rsquo;alba del quattro novembre, e dur&ograve; per tutto il giorno.</p>
<p>Lentamente a partire dalla sera il fiume rientr&ograve; nei propri argini<em>. Quella che era passata era stata sicuramente la pi&ugrave; grande alluvione mai registrata a Firenze</em>. L&rsquo;evento ebbe un impastto psicologico devastante, tanto che, molte delle persone che nei giorni seguenti furono intervistate dalle televisioni di tutto il mondo, dichiararono che per la citt&agrave; si era trattato di una catastrofe ben pi&ugrave; terribile della seconda guerra mondiale, ormai terminata da oltre venti anni.</p>
<p>Il cuore della citt&agrave;, il suo centro storico e molti quartieri periferici, rimasero sommersi dall&rsquo;acqua per pi&ugrave; di un giorno, e migliaia di fiorentini furono costretti ad abbandonare le proprie case e rifugiarsi nei piani alti dei palazzi o addirittura sui tetti delle case. Migliaia furono gli interventi dei vigili del fuoco e dell&rsquo;esercito per salvare le persone assediate dalla piena. 29 i morti. Nei giorni successivi, l&rsquo;emozione per la catastrofe raggiunse ogni parte del mondo.</p>
<p>Il patrimonio artistico e architettonico della citt&agrave;,&nbsp; raccolto in maggior parte nel centro storico, era finito anch&rsquo;esso sott&rsquo;acqua. Ovunque l&rsquo;acqua fosse arrivata si trovavano adesso solo detriti e melma. La chiesa di Santa Croce era stata sommersa per tre metri dalla piena e moltissime opere, compreso il Cristo di Cimabue, erano state irreparabilmente danneggiate. Migliaia di dipinti e di oggetti d&rsquo;arte che si trovavano nei musei, nelle chiese o nelle raccolte private del centro storico erano andati distrutti. La Biblioteca Nazionale Centrale di Firenze aveva i suoi magazzini completamente sommersi dall&rsquo;acqua, e milioni di volumi e di opere letterarie antiche rischiavano di essere perdute per sempre. Le filze conservate nell&rsquo;Archivio di Stato avevano subito lo stesso trattamento di quelle della vicina biblioteca.</p>
<p>Quando nelle ore successive alla catastrofe si deline&ograve; la reale portata del disastro, una vera e propria gara di solidariet&agrave; si mosse da ogni parte del mondo; comitati nazionali e internazionali per il salvataggio delle opere d&rsquo;arte della citt&agrave; sorsero spontaneamente in molti paesi esteri, raccolte di beneficenza e di aiuti materiali furono avviate in tantissime citt&agrave; italiane.</p>
<p>&nbsp;</p>
<h1><strong>CRIA</strong></h1>
<p>Non appena la notizia dell&rsquo;alluvione giunse negli Stati Uniti, immediatamente si mobilitarono alcuni studiosi di cultura italiana.</p>
<p>Fred Licht, storico dell&rsquo;arte docente alla Design School di Rhode Island, ricorda che all&rsquo;annuncio del disastro la moglie, Margaret, studiosa di scultura, espresse la volont&agrave; di adoperarsi per aiutare a salvare il prezioso patrimonio artistico della citt&agrave;. A loro si aggiunse un amico, Bates Lowry,&nbsp; anch&rsquo;egli docente nella stessa scuola e studioso della civilt&agrave; italiana e fiorentina.</p>
<p>Fu quello il primigenio gruppo del Comitato per il Recupero dell&rsquo;Arte Italiana (<em>Committe to Rescue Italian Art)</em>. A quei tre primi membri si unirono immediatamente storici dell&rsquo;arte, studiosi di letteratura, di storia, frequentatori assidui e appassionati di quella cultura i cui documenti erano stati danneggiati dalla piena dell&rsquo;Arno. Fu subito chiaro che oltre alle opere d&rsquo;arte era necessario occuparsi del prezioso patrimonio di archivi e biblioteche.</p>
<p>Il 9 novembre 1966, Millard Meiss annuncia in un telegramma che il comitato &egrave; formato. Pochi giorni dopo aggiunge che il Comitato gode di membri e di sostenitori in tutti gli stati d&rsquo;America.</p>
<p>&nbsp;</p>

      
                  <div class="video-container"> 
            
                <iframe src="https://player.vimeo.com/video/186245220" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>                
            </div>
      
      

            

            
            
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

