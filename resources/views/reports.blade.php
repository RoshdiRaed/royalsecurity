<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Security | Reports</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar {
            transition: transform 0.3s ease;
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .nav-link {
            position: relative;
            transition: color 0.3s ease;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #facc15;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-primary:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <header class="bg-gray-900 text-white shadow-lg fixed top-0 w-full z-50" data-aos="fade-down">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="text-yellow-400 mr-4 md:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="./dashboard.html" class="text-2xl font-bold text-yellow-400 tracking-tight">Royal<span class="text-white">Security</span></a>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <img src="./img/avatar.png" alt="User Avatar" class="w-8 h-8 rounded-full mr-2">
                        <span class="text-sm font-semibold">Admin</span>
                    </div>
                    <a href="#" class="text-yellow-400 hover:text-yellow-300">Logout</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-gray-800 text-white w-64 h-screen fixed top-16 left-0 sidebar md:translate-x-0"
        data-aos="fade-right">
        <nav class="p-4">
            <ul class="space-y-4">
                <li><a href="/dashboard"
                        class="nav-link block py-2 px-4 rounded hover:bg-gray-700 hover:text-yellow-400">Dashboard</a>
                </li>
                <li><a href="/services"
                        class="nav-link block py-2 px-4 rounded hover:bg-gray-700 hover:text-yellow-400">Services</a>
                </li>
                <li><a href="/clients"
                        class="nav-link block py-2 px-4 rounded hover:bg-gray-700 hover:text-yellow-400">Clients</a>
                </li>
                <li><a href="/reports"
                        class="nav-link block py-2 px-4 rounded hover:bg-gray-700 hover:text-yellow-400">Reports</a>
                </li>
                <li><a href="/settings"
                        class="nav-link block py-2 px-4 rounded hover:bg-gray-700 hover:text-yellow-400">Settings</a>
                </li>
            </ul>
        </nav>
    </aside>

    <!-- Main Content -->
    <main class="ml-0 md:ml-64 pt-20 px-4 sm:px-6 lg:px-8 min-h-screen">
        <div class="max-w-7xl mx-auto">
            <!-- Header -->
            <section class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl font-bold text-gray-800">Reports</h1>
                <p class="text-gray-600">Generate and view reports for security operations.</p>
            </section>

            <!-- Report Filters -->
            <section class="mb-8" data-aos="fade-up">
                <div class="flex space-x-4">
                    <select class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400">
                        <option value="incidents">Incident Reports</option>
                        <option value="services">Service Performance</option>
                        <option value="clients">Client Activity</option>
                    </select>
                    <select class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400">
                        <option value="30days">Last 30 Days</option>
                        <option value="6months">Last 6 Months</option>
                        <option value="yearly">Yearly</option>
                    </select>
                    <button class="btn-primary bg-yellow-400 text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-yellow-500">Generate Report</button>
                    <button class="btn-primary bg-gray-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-gray-700">Export as PDF</button>
                </div>
            </section>

            <!-- Reports Table -->
            <section class="mb-12" data-aos="fade-up">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Report Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Type</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Date Generated</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">Incident Summary Q2 2025</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Incident Report</td>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-04-25</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">View</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">Service Performance Apr 2025</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Service Report</td>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-04-20</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">View</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">Client Activity Mar 2025</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Client Report</td>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-03-30</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">View</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000,
        });

        // Sidebar Toggle
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('sidebar-toggle');
        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('sidebar-hidden');
        });

        // Placeholder for Generate Report
        document.querySelector('.btn-primary.bg-yellow-400').addEventListener('click', () => {
            alert('Report generated! (Placeholder)');
        });

        // Placeholder for Export PDF
        document.querySelector('.btn-primary.bg-gray-600').addEventListener('click', () => {
            alert('Exporting as PDF! (Placeholder)');
        });
    </script>
</body>
</html>
