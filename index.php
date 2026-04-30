<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
</head>
<script src="https://cdn.tailwindcss.com"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'brand-navy': '#1a2a4a',
                    'brand-dark': '#152238',
                    'brand-red':  '#cc0000',
                    'brand-gold': '#f0c040',
                },
                fontFamily: {
                    'poppins': ['"Poppins"', 'sans-serif'],
                },
                keyframes: {
                    fadeUp: {
                        '0%':   { opacity: '0', transform: 'translateY(28px)' },
                        '100%': { opacity: '1', transform: 'translateY(0)' },
                    },
                },
                animation: {
                    'fade-up':       'fadeUp 0.7s ease forwards',
                    'fade-up-delay': 'fadeUp 0.7s ease 0.25s forwards',
                },
                boxShadow: {
                    'photo': '6px 6px 0px #cc0000',
                },
            }
        }
    }
</script>
<body class="bg-gray-100 font-poppins">
    <?php include "./navbar.php"; ?>

    <!-- Hero Section -->
    <section class="w-full overflow-hidden
                    h-auto md:h-[700px]">
        <img
            src="./assets/hero2.webp"
            alt="Hero"
            class="w-full
                   h-auto object-contain
                   md:h-full md:object-cover"
        />
    </section>


    <!-- About us  -->
     <section class="font-poppins bg-[#f2f2f2] py-16 px-4 sm:px-8 lg:px-16">
  <div class="max-w-6xl mx-auto">
 
    <!-- Section Label -->
    <div class="flex items-center gap-3 mb-3">
      <div class="w-8 h-1 bg-red-600 rounded-full"></div>
      <span class="text-red-600 font-semibold text-sm uppercase tracking-widest">Who We Are</span>
    </div>
 
    <!-- Section Heading -->
    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-10 uppercase tracking-wide">
      About <span class="text-red-600">Us</span>
    </h2>
 
    <!-- Top Grid: Text Left + Image Right -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-start mb-12">
 
      <!-- Left: Text (3 cols) -->
      <div class="lg:col-span-3 space-y-5">
 
        <p class="text-lg sm:text-xl font-bold text-[#17057C] leading-snug border-l-4 border-red-600 pl-4">
          Welcome to Secure Services. We are a recognized and professionally qualified security and manpower service provider.
        </p>
 
        <p class="text-sm sm:text-[15px] text-gray-500 leading-relaxed">
          The threats faced by businesses today are varied and change constantly. These threats are a risk and it is essential that you have a security provider who has the expertise and resource to understand the threats and minimize the risk so that you can focus on what really matters.
        </p>
 
        <!-- Stats Row -->
        <div class="grid grid-cols-3 gap-4 py-5 border-y border-gray-200">
          <div class="text-center">
            <p class="text-2xl sm:text-3xl font-extrabold text-red-600">18+</p>
            <p class="text-xs text-gray-500 font-medium mt-1">Years of Service</p>
          </div>
          <div class="text-center border-x border-gray-200">
            <p class="text-2xl sm:text-3xl font-extrabold text-red-600">16</p>
            <p class="text-xs text-gray-500 font-medium mt-1">Operations Executed</p>
          </div>
          <div class="text-center">
            <p class="text-2xl sm:text-3xl font-extrabold text-red-600">2x</p>
            <p class="text-xs text-gray-500 font-medium mt-1">Army Staff Award</p>
          </div>
        </div>
 
        <p class="text-sm sm:text-[15px] text-gray-600 leading-relaxed">
          At Secure Services, we guarantee a safe and secured environment to our esteemed clients through prompt services and dedicated control of our professional manpower deployed at various client sites. As an ex-serviceman of the Indian Army, I have always strived towards keeping our Nation safe. During the 18 years of contribution to the army I had exclusive experience in the counter-insurgency area (JAMMU AND KASHMIR) in which I performed <span class="font-semibold text-gray-800">'COVERT OPERATION IN MILITARY INTELLIGENCE'</span> and was awarded TWICE by the CHIEF OF THE ARMY STAFF. I incorporated Secure Services after my retirement to ensure I fulfill this commitment by securing civic lives.
        </p>
 
      </div>
 
      <!-- Right: Image (2 cols) -->
      <div class="lg:col-span-2 w-full">
        <div class="relative">
          <div class="absolute -top-3 -right-3 w-full h-full border-2 border-red-600 rounded-lg z-0"></div>
          <img
            src="./assets/security-guard-services-541-removebg-preview.png"
            alt="Security Guards"
            class="relative z-10 w-full h-auto rounded-lg object-cover shadow-lg"
          />
          <div class="absolute bottom-4 left-4 z-20 bg-red-600 text-white text-xs font-bold px-3 py-2 rounded-md shadow-md uppercase tracking-wide">
            Security Guards
          </div>
        </div>
      </div>
 
    </div>
 
    <!-- Divider with Label -->
    <div class="flex items-center gap-4 mb-10">
      <div class="flex-1 h-px bg-gray-300"></div>
      <span class="text-xs font-semibold text-gray-400 uppercase tracking-widest whitespace-nowrap">Meet Our Team</span>
      <div class="flex-1 h-px bg-gray-300"></div>
    </div>
 
    <!-- Team Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
 
      <!-- Member 1 -->
      <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
        <div class="relative overflow-hidden h-64 sm:h-60 lg:h-72 bg-gray-100">
          <img
            src="./assets/about1.png"
            alt="Shri Suresh Kakde"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
        <div class="px-5 py-4 border-t-4 border-red-600">
          <p class="font-bold text-gray-900 text-base">Shri Suresh Kakde</p>
          <p class="text-red-500 text-xs font-semibold uppercase tracking-wider mt-1">Ex-Indian Army</p>
        </div>
      </div>
 
      <!-- Member 2 -->
      <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
        <div class="relative overflow-hidden h-64 sm:h-60 lg:h-72 bg-gray-100">
          <img
            src="./assets/image 1.png"
            alt="Jay Kakde"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
        <div class="px-5 py-4 border-t-4 border-red-600">
          <p class="font-bold text-gray-900 text-base uppercase">Jay Kakde</p>
          <p class="text-red-500 text-xs font-semibold uppercase tracking-wider mt-1">Designation</p>
        </div>
      </div>
 
      <!-- Member 3 -->
      <div class="group bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300">
        <div class="relative overflow-hidden h-64 sm:h-60 lg:h-72 bg-gray-100">
          <img
            src="./assets/image 2.png"
            alt="Pranaya Khade"
            class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
          />
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
        </div>
        <div class="px-5 py-4 border-t-4 border-red-600">
          <p class="font-bold text-gray-900 text-base uppercase">Pranaya Khade</p>
          <p class="text-red-500 text-xs font-semibold uppercase tracking-wider mt-1">Marketing Manager</p>
        </div>
      </div>
 
    </div>
  </div>

  <!-- Mission / Vision / Operations Cards -->
    <div class="mt-14 max-w-6xl mx-auto">
 
      <!-- Top Row: Mission + Vision -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
 
        <!-- Mission -->
        <div class="bg-[#1a2152] rounded-lg p-7 hover:brightness-110 transition-all duration-300">
          <h3 class="text-white font-extrabold text-base uppercase tracking-widest mb-3">Mission</h3>
          <div class="w-8 h-[3px] bg-red-500 mb-5 rounded-full"></div>
          <p class="text-gray-300 text-sm leading-relaxed">
            To be the No. 1 total security solutions provider in India and be recognized as a global brand in the International security Industry.
          </p>
        </div>
 
        <!-- Vision -->
        <div class="bg-[#1a2152] rounded-lg p-7 hover:brightness-110 transition-all duration-300">
          <h3 class="text-white font-extrabold text-base uppercase tracking-widest mb-3">Vision</h3>
          <div class="w-8 h-[3px] bg-red-500 mb-5 rounded-full"></div>
          <p class="text-gray-300 text-sm leading-relaxed mb-3">
            We will strive towards delighting our customers by providing committed, ethical, efficient &amp; cost-effective services while constantly adding value through innovations in our services and upgrading of our skills.
          </p>
          <p class="text-gray-300 text-sm leading-relaxed">
            We will offer our human assets a challenging &amp; healthy work environment where individuals are nurtured, performances are rewarded and opportunities are provided for continues growth &amp; development.
          </p>
        </div>
 
      </div>
 
      <!-- Bottom Row: Operations centered -->
      <div class="flex justify-center">
        <div class="bg-[#1a2152] rounded-lg p-7 hover:brightness-110 transition-all duration-300 w-full sm:w-1/2">
          <h3 class="text-white font-extrabold text-base uppercase tracking-widest mb-3">Operations</h3>
          <div class="w-8 h-[3px] bg-red-500 mb-5 rounded-full"></div>
          <p class="text-gray-300 text-sm leading-relaxed">
            We keep an eye before commencing operations, we confer with our clients to define Standard Operating Procedures. We conduct round the clock patrolling at regular intervals to ensure efficiency and alertness through our Central Monitoring Station.
          </p>
        </div>
      </div>
 
    </div>
 
  </div>
