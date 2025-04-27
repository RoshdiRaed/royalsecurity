<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Security | Gaza Strip</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
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

        .hero-overlay {
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8));
        }

        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-primary:hover {
            transform: scale(1.05);
        }

        .footer-link {
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #facc15;
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
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <a href="./" class="text-2xl font-bold text-yellow-400 tracking-tight">Royal<span
                            class="text-white">Security</span></a>
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
            <!-- Welcome Section -->
            <section class="mb-8" data-aos="fade-up">
                <h1 class="text-3xl font-bold text-gray-800">Welcome, Admin</h1>
                <p class="text-gray-600">Manage your security operations with ease.</p>
            </section>

            <!-- Overview Cards -->
            <section class="grid md:grid-cols-3 gap-6 mb-12">
                <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-semibold text-gray-800">Active Contracts</h3>
                    <p class="text-3xl font-bold text-yellow-400">42</p>
                    <p class="text-sm text-gray-500">+5% from last month</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-semibold text-gray-800">Personnel Deployed</h3>
                    <p class="text-3xl font-bold text-yellow-400">250</p>
                    <p class="text-sm text-gray-500">+10 new hires</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-semibold text-gray-800">Pending Requests</h3>
                    <p class="text-3xl font-bold text-yellow-400">8</p>
                    <p class="text-sm text-gray-500">3 urgent</p>
                </div>
            </section>

            <!-- Quick Actions -->
            <section class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Quick Actions</h2>
                <div class="flex space-x-4">
                    <a href="#"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Add
                        New Client</a>
                    <a href="#"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Schedule
                        Service</a>
                    <a href="#"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Generate
                        Report</a>
                </div>
            </section>

            <!-- Recent Activity -->
            <section class="mb-12" data-aos="fade-up">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Recent Activity</h2>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Date</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Client</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Action</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-04-25</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Global NGO</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Security Assessment</td>
                                <td class="px-6 py-4 text-sm text-green-600">Completed</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-04-24</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Event Corp</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Event Security</td>
                                <td class="px-6 py-4 text-sm text-yellow-600">Pending</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">2025-04-23</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Construction Ltd</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Site Patrol</td>
                                <td class="px-6 py-4 text-sm text-green-600">Completed</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

           <!-- Security Incidents Overview -->
<section data-aos="fade-up" class="mb-12">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Security Incidents Overview</h2>
        <div class="flex space-x-4">
            <select id="timeFilter" class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400">
                <option value="30days">Last 30 Days</option>
                <option value="6months">Last 6 Months</option>
                <option value="yearly">Yearly</option>
            </select>
        </div>
    </div>
    <!-- Summary Cards -->
    <div class="grid md:grid-cols-3 gap-6 mb-8">
        <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="100">
            <h3 class="text-lg font-semibold text-gray-800">Total Incidents</h3>
            <p class="text-3xl font-bold text-yellow-400">35</p>
            <p class="text-sm text-gray-500">+12% from last period</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="200">
            <h3 class="text-lg font-semibold text-gray-800">Resolved</h3>
            <p class="text-3xl font-bold text-yellow-400">28</p>
            <p class="text-sm text-gray-500">80% resolution rate</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up" data-aos-delay="300">
            <h3 class="text-lg font-semibold text-gray-800">Pending</h3>
            <p class="text-3xl font-bold text-yellow-400">7</p>
            <p class="text-sm text-gray-500">2 critical</p>
        </div>
    </div>
    <!-- Chart -->
    <div class="bg-white p-6 rounded-xl shadow-lg">
        <canvas id="incidentsChart" height="100"></canvas>
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

        // Chart.js Example
        const ctx = document.getElementById('incidentsChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Security Incidents',
                    data: [5, 10, 7, 3, 8, 4],
                    borderColor: '#facc15',
                    backgroundColor: 'rgba(250, 204, 21, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
