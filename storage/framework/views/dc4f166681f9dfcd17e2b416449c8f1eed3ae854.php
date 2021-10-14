<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">

    <title>My Profile Website | Nafi' Hasballah Noor</title>
  </head>
  <body id="home">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Nafi' Hasballah</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galery">Galery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    
    <section class="jumbotron text-center">
      <img src=<?php echo e(asset('image/profile.png')); ?> width="200" alt="nafi' hasballah" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Nafi' Hasballah Noor</h1>
      <p class="lead">D4 Manajemen Informatika | 19051397061 </p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,160L40,154.7C80,149,160,139,240,149.3C320,
        160,400,192,480,208C560,224,640,224,720,224C800,224,880,224,960,234.7C1040,245,1120,267
        ,1200,266.7C1280,267,1360,245,1400,234.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,
        320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,
        240,320C160,320,80,320,40,320L0,320Z">
        </path>
      </svg>
    </section>

    
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Tentang Saya</h2>
          </div>
        </div>
        <div class="row justify-content-md-center fs-5">
          <div class="col-md-4">
            <p> Saya adalah mahasiswa negeri surabaya semester 5 program studi D4 Manajemen Informatika angkatan tahun 2019.</p>
          </div>
          <div class="col-md-4">
            <p>Ketertarikan saya terhadap sesuatu sangatlah besar, tidak terkecuali dalam bidang IT, salah satunya saya sangat berminat di bidang robotika.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,288L40,266.7C80,245,160,203,240,181.3C320,160,400,160,480,170.7C560,181,640,203,720,208C800,213,880,203,960,202.7C1040,203,1120,213,1200,213.3C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>

    
    <section id="project">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Project</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb3">
            <div class="card">
              <img src=<?php echo e(asset('image/project1.jpeg')); ?> class="card-img-top" alt="project1">
              <div class="card-body">
                <p class="card-text">Project ini memiliki nama SSM dan bertujuan untuk menerima pesan dari masyarakat umum khususnya daerah Surabaya kepada pemerintah Surabaya</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src=<?php echo e(asset('image/project2.jpeg')); ?> class="card-img-top" alt="project2">
              <div class="card-body">
                <p class="card-text">Project ini memiliki nama Ringkas-net yang dimana web ini memiliki fungsi yaitu untuk menerima tulisan-tulisan dari user</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src=<?php echo e(asset('image/project3.jpeg')); ?> class="card-img-top" alt="project3">
              <div class="card-body">
                <p class="card-text">Projecy ini memiliki nama Man-go yang dimana web ini memiliki fungsi untuk mewadahi orang-orang yang berminat untuk belajar bahasa jepang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L40,138.7C80,117,160,75,240,80C320,85,400,139,480,170.7C560,203,640,213,720,208C800,203,880,181,960,181.3C1040,181,1120,203,1200,208C1280,213,1360,203,1400,197.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>

    
    <section id="galery">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Galery</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb3">
            <div class="card">
              <img src=<?php echo e(asset('image/Galery1.jpg')); ?> class="card-img-top" alt="galery1">
              <div class="card-body">
                <p class="card-text">Photo By <a href="https://www.instagram.com/nafihasballah/">Nafi' Hasballah Noor</a></p>
                <p class="card-text">At Depok, West Java, Indonesia </a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src=<?php echo e(asset('image/Galery2.JPG')); ?> class="card-img-top" alt="galery2">
              <div class="card-body">
                <p class="card-text">Photo By <a href="https://www.instagram.com/hidayatulquran_njoso/">Hidayatul Quran Rejoso</a></p>
                <p class="card-text">At PP. darul Ulum Rejoso, Jl. KH. Moh. As'ad Umar, South Wonokerto, Peterongan, Jombang Regency, East Java</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src=<?php echo e(asset('image/Galery3.jpg')); ?> class="card-img-top" alt="galery3">
              <div class="card-body">
                <p class="card-text">Photo By <a href="https://www.instagram.com/hidayatulquran_njoso/">Hidayatul Quran Rejoso</a></p>
                <p class="card-text">At PP. darul Ulum Rejoso, Jl. KH. Moh. As'ad Umar, South Wonokerto, Peterongan, Jombang Regency, East Java</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,192L40,181.3C80,171,160,149,240,154.7C320,160,400,192,480,208C560,224,640,224,720,213.3C800,203,880,181,960,197.3C1040,213,1120,267,1200,266.7C1280,267,1360,213,1400,186.7L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    
    
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form>
              <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">  
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
        <div class="row text-center mb-3 pt-2">
          <div class="col">
            <h5>Follow My Account Social Media at</h5>
          </div>
        </div>
        <div class="row justify-content-md-center fs-5 pb-5">
          <div class="col-md-1">
            <a href="https://www.instagram.com/nafihasballah/">
              <img src=<?php echo e(asset('image/ig.png')); ?> class="card-img-top" alt="galery1" style="max-width: 50px">
            </a>
          </div>
          <div class="col-md-1">
            <a href="https://wa.me/6285256217216">
              <img src=<?php echo e(asset('image/wa.png')); ?> class="card-img-top" alt="galery1" style="max-width: 50px">
            </a>
          </div>
          <div class="col-md-1">
            <a href="https://web.facebook.com/nafi.hasballah.1">
              <img src=<?php echo e(asset('image/fb.png')); ?> class="card-img-top" alt="galery1" style="max-width: 50px">
            </a>
          </div>
          <div class="col-md-1">
            <a href="https://twitter.com/nafihasballah">
              <img src=<?php echo e(asset('image/twitter.png')); ?> class="card-img-top" alt="galery1" style="max-width: 50px">
            </a>
          </div>
        </div>
      </div>
      
    </section>

    
    <footer class="bg-light footer-light text-center">
      <p>Create By <a href="https://www.instagram.com/nafihasballah/" class="fw-bold text-dark">Nafi' Hasballah</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html><?php /**PATH C:\xampp\htdocs\website-profile\resources\views/welcome.blade.php ENDPATH**/ ?>