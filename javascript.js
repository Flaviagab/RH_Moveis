document.querySelectorAll('.slider-wrapper').forEach(wrapper => {
    const imageList = wrapper.querySelector('.image-list');
    const prevBtn = wrapper.querySelector('.prev-slide');
    const nextBtn = wrapper.querySelector('.next-slide');

    prevBtn.addEventListener('click', () => {
        const scrollAmount = imageList.clientWidth * -1;
        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });

    nextBtn.addEventListener('click', () => {
        const scrollAmount = imageList.clientWidth * 1;
        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });
});



let lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function () {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-90px"
    } else {
        navbar.style.top = "0"
    }
    lastScrollTop = scrollTop;
})


function validarEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}
function validarTelefone(phone) {
    return /^\d{10,11}$/.test(phone);
}
function validarNome(nome) {
    const NomeValido = new RegExp(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/);

    if (NomeValido.test(nome) && nome.trim().length >= 3) {
        return true;
    }
    return false;

}
function validarCidade(cidade) {
    const cidadeValida = new RegExp(/^[A-Za-zÀ-ÖØ-öø-ÿ ]+$/);

    if (cidadeValida.test(cidade) && cidade.trim().length >= 3) {
        return true;
    }
    return false;

}

form.addEventListener("submit", function (event) {
    const form = document.getElementById('form');
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let message = document.getElementById('message').value;
    let cidade = document.getElementById('cidade').value;
    let ambiente = document.getElementById('ambiente').value;

    form.addEventListener('input', function () {
        erroName.textContent = "";
        erroEmail.textContent = "";
        erroPhone.textContent = "";
        erroMessage.textContent = "";
        erroCidade.textContent = "";
        erroAmbiente.textContent = "";
        textForm.textContent = "";
    });

    event.preventDefault();

    if (nome == "" && phone == "" && email == "" && message == "" && cidade == "" && ambiente == "") {
        textForm.textContent = "Por favor, preencha todos os campos.";
        textForm.classList.remove("sucesso-message");
    } else {
        if (nome == "") {
            erroName.textContent = "Por favor, informe seu nome.";
        } else if (email == "") {
            erroEmail.textContent = "Por favor, informe o seu e-mail";
        } else if (phone == "") {
            erroPhone.textContent = "Por favor, informe o seu número de telefone.";
        } else if (cidade == "") {
            erroCidade.textContent = "Por favor, informe a sua cidade.";
        } else if (ambiente == "") {
            erroAmbiente.textContent = "Por favor, selecione um tipo de ambiente.";
        } else if (message == "") {
            erroMessage.textContent = "Por favor, informe a sua mensagem.";
        }

        let valid = true

        if (!validarEmail(email)) {
            erroEmail.textContent = "E-mail inválido! Insira um e-mail válido"
            valid = false
        }
        if (!validarTelefone(phone)) {
            erroPhone.textContent = "Telefone inválido! Insira um telefone válido"
            valid = false
        }
        if (!validarNome(nome)) {
            erroName.textContent = "Nome inválido! Insira o nome corretamente";
            valid = false
        }
        if (!validarCidade(cidade)) {
           erroCidade.textContent = "Cidade inválida! Insira a cidade corretamente";
            valid = false
        }

        if (nome != "" && email != "" && phone != "" && message != "" && cidade != "" && ambiente != "" && valid == true) {
            textForm.textContent = "Formulário enviado com sucesso!";
            textForm.classList.add("sucesso-message");
            form.reset();
        }
    }
})

document.getElementById('btnLimpar').addEventListener("click", function () {
    form.reset();
})


function abrirModal(src) {
    const imagem = document.getElementById('imagemAmpliada');
    imagem.src = src;
    const modal = new bootstrap.Modal(document.getElementById('modalImagem'));
    modal.show();
}
