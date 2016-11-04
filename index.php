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

<link rel="icon" href="/themes/cria/images/favicon.ico">

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
    	        <a href="#the-story"><img width="100%" src="themes/cria/images/logo.svg" alt="CRIA">
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
      to Italy.”<br />
   <img width="100%" src="themes/cria/images/cria-line.svg" alt="CRIA" ></div>

    <div class="the-story">
    A collection of documents, videos, and over 900 photographs illustrate the story of CRIA after the flood of 1966
    </div>
    <div class="the-story-v" >
        <a href="#the-story"><img src="themes/cria/images/home-v.svg" alt="CRIA"></a>    
        
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



<div  id="the-story">
    
    
                		  <!-- ************ start main ***********menu -->
    <div class="header-menu sticky">
	
	
     <nav class="top-bar row" data-topbar role="navigation" data-options="sticky_on: large">

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
    <ul class="left">
        <li><a href="/#the-story"><span class="menu-current">The</span> Story</a></li>
      <li><a href="/exhibits/show/the-committee">The Committee</a></li>
      <li><a href="/exhibits/show/the-rescue">The Rescue</a></li>
    </ul>
  </section>
           
</nav>
                  </div>
            
            
            
    </div>
	<div class="row">
		
		<div class="large-12 columns">
            

            

            
            
          <div class="row" style="padding-top:3rem">
              <div class="small-3 columns">&nbsp;</div>
  <div class="small-6 columns">
      <iframe src="https://player.vimeo.com/video/186245220?title=0&byline=0&portrait=0" width="640" height="512" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/186245220">CRIA appeal with  final CRIA credit CRIA MISC 1.09</a></p>
 
<ul class="tabs" data-tab role="tablist" style="float:right;">
  <li class="tab-title active noselect" role="presentation"><a class="noselect" href="#panel2-1" role="tab" tabindex="0" aria-selected="true" aria-controls="panel2-1" style="color:#de171c;">EN</a></li>
  <li class="tab-title" role="presentation"><a class="noselect" href="#panel2-2" role="tab" tabindex="0" aria-selected="false" aria-controls="panel2-2" style="color:#de171c;">IT</a></li>
</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
            <h1 style="margin-top:3rem"><strong>The Flood</strong></h1>
      

<p style="padding-top:2rem;">During the night of November 4 1966, the levels of the river Arno began to rise swiftly and with little warning. The Arno flows through the very center of the city of Florence and in perilous proximity to many of its most significant monuments. The river was already swollen, and the surrounding area saturated, by heavy rains that autumn. The Uffizi, the Accademia, the national library and state archives, the Duomo and the Ponte Vecchio are among the countless artistic and cultural treasures concentrated within Florence’s historic center, and they all lay within the floodplain.</p>
<p>Intense rainfall on the evening of November 3rd continued into the small hours the following day, and the river level rose by six meters in as many hours. In Florence, the Arno soon overwhelmed its banks, its levels peaking after dawn on November 4 and showing no sign of receding until the evening. The historic center and the neighborhoods along the river were inundated in a very short time. Thousands of Florentines were forced to abandon their homes and take refuge on the highest floors of apartment buildings or even on the roofs of houses. The fire brigades and army answered thousands of calls to save people besieged by the high waters.  Twenty-nine people died.</p>
<p>The flood, the most severe ever to strike Florence, swept away everything it found in its way.  The explosion of heating oil tanks formed a slimy film on the current of water, smearing the walls of the city’s houses and monuments and lingering even as the river settled back within its banks.  By then, the heart of the city, its historic district, and many suburban neighborhoods had remained under water for more than a full day.</p>
      <p>Wherever the floodwaters had reached, there was now debris and mud.  The church of Santa Croce was submerged under three meters of water and very many works of art, including Cimabue’s Crucifixion, had been irreparably damaged. Thousands of paintings and art objects housed in museums, churches, and private collections in the historic district had been destroyed. The surge had a powerfully destructive force, as Ugo Procacci, Superintendent of the Fine Arts Commission, explained to the first group of American restorers to arrive ten days later: </p>
      

      
     <p style="padding: 0 3rem"> Damages were due not only to immersion in water, but to the fact that the flood hit the city with a speed of 50 miles an hour, shattering objects and transforming movable objects into missiles which were hurled against altarpieces, tearing and breaking them.
      </p>
      <p>The deposits of the National Library of Florence were completely inundated, and millions of volumes and rare early printed books risked being lost forever. Untold numbers of manuscripts in the nearby State Archives faced the same fate.  
