<?php
// navbar.php - Responsive Navbar using Tailwind CSS + Poppins Font
$current_page = basename($_SERVER['PHP_SELF'], '.php');

$nav_links = [
    ['label' => 'HOME',         'href' => 'index.php'],
    ['label' => 'ABOUT US',     'href' => 'about.php'],
    ['label' => 'OUR SERVICES', 'href' => 'services.php'],
    ['label' => 'CONTACT US',   'href' => 'contact.php'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'nav-red': '#cc0000',
                    },
                    fontFamily: {
                        'poppins': ['"Poppins"', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-white font-poppins">

<!-- ===== NAVBAR ===== -->
<nav class="bg-gray-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-center h-20">

            <!-- Logo (absolute left) -->
            <div class="absolute left-0">
                <a href="index.php">
                    <img
                        src="./assets/sslogo.png"
                        alt="Logo"
                        class="h-20 w-auto object-contain"
                    />
                </a>
            </div>

            <!-- Desktop Nav Links (centered) -->
            <div class="hidden md:flex items-center space-x-10">
                <?php foreach ($nav_links as $link): ?>
                    <a
                        href="<?php echo htmlspecialchars($link['href']); ?>"
                        class="font-poppins font-bold text-sm tracking-widest transition-colors duration-200
                               <?php echo (str_replace('.php', '', $link['href']) === $current_page || ($current_page === 'navbar' && $link['href'] === 'index.php'))
                                    ? 'text-nav-red border-b-2 border-nav-red pb-0.5'
                                    : 'text-nav-red hover:text-red-800'; ?>"
                    >
                        <?php echo htmlspecialchars($link['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Hamburger Button (absolute right) -->
            <div class="absolute right-0 md:hidden flex items-center">
                <button
                    id="mobile-menu-btn"
                    type="button"
                    class="text-nav-red hover:text-red-800 focus:outline-none"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                >
                    <!-- Hamburger Icon -->
                    <svg id="icon-open" class="h-7 w-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!-- Close Icon -->
                    <svg id="icon-close" class="h-7 w-7 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                              d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-200 border-t border-gray-300">
        <div class="px-4 py-3 space-y-1">
            <?php foreach ($nav_links as $link): ?>
                <a
                    href="<?php echo htmlspecialchars($link['href']); ?>"
                    class="block font-poppins font-bold text-sm tracking-widest text-center py-2 px-3 rounded transition-colors duration-200
                           <?php echo (str_replace('.php', '', $link['href']) === $current_page)
                                ? 'text-nav-red bg-gray-300'
                                : 'text-nav-red hover:bg-gray-300'; ?>"
                >
                    <?php echo htmlspecialchars($link['label']); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</nav>
<!-- ===== END NAVBAR ===== -->


<!-- ===== TOGGLE SCRIPT ===== -->
<script>
    const btn       = document.getElementById('mobile-menu-btn');
    const menu      = document.getElementById('mobile-menu');
    const iconOpen  = document.getElementById('icon-open');
    const iconClose = document.getElementById('icon-close');

    btn.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');

        menu.classList.toggle('hidden', isOpen);
        iconOpen.classList.toggle('hidden', !isOpen);
        iconClose.classList.toggle('hidden', isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
    });
</script>

</body>
</html>