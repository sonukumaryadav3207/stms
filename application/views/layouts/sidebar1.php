<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<style>
.sidebar {
  width: 250px;
  transition: all 0.3s ease;
  z-index: 1000;
  left: 0;
  top: 0;
  position: relative;
}

.sidebar.collapsed {
  width: 70px;
}

.sidebar.collapsed .nav-link span:not(.toggle-icon),
.sidebar.collapsed .submenu {
  display: none;
}

.sidebar.collapsed .nav-link {
  text-align: center;
  padding: 10px 0;
  justify-content: center;
}

.sidebar.collapsed .nav-link i {
  margin: 0;
  font-size: 1.2rem;
}

.sidebar.collapsed .toggle-icon {
  display: none;
}

.sidebar.collapsed .submenu {
  position: absolute;
  left: 70px;
  top: 0;
  width: 200px;
  background: #343a40;
  padding: 10px;
  border-radius: 0 4px 4px 0;
  display: none;
}

.sidebar.collapsed .has-submenu:hover .submenu {
  display: block;
}

.sidebar-header {
  position: relative;
  padding: 15px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  min-height: 60px;
  display: flex;
  align-items: center;
}

#sidebarToggle {
  position: absolute;
  top: 50%;
  right: 5px;
  transform: translateY(-50%);
  background: transparent;
  border: none;
  color: white;
  padding: 8px;
  cursor: pointer;
  transition: all 0.3s ease;
  z-index: 1002;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}

#sidebarToggle i {
  font-size: 1.2rem;
  transition: transform 0.3s ease;
}

#sidebarToggle:hover {
  color: #007bff;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 4px;
}

.sidebar.collapsed #sidebarToggle {
  right: 15px;
}

.sidebar.collapsed #sidebarToggle i {
  transform: rotate(180deg);
}

.nav-link {
  display: flex;
  align-items: center;
  padding: 12px 15px;
  color: white;
  transition: all 0.3s ease;
}

.nav-link:hover {
  background: rgba(255, 255, 255, 0.1);
}

.nav-link i {
  width: 20px;
  text-align: center;
  margin-right: 10px;
}

.main-link {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}

.submenu {
  background: rgba(0, 0, 0, 0.2);
  margin-top: 5px;
  border-radius: 4px;
}

.submenu-link {
  padding: 8px 15px !important;
  font-size: 0.9rem;
}

@media (max-width: 768px) {
  .sidebar {
    transform: translateX(-100%);
  }
  
  .sidebar.active {
    transform: translateX(0);
  }
  
  #sidebarOverlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
  }
}
</style>

<?php
$current_url = current_url();
$is_student_info_active = strpos($current_url, base_url('student')) !== false;
$is_attendance_active = strpos($current_url, base_url('attendance')) !== false;
?>

<!-- Overlay (Mobile Only) -->
<div id="sidebarOverlay"></div>

<!-- Sidebar -->
<div class="sidebar bg-dark text-white position-fixed h-100" id="sidebar">
  <div class="sidebar-header">
    <button id="sidebarToggle" type="button">
      <i class="fa fa-bars"></i>
    </button>
  </div>
  
  <div class="p-3">
    <!-- Dashboard -->
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-white <?= ($current_url == base_url('admin/dashboard')) ? 'text-primary' : '' ?>"
          href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>
    </ul>

    <!-- Student Information Menu -->
    <ul class="nav flex-column mt-3">
      <li class="nav-item has-submenu">
        <a href="#" class="nav-link text-white main-link <?= $is_student_info_active ? 'text-primary' : '' ?>">
          <span class="d-inline-flex align-items-center">
            <i class="fas fa-user-graduate"></i>
            <span>Student Information</span>
          </span>
          <i class="fa fa-angle-right toggle-icon <?= $is_student_info_active ? 'rotate' : '' ?>"></i>
        </a>
        <ul class="submenu list-unstyled" style="<?= $is_student_info_active ? 'display:block;' : 'display:none;' ?>">
          <li>
            <a href="<?= base_url('student/HouseMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('student/HouseMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-home"></i>
              <span>House Master</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/CategoryMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('student/CategoryMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-tags"></i>
              <span>Category Master</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/ReligionMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('student/ReligionMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-pray"></i>
              <span>Religion Master</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/StudentMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('student/StudentMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-user"></i>
              <span>Student Master</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Attendance Menu -->
    <ul class="nav flex-column mt-3">
      <li class="nav-item has-submenu">
        <a href="#" class="nav-link text-white main-link <?= $is_attendance_active ? 'text-primary' : '' ?>">
          <span class="d-inline-flex align-items-center">
            <i class="fa-solid fa-address-book"></i>
            <span>Student Attendance</span>
          </span>
          <i class="fa fa-angle-right toggle-icon <?= $is_attendance_active ? 'rotate' : '' ?>"></i>
        </a>
        <ul class="submenu list-unstyled" style="<?= $is_attendance_active ? 'display:block;' : 'display:none;' ?>">
          <li>
            <a href="<?= base_url('attendance/daily') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/daily')) ? 'text-primary' : '' ?>">
              <i class="fas fa-calendar-day"></i>
              <span>Daily Attendance</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('attendance/daily-report') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/daily-report')) ? 'text-primary' : '' ?>">
              <i class="fas fa-file-alt"></i>
              <span>Daily Attendance Report</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('attendance/monthly-report') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/monthly-report')) ? 'text-primary' : '' ?>">
              <i class="fas fa-calendar-alt"></i>
              <span>Monthly Attendance Report</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<script>
  // Prevent FOUC by adding a class once JS is ready
  document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('js-loaded');
  });

  // Submenu Toggle
  document.querySelectorAll('.main-link').forEach(mainLink => {
    mainLink.addEventListener('click', function(e) {
      e.preventDefault();

      const submenu = this.parentElement.querySelector('.submenu');
      const icon = this.querySelector('.toggle-icon');

      const isOpen = submenu.style.display === 'block';

      // Close all submenus
      document.querySelectorAll('.submenu').forEach(sm => sm.style.display = 'none');
      document.querySelectorAll('.toggle-icon').forEach(ic => ic.classList.remove('rotate'));

      if (!isOpen) {
        submenu.style.display = 'block';
        icon.classList.add('rotate');
      }
    });
  });

  // Sidebar toggle
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebarOverlay');

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    document.body.classList.toggle('sidebar-open');
    overlay.style.display = sidebar.classList.contains('active') ? 'block' : 'none';
  });

  overlay.addEventListener('click', () => {
    sidebar.classList.remove('active');
    document.body.classList.remove('sidebar-open');
    overlay.style.display = 'none';
  });

  // Add hover effect for collapsed sidebar
  sidebar.addEventListener('mouseenter', () => {
    if (sidebar.classList.contains('collapsed')) {
      document.querySelectorAll('.has-submenu').forEach(item => {
        item.addEventListener('mouseenter', function() {
          const submenu = this.querySelector('.submenu');
          if (submenu) {
            submenu.style.display = 'block';
          }
        });
        
        item.addEventListener('mouseleave', function() {
          const submenu = this.querySelector('.submenu');
          if (submenu) {
            submenu.style.display = 'none';
          }
        });
      });
    }
  });
</script>