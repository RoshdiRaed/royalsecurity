import './bootstrap';

// Modal Elements
const actionModal = document.getElementById('actionModal');
const modalTitle = document.getElementById('modalTitle');
const formContent = document.getElementById('formContent');
const closeModalBtn = document.getElementById('closeModal');
const cancelModalBtn = document.getElementById('cancelModal');
const actionForm = document.getElementById('actionForm');
const actionButtons = document.querySelectorAll('.btn-primary[data-action]');

// Form Templates
const formTemplates = {
    'add-client': `
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
    `,
    'schedule-service': `
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
    `,
    'generate-report': `
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
    `
};

// Open Modal
function openModal(action) {
    modalTitle.textContent = {
        'add-client': 'Add New Client',
        'schedule-service': 'Schedule Service',
        'generate-report': 'Generate Report'
    }[action];
    formContent.innerHTML = formTemplates[action];
    actionModal.classList.remove('hidden');
    setTimeout(() => actionModal.classList.add('show'), 10); // Trigger fade-in
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
