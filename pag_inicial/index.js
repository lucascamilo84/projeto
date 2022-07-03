class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
        ? (link.style.animation = "")
        : (link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
);
mobileNavbar.init();

/*
var anterior = document.getElementById("anterior");
var proximo = document.getElementById("proximo");
var imagem = document.getElementById("imagem");
var qtdImagem = new Number(8);

var cont = 0;

imagem.src = "./imagens/imagem" + cont + ".png";

anterior.onclick = function () {
  if (cont > 0) {
    imagem.src = "";
    cont--;
    imagem.src = "./imagens/imagem" + cont + ".png";
  }
};

proximo.onclick = function () {
  if (cont < (qtdImagem - 1)) {
    imagem.src = "";
    cont++;
    imagem.src = "./imagens/imagem" + cont + ".png";
  }
};*/