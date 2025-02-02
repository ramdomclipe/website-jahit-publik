<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jahitin!</title>
    
 
    <link href= "bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-warning">Jahi</span>tin!</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#team">How</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="#product">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>  
                 
            </ul>
          </div>
        </div>
      </nav>
     
         
         
         
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Membantu Menjahit Pakaian Anda</h5>
               
            </div>
          </div>
        
          <div class="carousel-item">
            <img src="about.jpg" class="d-block w-100" alt="...">
           
          </div>
        </div>
       
      </div>

      <section id="about" class="about section-padding">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-12 col-12">
                      <div class="about-img">
                          <img src="about.jpg" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                      <div class="about-text">
                            <h2>Kami menyediakan pelayanan  <br/> jahit terbaik</h2>
                            <p>Jangan ragu mempercayakan kerusakan pakaian anda pada kami</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- about section Ends -->
      <!-- services section Starts -->
      <section class="services section-padding" id="services">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="section-header text-center pb-5">
                          <h2>Mengapa Jahitin!?</h2>
                          <p><br>.</p>
                      </div>
                  </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-laptop"></i>
                            <h3 class="card-title">Kualitas Terbaik</h3>
                            <p class="lead">Kami menjahit pakaian anda dengan dedikasi tinggi.</p>
                           
                        </div>
                    </div>
                </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-journal"></i>
                              <h3 class="card-title">Harga Terjangkau</h3>
                              <p class="lead">Kami mematok harga yang ramah untuk dompet anda.</p>
                             
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-4">
                      <div class="card text-white text-center bg-dark pb-2">
                          <div class="card-body">
                            <i class="bi bi-intersect"></i>
                              <h3 class="card-title">Integritas</h3>
                              <p class="lead">Kami melaksanakan tugas kami dengan jujur.</p>
                          
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- services section Ends -->

 <!-- cara kerja starts -->
 <section id="team" class="team section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5" style="margin-bottom: 40px;">
            <h2 style="font-size: 36px; font-weight: bold;">Cara Kerja Jahitin!</h2>
            <p style="font-size: 24px; font-weight: bold;">1. Buka website Jahitin</p>
            <p style="font-size: 24px; font-weight: bold;">2. Order online</p>
            <p style="font-size: 24px; font-weight: bold;">3. Datang ke tempat jahitin dengan menunjukkan bukti order online</p>
            <p style="font-size: 24px; font-weight: bold;">4. Mendapatkan diskon khusus order online</p>
          </div>
        </div>
      </div>
    </div>
  </section>
   <!-- cara kerja ends -->

      <!-- product starts -->
      <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Keranjang Belanja</title>
  <style>
    /* Inline CSS */
    body {
      font-family: Arial, sans-serif;
    }
    .hidden {
      display: none;
    }
    .btn {
      background-color: #ff9800;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      color: white;
      border-radius: 5px;
      text-transform: uppercase;
      font-weight: bold;
    }
    .btn:hover {
      background-color: #ff5722;
    }
    #cart, #checkout-section, #cart-section {
      margin-top: 30px;
    }
    .product img {
      width: 100%;
      height: 200px;  /* Menyelaraskan ukuran foto */
      object-fit: cover;  /* Menjaga proporsi gambar */
    }
    .product {
      text-align: center;
      padding: 20px;
    }
    .product h3 {
      font-size: 18px;
      margin: 10px 0;
    }
    .product p {
      font-size: 14px;
      color: #888;
    }
    .product button {
      margin-top: 10px;
    }
    .cart-item {
      display: flex;
      justify-content: space-between;
      padding: 10px 0;
      border-bottom: 1px solid #ddd;
    }
    .cart-item button {
      background-color: red;
      color: white;
      padding: 5px 10px;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    .cart-item button:hover {
      background-color: #e53935;
    }
    .checkout-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    #cart-section h3, #checkout-section h3 {
      margin-top: 20px;
      font-size: 22px;
    }
  </style>