</section>



<section class="font-poppins bg-[#08043F] py-16 px-6 sm:px-12 lg:px-24 relative overflow-hidden">
 
  <!-- Decorative background circles -->
  <div class="absolute top-0 left-0 w-72 h-72 bg-white/[0.02] rounded-full -translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-white/[0.02] rounded-full translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
 
  <!-- Section Label -->
  <div class="max-w-4xl mx-auto mb-12 text-center">
    <div class="flex items-center justify-center gap-3 mb-2">
      <div class="w-8 h-[2px] bg-red-500"></div>
      <span class="text-red-400 text-xs font-semibold uppercase tracking-[0.2em]">Expert Leadership</span>
      <div class="w-8 h-[2px] bg-red-500"></div>
    </div>
    <h2 class="text-white text-2xl sm:text-3xl font-extrabold uppercase tracking-widest">Our Training Officers</h2>
  </div>
 
  <div class="max-w-4xl mx-auto space-y-6">
 
    <!-- Officer 1: Image Left, Text Right -->
    <div class="flex flex-col sm:flex-row items-center gap-8 sm:gap-12 bg-white/[0.04] border border-white/10 rounded-2xl px-8 py-10 hover:bg-white/[0.07] transition-all duration-300">
 
      <!-- Image with frame -->
      <div class="flex-shrink-0 relative">
        <div class="absolute -top-2 -left-2 w-full h-full border-2 border-red-600/60 rounded-lg z-0"></div>
        <div class="relative z-10 w-40 sm:w-44 lg:w-48 overflow-hidden rounded-lg shadow-2xl">
          <img
            src="./assets/image 3.png"
            alt="Training Officer 1"
            class="w-full h-auto object-cover"
          />
        </div>
        <!-- Red dot badge -->
        <div class="absolute -bottom-2 -right-2 z-20 w-7 h-7 bg-red-600 rounded-full flex items-center justify-center shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
      </div>
 
      <!-- Text -->
      <div class="flex-1 text-center sm:text-left">
        <div class="flex items-center gap-2 mb-1 justify-center sm:justify-start">
          <div class="w-5 h-[2px] bg-red-500"></div>
          <span class="text-red-400 text-[11px] font-semibold uppercase tracking-widest">Officer I</span>
        </div>
        <h3 class="text-white font-bold text-lg sm:text-xl uppercase tracking-wider leading-snug mb-4">
          Our Training Officers
        </h3>
        <p class="text-gray-400 text-sm leading-loose">
          We will strive towards delighting our customers by providing committed, ethical, efficient &amp; cost-effective services while constantly adding value through innovations in our services and upgrading of our skills. We will offer our human assets a challenging &amp; healthy work environment where individuals are nurtured, performances are rewarded and opportunities are provided for continues growth &amp; development.
        </p>
      </div>
 
    </div>
 
    <!-- Officer 2: Text Left, Image Right -->
    <div class="flex flex-col-reverse sm:flex-row items-center gap-8 sm:gap-12 bg-white/[0.04] border border-white/10 rounded-2xl px-8 py-10 hover:bg-white/[0.07] transition-all duration-300">
 
      <!-- Text -->
      <div class="flex-1 text-center sm:text-right">
        <div class="flex items-center gap-2 mb-1 justify-center sm:justify-end">
          <span class="text-red-400 text-[11px] font-semibold uppercase tracking-widest">Officer II</span>
          <div class="w-5 h-[2px] bg-red-500"></div>
        </div>
        <h3 class="text-white font-bold text-lg sm:text-xl uppercase tracking-wider leading-snug mb-4">
          Our Training Officers
        </h3>
        <p class="text-gray-400 text-sm leading-loose">
          We will strive towards delighting our customers by providing committed, ethical, efficient &amp; cost-effective services while constantly adding value through innovations in our services and upgrading of our skills. We will offer our human assets a challenging &amp; healthy work environment where individuals are nurtured, performances are rewarded and opportunities are provided for continues growth &amp; development.
        </p>
      </div>
 
      <!-- Image with frame -->
      <div class="flex-shrink-0 relative">
        <div class="absolute -top-2 -right-2 w-full h-full border-2 border-red-600/60 rounded-lg z-0"></div>
        <div class="relative z-10 w-40 sm:w-44 lg:w-48 overflow-hidden rounded-lg shadow-2xl">
          <img
            src="./assets/image 4.png"
            alt="Training Officer 2"
            class="w-full h-auto object-cover"
          />
        </div>
        <!-- Red dot badge -->
        <div class="absolute -bottom-2 -left-2 z-20 w-7 h-7 bg-red-600 rounded-full flex items-center justify-center shadow-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
          </svg>
        </div>
      </div>
 
    </div>
 
  </div>
