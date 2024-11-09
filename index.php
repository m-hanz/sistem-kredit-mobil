<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="svg" href="public/asset/logo.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet"
    />

    <!-- Css -->
    <link rel="stylesheet" href="src/output.css" />

    <!-- Alpine Js -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Slick Carousel -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
      integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
      integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <title>Luxe Motion</title>
  </head>
  <body>

    <!-- Navbar Start -->
    <nav class="py-1 px-4 bg-slate-100" x-data="{navOpen : true}">
      <div class="container mx-auto">
        <div class="flex items-center justify-between">
          <img src="public/asset/logo2.svg" alt="Logo" width="200" />
          <img
            @click="navOpen = !navOpen"
            src="public/asset/toggle.svg"
            alt=""
            class="md:hidden"
          />
          <div class="mr-16 hidden md:block">
            <ul class="flex gap-12">
              <li
                class="text-slate-900 font-semibold text-base hover:text-orange-600 transition duration-300"
              >
                <a href="#home">Home</a>
              </li>
              <li
                class="text-slate-900 font-semibold text-base hover:text-orange-600 transition duration-300"
              >
                <a href="#about">About</a>
              </li>
              <li
                class="text-slate-900 font-semibold text-base hover:text-orange-600 transition duration-300"
              >
                <a href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Navbar Tampilan Mobile -->
      <div
        x-show="navOpen"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-300"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
        class="fixed bottom-0 right-0 left-0 bg-slate-100 py-4 px-8 border md:hidden"
      >
        <ul class="flex justify-between">
          <li>
            <a
              href="#home"
              class="flex justify-center flex-col items-center gap-1"
            >
              <ion-icon name="home-outline" class="text-2xl"></ion-icon>
              <span class="text-base font-medium">Home</span>
            </a>
          </li>
          <li>
            <a
              href="#about"
              class="flex justify-center flex-col items-center gap-1"
            >
              <ion-icon
                name="people-circle-outline"
                class="text-2xl"
              ></ion-icon>
              <span class="text-base font-medium">About</span>
            </a>
          </li>
          <li>
            <a
              href="#contact"
              class="flex justify-center flex-col items-center gap-1"
            >
              <ion-icon name="call-outline" class="text-2xl"></ion-icon>
              <span class="text-base font-medium">Contact</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home Start -->
    <section id="home">
      <div class="flex justify-center">
        <div class="container p-6 md:p-8">
          <div class="text-center mb-4">
            <h1 class="font-bold text-2xl mb-2 text-slate-900">Welcome to LuxeMotion</h1>
            <h2 class="font-bold text-4xl text-orange-600 mb-4">Discover the Ultimate Luxury in Motion</h2>
            <p class="text-lg font-medium">Selamat datang di LuxeMotion, di mana setiap perjalanan menjadi pengalaman mewah yang tak terlupakan. Kami menghadirkan perpaduan sempurna antara desain elegan, performa tak tertandingi, dan teknologi canggih untuk memenuhi kebutuhan pengendara modern yang mengutamakan kualitas. Dengan material premium dan detail yang dirancang khusus, setiap mobil LuxeMotion adalah karya seni yang menyuguhkan kenyamanan luar biasa, keamanan terbaik, dan kemewahan di setiap sisi.</p>
          </div>
          <div class="multiple-items">
            <img class="p-1" src="public/asset/img/gambar 1.jpg" alt="" />
            <img class="p-1" src="public/asset/img/gambar 2.jpg" alt="" />
            <img class="p-1" src="public/asset/img/gambar 3.jpg" alt="" />
            <img class="p-1" src="public/asset/img/gambar 4.jpg" alt="" />
            <img class="p-1" src="public/asset/img/gambar 5.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!-- Home End -->

    <!-- About Section Start -->
    <section id="about" class="pt-10 pb-10">
      <div class="container text-center mt-4 py-4">
        <h2 class="font-bold text-4xl mb-4 text-orange-600">About Us</h2>
        <p class="text-lg font-medium px-12">
          LuxeMotion adalah produsen mobil mewah yang didedikasikan untuk menghadirkan pengalaman berkendara yang elegan dan penuh presisi. Berdiri dengan misi untuk menyatukan teknologi inovatif dengan keanggunan, kami merancang kendaraan yang tidak hanya memikat secara visual tetapi juga unggul dalam performa dan kenyamanan. Setiap mobil yang kami hasilkan adalah karya seni yang menggabungkan material berkualitas tinggi, keahlian tangan, dan teknologi modern untuk menciptakan standar baru di dunia otomotif mewah.
        </p>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Section Form Kredit Start -->
  <div class="flex items-center justify-center min-h-screen bg-gray-200 py-10">
    <div class="text-center">
      <h1 class="font-bold text-center text-4xl text-orange-600 mb-6">
        Form Kredit Mobil
      </h1>
      <h2 class="font-medium text-center text-xl text-slate-900 mb-2">
        Silahkan input data dibawah ini
      </h2>

      <div class="text-left p-6 bg-white shadow-lg rounded-lg w-full sm:max-w-md lg:max-w-lg">
        <form action="" method="post">
          <!-- Harga Mobil -->
          <div class="mb-4">
            <label for="hargamobil" class="text-sm font-bold block mb-2">Harga Mobil</label>
            <input type="text" name="hargamobil" id="hargamobil" placeholder="Masukkan harga mobil" class="p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-600 w-full" required>
          </div>

          <!-- DP (%) -->
          <div class="mb-4">
            <label for="dp" class="text-sm font-bold block mb-2">DP</label>
            <div class="flex items-center">
              <input type="number" name="dp" id="dp" placeholder="Masukkan DP" class="p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-600 w-full" required>
              <span class="ml-2 text-gray-600">%</span>
            </div>
          </div>

          <!-- Tenor (Tahun) -->
          <div class="mb-4">
            <label for="tenor" class="text-sm font-bold block mb-2">Tenor</label>
            <div class="flex items-center">
              <input type="number" name="tenor" id="tenor" placeholder="Masukkan tenor" class="p-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-600 w-full" required>
              <span class="ml-2 text-gray-600">Tahun</span>
            </div>
          </div>

          <!-- Hitung Button -->
          <button type="submit" name="hitung" class="w-full bg-orange-600 text-white font-bold p-2 rounded-lg hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-600">
            Hitung
          </button>
        </form>
        <br>
        <hr class="mb-4">

        <?php 
        if(isset($_POST['hitung'])) {
          $hargamobil = $_POST['hargamobil'];
          $dp = $_POST['dp'];
          $tenor = $_POST['tenor'];

          $nominalbunga = 20/100*$hargamobil;
          $nominaldp = $dp/100*$hargamobil;
          $jumlahtenor = $tenor*12;

          $hargajual = $hargamobil+$nominalbunga;

          $nominalangsuran = ($hargajual-$nominaldp)/$jumlahtenor;
        ?>

        <table>
          <tr>
            <td>Harga Mobil</td>
            <td>:</td>
            <td>Rp. <?= number_format($hargamobil, 2, ",", ".") ?></td>
          </tr>
          <tr>
            <td>DP</td>
            <td>:</td>
            <td><?= $dp; ?>% (Rp. <?= number_format($nominaldp, 2, ",", ".") ?>)</td>
          </tr>
          <tr>
            <td>Tenor</td>
            <td>:</td>
            <td><?= $tenor; ?> Tahun (<?= $jumlahtenor; ?> Bulan)</td>
          </tr>
          <tr>
            <td>Bunga</td>
            <td>:</td>
            <td>20%</td>
          </tr>
          <tr class="font-bold">
            <td>Jumlah Angsuran</td>
            <td>:</td>
            <td>Rp. <?= number_format($nominalangsuran, 2, ",", ".") ?> / Bulan</td>
          </tr>
        </table>

        <?php } ?>
      </div>
    </div>
  </div>
    <!-- Section Form Kredit End -->

    <!-- Contact Section Start -->
    <section id="contact" class="py-10 bg-white">
      <div class="container">
        <div class="w-full px-4">
          <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-slate-900 mb-2">Contact</h4>
            <h2
              class="font-bold text-orange-600 text-3xl mb-4 sm:text-4xl lg:text-5xl"
            >
              Hubungi Kami
            </h2>
            <p class="font-medium text-md text-slate-900 md:text-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Distinctio, recusandae!
            </p>
          </div>
        </div>

        <form>
          <div class="w-full lg:w-2/3 lg:m-auto">
            <div class="w-full px-4 mb-8">
              <label for="name" class="text-base font-bold text-slate-900"
                >Nama</label
              >
              <input
                type="text"
                id="name"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-slate-900 focus:ring-1 focus:border-slate-900"
              />
            </div>
            <div class="w-full px-4 mb-8">
              <label for="email" class="text-base font-bold text-slate-900"
                >Email</label
              >
              <input
                type="email"
                id="email"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-slate-900 focus:ring-1 focus:border-slate-900"
              />
            </div>
            <div class="w-full px-4 mb-8">
              <label for="message" class="text-base font-bold text-slate-900"
                >Pesan</label
              >
              <textarea
                type="text"
                id="message"
                class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-slate-900 focus:ring-1 focus:border-slate-900 h-32"
              ></textarea>
            </div>
            <div class="w-full px-4">
              <button
                class="text-base font-semibold text-white bg-orange-600 py-3 px-8 rounded-lg w-full hover:opacity-80 hover:shadow-lg transition duration-500"
              >
                Kirim
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Start -->
    <footer class="bg-orange-600 pt-10 pb-6">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="w-full px-4 mb-12 text-white font-medium md:w-1/3">
            <h2 class="font-bold text-4xl text-white mb-5">Luxe Motion</h2>
            <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
            <p>luxemotion@gmail.com</p>
            <p>Malang</p>
            <p>Jawa Timur</p>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-5">
              Kategori Tulisan
            </h3>
            <ul class="text-white">
              <li>
                <a
                  href=""
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >Programming</a
                >
              </li>
              <li>
                <a
                  href=""
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >Teknologi</a
                >
              </li>
              <li>
                <a
                  href=""
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >Gaya Hidup</a
                >
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
            <ul class="text-white">
              <li>
                <a
                  href="#home"
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#about"
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >About Us</a
                >
              </li>
              <li>
                <a
                  href="#contact"
                  class="inline-block text-base hover:text-slate-900 mb-3"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>

        <div class="w-full pt-6 border-t border-slate-200">
          <p class="font-medium text-xs text-white text-center">
            Dibuat dengan <span class="text-red-600">❤️</span> oleh
            <a href="#" target="_blank" class="font-bold text-primary"
              >luxemotion</a
            >, menggunakan
            <a href="https://tailwindcss.com" class="font-bold text-slate-900"
              >Tailwind CSS</a
            >.
          </p>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- IonIcons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <!-- Slick Slider -->
    <script>
      $(".multiple-items").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
      });
    </script>
  </body>
</html>
