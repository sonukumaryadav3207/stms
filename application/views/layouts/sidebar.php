<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Sidebar -->
<div class="bg-dark text-white position-fixed h-100 sidebar" id="sidebar">
  <div class="p-4">
    <button id="sidebarToggle" class="btn btn-outline-light position-absolute top-0 translate-middle-y m-4">
      <i class="fa fa-bars"></i>
    </button>

    <ul class="nav flex-column mt-4">
      <li class="nav-item">
        <a class="nav-link text-white" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-home me-2"></i> Dashboard
        </a>
      </li>
    </ul>

    <!-- Student Information with submenu -->
    <ul class="nav flex-column">
      <li class="nav-item has-submenu">
        <a href="#" class="nav-link text-white main-link d-flex justify-content-between align-items-center">
          <span class="d-inline-flex align-items-center">
            <i class="fas fa-user-graduate me-2"></i>
            <span>Student Information</span>
          </span>
          <i class="fa fa-angle-right toggle-icon"></i>
        </a>



        <ul class="submenu list-unstyled ps-4">
          <li><a href="#" class="nav-link text-white submenu-link">House Master</a></li>
          <li><a href="#" class="nav-link text-white submenu-link">Category Master</a></li>
          <li><a href="#" class="nav-link text-white submenu-link">Religion Master</a></li>
          <li><a href="#" class="nav-link text-white submenu-link">Student Master</a></li>
        </ul>
      </li>
    </ul>

    <!-- Student Attendance with submenu -->
    <ul class="nav flex-column">
      <li class="nav-item has-submenu">
        <a href="#" class="nav-link text-white main-link d-flex justify-content-between align-items-center">
          <span class="d-inline-flex align-items-center">
            <i class="fa-solid fa-address-book me-2"></i></i> Student Attendance
          </span>

          <i class="fa fa-angle-right toggle-icon"></i>
        </a>


        <ul class="submenu list-unstyled ps-4">
          <li><a href="#" class="nav-link text-white submenu-link">Daily Attendance</a></li>
          <li><a href="#" class="nav-link text-white submenu-link">Daily Attendance Report</a></li>
          <li><a href="#" class="nav-link text-white submenu-link">Monthly Attendance Report</a></li>

        </ul>
      </li>
    </ul>

  </div>
</div>

<script>
  const submenuLinks = document.querySelectorAll('.submenu-link');
  const mainLinks = document.querySelectorAll('.main-link');

  // Toggle submenu visibility and arrow rotation
  mainLinks.forEach(mainLink => {
    mainLink.addEventListener('click', function(e) {
      e.preventDefault();

      const submenu = this.parentElement.querySelector('.submenu');
      const icon = this.querySelector('.toggle-icon');

      // Toggle submenu visibility
      if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
        icon.classList.remove('rotate');
        this.classList.remove('');
      } else {
        // Close other open submenus
        document.querySelectorAll('.submenu').forEach(sm => sm.style.display = 'none');
        document.querySelectorAll('.toggle-icon').forEach(ic => ic.classList.remove('rotate'));
        document.querySelectorAll('.main-link').forEach(ml => ml.classList.remove('active'));

        submenu.style.display = 'block';
        icon.classList.add('rotate');
        this.classList.add('active');
        // Save open section title
        localStorage.setItem('openMainMenu', this.innerText.trim());
      }
    });
  });

  // Handle submenu item clicks
  submenuLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      submenuLinks.forEach(l => l.classList.remove('active'));
      this.classList.add('active');
      localStorage.setItem('activeSubmenu', this.textContent.trim());
    });
  });

  // Restore active states on page load
  window.addEventListener('DOMContentLoaded', () => {
    const activeItem = localStorage.getItem('activeSubmenu');
    const openMain = localStorage.getItem('openMainMenu');

    submenuLinks.forEach(link => {
      if (link.textContent.trim() === activeItem) {
        // Instead of: link.classList.add('active');
        link.classList.add('text-primary'); // Bootstrap text color class

        // Open related submenu
        const parent = link.closest('.has-submenu');
        const submenu = parent.querySelector('.submenu');
        const icon = parent.querySelector('.toggle-icon');
        const mainLink = parent.querySelector('.main-link');

        submenu.style.display = 'block';
        icon.classList.add('rotate');

        // Add color to main menu link as well
        mainLink.classList.add('text-primary');
      }
    });

  });
</script>