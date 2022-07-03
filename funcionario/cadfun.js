let erros = document.getElementById('erros')

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
function Sobrenome() {
	let Sobrenome = document.getElementById('Sobrenome')

	let errosobrenome = false

	if (Sobrenome.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu Sobrenome em branco <br>'
		errosobrenome = true
	}

	if (errosobrenome== true) {
		Sobrenome.classList.add('erro')
	} else if (errosobrenome == false) {
		Sobrenome.classList.remove('erro')
	}
}
function CPF() {
	let CPF = document.getElementById('CPF')

	let errocpf = false

	if (CPF.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu CPF em branco <br>'
		errocpf = true
	}

	if (errocpf== true) {
		CPF.classList.add('erro')
	} else if (errocpf == false) {
		CPF.classList.remove('erro')
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

function Telefone() {
	let Telefone = document.getElementById('Telefone')

	let errotelefone = false

	if (Telefone.value.trim() == '') {
		erros.innerHTML += 'Você não pode deixar o seu Telefone em branco <br>'
		errotelefone = true
	}

	if (errotelefone== true) {
		Telefone.classList.add('erro')
	} else if (errotelefone == false) {
		Telefone.classList.remove('erro')
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




function enivar() {
	erros.innerHTML = ''
	Nome()
	Sobrenome()
	CPF()
	Email()
	Telefone()
    Senha()
    
}

document.getElementById('enviar').addEventListener('click', enivar)

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