</p>
<p>In the hours following the flood, when the full extent of the catastrophe began to emerge, a massive show of solidarity erupted across the world.  National and international committees to save the artworks sprang up spontaneously in many countries, and collections of funds and material goods began in many Italian cities.</p>

<h1><strong>Committee to Rescue Italian Art (CRIA)</strong></h1>
      
      <iframe src="https://player.vimeo.com/video/187955288?title=0&byline=0&portrait=0" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/187955288">CRIA  appeal by Edward Kennedy CRIA MISC 1.02b</a></p>
      

      
<p style="padding-top:2rem">As soon as news of the disaster reached the United States, concerned scholars of Italian art and culture leapt into action to help save the precious artistic heritage of Florence and other cities, especially Venice, ravaged by floods.  Following the impulse given by Fred Licht and Bates Lowry, professors of art history at Brown University, and Licht’s wife Meg , also an art historian, a group of distinguished scholars, curators, and conservators quickly joined forces to create the  Committee to Rescue Italian Art.  The group’s aim was to raise money to support the emergency rescue operations already underway as well as provide effective long-term assistance for the huge task of restoration ahead.  In addition to artworks and monuments, the Committee promptly expanded its scope to include damaged books and manuscripts from libraries and archives.</p>
      <p>Within a week of the flood, CRIA was already functioning nationwide and had secured large pledges for the recovery efforts.  Under the honorary presidency of Jacqueline Kennedy, widow of the late president John F. Kennedy, CRIA eventually included over 200 members or affiliates from across the United States, comprising members of the advisory committee, the national executive committee, administrative staff, special consultants, and dozens of area representatives from one coast to the other.  It set as its fund-raising goal the substantial sum of $2.5 million – the rough equivalent of $20 million today.  The Committee raised money through direct mail requests, ads, special exhibits of Italian art, fashion shows and cocktail parties, video appeals by famous figures such as Ted Kennedy and Elizabeth Taylor, and screenings of Franco Zeffirelli’s powerful documentary <i>Days of Destruction</i>, on which it had exclusive distribution rights in the U.S.  The response of the American public and of U.S. institutions was enthusiastic and generous, and CRIA came very close to achieving its financial goal.</p>
<p>The money CRIA raised went to support a wide variety of initiatives in Italy.   In Florence CRIA’s activities were coordinated by an administrative office housed in Palazzo Pitti, and by Villa I Tatti, the Harvard University Center for Italian Renaissance Studies, the most important American cultural institution in the city, whose Director, historian Myron Gilmore, was on the advisory committee.  CRIA purchased and shipped conservation equipment and supplies.  It assembled teams of conservators and other specialists to send to Florence and Venice and paid their travel and living expenses.  The advisory committee selected damaged monuments, museums, and works of art and allocated funds for their restoration.  CRIA financed fellowships for students of restoration and for young scholars to assist with the recovery efforts onsite.  It helped establish new centers for study and restoration – one at the Palazzo Davanzati, another at the National Library, and a third, in Venice, at San Gregorio.</p>
<p>After some years, once steady progress was being made on the restorations and the situations in both Florence and Venice had returned to normal, CRIA’s original purposes had largely been achieved.  Consequently, the executive office in New York closed in 1971, followed in the spring of 1973 by the Florentine administrative office.  In its short lifetime, the Committee to Rescue Italian Art made a crucial contribution to the efforts to salvage and restore the cultural heritage of Florence and Venice, one whose significance has only recently started to come to light.  </p>
<p>&nbsp;</p>
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
   
      <h1 style="margin-top:3rem"><strong>L'alluvione</strong></h1>
      

