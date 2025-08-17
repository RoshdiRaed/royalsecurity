<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

        /* Modal Styles */
        #actionModal {
            transition: opacity 0.3s ease;
        }

        #actionModal.show {
            opacity: 1;
        }

        input,
        select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            outline: none;
            transition: border-color 0.2s ease;
        }

        input:focus,
        select:focus {
            border-color: #facc15;
            box-shadow: 0 0 0 3px rgba(250, 204, 21, 0.1);
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
                    <button data-action="add-client"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Add
                        New Client</button>
                    <button data-action="schedule-service"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Schedule
                        Service</button>
                    <button data-action="generate-report"
                        class="btn-primary bg-yellow-400 text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-yellow-500">Generate
                        Report</button>
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
                        <select id="timeFilter"
                            class="bg-gray-50 border border-gray-300 text-gray-600 text-sm rounded-lg px-4 py-2 focus:ring-yellow-400 focus:border-yellow-400">
                            <option value="30days">Last 30 Days</option>
                            <option value="6months">Last 6 Months</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </div>
                </div>
                <!-- Summary Cards -->
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="100">
                        <h3 class="text-lg font-semibold text-gray-800">Total Incidents</h3>
                        <p class="text-3xl font-bold text-yellow-400">35</p>
                        <p class="text-sm text-gray-500">+12% from last period</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="200">
                        <h3 class="text-lg font-semibold text-gray-800">Resolved</h3>
                        <p class="text-3xl font-bold text-yellow-400">28</p>
                        <p class="text-sm text-gray-500">80% resolution rate</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg card-hover" data-aos="fade-up"
                        data-aos-delay="300">
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

        <!-- Modal -->
        <div id="actionModal"
            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
            <div class="bg-white rounded-xl p-6 w-full max-w-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 id="modalTitle" class="text-xl font-bold text-gray-800">Action</h2>
                    <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <form id="actionForm" class="space-y-4">
                    <div id="formContent">
                        <!-- Dynamic form content will be injected here -->
                    </div>
                    <div class="flex justify-end space-x-4">
                        <button type="button" id="cancelModal"
                            class="px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300">Cancel</button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Templates -->
        <template id="add-client-form">
            <div>
                <label class="block text-sm font-medium text-gray-700">Client Name</label>
                <input type="text" name="clientName" required placeholder="Enter client name" class="mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="clientEmail" required placeholder="Enter client email" class="mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="tel" name="clientPhone" placeholder="Enter client phone" class="mt-1">
            </div>
        </template>

        <template id="schedule-service-form">
            <div>
                <label class="block text-sm font-medium text-gray-700">Service Type</label>
                <select name="serviceType" required class="mt-1">
                    <option value="">Select service</option>
                    <option value="patrol">Site Patrol</option>
                    <option value="assessment">Security Assessment</option>
                    <option value="event">Event Security</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Client</label>
                <input type="text" name="clientName" required placeholder="Enter client name" class="mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Date</label>
                <input type="date" name="serviceDate" required class="mt-1">
            </div>
        </template>

        <template id="generate-report-form">
            <div>
                <label class="block text-sm font-medium text-gray-700">Report Type</label>
                <select name="reportType" required class="mt-1">
                    <option value="">Select report type</option>
                    <option value="incident">Incident Report</option>
                    <option value="service">Service Report</option>
                    <option value="client">Client Summary</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Start Date</label>
                <input type="date" name="startDate" required class="mt-1">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">End Date</label>
                <input type="date" name="endDate" required class="mt-1">
            </div>
        </template>


    </main>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script>
        // Modal Elements
        const actionModal = document.getElementById('actionModal');
        const modalTitle = document.getElementById('modalTitle');
        const formContent = document.getElementById('formContent');
        const closeModalBtn = document.getElementById('closeModal');
        const cancelModalBtn = document.getElementById('cancelModal');
        const actionForm = document.getElementById('actionForm');
        const actionButtons = document.querySelectorAll('.btn-primary[data-action]');



        function openModal(action) {
            const titles = {
                'add-client': 'Add New Client',
                'schedule-service': 'Schedule Service',
                'generate-report': 'Generate Report'
            };

            modalTitle.textContent = titles[action];

            // جلب الـ template المناسب من الـ DOM
            const template = document.getElementById(`${action}-form`);
            const clone = document.importNode(template.content, true);

            // تفريغ القديم وإضافة الجديد
            formContent.innerHTML = '';
            formContent.appendChild(clone);

            actionModal.classList.remove('hidden');
            actionModal.style.display = 'flex'; // إظهار المودال بشكل صحيح
            setTimeout(() => actionModal.classList.add('show'), 10);
        }



        // Close Modal
        function closeModal() {
            actionModal.classList.remove('show');
            setTimeout(() => actionModal.classList.add('hidden'), 300); // Wait for fade-out
        }

        // Event Listeners for Buttons
        actionButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const action = button.getAttribute('data-action');
                openModal(action);
            });
        });

        // Close Modal on Close/Cancel
        closeModalBtn.addEventListener('click', closeModal);
        cancelModalBtn.addEventListener('click', closeModal);

        // Handle Form Submission
        actionForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(actionForm);
            const data = Object.fromEntries(formData);
            console.log('Form Submitted:', data); // Replace with actual submission logic
            closeModal();
            actionForm.reset();
        });

        // Close Modal on Outside Click
        actionModal.addEventListener('click', (e) => {
            if (e.target === actionModal) closeModal();
        });
    </script> --}}
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const counters = document.querySelectorAll('.text-3xl.font-bold.text-yellow-400');
            const speed = 100; // lower is faster

            counters.forEach(counter => {
                const target = +counter.innerText;
                counter.innerText = '0';

                const updateCount = () => {
                    const current = +counter.innerText;
                    const increment = Math.ceil(target / speed);

                    if (current < target) {
                        counter.innerText = current + increment;
                        setTimeout(updateCount, 5);
                    } else {
                        counter.innerText = target; // to fix overshooting
                    }
                };

                updateCount();
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const actionModal = document.getElementById('actionModal');
            const modalTitle = document.getElementById('modalTitle');
            const formContent = document.getElementById('formContent');
            const closeModalBtn = document.getElementById('closeModal');
            const cancelModalBtn = document.getElementById('cancelModal');
            const actionForm = document.getElementById('actionForm');
            const actionButtons = document.querySelectorAll('.btn-primary[data-action]');

            function openModal(action) {
                const titles = {
                    'add-client': 'Add New Client',
                    'schedule-service': 'Schedule Service',
                    'generate-report': 'Generate Report'
                };

                modalTitle.textContent = titles[action];
                const template = document.getElementById(`${action}-form`);
                const clone = document.importNode(template.content, true);

                formContent.innerHTML = '';
                formContent.appendChild(clone);

                actionModal.classList.remove('hidden');
                actionModal.style.display = 'flex';
                setTimeout(() => actionModal.classList.add('show'), 10);
            }

            function closeModal() {
                actionModal.classList.remove('show');
                setTimeout(() => {
                    actionModal.classList.add('hidden');
                    actionModal.style.display = 'none';
                }, 200);
            }

            actionButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const action = button.getAttribute('data-action');
                    openModal(action);
                });
            });

            closeModalBtn.addEventListener('click', closeModal);
            cancelModalBtn.addEventListener('click', closeModal);

            actionForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(actionForm);
                const data = Object.fromEntries(formData);
                console.log('Form Submitted:', data);
                closeModal();
                actionForm.reset();
            });

            actionModal.addEventListener('click', (e) => {
                if (e.target === actionModal) closeModal();
            });
        });
    </script>

</body>

</html>
