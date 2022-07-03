/*let erros = document.getElementById('erros')

// Validação do nome do usuario
function Nome() {
	let Nome = document.getElementById('Nome')

	let erronome = false

	if (Nome.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu Nome em branco <br>'
		erronome = true
	}

	if (erronome == true) {
		Nome.classList.add('erro')
	} else if (erronome == false) {
		Nome.classList.remove('erro')
	}
}
function Senha() {
	let Senha = document.getElementById('Senha')

	let errosenha = false

	if (Senha.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu Telefone em branco <br>'
		errosenha = true
	}

	if (errosenha== true) {
		Senha.classList.add('erro')
	} else if (errosenha == false) {
		Senha.classList.remove('erro')
	}
}

function Email() {
	let Email = document.getElementById('Email')

	let erroemail = false

	if (Email.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu Email em branco <br>'
		erroemail = true
	}

	if (erroemail== true) {
		Email.classList.add('erro')
	} else if (erroemail == false) {
		Email.classList.remove('erro')
	}
}





function Cadastrase() {
	erros.innerHTML = ''
	Nome()
	Senha()
	Email()
	
    
}

document.getElementById('Cadastrase').addEventListener('click', Cadastrase)
*/
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
          : (link.style.animation = `navLinkFade 0.5s ease forwards ${ index / 7 + 0.3}s`);
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