</head>
<body>
  <section id="product" class="product section-padding">
    <div class="container">
      <h2>Order Sekarang</h2>
      <p>Hanya di Jahitin!<br></p>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="shirt.jpg" class="img-fluid" alt="">
              </div>
              <h3 class="card-title">Kemeja</h3>
              <p class="lead">Rp 75.000,00</p>
              <button class="btn bg-warning text-dark add-to-cart" data-name="Kemeja" data-price="75000">Pesan</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="suit.jpg" class="img-fluid" alt="">
              </div>
              <h3 class="card-title">Setelan Jas</h3>
              <p class="lead">Rp 150.000,00</p>
              <button class="btn bg-warning text-dark add-to-cart" data-name="Setelan Jas" data-price="150000">Pesan</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="t-shirt.jpg" class="img-fluid" alt="">
              </div>
              <h3 class="card-title">Kaos Oblong</h3>
              <p class="lead">Rp 35.000,00</p>
              <button class="btn bg-warning text-dark add-to-cart" data-name="Kaos Oblong" data-price="35000">Pesan</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="jeans.jpg" class="img-fluid" alt="">
              </div>
              <h3 class="card-title">Celana Jean</h3>
              <p class="lead">Rp 65.000,00</p>
              <button class="btn bg-warning text-dark add-to-cart" data-name="Celana Jean" data-price="65000">Pesan</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
          <div class="card text-light text-center bg-white pb-2">
            <div class="card-body text-dark">
              <div class="img-area mb-4">
                <img src="trousers.jpg" class="img-fluid" alt="">
              </div>
              <h3 class="card-title">Celana Rumah</h3>
              <p class="lead">Rp 25.000,00</p>
              <button class="btn bg-warning text-dark add-to-cart" data-name="Celana Rumah" data-price="25000">Pesan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Keranjang Belanja -->
  <section id="cart-section" class="section-padding hidden">
    <div class="container">
      <h2>Keranjang Belanja</h2>
      <div id="cart"></div>
      <h3>Total: Rp <span id="total-price">0</span></h3>
      <button id="checkout-btn" class="btn">Lanjutkan ke Checkout</button>
    </div>
  </section>

  <!-- Form Checkout -->
  <section id="checkout-section" class="section-padding hidden">
    <div class="container">
      <h2>Checkout</h2>
      <p>Total to Pay: Rp <span id="final-total"></span></p>
      <label for="customer-name">Nama Lengkap:</label>
      <input type="text" id="customer-name" placeholder="Nama Lengkap" required>
      <label for="customer-email">Email:</label>
      <input type="email" id="customer-email" placeholder="Email" required>
      <button id="pay-btn" class="btn">Order Now</button>
      <button id="close-modal" class="btn">Tutup</button>
    </div>
  </section>

  
  <!-- Logika login mulai -->
  <script>
    // Fungsi untuk memeriksa apakah pengguna sudah login
    function isUserLoggedIn() {
      // Cek apakah ada item di localStorage atau sessionStorage yang menunjukkan pengguna sudah login
      // Misalnya, jika ada token di localStorage
      return localStorage.getItem('userToken') !== null; // Misalkan userToken adalah key untuk token pengguna
    }
    
    // Fungsi untuk mengarahkan pengguna ke halaman login jika belum login
    function redirectToLogin() {
      window.location.href = 'login.html'; // Mengarahkan ke halaman login
    }
    
    // Fungsi untuk menangani klik tombol Pesan
    function handleOrderButtonClick(event) {
      if (isUserLoggedIn()) {
        // Jika sudah login, lanjutkan ke proses pemesanan
        alert('Pesanan Anda berhasil ditambahkan ke keranjang!');
        // Anda dapat menambahkan logika untuk menambahkan item ke keranjang di sini
      } else {
        // Jika belum login, tampilkan pop-up untuk konfirmasi login
        var userWantsToLogin = confirm("Anda harus login terlebih dahulu untuk melanjutkan pemesanan. Apakah Anda ingin login sekarang?");
        if (userWantsToLogin) {
          // Jika pengguna setuju, arahkan ke halaman login
          redirectToLogin();
        }
        // Jika pengguna memilih batal, tidak melakukan apa-apa
      }
    }
    
    // Menambahkan event listener ke setiap tombol Pesan
    document.querySelectorAll('.add-to-cart').forEach(function(button) {
      button.addEventListener('click', handleOrderButtonClick);
    });
