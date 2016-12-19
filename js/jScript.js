var idView = 0;
var lastIdView = 0;

$( document ).ready
(
  // Affichage de la navbar mobile
  function()
  {
     $('.button-collapse').sideNav
      (
        {
          menuWidth: 300,
          edge: 'left',
          closeOnClick: true,
          draggable: true
        }
      );
     $('.parallax').parallax();
     $('.carousel').carousel();
     $('.scrollspy').scrollSpy();
  },

  // Colori de départ
  $(function()
  {
    // Application des couleurs
    var colorCookie = $.cookie('setColor') ? $.cookie('setColor') : 'blue';
    var colorBgClass = colorCookie ? colorCookie + ' darken-4' : 'blue darken-4';
    var colorTextClass = colorCookie ? colorCookie + '-text' : 'blue-text';

    $('.blue-text').removeClass('blue-text').addClass(colorTextClass);
    $('.blue').not('#setColor span').removeClass('blue').addClass(colorCookie);

    // Couleur sélectionnée
    $("#setColor span").removeAttr('id');
    $("span[class='"+ colorBgClass +"']").attr('id', 'colorSeleted');
  }),

  // Changement de colori
  $(function()
  {
    $("#setColor span").click(function()
      {
        // Application des couleurs
        var colorCookie = $.cookie('setColor') ? $.cookie('setColor') : 'blue';
        var newColorCookie = $(this).attr('class').split(' ')[0];

        $('.' + colorCookie + '-text').removeClass(colorCookie + '-text').addClass(newColorCookie + '-text');
        $('.' + colorCookie).not('#setColor span').removeClass(colorCookie).addClass(newColorCookie);
        $.cookie('setColor', newColorCookie);

        // Couleur sélectionnée
        $("#setColor span").removeAttr('id');
        $(this).attr('id', 'colorSeleted');
      })
  }),

  // Taille des pages
  $(function()
  {
    $(window).resize(function()
    {
      $('#home').height($(window).height());
    }),

    $('#home').height($(window).height());
  }),

  // Shuffle Letters
  $('.suffleLetters').each
  (function()
    {
      var shuffleDelay = function(This)
      {
        var char = '&é"\'(-è_çà)=azertyuiopqsdfghjklmù*$<wxcvbn,;:!"1234567890°+œAZERTYUIOPQSDFGHJKLM%µWXCVBN?./§~#{[|^@]}ê¡€';
        char = char.split('');
        var iText = 0;
        var text = $(This).html();
        text = text.trim().split('');
        $(This).css({'display' : 'block'});
        $(This).html('');

        var shuffle = function(This)
        {
          // Le texte finale
          var textFinalLoop = '';
          for(var i = 0; i < iText; i++)
          textFinalLoop += text[i];

          // Le shuffle additionnel
          var arrShuffe = new Array(10);
          for(var i = 0; i < Math.floor(Math.random() * 10); i++)
          arrShuffe[i] = char[Math.floor(Math.random() * char.length)];

          // Lettre suivante
          if (iText < text.length)
          {
            setTimeout(shuffle, $(This).attr('data-speed'), This);
            $(This).html(textFinalLoop + arrShuffe.join(''));
            iText++;
          }
          else $(This).html(textFinalLoop);
        };

        setTimeout(shuffle, $(This).attr('data-speed'), This);
      };

      setTimeout(shuffleDelay, $(this).attr('data-delay'), this);
    }
  ),

  // Dectection des IDs
  $(window).on('scroll', function()
  {

      var scrollInfos = $('#infos').offset().top - 100;
      var scrollProjects = $('#projects').offset().top - 100;
      var scrollContact = $('.parallax-container').offset().top - 100;

      if ($(window).scrollTop() > 0 && $(window).scrollTop() < $(window).height())
      idView = 0;
      if ($(window).scrollTop() > scrollInfos && $(window).scrollTop() < scrollInfos + 200)
      idView = 1;
      if ($(window).scrollTop() > scrollProjects && $(window).scrollTop() < scrollProjects + 200)
      idView = 2;
      if ($(window).scrollTop() > scrollContact && $(window).scrollTop() < scrollContact + 200)
      idView = 3;

      if (idView != lastIdView)
      {
        lastIdView = idView;
        $('li').removeAttr( 'class');

        switch (idView)
        {
          case 0: $('a[href="#top"]').parent().addClass('active'); break;
          case 1: $('a[href="#infos"]').parent().addClass('active'); break;
          case 2: $('a[href="#projects"]').parent().addClass('active'); break;
          case 3: $('a[href="#contact"]').parent().addClass('active'); break;
        }
      }
  })
)
