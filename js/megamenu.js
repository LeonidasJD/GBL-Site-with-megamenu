class Megamenu {
  constructor() {
    this.events();
  }

  events() {
    var header = $(".fullSizeContainer");
    let lastScrollPosition = 0;

    $(window).on("scroll", function () {
      const currentScrollPosition = $(window).scrollTop();

      if (currentScrollPosition > 1000) {
        if (currentScrollPosition > lastScrollPosition) {
          header.css("top", "-130px");
        } else {
          header.css("top", "0px");
        }
      }
      lastScrollPosition = currentScrollPosition;
    }); // NA SCROLL MISA SE SPUSTA I PODIZE HEDER

    function zatvoriSveMegamenije() {
      $(".sub-menu-1").removeClass("beVisible");
      $(".sub-menu-1").removeClass("firstSubmenu");
      $(".sub-menu-1").removeClass("secondSubmenu");
      $(".sub-menu-1").removeClass("thirdSubmenu");
      $(".sub-menu-1").removeClass("fourthSubmenu");
    }

    $("#menu-item-21374").on("click", function () {
      zatvoriSveMegamenije();
      var subMenu = $(this).find(".sub-menu-1"); //PRONALAZI ELEMENT SA KLASOM sub-menu-1 koji je iskljucivo unutar elementa menu-item-21374
      subMenu.addClass("beVisible");
      subMenu.addClass("firstSubmenu");
    });

    $("#menu-item-21723").mousedown(function () {
      //ukoliko ne radi funkcija na onClick mozemo da koristimo mousedown
      $(".firstSubmenu").removeClass("beVisible");
    });
    //OTVARANJE I ZATVARANJE BRAND MENIJA

    $("#menu-item-21375").on("click", function () {
      zatvoriSveMegamenije();
      var subMenu1 = $(this).find(".sub-menu-1");
      subMenu1.addClass("beVisible");
      subMenu1.addClass("secondSubmenu");
    });

    $("#menu-item-21725").mousedown(function () {
      $(".secondSubmenu").removeClass("beVisible");
    }); //OTVARANJE ZATVARANJE CONTENT MENIJA

    $("#menu-item-21376").on("click", function () {
      zatvoriSveMegamenije();
      var subMenu3 = $(this).find(".sub-menu-1");
      subMenu3.addClass("beVisible");
      subMenu3.addClass("thirdSubmenu");
    });

    $("#menu-item-21724").mousedown(function () {
      $(".thirdSubmenu").removeClass("beVisible");
    }); //OTVARANJE ZATVARANJE DIGITAL MENIJA

    $("#menu-item-21377").on("click", function () {
      zatvoriSveMegamenije();
      var subMenu4 = $(this).find(".sub-menu-1");
      subMenu4.addClass("beVisible");
      subMenu4.addClass("fourthSubmenu");
    });

    $("#menu-item-21722").mousedown(function () {
      $(".fourthSubmenu").removeClass("beVisible");
    }); //OTVARANJE ZATVARANJE TEAM MENIJA

    $(window).on("scroll", function () {
      $(".firstSubmenu").removeClass("beVisible");
      $(".secondSubmenu").removeClass("beVisible");
      $(".thirdSubmenu").removeClass("beVisible");
      $(".fourthSubmenu").removeClass("beVisible");
    }); //GASENJE MEGAMENIJA NA SCROLL
  }
}

const megamenu = new Megamenu();
