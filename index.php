<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body id="top" class="section scrollspy">
    <div class="row" id="header">
      <nav>
        <div class="nav-wrapper blue darken-4">
          <div class="container">
            <a href="#top" class="brand-logo hide-on-med-and-down"><i class="large material-icons">home</i></a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right">
              <li><a  class="hide-on-med-and-down right" href="#infos">Infos</a></li>
              <li><a class="hide-on-med-and-down right" href="#projects">Projets</a></li>
              <li><a class="hide-on-med-and-down right" href="#contact">Contact</a></li>
              <li id="setColor">
                <span id="colorSeleted" class="blue darken-4"></span>
                <span class="teal darken-4"></span>
                <span class="lime darken-4"></span>
                <span class="orange darken-4"></span>
                <span class="grey darken-4"></span>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <ul class="side-nav blue darken-4" id="mobile">
      <li class="active"><a href="#top">Accueil</a></li>
      <li><a href="#infos">Infos</a></li>
      <li><a href="#projects">Projets</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <div class="row blue darken-4 valign-wrapper" id="home">
      <div class="col s12 m12 l12 center">
        <div class="suffleLetters" data-delay="0" data-speed="120">
          Bienvenue sur mon portfolio !
        </div>
        <div class="suffleLetters blue-text text-lighten-3" data-delay="4000" data-speed="50">
          Bonne visite !
        </div>
      </div>
    </div>
    <div class="container section scrollspy" id="infos">
      <div class="row">
        <p class="center">
          Je m'appelle Frédéric Boillot et <br />je suis passionné
          d'informatique.
          <small>
            Notamment par la programmation <b class="blue-text text-darken-4">web</b>
            et <b class="blue-text text-darken-4">software</b>
          </small>
        </p>
      </div>
      <div class="row">
        <div class="col s6 m6 l6 center">
          <i class="large material-icons blue-text text-darken-4">web</i>
          <p>
            Programmation Web
            <small>
              Utilisation basique des langages HTML, CSS, JS, PHP et SQL
              ainsi qu'une initiation aux frameworks/API tel que Bootstrap, Materialize ou jQuery
            </small>
          </p>
        </div>
        <div class="col s6 m6 l6 center">
          <i class="large material-icons blue-text text-darken-4">desktop_windows</i>
          <p>
            Programmation Software
            <small>
              Utilisation basique des langages C, C++ et C#.
              Je travaille avec des IDE tel que Microsoft Visual Studio ou Code:Blocks
            </small>
          </p>
        </div>
      </div>
    </div>
    <div class="row section scrollspy" id="projects">
      <div class="container">
        <div class="row">
          <h1 class="blue-text text-darken-4">Mes Projets</h1>
          <hr  class="blue darken-4" />
        </div>
        <div class="row hide-on-small-only">
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen1.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">L:U:D<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://lister.un.dossier.free.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">Lister Un Dossier<i class="material-icons right">close</i></span>
               <p>
                 Petit utilitaire compatible avec Windows XP, Vista, 7, 8 et 10
                 <br /><br />
                 Programmé en C# avec Microsolft Visual Studio,
                 Il nécéssite .NET Framework 4.0 Client Profile
               </p>
             </div>
           </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen2.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">Doallator<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://doallator.free.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">Doallator<i class="material-icons right">close</i></span>
               <p>
                 Doallator est un émulateur qui émule pour le moment la Chip 8 ainsi que la Game Boy Color
                 tout en se servant d'une seul et unique interface.
                 <br /><br />
                 L'interface est programmé en C# et les émulateurs le sont en C++,
                 l'IDE utilisé est Microsoft Visual Studio
               </p>
             </div>
           </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen3.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">Les Rosiers Roy<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://lesrosiersdavid.free.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">Les Rosiers Roy<i class="material-icons right">close</i></span>
               <p>
                 Simple catalogue de rosiers que j'ai fait pour la société dans laquelle mon frère travail
               </p>
             </div>
           </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen4.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">ChopinScript<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://chopinscript.codissimo.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">ChopinScript<i class="material-icons right">close</i></span>
               <p>
                 Petit script de livre d'or programmé en PHP, SQL, HTML, CSS et javascript.
                 Je l'ai codé il y a plusieurs années et je ne vois pas l'intérêt de le maintenir à jour.
               </p>
             </div>
           </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen5.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">La Tisseuse<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://tisseuse.free.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">La Tisseuse<i class="material-icons right">close</i></span>
               <p>
                 Il s'agit d'un annuaire de sites que j'ai programmé à mes débuts puis que j'ai
                 abandonné depuis l'arrivé de Google Pingouin qui a rendu se genre d'annuaire totalement
                 obsolète
               </p>
             </div>
           </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="imgs/screen6.jpg">
             </div>
             <div class="card-content">
               <span class="card-title activator black-text text-darken-4">Musique/Interprète<i class="material-icons right">more_vert</i></span>
               <p><a class="blue-text text-darken-4" href="http://tchaikowsky.free.fr" target="_blank">Voir le projet</a></p>
             </div>
             <div class="card-reveal">
               <span class="card-title black-text text-darken-4">Musique &amp; Interprète<i class="material-icons right">close</i></span>
               <p>
                 Musique et Interprète est le tout premier site que j'ai fait.
                 Il a cependent très mal vieilli car je ne les que très peu mise à jours
               </p>
             </div>
           </div>
          </div>
        </div>
        <div class="row hide-on-med-and-up">
          <div class="carousel">
            <a class="carousel-item blue-text text-darken-4" href="http://lister.un.dossier.free.fr" target="_blank">
              <img src="imgs/screen1.jpg">
              L:U:D<br />
              <span>Application Windows pour lister les fichiers d'un dossier</span>
            </a>
            <a class="carousel-item blue-text text-darken-4" href="http://doallator.free.fr" target="_blank">
              <img src="imgs/screen2.jpg">
              Doallator<br />
              <span>Emulateur GameBoy Color et Chip 8 tournant sous Windows</span>
            </a>
            <a class="carousel-item blue-text text-darken-4" href="http://lesrosiersdavid.free.fr" target="_blank">
              <img src="imgs/screen3.jpg">
              Les Rosiers Roy<br />
              <span>Catalogue de rosiers programmé pour mon frère</span>
            </a>
            <a class="carousel-item blue-text text-darken-4" href="http://chopinscript.codissimo.fr" target="_blank">
              <img src="imgs/screen4.jpg">
              ChopinScript<br />
              <span>Script de livre d'or utilisant du PHP et une base de données</span>
            </a>
            <a class="carousel-item blue-text text-darken-4" href="http://tisseuse.free.fr" target="_blank">
              <img src="imgs/screen5.jpg">
              La Tisseuse<br />
              <span>Annuaire de sites utilisant également du PHP et une basse de données</span>
            </a>
            <a class="carousel-item blue-text text-darken-4" href="http://tchaikowsky.free.fr" target="_blank">
              <img src="imgs/screen6.jpg">
              Musique et Interprète<br />
              <span>Mon tout premier site internet proposant de la partition gratuite tombée dans le domaine
              public</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="parallax-container">
        <div class="parallax">
          <img class="blue" src="#">
        </div>
      </div>
    </div>
    <footer class="page-footer blue darken-4" id="footer">
      <div class="container section scrollspy" id="contact">
        <div class="row">
          <div class="col s12 m12 l12">
            <h5 class="white-text">Contact</h5>
            <div class="row">
              <form class="col s12">
                <div class="row">
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix white-text">account_circle</i>
                    <input id="pseudo" type="text" class="validate">
                    <label for="pseudo">Pseudo</label>
                  </div>
                  <div class="input-field col s12 m6 l6">
                    <i class="material-icons prefix white-text">question_answer</i>
                    <input id="object" type="text" class="validate">
                    <label for="object">Objet</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix white-text">email</i>
                    <input id="email" type="email" class="validate">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12 m12 l12">
                    <i class="material-icons prefix white-text">mode_edit</i>
                    <textarea id="msg" class="materialize-textarea"></textarea>
                    <label for="msg">Message</label>
                  </div>
                </div>
                <div class="row right">
                  <a class="waves-effect white blue-text text-darken-4 waves-light btn">Envoyer</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l6 blue-text text-lighten-5">
              © 2016 Tous droits réservés
            </div>
            <div class="col s12 m6 l6 right-align">
              <a class="blue-text text-lighten-5" href="#">
                <i class="socicon socicon-facebook blue accent-4"></i>
              </a>
              <a class="blue-text text-lighten-5" href="#">
                <i class="socicon socicon-googleplus blue accent-4"></i>
              </a>
              <a class="blue-text text-lighten-5" href="#">
                <i class="socicon socicon-rss blue accent-4"></i>
              </a>
              <span>|</span>
              <a class="blue-text text-lighten-5" href="doc/cv.docx">Mon CV</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jScript.js"></script>
  </body>
</html>
