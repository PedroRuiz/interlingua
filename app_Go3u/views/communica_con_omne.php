<!DOCTYPE html>
<html lang="ia">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-45947458-7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
     gtag('set', {'user_id': 'USER_ID'}); // Establezca el ID de usuario mediante el user_id con el que haya iniciado sesión.
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Interlingua | <?=$titulo?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('assets/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
    
    <link rel=”canonical” href=”https://interlingua.pedroruizhidalgo.es” />
  </head>

  <body>

    <?php $this->load->view('inc/menu.php')?>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Discopery Interlingua</h1>
        <p class="lead blog-description">Ressources interlingual</p>
      </div>
    </div>

    <div class="container">

      <div class="row">
        
        
        <div class="col-sm-3 offset-sm-1 blog-sidebar">
        
          <div class="sidebar-module">
            <h4>Indice</h4>
            <ol class="list-unstyled">
            
              <li><a href="<?=current_url().'#national'?>">Organizationes national</a></li>
              <li><a href="<?=current_url().'#periodicos'?>">Periodicos</a></li>
              <li><a href="<?=current_url().'#didactic'?>">Materiales didactic</a></li>
              <li><a href="<?=current_url().'#ressources'?>">Ressources utile</a></li>
              <li><a href="<?=current_url().'#conversation'?>">Conversation</a></li>
              <li><a href="<?=current_url().'#sitos_personal'?>">Sitos personal</a></li>
            </ol>
          </div>
          
          <div class="sidebar-module">
            <h4>Archivos</h4>
            <ol class="list-unstyled">
            <?php foreach($archivo as $k => $v): $k=ucfirst($k);?>
              <li><a href="<?=base_url('archivo/').$v['year'].'/'.$v['month']?>"><?="$k (".($v['quantity'].')')?></a></li>
            <?php endforeach;?>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->
        
        

        <div class="col-sm-8 blog-main">

          <div class="blog-post">
            <p>Interlingua es un lingua vivente, multo usate in Internet pro paginas official, presentationes pro un publico international e pro diarios electronic personal (appellate "weblogs"). Iste pagina presenta un numero de sitos in Internet que usa interlingua. Entra in un nove mundo fascinante.</p>
            <p>Per favor, <a href="<?=base_url('contactar')?>" title="clicca hic pro communicar">reporta nos nove sitos in interlingua a iste projecto</a>. Invia un description e le adresse de Internet pro que nos indexa.</p>
            
            <a name="national"></a>
            <img src="<?=base_url('assets/image/meeting_people.jpg')?>" class="img-thumbnail">
            <br><hr>
            <h2>Organizationes national</h2><hr>
            
            <ul>
              <li><b>American Society for Interlingua</b><br />
                <i>Societate American pro Interlingua</i><br />
               
            Le societate de interlingua pro Mexico, Canada e le Statos Unite de America. Collectiona le debitos pro UMI in iste region<br />
            &nbsp;</li>
            
              <li><b>Dansk Interlingua Union</b><br />
                <i>Union Danese pro Interlingua</i><br />
                <a href="http://www.interlingua.dk/" target="_blank">http://www.interlingua.dk</a><br />
            &nbsp;</li>
           
              <li><b>Interlingua&mdash;Italia</b><br />
                
            &nbsp;</li>
              <li><b>Interlingua&mdash;Nederland</b><br />
                <a href="http://www.interlingua-nld.com/" target="_blank">http://www.interlingua-nld.com</a><br />
            Informationes detaliate pro nederlandeses interessate in interlingua e un grammatica de interlingua pro nederlandeses. Anque multissime textos in interlingua, que certemente pote interessar non-nederlandeses.<br /> 
            &nbsp;</li>
              <li><b>Interlingua&mdash;Russia</b><br />
                <a href="http://interlinguar.narod.ru/" target="_blank">http://interlinguar.narod.ru</a><br />
            &nbsp;</li>
              <li><b>Norsk Interlingua Union</b><br />
                <i>Union Norvegian pro Interlingua</i><br />
                <a href="http://www.interlingua.no/" target="_blank">http://www.interlingua.no</a><br />
            &nbsp;</li>
              <li><b>Uni&atilde;o Brasileira pr&oacute; Interl&iacute;ngua</b><br />
                <i>Union Brasilian pro Interlingua</i><br />
                <a href="http://www.interlingua.org.br/" target="_blank">http://www.interlingua.org.br</a><br />
            &nbsp;</li>
            
              <li><b>Union Interlinguiste de France</b><br />
                <i>Union Interlinguista de Francia</i><br />
                <a href="http://interlinguafrance.wordpress.com/" target="_blank">http://interlinguafrance.wordpress.com/</a><br />
            &nbsp;</li>
            
              <li><b>Deutsche Interlinguaunion</b><br />
                <i>Union German pro Interlingua</i><br />
                <a href="http://www.interlinguaunion.de" target="_blank">http://www.interlinguaunion.de</a><br />
            &nbsp;</li>
            
              <li><b>Suomen Interlinguayhdistys r.y.</b> (SILY)<br />
                <i>F&ouml;reningen f&ouml;r Interlingua i Finland (FILF)<br />
                Association Finlandese pro Interlingua (AFIL)</i><br />
                <a href="http://www.interlingua.fi/" target="_blank">http://www.interlingua.fi</a><br />
            Sito official del Suomen Interlinguayhdistys r.y. (SILY), Association Finlandese pro Interlingua (AFIL), un association registrate.<br />&nbsp;</li>
              <li><b>Svenska S&auml;llskapet f&ouml;r Interlingua</b><br />
                <i>Societate Svedese pro Interlingua</i><br />
                <a href="http://www.interlingua.nu/" target="_blank">http://www.interlingua.nu</a><br />
            &nbsp;</li>
            </ul>
            
            
            <a name="periodicos"></a>
            <img src="<?=base_url('assets/image/newspapers.jpg')?>" class="img-thumbnail">
            <br><hr>
            <h2>Periodicos</h2><hr>
            <ul>
            <li><b>Panorama in Interlingua</b><br />
            <a href="http://www.interlingua.com/panorama">http://www.interlingua.com/panorama</a><br />
            Le novas del mundo in un linguage actual e dynamic &mdash; e in Interlingua! On pote esser abonato ordinari e reciper le international magazin de novas omne duo menses in forma imprimite o esser abonato digital e reciper Panorama como PDF personalisate plus rapidemente, in colores e a un costo reducite. Panorama appare desde januario 1988.<br />
            &nbsp;</li>
            
            <li><b>Radio Interlingua</b><br />
            <a href="http://www.interlingua.com/radio">http://www.interlingua.com/radio</a><br />
            Radio Interlingua es un servicio gratuite del UMI. Le programmas - uno per mense, typicamente inter 15 e 30 minutas - pote esser ascoltate directemente de www.interlingua.com/radio o discargate in formato MP3, assi que on pote audir lo quando e ubi on lo desira.<br />
            Radio Interlingua recomenciava in augusto 2008 post quasi dece annos de pausa e presenta cata mense un nove programma con interviews, novas, musica etc. Toto es in interlingua, assi que on pote audir, como interlingua es un lingua in plen flor e multo vivente, gratias al multe voces qui participa in le labor.<br />
            &nbsp;</li>
            
            <li><b>Almanac de interlingua</b><br>
            <a href="http://almanacdeinterlingua.blogspot.com/" target="_blank">http://almanacdeinterlingua.blogspot.com</a><br>
            Le Almanac de Interlingua es un revista mensual digital, redigite e publicate per Cláudio Rinaldi de Brasil. Illo es un publication mensual independente e gratuite cuje scopo es fornir material de lectura a tote persona interessate in apprender o practicar Interlingua. Le Almanac de Interlingua appare desde octobre 2009 in formato PDF. On pote abonar se gratuitemente. - Visita anque le archivo del Almanac de Interlingua: <a href="http://www.interlingua.com/almanac">www.interlingua.com/almanac</a><br>
            &nbsp;</li>
            
            <li><b>Tribuna de Europa in Interlingua</b><br />
            <a href="http://www.interlingua.com/vetule/europa/">http://www.interlingua.com/vetule/europa/</a><br />
            Traductiones del informativos mensual del Parlamento Europee.<br />
            (Non plus actualisate.)<br />
            &nbsp;</li>
            </ul>
            
            
            <a name="didactic"></a>
            <img src="<?=base_url('assets/image/didactica.jpg')?>" class="img-thumbnail">
            <br><hr>
            <h2>Materiales didactic</h2> 
              <ul>
                <li><a name="ied"></a><b>Interlingua&mdash;English Dictionary (IED)</b><br />
                  <a href="http://www.interlingua.com/ied" target="_self">http://www.interlingua.com/ied/</a><br />
              <a href="http://www.babylon.com/free-dictionaries/reference/dictionaries-thesauri/Interlingua-English/3073.html" target="_self">http://www.babylon.com/free-dictionaries/reference/dictionaries-thesauri/Interlingua-English/3073.html</a> (glossario Babylon) <br />
                  Le Introduction describe tote le fundamento theoric usate per IALA in le elaboration de Interlingua.<br />
              &nbsp;</li>
                <li><a name="ig"></a><b>Interlingua Grammar (IG)</b><br />
                  <a href="http://members.optus.net/~ado_hall/interlingua/gi/" target="_blank">http://members.optus.net/~ado_hall/interlingua/gi/</a><br />
              <a href="http://www.interlingua.com/grammatica" target="_blank">Grammatica de Interlingua (in interlingua)</a><br />
              &nbsp;</li>
              
              <li><a name="ceid"></a><b>Concise English&mdash;Interlingua Dictionary (CEID)</b><br />
                  <a href="http://www.interlingua.com/an/ceid/" target="_blank">http://www.interlingua.com/an/ceid</a><br />
                  <a href="http://www.babylon.com/free-dictionaries/languages/interlingua/CONCISE-ENGLISH-INTERLINGUA-DICTIONARY/17897.html" target="_blank">http://www.babylon.com/free-dictionaries/languages/interlingua/CONCISE-ENGLISH-INTERLINGUA-DICTIONARY/17897.html</a>
                  (glossario Babylon) <br />
              &nbsp;</li>
              
                <li><b>Grammatica de Interlingua in portugese</b><br />
                  <a href="http://www.interlingua.org.br/gram30/grampg0.html" target="_blank">http://www.interlingua.org.br/gram30/grampg0.html</a><br />
              &nbsp;</li>
              
                <li><b>Curso de interlingua in germano (10 lectiones con audio)</b><br />
                  <a href="http://www.interlingua-colonia-rheni.org/kurs/index.htm" target="_blank">http://www.interlingua-colonia-rheni.org/kurs/index.htm</a><br />
              &nbsp;</li>
              
                <li><b>Curso de conversation</b><br />
                  <a href="http://www.interlingua-colonia-rheni.org/curso/index.htm" target="_blank">http://www.interlingua-colonia-rheni.org/curso/index.htm</a><br />
              Textos in interlingua pro practicar, elaborate per Harleigh Kyson Jr., presentate in video.<br />
              &nbsp;</li>
              
                <li><b>Glossarios Babylon</b><br />
                  <a href="http://www.babylon.com/free-dictionaries/languages/interlingua/" target="_blank">http://www.babylon.com/free-dictionaries/languages/interlingua/</a><br />
                  Plure dictionarios inter Interlingua e: anglese, germano, italiano, danese, svedese, polonese, romaniano, arabe, etc.<br />
              &nbsp;</li>
              
              
              
              
              <li><b>Dictionario interlingua-polonese (mathematica)</b><br />
              <a href="http://ia.wiktionary.org/wiki/Interlingua-Polonese_(mathematica)" target="_blank">http://ia.wiktionary.org/wiki/Interlingua-Polonese_(mathematica)</a><br />
                  Dictionario specialisate interlingua-polonese con terminos mathematic, elaborate per Pawel Wimmer, informator de interlingua in Polonia. Illo indica le typo de parola (substantivo, verbo etc.) e le traduction in polonese.<br />
              &nbsp;</li>
              
                
                <li><b>Curso de conversation</b><br />
                  <a href="http://www.conversationininterlingua.blogspot.com/" target="_blank">http://www.conversationininterlingua.blogspot.com</a><br />
                 Curso de conversation developpate per Harleigh Kyson.<br />
              Un version revidite del curso existe como e-libro in le <a href="e-libros" title="Bibliotheca electronic in interlingua">Bibliotheca electronic in interlingua</a><br />
              &nbsp;</li>
              
                <li><b>Tatoeba</b><br/>
                  <a href="http://tatoeba.org/eng/sentences/show_all_in/ina/none/none/indifferent" target="_blank">http://tatoeba.org/eng/sentences/show_all_in/ina/none/none/indifferent</a><br />
               Un dictionario multilingual con phrases traducite in numerose linguas, i.a. interlingua.<br />
              &nbsp;</li>
              </ul>
            
            
              <a name="ressources"></a>
              <img src="<?=base_url('assets/image/internet_ressources.jpg')?>" class="img-thumbnail">
              <br><hr>
              <h2>Ressources utile</h2> 
            <ul>
            
            <li><b>UMI in Facebook</b><br />
            <a href="http://www.facebook.com/interlingua.umi">http://www.facebook.com/interlingua.umi</a><br />
            Seque le novas e communicationes del Union Mundial pro Interlingua (UMI) in Facebook.<br />
            &nbsp;</li>
            
            <li><b>Forvo</b><br />
            <a href="http://www.forvo.com/languages/ia/">www.forvo.com/languages/ia</a><br />
            Un collection de parolas pronunciate. Le section de interlingua comprehende plus que 3.800 parolas (februario 2011)<br />
            &nbsp;</li>
            
            <li><b>Glosbe</b><br />
            <a href="http://glosbe.com/">glosbe.com</a><br />
            Dictionario multilingue in linea. Phrases e definitiones in quasi omne lingua existente, includente interlingua.
            <br />
            &nbsp;</li>
            
            
            <li><b>Dictionario orthographic de Interlingua pro productos de Mozilla (Firefox, Thunderbird, Seamonkey, Fennec)</b><br />
            <a href="https://addons.mozilla.org/en-US/firefox/addon/corrector_orthographic/" target="_blank">https://addons.mozilla.org/en-US/firefox/addon/corrector_orthographic/</a><br />
            Ecce un corrector orthographic pro Windows, Unix, Linux, Mac, Maemo, Android etc. Con iste file tu pote verificar le correction orthographic de tu textos in Interlingua.<br />
            &nbsp;</li>
            
            <li><b>Dictionario orthographic de Interlingua pro OpenOffice.org</b><br />
            <a href="http://lingucomponent.openoffice.org/download_dictionary.html#spelling" target="_blank">http://lingucomponent.openoffice.org/download_dictionary.html#spelling</a><br />
            <a href="http://www.openoffice.org/" target="_blank">OpenOffice.org</a> es un pachetto de <i>software</i> gratuite pro officios. Con iste file tu pote verificar le correction orthographic de tu textos in Interlingua.<br />
            &nbsp;</li>
            
            <li><b>FreeCol - colonisation de America</b><br />
            <a href="http://freecol.org">http://freecol.org</a><br />
            Joco de strategia como le plus cognoscite "Colonization", completemente in interlingua. Illo tracta de crear un nation independente in le Nove Mundo in 1492. Le joco es gratuite a discargar, installar e usar. Existe pro Windows, Mac OSX e Linux.<br />
            &nbsp;</li>
            
            <li><b>ATnotes</b><br />
            <a href="http://atnotes.free.fr/languages.html" target="_blank">http://atnotes.free.fr/languages.html</a>&nbsp;<br />
            Un parve programma computatorial que face possibile scriber notas sur parve pecias virtual de papiro sur le schermo. In interlingua, naturalmente.<br />
            &nbsp;</li>
            
            <li><b>NotesHolder</b><br />
            <a href="http://notes.aklabs.com/" target="_blank">http://notes.aklabs.com/</a>&nbsp;<br />
            Un parve programma computatorial pro organisar su notas e informationes in maniera efficace sin coperir le schermo con parve pecias de papiro. In interlingua, naturalmente.<br />
            &nbsp;</li>
            
            <li><b>PINs</b><br />
            <a href="http://www.mirekw.com/winfreeware/pins.html" target="_blank">http://www.mirekw.com/winfreeware/pins.html</a>&nbsp;<br />
            Un programma computatorial gratuite pro manear informationes secur como contrasignos, contos, codices etc. In interlingua, naturalmente (in le "languages pack").<br />
            &nbsp;</li>
            
            <li><b>Sonos in interlingua</b><br />
            <a href="http://sonosininterlingua.wikispaces.com/Tabaco" target="_blank">http://sonosininterlingua.wikispaces.com/Tabaco</a>&nbsp;<br />
            Le conto "Tabaco" per Alexander Gode (1906-1970). Vide e lege le texto, ascolta le audio.<br />
            &nbsp;</li>
            
            <li><b>Paul's Interlingua Page</b><br />
            <a href="http://www.denisowski.org/Interlingua/Interlingua.html" target="_blank">http://www.denisowski.org/Interlingua/Interlingua.html</a>&nbsp;<br />
            Dictionarios electronic e altere utile ressources, per Paul Denisowski.<br />
            &nbsp;</li>
            
            </ul>
            
            <a name="conversation"></a>
            <img src="<?=base_url('assets/image/charla.jpg')?>" class="img-thumbnail">
            <br><hr>
            <h2 align="left">Conversar in/super Interlingua</h2> 
            <ul> 
            <li><b>Pensatas in interlingua</b><br /> 
            <a href="http://bit.ly/2jRx00K" target="_blank">http://bit.ly/2jRx00K</a>&nbsp;<br /> 
            Un serie de breve films (5-7 minutas) in YouTube, ubi Alberto Mardegan in interlingua reflecte super e describe le locos que ille passa durante que ille se promena in citates como Sancte Petroburgo, Helsinki e Göteborg.<br />
            &nbsp;</li> 
            
            <li><b>Interforo</b><br /> 
            <a href="http://www.interforo.org" target="_blank">http://www.interforo.org</a>&nbsp;<br /> 
            Un sito con foro de discussion virtual in interlingua super omne themas.<br />
            &nbsp;</li> 
            
            <li><b>Gruppo 'Interlingua.IALA' de Facebook</b><br /> 
            <a href="https://www.facebook.com/groups/interlingua.IALA/" target="_blank">https://www.facebook.com/groups/interlingua.IALA/</a>&nbsp;<br /> 
            Gruppo in Facebook pro discuter qualcunque thema in interlingua, o pro discuter interlingua in qualcunque lingua.<br />
            &nbsp;</li>
            
            <li><b>Lista de discussion INTERLNG</b><br /> 
            <a href="http://listserv.icors.org/SCRIPTS/WA-ICORS.EXE?LIST=INTERLNG" target="_blank">http://listserv.icors.org/SCRIPTS/WA-ICORS.EXE?LIST=INTERLNG</a>&nbsp;<br /> 
            <a href="http://groups.yahoo.com/group/interlng/" target="_blank">http://groups.yahoo.com/group/interlng</a> (speculo)<br /> 
            Le lista de discussion pioner de Interlingua pro practicar le lingua.<br />
            &nbsp;</li> 
            <li><b>Interlingua-Coollist ("Collateralista")</b><br />
            <a href="http://groups.yahoo.com/group/interlingua-coollist/" target="_blank">http://groups.yahoo.com/group/interlingua-coollist</a><br /> 
            Dedicate principalmente a discussiones grammatical/lexicologic.<br />
            &nbsp;</li> 
            <li><b>Interlingua in America del Nord</b><br />
            <a href="http://groups.yahoo.com/group/interlinguausa/" target="_blank">http://groups.yahoo.com/group/interlinguausa</a>&nbsp;<br /> 
            Pro le Statos Unite, Canada e Mexico.<br />
            &nbsp;</li> 
            <li><b>Academia pro Interlingua in America</b><br />
            <a href="http://groups.yahoo.com/group/academiaprointerlingua/" target="_blank">http://groups.yahoo.com/group/academiaprointerlingua/</a>&nbsp;<br /> 
            Pro interlinguistas del Statos Unite... ma alteres es benvenite.<br />
            &nbsp;</li> 
            <li><b>Interlingua Italia</b><br />
            <a href="http://groups.yahoo.com/group/interlinguaitalia/" target="_blank">http://groups.yahoo.com/group/interlinguaitalia/</a>&nbsp;<br /> 
            Pro interlinguistas in Italia.<br />
            &nbsp;</li> 
            <li><b>Interlingua Germano</b><br />
            <a href="http://groups.yahoo.com/group/interlinguagermano" target="_blank">http://groups.yahoo.com/group/interlinguagermano</a>&nbsp;<br />
            Un foro pro exercitios e discussion in interlingua pro germanophonos (e germano es anque permittite).<br />
            &nbsp;</li> 
            <li><b>Interlingua in Polonia</b><br />
            <a href="http://groups.yahoo.com/group/interlingua_polonese" target="_blank">http://groups.yahoo.com/group/interlingua_polonese</a>&nbsp;<br />
            Gruppo de discussion pro usatores de interlingua in Polonia.<br />
            &nbsp;</li> 
            <li><b>Cocina international</b><br />
            <a href="http://groups.yahoo.com/group/cocinainternational/" target="_blank">http://groups.yahoo.com/group/cocinainternational/</a>&nbsp;<br />
            Un loco pro excambiar receptas con gente de varie partes del mundo.<br />
            &nbsp;</li> 
            </ul> 
            <h2 align="left"><a name="personal"></a>Sitos personal in/super Interlingua</h2> 
            <ul>
              <li><b>Alyssa St. James</b>, S.U.A.<br />
                <a href="http://interlingua.htmlplanet.com/" target="_blank">http://interlingua.htmlplanet.com/</a>&nbsp;<br />
            &nbsp;</li>
              <li><b>Carlos Soreto</b>, Portugal<br />
                <a href="http://babel-ia.blogspot.com/" target="_blank">http://babel-ia.blogspot.com</a>&nbsp;<br />
                &ldquo;Babelia&rdquo;: informationes, novas e pensatas de interlingua &mdash; e altere themas actual<br />
            &nbsp;</li>
              <li><b>Emerson Jos&eacute; Silveira da Costa </b>(&quot;Ensjo&quot;), Brasil<br />
                <a href="http://www.ensjo.net/" target="_blank">http://www.ensjo.net/</a>&nbsp;<br />
            &nbsp;</li>
              <li><b>Erik Enfors</b>, Svedia<br />
                <a href="http://www.angelfire.com/on/vberg/" target="_blank">http://www.angelfire.com/on/vberg/</a>&nbsp;<br />
            &nbsp;</li>
              <li><b>Francesco Galizia</b>, Italia<br />
                <a href="http://www.interlinguaroma.splinder.com/" target="_blank">Interlingua Roma</a>&nbsp;<br />
               Un blog de interlinguistas e curiosos de Roma<br />
               &nbsp;</li>
              <li><b>Harleigh Kyson</b>, S.U.A.<br />
                <a href="http://www.interlinguamultilingue.blogspot.com" target="_blank">http://www.interlinguamultilingue.blogspot.com</a>&nbsp;<br />
                Novas, commentarios, traductiones.<br />
            &nbsp;</li>
          
              <li><b>Jeroen Kuiper</b>, Hollanda<br />
                <a href="http://members.fortunecity.com/jeroenkuiper/Linguistics/" target="_blank">http://members.fortunecity.com/jeroenkuiper/Linguistics/</a>&nbsp;<br />
            &nbsp;</li>
              <li><b>Marcus Scriptor</b>, Svedia<br />
                <a href="http://poemasepensatas.blogspot.se/" target="_blank">http://poemasepensatas.blogspot.se/</a>&nbsp;<br />
                Poemas e pensatas &mdash; litteratura original in interlingua per Marcus Scriptor: poesia, novellas, contos, videos.<br />
            &nbsp;</li>
            
              <li><b>Martijn Dekker</b>, Hollanda<br />
                <a href="http://internodio.blogspot.com/" target="_blank">http://internodio.blogspot.com/</a>&nbsp;<br />
                &quot;Internodio&quot; &mdash; summarios de notitias mundial in Interlingua.<br />
            &nbsp;</li>
              <li><b>Martinus Dieles</b>, Belgica<br />
                <a href="http://martinusdieles.wix.com/traductiones" target="_blank">http://martinusdieles.wix.com/traductiones</a>&nbsp;<br />
                &nbsp;</li>
              <li><b>Ondřej Cífka</b>, Tchechia<br />
                <a href="http://ondra.cifka.com/setlang.php?lang=ia&redir=index" target="_blank">http://ondra.cifka.com/index</a>&nbsp;<br />
                Programmas mathematic, physic e altere, registrationes musical de jazz e photos.<br />
            &nbsp;</li>
              <li><b>Paolo Castellina</b>, Suissa<br />
                <a href="http://reformation.altervista.org/" target="_blank">http://reformation.altervista.org/</a>&nbsp;<br />
                Christianismo reformate, explicate in interlingua.<br />
            &nbsp;</li>
              <li><b>Paul LeCorde</b>, S.U.A.<br />
                <a href="http://www.angelfire.com/ky/LeCorde/" target="_blank">http://www.angelfire.com/ky/LeCorde/</a>&nbsp;<br />
                <a href="http://numinism.net/" target="_blank">http://numinism.net/</a>&nbsp;<br />
                &quot;Numinismo&quot; &mdash; un religion roman pro hodie.<br />
            &nbsp;</li>
              <li><b>Pawe&#322; Wimmer</b>, Polonia<br />
                <a href="http://www.interlingua.filo.pl/" target="_blank">http://www.interlingua.filo.pl/</a>&nbsp;<br />
                Include dictionario Interlingua&mdash;polonese e le curso &quot;Instrumento 
                moderne...&quot; de Ingvar Stenstr&ouml;m in polonese.<br />
            &nbsp;</li>
              <li><b>Sergej Nossov</b>, Russia<br />
                <a href="http://members.tripod.com/Histriko/interlingua.html" target="_blank">http://members.tripod.com/Histriko/interlingua.html</a>&nbsp;<br />
                Include dictionarios russo&mdash;Interlingua&mdash;russo.<br />
            &nbsp;</li>
              <li><b>Tifani Allen</b>, S.U.A.<br />
                <a href="http://tif.faithweb.com/" target="_blank">http://tif.faithweb.com/</a>&nbsp;<br />
                Tornados.<br />
            &nbsp;</li>
            </ul> 
            <h2 align="left"><a name="diarios"></a>Diarios electronic personal in/super interlingua</h2> 
            <ul>
              <li><b>Erik Enfors</b>, Svedia<br />
                <a href="http://untorrente.blogspot.com" target="_blank">http://untorrente.blogspot.com</a>&nbsp;<br />
            Textos in interlingua, le lingua que omnes pote comprender.&nbsp;<br />
            &nbsp;</li>
              <li><b>Lars Rosenmeier</b>, Danmark<br />
                <a href="http://falcatorrosa2.blogspot.com" target="_blank">http://falcatorrosa2.blogspot.com</a>&nbsp;<br />
            Svedeses e norvegianos scribe blogs in interlingua - proque non un danese? Lars Rosenmeier lo face ora.&nbsp;<br />
            &nbsp;</li>
              <li><b>Francisco Forgiamonte</b>, Germania<br />
                <a href="http://forgiamonte.blogspot.com" target="_blank">http://forgiamonte.blogspot.com</a>&nbsp;<br />
            Francisco Forgiamonte scribe in Interlingua.&nbsp;<br />
            &nbsp;</li>
              <li><b>Jan Årmann</b>, Svedia<br />
                <a href="http://forestero.blogspot.com" target="_blank">http://forestero.blogspot.com</a>&nbsp;<br />
            Un passo ex le foreste.&nbsp;<br />
            &nbsp;</li>
              <li><b>Morten Svendsen</b>, Norvegia<br />
                <a href="http://intermosvends.blogspot.com" target="_blank">http://intermosvends.blogspot.com</a>&nbsp;<br />
            &nbsp;</li>
              <li><b>Åsmund Knutson</b>, Norvegia<br />
                <a href="http://interlinguano.blogspot.com" target="_blank">http://interlinguano.blogspot.com</a>&nbsp;<br />
            Interlinguano - le blot del presidente del Union Norvegian pro Interlingua&nbsp;<br />
            &nbsp;</li>
              <li><b>Carlos Valcárcel</b>, Espania<br />
                <a href="http://actualitates.blogspot.com" target="_blank">http://actualitates.blogspot.com</a>&nbsp;<br />
            "Actualitates" es un quaderno in linea que face echo del novas publicate in le jornales le plus importante del mundo.&nbsp;<br />
            &nbsp;</li>
              <li><b>Péter Kovács</b>, Hungaria<br />
                <a href="http://zalaegerszeg.blogspot.com/" target="_blank">http://zalaegerszeg.blogspot.com/</a>&nbsp;<br />
            Blog personal de Péter Kovács.&nbsp;<br />
            &nbsp;</li>
              <li><b>Le Oculo Interlinguistic</b>, Roberto "robocap" Capuzzi, Italia<br />
                <a href="http://oculointerlinguistic.blogspot.com/" target="_blank">http://oculointerlinguistic.blogspot.com/</a>&nbsp;<br />
            Un oculo penetrante perscruta le Universo... Nemo, human o alien, pote escappar su vista. Le diario electronic es presentate con actualitate, brevitate e humor.&nbsp;<br />
            &nbsp;</li>
              <li><b>Omniscientia pro ignorantes</b>, Doctor Professor Ranto Espe<br />
                <a href="http://rantoespe.blogspot.com/" target="_blank">http://rantoespe.blogspot.com/</a>&nbsp;<br />
            Le plus eminente scientiato del mundo, le Doctor Professor Ranto Espe, ha un blog audiovisive pro educar le resto del mundo, con discutibile successo.<br />
            &nbsp;</li>
              <li><b>Mardy</b>, Italia<br />
                <a href="http://blog.mardy.it/search/label/interlingua" target="_blank">http://blog.mardy.it/search/label/interlingua</a>&nbsp;<br />
            Blog personal de Alberto Mardegan<br />
            &nbsp;</li>
            </ul>
            
            
            <a name="sitos_personal"></a>
            <h2>Altere sitos</h2>
            
            <ul>
              <li><b>ONU &mdash; Organisation del Nationes Unite</b><br />
                <a href="http://www.ohchr.org/en/udhr/pages/language.aspx?langid=1119" target="_blank">http://www.ohchr.org/en/udhr/pages/language.aspx?langid=1119</a>&nbsp;<br />
                Declaration Universal del Derectos Human (anque in version de PDF).<br />
            &nbsp;</li>
            
              <li><b>Wikipedia in interlingua</b><br />
                <a href="http://ia.wikipedia.org" target="_blank">http://ia.wikipedia.org</a>&nbsp;<br />
                Le encyclopedia libere in interlingua, scribite in collaboration international con usatores de interlingua. Omnes pote contribuer.<br />
            &nbsp;</li>
            
              <li><b>Brasil curiose</b><br />
                <i>per Luiz Valério</i>
                <a href="http://brasil-curiose.blogspot.com/" target="_blank">http://brasil-curiose.blogspot.com</a>&nbsp;<br />
            &nbsp;</li>
            
            <li><b>Le municipio de Tjörn, Svedia</b><br />
            <a href="http://www.tjorn.se/interlingua" target="_blank">http://www.tjorn.se/interlingua</a>&nbsp;<br />
            Le municipio Tjörn, que es le sexte plus grande insula in Svedia, al costa west in le belle region Bohuslän, presenta se mesme, su activitates e su offertas pro touristas e habitantes in un section in interlingua con multe photos.<br />
            &nbsp;</li>
            
            <li><b>Stadt Kirchheimbolanden - le urbe conferential in 2009</b><br />
            <a href="http://www.kirchheimbolanden.de/765_1031_SC31.html" target="_blank">http://www.kirchheimbolanden.de/765_1031_SC31.html</a>&nbsp;<br />
            Burgomaestro Klaus Hartmüller presenta in interlingua su urbe Kirchheimbolanden, que esseva le hospite del 18-e Conferentia International de Interlingua in julio 2009.<br />
            &nbsp;</li>
            
              <li><b>Interlingua pro viagiatores (Travlang.com)</b><br />
                <a href="http://travlang.com/languages/interlingua/" target="_blank">http://travlang.com/languages/interlingua/</a>&nbsp;<br />
                Dictionario de phrases commun de interlingua a qualcunque altere lingua e 
                vice-versa. Files audibile.<br />
            &nbsp;</li>
              <li><b>Google.com in Interlingua</b><br />
                <a href="http://www.google.com/intl/ia/" target="_blank">http://www.google.com/intl/ia/</a>&nbsp;<br />
            &nbsp;</li>
              
              <li><b>Europ-ia</b><br />
                <a href="http://europaunite.wordpress.com/" target="_blank">http://europaunite.wordpress.com</a>&nbsp;<br />
                Patriotas del Statos Unite de Europa<br />
            &nbsp;</li>
            
              <li><b>Fundation Bakonyi pro le Lingua Universal</b><br />
                <a href="http://renascentia.wikispaces.com/fundationbakonyi" target="_blank">http://renascentia.wikispaces.com/fundationbakonyi</a>&nbsp;<br />
            &nbsp;</li>
            
              <li><b>Interdict Wiki</b><br />
                <a href="http://interdict.wikia.com/wiki/Interdict_Wiki" target="_blank">http://interdict.wikia.com/wiki/Interdict_Wiki</a>&nbsp;<br />
                Un communitate de amatores de informatica que crea contentos original usante interlingua.<br />
            &nbsp;</li>
              <li><b>Projecto LSR</b><br />
                <a href="http://www.lsr-projekt.de/poly/ia.html" target="_blank">http://www.lsr-projekt.de/poly/ia.html</a>&nbsp;<br />
                Un projecto paraphilosophic.<br />
            &nbsp;</li>
              <li><b>Jocos e quizes in interlingua</b><br />
                <a href="http://www.quia.com/shared/search?category=61" target="_blank">http://www.quia.com/shared/search?category=61</a>&nbsp;<br />
                Un serie de interessante jocos e quizes con parolas in interlingua. Extende 
                tu vocabulario per iste interessante jocos. Anque utile pro infantes.<br />
            &nbsp;</li>
              <li><b>Oculo Interlinguistic</b><br />
                <a href="http://digilander.libero.it/OculoInterlinguistic" target="_blank">http://digilander.libero.it/OculoInterlinguistic</a>&nbsp;<br />
                Un <i>webzine</i> humoristic in Interlingua.<br />
            &nbsp;</li>

              <li><b>Interlingua: strumento moderno di comunicazione europea</b><br />
                <a href="http://conto.altervista.org/" target="_blank">http://conto.altervista.org/</a><br />
                Un presentation e un curso de interlingua pro italianos.<br />
            &nbsp;</li>
            
            <li><b>Le Lege de Confidentia in Se Mesme</b><br>
            <a href="http://selvtillidsloven.dk/?open= 493&menu_id=37" target="_blank">http://selvtillidsloven.dk/?open= 493&menu_id=37</a><br>
            “Confidentia in se mesme es un bon utensile e puncto de partir pro un dialogo multicultural – parlar le unes con le alteres e non super le alteres. Omne homines es importante, dunque omnes qui es ‘al exterior’ pro un o un altere ration besonia reganiar confidentia in se mesme. Vias a confidentia in se mesme insiste super le fide de cata individuo in se mesme e le valor pro alteres,” narra Stig Elliot Nyegaard, initiator del Lege de Confidentia in Se Mesme. Un belle placard illustrate e colorate in formato A3 con le dece principios pote esser discargate. Le sito e le placard es in interlingua.<br>
            &nbsp;</li>
            
            <li><b>Poemas e pensatas</b><br>
            <a href="http://poemasepensatas.blogspot.com/" target="_blank">http://poemasepensatas.blogspot.com/</a><br>
            <i>Litteratura in Interlingua</i> – poesias per Marcus Scriptor (le nomine de pluma de Kenneth Platter ab Svedia), in interlingua. Poemas, novellas, contos e videos.<br>
            &nbsp;</li>
            
            </ul>
            <br><br><hr>
        </div><!-- /.blog-post -->


        </div><!-- /.blog-main -->

        
        <br><br><br>

      </div><!-- /.row -->
      
    <?php $this->load->view('inc/footer')?>
  </div><!-- /.container -->







    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/bootstrap/dist/js/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/bootstrap/dist/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
