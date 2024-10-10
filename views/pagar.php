<style>
    .outer-container {
      display: flex;
      justify-content: center; /* Aligns the box to the center */
      margin: 20px auto;
      padding: 20px;
    }
  
    .inner-container {
      width: 100%;
      max-width: 600px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }
  
    h1 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
  
    .form-label {
      font-weight: bold;
    }
  
    .form-check-label {
      font-weight: normal;
    }
  
    .form-check-input {
      margin-right: 10px;
    }
  
    .btn-dark {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
  
    .btn-dark:hover {
      background-color: #555;
    }
  
    .text-muted {
      color: #6c757d;
    }
  
    .float-end {
      float: right;
    }
  
    .mb-3 {
      margin-bottom: 1rem;
    }
  
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
  
    .table-container {
      display: table;
      width: 100%;
      margin: 20px 0;
    }
  
    .table-row {
      display: table-row;
    }
  
    .table-cell {
      display: table-cell;
      padding: 20px;
      border: 1px solid #7d7b7b;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #928d8d;
      vertical-align: top;
    }
  
    .form-group {
      margin-bottom: 1rem;
    }
  
    .img-fluid {
      max-width: 500px;
      height: 500px;
      border-radius: 5px;
    }
  </style>
  </head>
  <body>
  
  <div class="container">
    <h1>DIRECCIÓN DE ENVÍO</h1>
    <div class="table-container">
      <div class="table-row">
        <div class="table-cell col-7">
          <form>
            <div class="mb-3">
              <label for="ubicacion" class="form-label">Ubicación*</label>
              <select class="form-select" id="ubicacion">
                <option>Peru</option>
                <option>Mexico</option>
                <option>Colombia</option>
                <option>Argentina</option>
              </select>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nombre" class="form-label">Nombre*</label>
                <input type="text" class="form-control" id="nombre">
              </div>
              <div class="col-md-6 mb-3">
                <label for="apellido" class="form-label">Apellido*</label>
                <input type="text" class="form-control" id="apellido">
              </div>
            </div>
            <div class="mb-3">
              <label for="telefono" class="form-label">Número de Teléfono*</label>
              <input type="tel" class="form-control" id="telefono">
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="checkbox" id="predeterminado">
              <label class="form-check-label" for="predeterminado">Hacer predeterminado</label>
            </div>
            <div class="mb-3">
              <a href="#">Consejos de Dirección General</a>
              <a href="#" class="float-end">Política de Privacidad y Cookies</a>
            </div>
            <div class="mb-3">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="seguridad">
                <label class="form-check-label" for="seguridad">Seguridad y Privacidad</label>
              </div>
              <p class="text-muted">Mantenemos medidas físicas, técnicas y administrativas estándar de la industria para proteger su información personal.</p>
            </div>
            <a href="respuesta.html" class="btn btn-dark btn-lg btn-block mt-4">PAGAR</a>           
          </form>
        </div>
        <div class="table-cell col-5">
          <div class="row mt-4">
            <div class="col">
              <a href="detallesaco.html">Detalles del Pedido</a>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6XRy2Pi9Zi1sAnmJC7Kf7WwOoFM9i3HCFVQ&s" alt="Imagen del producto" class="img-fluid">
                </div>
                <div class="flex-grow-1 ms-3">
                  <p class="text-danger"></p>
                  <p>S/19.55 <del>S/23.00</del></p>
                  <p>Promociones</p>
                </div>
              </div>
            </div>
            <div class="col">
              <h2>FORMA DE PAGO</h2>
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="https://www.visa.com.co/dam/VCOM/regional/lac/SPA/Default/Partner%20With%20Us/Info%20for%20Partners/Info%20for%20Small%20Business/visa-pos-800x400.jpg" alt="Tarjeta de Crédito/Débito" class="img-fluid"
                  style="width: 50px; height: 50px;">
                </div>
                <div class="flex-shrink-0">
                  <img src="https://www.mercadonegro.pe/wp-content/uploads/2020/09/imagen-bcp.jpg" alt="Tarjeta de Crédito/Débito" class="img-fluid"
                  style="width: 50px; height: 50px; margin-left: 15px;">
                </div>
                <div class="flex-shrink-0">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyQQJAsQ_pJ53VO2oZIQJrX9CjdPTam77IGw&s" alt="Tarjeta de Crédito/Débito" class="img-fluid"
                  style="width: 50px; height: 50px; margin-left: 15px;">
                </div>
                <div class="flex-shrink-0">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsBLWz7noWqXK7MsVEyXylmZ9hEmZQUeducQ&s" alt="Tarjeta de Crédito/Débito" class="img-fluid"
                  style="width: 50px; height: 50px; margin-left: 15px;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>