</section>





<section class="font-poppins bg-white py-14 px-4 sm:px-8 lg:px-16">
  <div class="max-w-5xl mx-auto">
 
    <!-- Section Label -->
    <div class="flex items-center justify-center gap-3 mb-2">
      <div class="w-8 h-[2px] bg-red-600"></div>
      <span class="text-red-600 text-xs font-semibold uppercase tracking-[0.2em]">Our Work</span>
      <div class="w-8 h-[2px] bg-red-600"></div>
    </div>
    <h2 class="text-center text-2xl sm:text-3xl font-extrabold text-gray-900 uppercase tracking-widest mb-10">Gallery</h2>
 
    <!-- Row 1: Two equal images -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
 
      <!-- Logo badge centered between row 1 images — replicated via overlay -->
      <div class="relative overflow-hidden rounded-md group">
        <img src="./assets/gallery1.png" alt="Security Training" class="w-full h-52 sm:h-56 lg:h-64 object-cover group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
      </div>
 
      <div class="relative overflow-hidden rounded-md group">
        <img src="./assets/gallery2.png" alt="Fire Training" class="w-full h-52 sm:h-56 lg:h-64 object-cover group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
        <!-- Logo badge top-left corner between the two top images -->
      </div>
 
    </div>
 
    <!-- Row 2: Two images, left wider -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
 
      <div class="relative overflow-hidden rounded-md group">
        <img src="./assets/gallery3.png" alt="Team Briefing" class="w-full h-52 sm:h-56 lg:h-60 object-cover group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
      </div>
 
      <div class="relative overflow-hidden rounded-md group border-2 border-[#3ab4f2]">
        <img src="./assets/gallery4.png" alt="Guard Parade" class="w-full h-52 sm:h-56 lg:h-60 object-cover group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
      </div>
 
    </div>
 
    <!-- Row 3: Two images, left wider -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
 
      <div class="relative overflow-hidden rounded-md group">
        <img src="./assets/gallery5.png" alt="Night Patrol" class="w-full h-52 sm:h-56 lg:h-60 object-cover object-top group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
      
      </div>
 
      <div class="relative overflow-hidden rounded-md group">
        <img src="./assets/gallery6.png" alt="Saluting Guards" class="w-full h-52 sm:h-56 lg:h-60 object-cover group-hover:scale-105 transition-transform duration-500"/>
        <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-all duration-300"></div>
      </div>
 
    </div>
 
  </div>