<p style="padding-top:2rem;">
    Durante la notte del 4 novembre 1966, il livello del fiume Arno iniziò a crescere rapidamente e senza preavviso. L’Arno scorre proprio attraverso il centro di Firenze, in pericolosa prossimità rispetto a molti dei più importanti monumenti. Il fiume era già gonfio e la terra satura dalla pioggia caduta lungamente durante l’autunno. Gli Uffizi, l’Accademia, la Biblioteca Nazionale e l’Archivio di Stato, il Duomo e Ponte Vecchio, inestimabili  tesori artistici e culturali  concentrati nel centro storico fiorentino, si trovano tutti entro la piana alluvionale.</p>

      <p>La pioggia intensa nel pomeriggio del 3 novembre continuò fino alle prime ore del giorno successivo e il livello del fiume crebbe di sei metri in sei ore. A Firenze l’arno superò subito i suoi argini. Il picco fu raggiunto dopo l’alba del 4 novembre e non dette segno di recedere fino alla sera. In breve il centro storico e le zone limitrofe al fiume furono inondate. Migliaia di fiorentini furono costretti ad abbandonare le loro case e cercare rifugio nei piani alti degli edifici o perfino sui tetti. I vigili del fuoco e l’esercito risposero a migliaia di chiamate di persone minacciate dall’acqua alta. Ventinove furono i morti.</p>

      <p>L’alluvione, la più imponente che mai avesse colpito Firenze, spazzò via tutto ciò che trovò sulla propria strada. Il carburante fuoriuscito dall’esplosione dei depositi formò una sottile pellicola sulla superficie dell’acqua, che macchiò le pareti di case e monumenti e vi rimase anche quando il fiume rientrò nei suoi argini. Prima che questo avvenisse il cuore storico della città e molti dintorni erano rimasti sott’acqua per più di un giorno intero.</p>

<p>Ovunque l’alluvione era giunta c’erano ora detriti e fango. La chiesa di Santa Croce  era stata sommersa da tre metri di acqua e moltissime opere d’arte, compreso il Crocifisso di Cimabue, erano state irreparabilmente danneggiate. Migliaia di dipinti e oggetti d’arte conservati in musei, chiese e collezioni private del centro storico erano state distrutte. 
    L’ondata aveva avuto un’incredibile forza distruttiva:</p>
    
    <p style="padding: 0 3rem"> 
        “I danni erano dovuti non solo all’immersione in acqua, ma al fatto che l’inondazione colpiva la città ad una velocità di 50 miglia l’ora, devastando gli oggetti e trasformandoli in proiettili che venivano scagliati contro gli altari, scheggiandoli e mandandoli in pezzi. </p>

      <p>I depositi della Biblioteca Nazionale di Firenze furono completamente inondati e milioni di volumi e rare prime edizioni rischiarono di andare perdute per sempre. E uguale sorte  ebbero gli innumerevoli manoscritti del vicino Archivio di Stato.</p> 

      <p>Nelle ore successive all’inondazione, quando l’entità dei danni iniziò a farsi manifesta, si assistette ad un’ingente manifestazione di solidarietà in tutto il mondo. Comitati nazionali e internazionali nacquero in molti paesi con il proposito di salvare le opere d’arte e in molte città italiane ebbe inizio un’intensa raccolta di fondi e di beni di prima necessità. </p>
      
      


      <h1><strong>Committee to Rescue Italian Art (CRIA)</strong></h1>
      
      <iframe src="https://player.vimeo.com/video/187955288?title=0&byline=0&portrait=0" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
