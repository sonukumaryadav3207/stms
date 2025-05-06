<!-- Include Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<?php
$current_url = current_url();
$is_student_info_active = strpos($current_url, base_url('student')) !== false;
$is_attendance_active = strpos($current_url, base_url('attendance')) !== false;
?>

<!-- Sidebar -->
<div class="bg-dark text-white position-fixed h-100 sidebar" id="sidebar">
  <div class="p-4">
    <button id="sidebarToggle" class="btn btn-outline-light position-absolute top-0 translate-middle-y m-4">
      <i class="fa fa-bars"></i>
    </button>

    <ul class="nav flex-column mt-4">
      <li class="nav-item">
        <a class="nav-link text-white <?= ($current_url == base_url('admin/dashboard')) ? 'text-primary' : '' ?>" href="<?= base_url('admin/dashboard') ?>">
          <i class="fas fa-home me-2"></i> Dashboard
        </a>
      </li>
    </ul>

    <!-- Student Information with submenu -->
    <ul class="nav flex-column">
      <li class="nav-item has-submenu">
        <a href="#"
          class="nav-link text-white main-link d-flex justify-content-between align-items-center <?= $is_student_info_active ? 'text-primary' : '' ?>">
          <span class="d-inline-flex align-items-center">
            <i class="fas fa-user-graduate me-2"></i>
            <span>Student Information</span>
          </span>
          <i class="fa fa-angle-right toggle-icon <?= $is_student_info_active ? 'rotate' : '' ?>"></i>
        </a>

        <ul class="submenu list-unstyled ps-4" style="<?= $is_student_info_active ? 'display:block;' : 'display:none;' ?>">
          <li>
            <a href="<?= base_url('student/HouseMaster') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('student/HouseMaster')) ? 'text-primary' : '' ?>">
              House Master
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/CategoryMaster') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('student/CategoryMaster')) ? 'text-primary' : '' ?>">
              Category Master
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/ReligionMaster') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('student/ReligionMaster')) ? 'text-primary' : '' ?>">
              Religion Master
            </a>
          </li>
          <li>
            <a href="<?= base_url('student/StudentMaster') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('student/StudentMaster')) ? 'text-primary' : '' ?>">
              Student Master
            </a>
          </li>
        </ul>
      </li>
    </ul>

    <!-- Student Attendance with submenu -->
    <ul class="nav flex-column">
      <li class="nav-item has-submenu">
        <a href="#"
          class="nav-link text-white main-link d-flex justify-content-between align-items-center <?= $is_attendance_active ? 'text-primary' : '' ?>">
          <span class="d-inline-flex align-items-center">
            <i class="fa-solid fa-address-book me-2"></i> Student Attendance
          </span>
          <i class="fa fa-angle-right toggle-icon <?= $is_attendance_active ? 'rotate' : '' ?>"></i>
        </a>

        <ul class="submenu list-unstyled ps-4" style="<?= $is_attendance_active ? 'display:block;' : 'display:none;' ?>">
          <li>
            <a href="<?= base_url('attendance/daily') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/daily')) ? 'text-primary' : '' ?>">
              Daily Attendance
            </a>
          </li>
          <li>
            <a href="<?= base_url('attendance/daily-report') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/daily-report')) ? 'text-primary' : '' ?>">
              Daily Attendance Report
            </a>
          </li>
          <li>
            <a href="<?= base_url('attendance/monthly-report') ?>"
              class="nav-link text-white submenu-link <?= ($current_url == base_url('attendance/monthly-report')) ? 'text-primary' : '' ?>">
              Monthly Attendance Report
            </a>
          </li>
        </ul>
      </li>
    </ul>




  </div>
</div>

<!-- Toggle Submenu JavaScript -->
<script>
  const mainLinks = document.querySelectorAll('.main-link');

  mainLinks.forEach(mainLink => {
    mainLink.addEventListener('click', function(e) {
      e.preventDefault();

      const submenu = this.parentElement.querySelector('.submenu');
      const icon = this.querySelector('.toggle-icon');

      if (submenu.style.display === 'block') {
        submenu.style.display = 'none';
        icon.classList.remove('rotate');
      } else {
        // Optional: Close all other submenus
        document.querySelectorAll('.submenu').forEach(sm => sm.style.display = 'none');
        document.querySelectorAll('.toggle-icon').forEach(ic => ic.classList.remove('rotate'));

        submenu.style.display = 'block';
        icon.classList.add('rotate');
      }
    });
  });
</script>