</section>


<section class="font-poppins bg-gray-50 py-16 px-4 sm:px-8 lg:px-16 relative overflow-hidden">
 
  <!-- Subtle decorative blobs -->
  <div class="absolute top-0 right-0 w-80 h-80 bg-red-50 rounded-full translate-x-1/2 -translate-y-1/2 pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 w-96 h-96 bg-red-50 rounded-full -translate-x-1/3 translate-y-1/3 pointer-events-none"></div>
 
  <div class="max-w-6xl mx-auto relative z-10">
 
    <!-- Section Header -->
    <div class="text-center mb-12">
      <div class="flex items-center justify-center gap-3 mb-2">
        <div class="w-8 h-[2px] bg-red-600"></div>
        <span class="text-red-600 text-xs font-semibold uppercase tracking-[0.2em]">Get In Touch</span>
        <div class="w-8 h-[2px] bg-red-600"></div>
      </div>
      <h2 class="text-gray-900 text-2xl sm:text-3xl font-extrabold uppercase tracking-widest">
        Contact <span class="text-red-600">Us</span>
      </h2>
      <p class="text-gray-500 text-sm mt-3 max-w-md mx-auto leading-relaxed">
        Reach out to us for any security requirements or inquiries. Our team is available 24/7.
      </p>
    </div>
 
    <!-- Main Grid: Info Left + Form Right -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 items-start">
 
      <!-- LEFT: Contact Detail Cards -->
      <div class="lg:col-span-2 space-y-4">
 
        <!-- Address -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 flex gap-4 items-start shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
          <div class="flex-shrink-0 w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center shadow-md">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
          </div>
          <div>
            <p class="text-gray-900 font-semibold text-sm uppercase tracking-wider mb-1">Our Office</p>
            <p class="text-gray-500 text-sm leading-relaxed">123, Secure Services Building,<br/>Near Main Gate, Mumbai,<br/>Maharashtra – 400001, India</p>
          </div>
        </div>
 
        <!-- Phone -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 flex gap-4 items-start shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
          <div class="flex-shrink-0 w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center shadow-md">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </div>
          <div>
            <p class="text-gray-900 font-semibold text-sm uppercase tracking-wider mb-1">Phone</p>
            <p class="text-gray-500 text-sm">+91 98765 43210</p>
            <p class="text-gray-500 text-sm">+91 91234 56789</p>
          </div>
        </div>
 
        <!-- Email -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 flex gap-4 items-start shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
          <div class="flex-shrink-0 w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center shadow-md">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
          </div>
          <div>
            <p class="text-gray-900 font-semibold text-sm uppercase tracking-wider mb-1">Email</p>
            <p class="text-gray-500 text-sm">info@secureservices.in</p>
            <p class="text-gray-500 text-sm">support@secureservices.in</p>
          </div>
        </div>
 
        <!-- Working Hours -->
        <div class="bg-white border border-gray-100 rounded-xl p-6 flex gap-4 items-start shadow-sm hover:shadow-md hover:-translate-y-0.5 transition-all duration-300">
          <div class="flex-shrink-0 w-11 h-11 bg-red-600 rounded-lg flex items-center justify-center shadow-md">
            <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <div>
            <p class="text-gray-900 font-semibold text-sm uppercase tracking-wider mb-1">Working Hours</p>
            <p class="text-gray-500 text-sm">Mon – Sat: 9:00 AM – 7:00 PM</p>
            <p class="text-red-600 text-sm font-semibold">24/7 Emergency Support</p>
          </div>
        </div>
 
      </div>
 
      <!-- RIGHT: Contact Form -->
      <div class="lg:col-span-3 bg-white border border-gray-100 rounded-2xl p-8 sm:p-10 shadow-sm">
 
        <h3 class="text-gray-900 font-bold text-lg uppercase tracking-wider mb-1">Send Us a Message</h3>
        <div class="w-10 h-[3px] bg-red-600 rounded-full mb-7"></div>
 
        <div class="space-y-5">
 
          <!-- Name + Phone -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
              <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Full Name</label>
              <input
                type="text"
                placeholder="John Doe"
                class="w-full bg-gray-50 border border-gray-200 text-gray-800 placeholder-gray-400 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200"
              />
            </div>
            <div>
              <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Phone Number</label>
              <input
                type="tel"
                placeholder="+91 00000 00000"
                class="w-full bg-gray-50 border border-gray-200 text-gray-800 placeholder-gray-400 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200"
              />
            </div>
          </div>
 
          <!-- Email -->
          <div>
            <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Email Address</label>
            <input
              type="email"
              placeholder="you@example.com"
              class="w-full bg-gray-50 border border-gray-200 text-gray-800 placeholder-gray-400 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200"
            />
          </div>
 
          <!-- Subject -->
          <div>
            <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Subject</label>
            <input
              type="text"
              placeholder="Security Requirement / Inquiry"
              class="w-full bg-gray-50 border border-gray-200 text-gray-800 placeholder-gray-400 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200"
            />
          </div>
 
          <!-- Service Type -->
          <div>
            <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Service Required</label>
            <select class="w-full bg-gray-50 border border-gray-200 text-gray-500 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200 appearance-none">
              <option value="" disabled selected>Select a service...</option>
              <option class="text-gray-800">Security Guard Services</option>
              <option class="text-gray-800">Fire Safety Training</option>
              <option class="text-gray-800">Corporate Security</option>
              <option class="text-gray-800">Event Security</option>
              <option class="text-gray-800">Other</option>
            </select>
          </div>
 
          <!-- Message -->
          <div>
            <label class="text-gray-600 text-xs font-semibold uppercase tracking-wider mb-2 block">Message</label>
            <textarea
              rows="4"
              placeholder="Tell us about your security requirements..."
              class="w-full bg-gray-50 border border-gray-200 text-gray-800 placeholder-gray-400 text-sm rounded-lg px-4 py-3 outline-none focus:border-red-500 focus:bg-white transition-all duration-200 resize-none"
            ></textarea>
          </div>
 
          <!-- Submit -->
          <button
            type="button"
            class="w-full bg-red-600 hover:bg-red-700 active:scale-[0.98] text-white font-bold text-sm uppercase tracking-widest py-4 rounded-lg shadow-md shadow-red-200 transition-all duration-200"
          >
            Send Message
          </button>
 
        </div>
      </div>
 
    </div>
 
    
 
  </div>
</section>
<?php 
include "./footer.php"
?>
</body>
</html>