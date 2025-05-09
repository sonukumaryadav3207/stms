<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />



<?php
$current_url = current_url();
$is_student_info_active = strpos($current_url, base_url('student')) !== false;
$is_attendance_active = strpos($current_url, base_url('attendance')) !== false;
$is_teacher_info_active = strpos($current_url, base_url('teacher')) !== false;
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

    <!-- teacher Information -->
    <ul class="nav flex-column mt-3">
      <li class="nav-item has-submenu">
        <a href="#" class="nav-link text-white main-link <?= $is_teacher_info_active ? 'text-primary' : '' ?>">
          <span class="d-inline-flex align-items-center">
            <i class="fas fa-user-graduate"></i>
            <span>Teacher Information</span>
          </span>
          <i class="fa fa-angle-right toggle-icon <?= $is_teacher_info_active ? 'rotate' : '' ?>"></i>
        </a>
        <ul class="submenu list-unstyled" style="<?= $is_teacher_info_active ? 'display:block;' : 'display:none;' ?>">
          <li>
            <a href="<?= base_url('teacher/teacherMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('teacher/teacherMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-user"></i>
              <span>Teacher Master</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('teacher/teacherMaster') ?>" class="nav-link text-white submenu-link <?= ($current_url == base_url('teacher/AssignMaster')) ? 'text-primary' : '' ?>">
              <i class="fas fa-user"></i>
              <span>Assign Teacher</span>
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

  // Sidebar toggle
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('sidebarOverlay');
  let lastOpenSubmenu = null; // Track the last open submenu

  // Submenu Toggle
  document.querySelectorAll('.main-link').forEach(mainLink => {
    mainLink.addEventListener('click', function(e) {
      e.preventDefault();
      const parentItem = this.parentElement;

      if (!sidebar.classList.contains('collapsed')) {
        // Normal submenu toggle for expanded state
        const submenu = parentItem.querySelector('.submenu');
        const icon = this.querySelector('.toggle-icon');

        const isOpen = submenu.style.display === 'block';

        // Close all submenus
        document.querySelectorAll('.submenu').forEach(sm => sm.style.display = 'none');
        document.querySelectorAll('.toggle-icon').forEach(ic => ic.classList.remove('rotate'));

        if (!isOpen) {
          submenu.style.display = 'block';
          icon.classList.add('rotate');
          lastOpenSubmenu = submenu; // Remember this submenu
        } else {
          lastOpenSubmenu = null; // Clear if closing
        }
      }
    });
  });

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('collapsed');
    document.body.classList.toggle('sidebar-collapsed');
    document.body.classList.toggle('sidebar-open');
    overlay.style.display = sidebar.classList.contains('active') ? 'block' : 'none';

    // Close all submenus when toggling sidebar
    document.querySelectorAll('.submenu').forEach(sm => sm.style.display = 'none');
    document.querySelectorAll('.has-submenu').forEach(item => item.classList.remove('active'));
    lastOpenSubmenu = null; // Clear last open submenu
  });

  overlay.addEventListener('click', () => {
    sidebar.classList.remove('active');
    document.body.classList.remove('sidebar-open');
    overlay.style.display = 'none';
  });

  // Handle submenu clicks
  document.querySelectorAll('.submenu-link').forEach(link => {
    link.addEventListener('click', () => {
      // Close sidebar after clicking a submenu item
      if (sidebar.classList.contains('collapsed')) {
        setTimeout(() => {
          sidebar.classList.add('collapsed');
          // Don't close submenus when clicking a submenu item
          // Just hide them visually
          document.querySelectorAll('.submenu').forEach(sm => {
            if (sm !== lastOpenSubmenu) {
              sm.style.display = 'none';
            }
          });
        }, 300); // Small delay to allow the click to register
      }
    });
  });

  // Handle hover states for collapsed sidebar
  let hoverTimeout;

  sidebar.addEventListener('mouseenter', () => {
    if (sidebar.classList.contains('collapsed')) {
      clearTimeout(hoverTimeout);
      sidebar.classList.remove('collapsed');

      // Restore last open submenu if exists
      if (lastOpenSubmenu) {
        lastOpenSubmenu.style.display = 'block';
        const icon = lastOpenSubmenu.previousElementSibling.querySelector('.toggle-icon');
        if (icon) {
          icon.classList.add('rotate');
        }
      }
    }
  });

  sidebar.addEventListener('mouseleave', () => {
    if (!sidebar.classList.contains('collapsed')) {
      hoverTimeout = setTimeout(() => {
        sidebar.classList.add('collapsed');
        // Don't close submenus, just hide them visually
        document.querySelectorAll('.submenu').forEach(sm => {
          if (sm !== lastOpenSubmenu) {
            sm.style.display = 'none';
          }
        });
      }, 300); // Small delay before collapsing
    }
  });
</script>