</script>

  <!-- Logika login selesai -->
    

  <script>
    // Inline JavaScript

document.addEventListener('DOMContentLoaded', function () {
    const cart = [];
    const cartSection = document.getElementById('cart-section');
    const checkoutSection = document.getElementById('checkout-section');
    const totalPriceElem = document.getElementById('total-price');
    const cartElem = document.getElementById('cart');
    const checkoutBtn = document.getElementById('checkout-btn');
    const payBtn = document.getElementById('pay-btn');
    const closeBtn = document.getElementById('close-modal');
    const customerNameInput = document.getElementById('customer-name');
    const customerEmailInput = document.getElementById('customer-email');

    // Cek apakah pengguna sudah login
    function isLoggedIn() {
        return localStorage.getItem('email') !== null;
    }

    // Menambahkan produk ke keranjang
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function () {
            if (!isLoggedIn()) {
                // Jika belum login, arahkan ke halaman login
                alert('Silakan login terlebih dahulu!');
                window.location.href = 'login.html';  // Ganti sesuai dengan URL halaman login
                return;
            }

            const name = this.getAttribute('data-name');
            const price = parseInt(this.getAttribute('data-price'));

            const existingItem = cart.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ name, price, quantity: 1 });
            }

            updateCart();
        });
    });

    // Memperbarui tampilan keranjang
    function updateCart() {
        cartElem.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const div = document.createElement('div');
            div.classList.add('cart-item');
            div.innerHTML = `
                <span>${item.name} (x${item.quantity}) - Rp ${item.price * item.quantity}</span>
                <button class="remove-item" data-name="${item.name}">Remove</button>
            `;
            cartElem.appendChild(div);
            total += item.price * item.quantity;
        });

        totalPriceElem.textContent = total.toLocaleString();

        if (cart.length > 0) {
            cartSection.classList.remove('hidden');
        } else {
            cartSection.classList.add('hidden');
        }
    }

    // Hapus item dari keranjang
    cartElem.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-item')) {
            const itemName = e.target.getAttribute('data-name');
            const itemIndex = cart.findIndex(item => item.name === itemName);
            if (itemIndex !== -1) {
                cart.splice(itemIndex, 1);
                updateCart();
            }
        }
    });

    // Tombol checkout pertama (ke modal)
    checkoutBtn.addEventListener('click', function () {
        if (cart.length === 0) {
            alert('Anda tidak memesan apapun.');
            return;
        }
        checkoutSection.classList.remove('hidden');
        document.getElementById('final-total').textContent = totalPriceElem.textContent;
    });

    // Tombol checkout kedua (order)
    payBtn.addEventListener('click', function () {
        const name = customerNameInput.value.trim();
        const email = customerEmailInput.value.trim();

        // Validasi email
        const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com)$/;
        if (name === '' || email === '') {
            alert('Tolong isi semua data.');
        } else if (!emailRegex.test(email)) {
            alert('Email harus menggunakan format yang benar (gmail.com atau yahoo.com).');
        } else {
            alert('Order Berhasil! Terima kasih atas pesanan Anda.');
            // Reset keranjang setelah pembayaran
            cart.length = 0;
            updateCart();
            checkoutSection.classList.add('hidden');
        }
    });

    // Menutup form checkout
    closeBtn.addEventListener('click', function () {
        checkoutSection.classList.add('hidden');
    });
});


    document.addEventListener('DOMContentLoaded', function () {
      const cart = [];
      const cartSection = document.getElementById('cart-section');
      const checkoutSection = document.getElementById('checkout-section');
      const totalPriceElem = document.getElementById('total-price');
      const cartElem = document.getElementById('cart');
      const checkoutBtn = document.getElementById('checkout-btn');
      const payBtn = document.getElementById('pay-btn');
      const closeBtn = document.getElementById('close-modal');
      const customerNameInput = document.getElementById('customer-name');
      const customerEmailInput = document.getElementById('customer-email');

      // Menambahkan produk ke keranjang
      document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function () {
          const name = this.getAttribute('data-name');
          const price = parseInt(this.getAttribute('data-price'));

          const existingItem = cart.find(item => item.name === name);
          if (existingItem) {
            existingItem.quantity += 1;
          } else {
            cart.push({ name, price, quantity: 1 });
          }

          updateCart();
        });
      });

      // Memperbarui tampilan keranjang
      function updateCart() {
        cartElem.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
          const div = document.createElement('div');
          div.classList.add('cart-item');
          div.innerHTML = `
            <span>${item.name} (x${item.quantity}) - Rp ${item.price * item.quantity}</span>
            <button class="remove-item" data-name="${item.name}">Remove</button>
          `;
          cartElem.appendChild(div);
          total += item.price * item.quantity;
        });

        totalPriceElem.textContent = total.toLocaleString();

        if (cart.length > 0) {
          cartSection.classList.remove('hidden');
        } else {
          cartSection.classList.add('hidden');
        }
      }

      // Hapus item dari keranjang
      cartElem.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-item')) {
          const itemName = e.target.getAttribute('data-name');
          const itemIndex = cart.findIndex(item => item.name === itemName);
          if (itemIndex !== -1) {
            cart.splice(itemIndex, 1);
            updateCart();
          }
        }
      });

      // Tombol checkout pertama (ke modal)
      checkoutBtn.addEventListener('click', function () {
        if (cart.length === 0) {
          alert('Anda tidak memesan apapun.');
          return;
        }
        checkoutSection.classList.remove('hidden');
        document.getElementById('final-total').textContent = totalPriceElem.textContent;
      });

      // Tombol checkout kedua (order)
      payBtn.addEventListener('click', function () {
        const name = customerNameInput.value.trim();
        const email = customerEmailInput.value.trim();

        // Validasi email
        const emailRegex = /^[a-zA-Z0-9._%+-]+@(gmail\.com|yahoo\.com)$/;
        if (name === '' || email === '') {
          alert('Tolong isi semua data.');
        } else if (!emailRegex.test(email)) {
          alert('Email harus menggunakan format yang benar (gmail.com atau yahoo.com).');
        } else {
          alert('Order Berhasil! Terima kasih atas pesanan Anda.');
          // Reset keranjang setelah pembayaran
          cart.length = 0;
          updateCart();
          checkoutSection.classList.add('hidden');
        }
      });

      // Menutup form checkout
      closeBtn.addEventListener('click', function () {
        checkoutSection.classList.add('hidden');
      });
    });
  </script>
