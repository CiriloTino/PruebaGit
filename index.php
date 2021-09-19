<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Interface</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/pricing/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      A{
	text-decoration: none;
	font-size: 14px;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" fill="#EF3340" width="66.5" height="39" fill="currentColor" class="bi bi-cloud-fill" viewBox="0 0 16 16">
  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
</svg>
        <span class="fs-4">APIMarket</span>
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Soluciones</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">APIs</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Documentación</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Blog</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Contacto</a>
	<button type="button" class="btn btn-danger">Registrate</button>
	<a class="me-3"></a>
	<button type="button" class="btn btn-outline-danger">Button</button>
      </nav>
    </div>

   <div class="pricing-header p-6 pb-md-4 mx-auto text-left">
	<svg xmlns="http://www.w3.org/2000/svg" fill="#A3ABCC" width="17.3" height="16.99" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg> <a> Blog </a> <svg xmlns="http://www.w3.org/2000/svg" fill="#A3ABCC" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671z"/>
</svg> <a>Conoce nuestras APIs</a>
   </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <h1 class="display-4 fw-normal">¿Quieres conocer nuestras APIs de auto flexible?</h1>
      <p class="fs-6">In egestas blandit felis id porttitor. Mauris vel nibh ex. Integer iaculis placerat nunc, in ultricies nunc dignissim eu. Proin eros elit, aliquet nec magna ornare, luctus posuere lacus. Proin placerat viverra lacus at dignissim.</p>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <a class="display-4 fw-normal fs-6">03 SEPTIEMBRE DE 2021</a>
      <a class="fs-6">LECTURA DE 5 MIN.</a>
    </div>
	
  </header>

  <main>
  
    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
	<img src="finanzas.jpg" class="img-thumbnail" alt="">
    </div>


    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
	<h1 class="display-4 fw-normal">¿Qué son las APIs de auto flexible?</h1>
	<p class="fs-6"> In egestas blandit felis id porttitor. Mauris vel nibh ex. Integer iaculis placerat nunc, in ultricies nunc dignissim eu. Proin eros elit, aliquet nec magna ornare, luctus posuere lacus. Proin placerat viverra lacus at dignissim. 
In egestas blandit felis id porttitor. Mauris vel nibh ex. Integer iaculis placerat nunc, in ultricies nunc dignissim eu. Proin eros elit, aliquet nec magna ornare, luctus posuere lacus. Proin placerat viverra lacus at dignissim. In egestas blandit felis id porttitor. Mauris vel nibh ex. Integer iaculis placerat nunc, in ultricies nunc dignissim eu. Proin eros elit, aliquet nec magna ornare, luctus posuere lacus. Proin placerat viverra lacus at dignissim. 
</p>
    </div>




    <div class="pricing-header p-3 pb-md-4 mx-auto text-left">
      <p>Modificación 3</p>
    </div>


  </main>






  <footer class="pt-4 my-md-5 pt-md-5 border-top">
	<p>Derechos reservados</p>
</div>


    
  </body>
</html>