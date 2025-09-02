<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
    .sidebar-transition {
        transition: all 0.3s ease;
    }

    .fade-in {
        animation: fadeIn 0.3s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .chart-bar {
        transition: height 0.5s ease;
    }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Sidebar Component -->
    @include('layouts.sidebar')

    <!-- Main Content -->
    <div class="ml-64 min-h-screen">
        <!-- Top Bar -->
        @include('layouts.header')

        <!-- Dashboard Section -->
        <div id="dashboard-section" class="section-content p-6">
                
            @yield('content')
            
        </div>
    </div>

   

    <script>
    // Navigation functionality
    // function showSection(sectionName) {
    //     // Hide all sections
    //     document.querySelectorAll('.section-content').forEach(section => {
    //         section.classList.add('hidden');
    //     });

    //     // Show selected section
    //     document.getElementById(sectionName + '-section').classList.remove('hidden');
    //     document.getElementById(sectionName + '-section').classList.add('fade-in');

    //     // Update page title
    //     const titles = {
    //         'dashboard': 'Dashboard',
    //         'users': 'Users Management',
    //         'posts': 'Posts Management',
    //         'analytics': 'Analytics',
    //         'settings': 'Settings',
    //         'logs': 'System Logs'
    //     };
    //     document.getElementById('page-title').textContent = titles[sectionName];

    //     // Update active nav item
    //     document.querySelectorAll('.nav-item').forEach(item => {
    //         item.classList.remove('active', 'bg-gray-800', 'text-white');
    //         item.classList.add('text-gray-300');
    //     });

    //     // Find the clicked nav item and make it active
    //     const clickedItem = event.target.closest('.nav-item');
    //     if (clickedItem) {
    //         clickedItem.classList.add('active', 'bg-gray-800', 'text-white');
    //         clickedItem.classList.remove('text-gray-300');
    //     }
    // }

    // Sidebar toggle
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.querySelector('.ml-64');

        if (sidebar.style.transform === 'translateX(-100%)') {
            sidebar.style.transform = 'translateX(0)';
            mainContent.style.marginLeft = '16rem';
        } else {
            sidebar.style.transform = 'translateX(-100%)';
            mainContent.style.marginLeft = '0';
        }
    }

    // Modal functions
    function showModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
        document.getElementById(modalId).classList.add('flex');
    }

    function hideModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
        document.getElementById(modalId).classList.remove('flex');
    }

    // Toggle switch functionality
    function toggleSwitch(button) {
        const span = button.querySelector('span');
        const isOn = button.classList.contains('bg-blue-600');

        if (isOn) {
            button.classList.remove('bg-blue-600');
            button.classList.add('bg-gray-200');
            span.classList.remove('translate-x-6');
            span.classList.add('translate-x-1');
        } else {
            button.classList.remove('bg-gray-200');
            button.classList.add('bg-blue-600');
            span.classList.remove('translate-x-1');
            span.classList.add('translate-x-6');
        }
    }

    // Responsive sidebar for mobile
    window.addEventListener('resize', function() {
        if (window.innerWidth < 1024) {
            document.getElementById('sidebar').style.transform = 'translateX(-100%)';
            document.querySelector('.ml-64').style.marginLeft = '0';
        } else {
            document.getElementById('sidebar').style.transform = 'translateX(0)';
            document.querySelector('.ml-64').style.marginLeft = '16rem';
        }
    });

    // Initialize responsive behavior
    if (window.innerWidth < 1024) {
        document.getElementById('sidebar').style.transform = 'translateX(-100%)';
        document.querySelector('.ml-64').style.marginLeft = '0';
    }

    // Logout function
    // function logout() {
    //     if (confirm('Are you sure you want to logout?')) {
    //         alert('Logged out successfully!');
    //         // In a real application, this would redirect to login page
    //         // window.location.href = '/login';
    //     }
    // }

    </script>
    
    <script>
    (function() {
        function c() {
            var b = a.contentDocument || a.contentWindow.document;
            if (b) {
                var d = b.createElement('script');
                d.innerHTML =
                    "window.__CF$cv$params={r:'9763fbb685490e6e',t:'MTc1NjM4NTkzOS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
                b.getElementsByTagName('head')[0].appendChild(d)
            }
        }
        if (document.body) {
            var a = document.createElement('iframe');
            a.height = 1;
            a.width = 1;
            a.style.position = 'absolute';
            a.style.top = 0;
            a.style.left = 0;
            a.style.border = 'none';
            a.style.visibility = 'hidden';
            document.body.appendChild(a);
            if ('loading' !== document.readyState) c();
            else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c);
            else {
                var e = document.onreadystatechange || function() {};
                document.onreadystatechange = function(b) {
                    e(b);
                    'loading' !== document.readyState && (document.onreadystatechange = e, c())
                }
            }
        }
    })();
    </script>
</body>

</html>