<p><a href="https://vimeo.com/187955288">CRIA  appeal by Edward Kennedy CRIA MISC 1.02b</a></p>
      

      
<p style="padding-top:2rem">
    Non appena la notizia dell’alluvione giunse negli Stati Uniti, alcuni studiosi della cultura italiana si mobilitarono immediatamente, preoccupati di salvare il prezioso patrimonio artistico di Firenze e delle altre città, soprattutto Venezia, devastate dalle acque. </p>
      <p>
          Al seguito di Fred Licht e di Bates Lowry, entrambi professori di storia dell’arte  presso la Brown University, della moglie di Licht, Meg, anch’essa storica dell’arte, un gruppo di  eminenti studiosi, curatori di musei e restauratori si unì per dar vita al Comitato per il Recupero dell’Arte Italiana (CRIA: Committee to Rescue Italian Art). Lo scopo del gruppo era quello di raccogliere denaro per finanziare le operazioni di recupero, intendendo sia l’emergenza che l’assistenza a lungo termine che l’immane compito di restauro avrebbe comportato.  Al recupero e restauro di opere d’arte e monumenti, il comitato presto aggiunse anche i libri e i manoscritti conservati in biblioteche e archivi.</p>

      <p>Entro una settimana dall’alluvione, CRIA era già funzionante nell’intero paese, e si era assicurato importanti risorse per la propria attività. Sotto la presidenza onoraria di Jacqueline Kennedy, vedova del defunto presidente John F. Kennedy, CRIA  arrivò a contare oltre 200 membri o affiliati sparsi per tutti gli Stati Uniti, compresi i membri del comitato scientifico, del comitato esecutivo e amministrativo, i consiglieri, e decine di rappresentanti dei comitati locali, da una costa all’altra.  Il comitato si prefiggeva di raccogliere la somma di due milioni e mezzo di dollari: pressappoco l’equivalente odierno di venti milioni di dollari.</p>
      <p>Il denaro veniva raccolto attraverso richieste per posta, pubblicità, mostre d’arte italiana, sfilate di moda, ricevimenti, appelli video fatti da personaggi celebri, come Ted Kennedy o Elizabeth Taylor, nonché attraverso la proiezione del documentario di Franco Zeffirelli, Days of Destruction, del quale CRIA deteneva i diritti esclusivi di distribuzione negli Stati Uniti. La risposta del pubblico americano e delle istituzioni fu entusiasta e generosa: CRIA arrivò molto vicino a raggiungere il proprio obiettivo finanziario.</p>
<p>
    Il denaro che CRIA raccolse andò a sostegno di una grande varietà di iniziative in Italia.A Firenze le attività di CRIA furono coordinate da un ufficio amministrativo con sede a Palazzo Pitti, e poi da Villa I Tatti, the Harvard University Center for Italian Renaissance Studies, la più importante istituzione americana con sede in città, il cui direttore, lo storico Myron Gilmore, sedeva nel comitato scientifico. Dagli Stati Uniti CRIA acquistò e spedì attrezzatura e materiali per il restauro. Riunì gruppi di restauratori e altri specialisti e li inviò a proprie spese a Firenze e Venezia. Il comitato scientifico selezionò monumenti, musei, opere d’arte destinando fondi per il loro restauro. Il comitato finanziò poi borse di studio per studenti di scuole di restauro e per giovani studiosi che seguissero sul posto le operazioni di recupero. Infine contribuì alla creazione di nuovi centri per lo studio del restauro: uno a Palazzo Davanzati, un altro presso la Biblioteca Nazionale e un terzo a Venezia, presso San Gregorio.   </p> 

      <p>Alcuni anni dopo, con i molti progressi nei restauri e con una situazione, sia a Firenze che a Venezia, tornata alla normalità, gli obiettivi originari di CRIA si poterono considerare largamente raggiunti. L’ufficio esecutivo di New York fu chiuso nel 1971 e nella primavera del 1973 anche quello amministrativo di Firenze. Nella sua breve vita il CRIA aveva dato un contributo cruciale all’opera di salvataggio e restauro del patrimonio culturale di Firenze e Venezia, il cui significato solo di recente ha iniziato a venire alla luce. </p>

      
  </section>
</div>      
      
      
      
      
      
      
      
      
      


      
                  
      
      

            

    

              </div>
              <div class="small-3 columns">&nbsp;</div>
</div> 
            <div>

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
    
       
      
    
			</script>
 <script>
  $('#myTabs').on('toggled', function (event, tab) {
    console.log(tab);
  });
</script>           
            
<style>
    #header {background-image: none !important;}
            </style>
            
<footer>
<?php
echo foot();
?></footer>

