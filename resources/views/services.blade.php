<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Security | Services</title>
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
            <div class="flex personally identifiable information-center justify-between h-16">
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
                <h1 class="text-3xl font-bold text-gray-800">Services Management</h1>
                <p class="text-gray-600">View and manage security services offered by Royal Security.</p>
            </section>

            <!-- Add Service Button -->
            <section class="mb-8" data-aos="fade-up">
                <button id="openAddServiceModal" class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Add New Service</button>
            </section>

            <!-- Services Table -->
            <section class="mb-12" data-aos="fade-up">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Service Name</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Description</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Status</th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">Comprehensive Security</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Customized security plans with detailed assessments.</td>
                                <td class="px-6 py-4 text-sm text-green-600">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">VIP Protection</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Elite security for high-profile individuals.</td>
                                <td class="px-6 py-4 text-sm text-green-600">Active</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 text-sm text-gray-600">Event Security</td>
                                <td class="px-6 py-4 text-sm text-gray-600">Robust security for events.</td>
                                <td class="px-6 py-4 text-sm text-yellow-600">Inactive</td>
                                <td class="px-6 py-4 text-sm">
                                    <a href="#" class="text-yellow-400 hover:text-yellow-500 mr-4">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-700">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Add/Edit Service Modal -->
            <div id="addServiceModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden flex items-center justify-center" data-aos="zoom-in">
                <div class="bg-white rounded-xl p-6 w-full max-w-md">
                    <h2 class="text-2xl font-bold text-gray-800 mb-4">Add New Service</h2>
                    <form>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-600 mb-2" for="serviceName">Service Name</label>
                            <input id="serviceName" type="text" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-600 mb-2" for="serviceDescription">Description</label>
                            <textarea id="serviceDescription" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400" rows="4" required></textarea>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-600 mb-2" for="serviceStatus">Status</label>
                            <select id="serviceStatus" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="flex justify-end space-x-4">
                            <button type="button" id="closeAddServiceModal" class="px-4 py-2 text-gray-600 hover:text-gray-800">Cancel</button>
                            <button type="submit" class="btn-primary bg-yellow-400 text-gray-900 px-6 py-2 rounded-full font-semibold hover:bg-yellow-500">Save</button>
                        </div>
                    </form>
                </div>
            </div>
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

        // Modal Toggle
        const addServiceModal = document.getElementById('addServiceModal');
        const openAddServiceModal = document.getElementById('openAddServiceModal');
        const closeAddServiceModal = document.getElementById('closeAddServiceModal');

        openAddServiceModal.addEventListener('click', () => {
            addServiceModal.classList.remove('hidden');
        });

        closeAddServiceModal.addEventListener('click', () => {
            addServiceModal.classList.add('hidden');
        });

        // Form Submission (Placeholder)
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Service saved! (Placeholder)');
            addServiceModal.classList.add('hidden');
        });
    </script>
</body>
</html>
