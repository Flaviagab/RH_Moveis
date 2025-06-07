function scrollCarousel(direction) {
    const track = document.getElementById('carouselTrack');
    const scrollAmount = 300 + 16;
    track.scrollBy({
        left: direction * scrollAmount * 3,
        behavior: 'smooth'
    });
}

let lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function(){
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop){
        navbar.style.top = "-90px"
    }else{
        navbar.style.top = "0"
    }
    lastScrollTop = scrollTop;
})


form.addEventListener("submit", function(event){
    const form = document.getElementById('form');
        let nome = document.getElementById('nome').value;
        let email = document.getElementById('email').value;
        let phone = document.getElementById('phone').value;
        let message = document.getElementById('message').value;
        let cidade= document.getElementById('cidade').value;
        let ambiente = document.getElementById('ambiente').value;

    form.addEventListener('input', function() {
        erroName.textContent = "";
        erroEmail.textContent = "";
        erroPhone.textContent = "";
        erroMessage.textContent = "";
        erroCidade.textContent = "";
        erroAmbiente.textContent = "";
        textForm.textContent = "";
    });

        event.preventDefault();

    if(nome == "" && phone == "" && email == "" && message == "" && cidade == "" && ambiente == ""){
        textForm.textContent = "Por favor, preencha todos os campos.";
        textForm.classList.remove("sucesso-message");
    }else{
            if(nome == ""){
        erroName.textContent = "Por favor, informe seu nome.";
        }else if(email == ""){
        erroEmail.textContent = "Por favor, informe o seu e-mail";
            }else if(phone == ""){
        erroPhone.textContent = "Por favor, informe o seu número de telefone.";
        } else if(cidade == ""){
        erroCidade.textContent = "Por favor, informe a sua cidade.";
        } else if(ambiente == ""){
        erroAmbiente.textContent = "Por favor, selecione um tipo de ambiente.";
        }else if(message == ""){
        erroMessage.textContent = "Por favor, informe a sua mensagem.";
    }

    if(nome != "" && email != "" && phone != "" && message != "" && cidade != "" && ambiente != ""){
        textForm.textContent = "Formulário enviado com sucesso!";
        textForm.classList.add("sucesso-message");
        form.reset();    
    }
    }
})

document.getElementById('btnLimpar').addEventListener("click", function(){
       form.reset();
})