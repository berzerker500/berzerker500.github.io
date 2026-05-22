<?php
// index.php
?>

<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>พัฒนเจริญกิจคอเปอร์เรชั่น จำกัด</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body{
      font-family:'Kanit',sans-serif;
    }

    .hero-bg{
      background:
      linear-gradient(to right, rgba(0,0,0,0.75), rgba(0,0,0,0.55)),
      url('https://uploads.onecompiler.io/44pz3xmgf/44pz8qmge/S__14376962.jpg');

      background-size:cover;
      background-position:center;
    }

    .gallery-image{
      transition:0.4s ease;
    }

    .gallery-image:hover{
      transform:scale(1.05);
    }

    html{
      scroll-behavior:smooth;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- Navbar -->
<header class="fixed top-0 left-0 w-full bg-white/95 backdrop-blur shadow z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <div>
      <h1 class="text-2xl font-bold text-blue-900">
        พัฒนเจริญกิจคอเปอร์เรชั่น จำกัด
      </h1>
    </div>

    <nav class="hidden md:flex gap-8 font-medium text-gray-700">
      <a href="#home" class="hover:text-blue-700 transition">หน้าแรก</a>
      <a href="#about" class="hover:text-blue-700 transition">เกี่ยวกับเรา</a>
      <a href="#services" class="hover:text-blue-700 transition">บริการ</a>
      <a href="#projects" class="hover:text-blue-700 transition">ผลงาน</a>
      <a href="#contact" class="hover:text-blue-700 transition">ติดต่อ</a>
    </nav>

  </div>
</header>

<!-- Hero -->
<section id="home" class="hero-bg min-h-screen flex items-center text-white">

  <div class="max-w-7xl mx-auto px-6">

    <div class="max-w-3xl">

      <h2 class="text-5xl md:text-7xl font-bold leading-tight mb-6">
        บริษัทก่อสร้างและพัฒนาโครงการครบวงจร
      </h2>

      <p class="text-lg md:text-xl text-gray-200 leading-relaxed mb-8">
        ให้บริการงานก่อสร้าง งานระบบวิศวกรรม งานโครงสร้าง
        และบริหารโครงการแบบครบวงจร ด้วยทีมงานมืออาชีพ
        พร้อมมาตรฐานคุณภาพและความปลอดภัยสูงสุด
      </p>

      <div class="flex flex-wrap gap-4">

        <a href="#contact"
          class="bg-blue-700 hover:bg-blue-800 transition px-8 py-4 rounded-xl text-lg font-medium shadow-lg">
          ติดต่อเรา
        </a>

        <a href="#projects"
          class="border border-white hover:bg-white hover:text-black transition px-8 py-4 rounded-xl text-lg font-medium">
          ดูผลงาน
        </a>

      </div>

    </div>

  </div>

</section>

<!-- About -->
<section id="about" class="py-24 bg-white">

  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center">

    <div>

      <span class="text-blue-700 font-semibold uppercase tracking-widest">
        About Us
      </span>

      <h2 class="text-4xl font-bold mt-4 mb-6 text-gray-900">
        พัฒนเจริญกิจคอเปอร์เรชั่น จำกัด
      </h2>

      <p class="text-gray-600 text-lg leading-relaxed mb-6">
        เราเป็นบริษัทที่เชี่ยวชาญด้านงานก่อสร้าง งานวิศวกรรม
        และบริหารโครงการ โดยมุ่งเน้นคุณภาพ ความตรงต่อเวลา
        และความพึงพอใจของลูกค้าเป็นสำคัญ
      </p>

      <p class="text-gray-600 text-lg leading-relaxed mb-8">
        ด้วยประสบการณ์และทีมงานมืออาชีพ
        เราพร้อมให้บริการทั้งภาครัฐและเอกชน
        ครอบคลุมตั้งแต่งานออกแบบ วางแผน
        และดำเนินงานก่อสร้างอย่างครบวงจร
      </p>

      <div class="grid grid-cols-2 gap-6">

        <div class="bg-gray-100 p-6 rounded-2xl">
          <h3 class="text-3xl font-bold text-blue-800 mb-2">10+</h3>
          <p class="text-gray-600">ปีประสบการณ์</p>
        </div>

        <div class="bg-gray-100 p-6 rounded-2xl">
          <h3 class="text-3xl font-bold text-blue-800 mb-2">200+</h3>
          <p class="text-gray-600">โครงการสำเร็จ</p>
        </div>

      </div>

    </div>

    <div>

      <img
        src="https://uploads.onecompiler.io/44pz3xmgf/44pz8qmge/S__14376963.jpg"
        class="rounded-3xl shadow-2xl w-full h-[600px] object-cover"
        alt="company"
      >

    </div>

  </div>

</section>

<!-- Services -->
<section id="services" class="py-24 bg-gray-100">

  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-16">

      <span class="text-blue-700 font-semibold uppercase tracking-widest">
        Our Services
      </span>

      <h2 class="text-4xl font-bold mt-4">
        บริการของเรา
      </h2>

    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Card -->
      <div class="bg-white p-8 rounded-3xl shadow hover:shadow-2xl transition">

        <div class="text-5xl mb-6">🏗️</div>

        <h3 class="text-2xl font-bold mb-4">
          งานก่อสร้าง
        </h3>

        <p class="text-gray-600 leading-relaxed">
          รับเหมาก่อสร้างอาคาร โรงงาน โครงการภาครัฐและเอกชน
          พร้อมทีมงานคุณภาพ
        </p>

      </div>

      <!-- Card -->
      <div class="bg-white p-8 rounded-3xl shadow hover:shadow-2xl transition">

        <div class="text-5xl mb-6">⚙️</div>

        <h3 class="text-2xl font-bold mb-4">
          งานระบบวิศวกรรม
        </h3>

        <p class="text-gray-600 leading-relaxed">
          งานระบบไฟฟ้า ประปา สุขาภิบาล
          และระบบอุตสาหกรรมครบวงจร
        </p>

      </div>

      <!-- Card -->
      <div class="bg-white p-8 rounded-3xl shadow hover:shadow-2xl transition">

        <div class="text-5xl mb-6">📐</div>

        <h3 class="text-2xl font-bold mb-4">
          ออกแบบและวางแผน
        </h3>

        <p class="text-gray-600 leading-relaxed">
          ให้คำปรึกษา ออกแบบ และบริหารโครงการ
          โดยทีมวิศวกรและสถาปนิกมืออาชีพ
        </p>

      </div>

    </div>

  </div>

</section>

<!-- Projects -->
<section id="projects" class="py-24 bg-white">

  <div class="max-w-7xl mx-auto px-6">

    <div class="text-center mb-16">

      <span class="text-blue-700 font-semibold uppercase tracking-widest">
        Portfolio
      </span>

      <h2 class="text-4xl font-bold mt-4">
        ผลงานของเรา
      </h2>

    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Project -->
      <div class="overflow-hidden rounded-3xl shadow-lg bg-white">

        <img
          src="https://uploads.onecompiler.io/44pz3xmgf/44pz25jck/15499.jpg"
          class="gallery-image w-full h-72 object-cover"
          alt=""
        >

        <div class="p-6">

          <h3 class="text-2xl font-bold mb-3">
            โครงการก่อสร้างอาคาร
          </h3>

          <p class="text-gray-600">
            งานก่อสร้างอาคารสำนักงานและพื้นที่เชิงพาณิชย์มาตรฐานสูง
          </p>

        </div>

      </div>

      <!-- Project -->
      <div class="overflow-hidden rounded-3xl shadow-lg bg-white">

        <img
          src="https://uploads.onecompiler.io/44pz3xmgf/44pz8qmge/S__14376964.jpg"
          class="gallery-image w-full h-72 object-cover"
          alt=""
        >

        <div class="p-6">

          <h3 class="text-2xl font-bold mb-3">
            งานโรงงานอุตสาหกรรม
          </h3>

          <p class="text-gray-600">
            ออกแบบและก่อสร้างโรงงานพร้อมระบบวิศวกรรมครบวงจร
          </p>

        </div>

      </div>

      <!-- Project -->
      <div class="overflow-hidden rounded-3xl shadow-lg bg-white">

        <img
          src="https://uploads.onecompiler.io/44pz3xmgf/44pz8qmge/S__14376965.jpg"
          class="gallery-image w-full h-72 object-cover"
          alt=""
        >

        <div class="p-6">

          <h3 class="text-2xl font-bold mb-3">
            โครงการโครงสร้างพื้นฐาน
          </h3>

          <p class="text-gray-600">
            งานก่อสร้างและพัฒนาโครงสร้างพื้นฐานเพื่อรองรับการเติบโต
          </p>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- Contact -->
<section id="contact" class="py-24 bg-blue-900 text-white">

  <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16">

    <!-- Left -->
    <div>

      <span class="uppercase tracking-widest text-blue-200 font-semibold">
        Contact
      </span>

      <h2 class="text-4xl font-bold mt-4 mb-6">
        ติดต่อเรา
      </h2>

      <p class="text-blue-100 text-lg leading-relaxed mb-8">
        หากต้องการสอบถามข้อมูลเพิ่มเติม
        หรือต้องการปรึกษาเกี่ยวกับโครงการ
        สามารถติดต่อทีมงานของเราได้
      </p>

      <div class="space-y-5 text-lg">

        <div>
          📍 ที่อยู่:
          <a
            href="https://maps.google.com/?q=95 หมู่ 2 โคกขมิ้น วังสะพุง เลย"
            target="_blank"
            class="underline hover:text-blue-300"
          >
            95 หมู่ 2 โคกขมิ้น วังสะพุง เลย
          </a>
        </div>

        <div>
          📞 โทร:
          <a href="tel:0807290557"
            class="underline hover:text-blue-300">
            080-729-0557
          </a>
        </div>

        <div>
          ✉️ Email:
          <a href="mailto:manager.pattanakit@gmail.com"
            class="underline hover:text-blue-300">
            manager.pattanakit@gmail.com
          </a>
        </div>

      </div>

    </div>

    <!-- Form -->
    <div class="bg-white rounded-3xl p-8 text-gray-800 shadow-2xl">

      <h3 class="text-2xl font-bold mb-6">
        ส่งข้อความหาเรา
      </h3>

      <form action="sendmail.php" method="POST" class="space-y-5">

        <input
          type="text"
          name="name"
          placeholder="ชื่อของคุณ"
          required
          class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-700"
        >

        <input
          type="email"
          name="email"
          placeholder="อีเมล"
          required
          class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-700"
        >

        <input
          type="tel"
          name="phone"
          placeholder="เบอร์โทร"
          required
          class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-700"
        >

        <textarea
          rows="5"
          name="message"
          placeholder="รายละเอียดข้อความ"
          required
          class="w-full border border-gray-300 rounded-xl px-5 py-4 focus:outline-none focus:ring-2 focus:ring-blue-700"
        ></textarea>

        <button
          type="submit"
          class="bg-blue-800 hover:bg-blue-900 transition text-white px-8 py-4 rounded-xl font-medium w-full"
        >
          ส่งข้อความ
        </button>

      </form>

    </div>

  </div>

</section>

<!-- Footer -->
<footer class="bg-black text-gray-400 py-8 text-center">

  <p>
    © <?php echo date("Y"); ?>
    พัฒนเจริญกิจคอเปอร์เรชั่น จำกัด
    | All Rights Reserved
  </p>

</footer>

</body>
</html>