</body>
</html>
      <!-- product ends -->

      <!-- Contact starts -->
      <section id="contact" class="contact section-padding">
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Hubungi kami</h2>
                        <p>Kirim pertanyaan anda disini.<br></p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <!-- Form section on the left -->
                <div class="col-md-4 p-0 pt-4 pb-4">
                    <form action="#" id="contact-form" class="bg-light p-4 m-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input class="form-control" placeholder="Nama Lengkap" required type="text" id="name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <input class="form-control" placeholder="Email" required type="email" id="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <textarea class="form-control" placeholder="Pesan" required rows="3" id="message"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-warning btn-lg btn-block mt-2" type="button" id="submit-btn">Kirim</button>
                        </div>
                    </form>
                </div>
                <!-- Empty space on the right -->
                <div class="col-md-8"></div>
            </div>
        </div>
    </section>
      <!-- contact ends -->
      <!-- footer starts -->
      <footer class="bg-dark p-2 text-center">
          <div class="container">
              <p class="text-white">All Right Reserved By Jahitin!</p>
          </div>
      </footer>
      <!-- footer ends -->



<!-- Form action diubah ke file PHP untuk proses data -->
<form action="progress.php" method="POST" class="bg-light p-4 m-auto">




    
    
    <!-- All Js -->
    <script src="script.js"></script>
    <script src="script.js"></script>
</body>
</html>




<!--for getting the form download the code from download button-->