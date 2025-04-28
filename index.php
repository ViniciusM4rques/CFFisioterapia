<?php include 'includes/header.php'; ?>

<!-- Seção de Apresentação -->
<header class="text-white text-center py-5" style="background-image: url('/assets/img/banner.png'); background-size: cover; background-position: center;">
    <div class="container" style="background-color: rgba(0, 0, 0, 0.5); padding: 2rem; border-radius: 1rem;">
        <h1 class="display-4">Fisioterapia de Resultados</h1>
        <p class="lead">Melhore sua qualidade de vida com nossos tratamentos especializados.</p>
    </div>
</header>

<!-- Seção de Serviços -->
<section class="services mt-5">
  <div class="container">
    <h2 class="text-center">Nossos Serviços</h2>
    <br>

    <div id="carouselServicos" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img src="assets/img/quiropraxia.png" class="d-block w-100" alt="Quiropraxia">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Quiropraxia</h5>
            <p>Tratamentos focados em recuperar o movimento e força muscular.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/img/liberação.png" class="d-block w-100" alt="Fisioterapia Respiratória">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Liberação</h5>
            <p>Técnicas especializadas para problemas respiratórios.</p>
          </div>
        </div>

        <div class="carousel-item">
          <img src="assets/img/resuperação_esportiva.png" class="d-block w-100" alt="Fisioterapia Esportiva">
          <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
            <h5>Fisioterapia Esportiva</h5>
            <p>Prevenção e tratamento de lesões esportivas.</p>
          </div>
        </div>

      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselServicos" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselServicos" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
      </button>
    </div>
  </div>
</section>

<!-- Diferenciais da Clínica -->
<section class="testimonials mt-5">
    <div class="container">
        <h2 class="text-center">Diferenciais (tecnologias, abordagens específicas)</h2>
    </div>
</section>

<!-- Seção de Vídeos -->
<section class="video-section py-5">
  <div class="container">
    <h2 class="mb-4 text-center">O que nossos pacientes dizem</h2>
    
    <div class="row justify-content-center g-4">
      <div class="col-md-4">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/TjjgOMWnhfI" title="Vídeo 1"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-md-4">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/TjjgOMWnhfI" title="Vídeo 2"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>

      <div class="col-md-4">
        <div class="ratio ratio-16x9">
          <iframe src="https://www.youtube.com/embed/TjjgOMWnhfI" title="Vídeo 3"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
    </div>
    
    <div class="testimonials mt-5">
      <div class="row">
      
          <div class="col-md-4 d-flex align-items-center mb-4">
              <div class="testimonial">
                  <blockquote class="blockquote">
                      <p class="mb-0">"A fisioterapia foi essencial para minha recuperação após a cirurgia. Os profissionais são excelentes!"</p>
                  </blockquote>
                  <footer class="blockquote-footer">João Silva</footer>
              </div>
          </div>
          
          <div class="col-md-4 d-flex align-items-center mb-4">
              <div class="testimonial">
                  <blockquote class="blockquote">
                      <p class="mb-0">"O tratamento de fisioterapia respiratória melhorou muito minha qualidade de vida!"</p>
                  </blockquote>
                  <footer class="blockquote-footer">Maria Oliveira</footer>
              </div>
          </div>
          
          <div class="col-md-4 d-flex align-items-center mb-4">
              <div class="testimonial">
                  <blockquote class="blockquote">
                      <p class="mb-0">"Excelente atendimento e os resultados foram além das minhas expectativas."</p>
                  </blockquote>
                  <footer class="blockquote-footer">Carlos Souza</footer>
              </div>
          </div>

      </div>
    </div>  
  </div>

</section>

<!-- Seção de Localização -->
<section class="mt-5">
  <div class="container">
    <h2 class="text-center mb-4">Onde Estamos</h2>
    
    <div class="card shadow-sm rounded-4 overflow-hidden">
      <div class="card-body p-0">
        <div class="map-responsive">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.21345710358!2d-42.7887858241828!3d-5.069121551463451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78e39ebcfb84f69%3A0xcadfbecf19228695!2sCF%20FISIOTERAPIA!5e0!3m2!1spt-BR!2sbr!4v1745626586904!5m2!1spt-BR!2sbr"
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
