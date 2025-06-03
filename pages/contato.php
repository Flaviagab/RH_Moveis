<link rel="stylesheet" href="css/contato.css">

<body>

    <div>
        <h2 class="text-center t-contact">Entre em contato!</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="container-central">
                <form action="" method="POST" id="contact-form">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="name" id="name" autocomplete="off" required>

                    <label for="email">E-mail</label>
                    <input type="email" name="email" class="email" id="email" autocomplete="off" required>

                    <label for="message">Sua mensagem</label>
                    <textarea type="text" name="message" class="message" id="message" autocomplete="off" required></textarea>

                    <button class="botao btn btn-outline-light" type="submit">Enviar</button>
                </form>
            </div>
        </div>

        <div class="col-4">
            <div class="links-social">
                <a class="icon botao btn btn-outline-light" href="https://www.instagram.com/_rh_moveis" target="_blank">
                    <i class="fa-brands fa-instagram"></i> Ir para o Instagram
                </a>
                <a class="icon botao btn btn-outline-light" href="https://wa.me/5544998608027" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i> Ir para o WhatsApp
                </a>
                <a class="icon botao btn btn-outline-light" href="https://www.facebook.com/rhmoveisplanejado" target="_blank">
                    <i class="fa-brands fa-facebook"></i> Ir para o Facebook
                </a>
            </div>
        </div>
    </div>
    <div>
        <h2 class="text-center t-contact">Onde nos achar</h2>
    </div>

    <div class="row justify-content-center maps">
        <div class="col-md-4">
                <div class="endereco">
                    <h2>Rua Francisco Preisner, 159 - Jardim Santa Cruz, Campo Mourão - PR, 87309-600</h2>
                    <h3>Aberto das 8:00 às 18:00</h3>
                </div>
            </div>
        <div class="col-md-4">
            <div class="iframe">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1822.477461451709!2d-52.36134921859832!3d-23.997368830992766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed0b6b97d62d99%3A0xc96d379f0cf8a908!2sRH%20M%C3%B3veis%20Planejados!5e0!3m2!1spt-BR!2sbr!4v1747959606793!5m2!1spt-BR!2sbr" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>