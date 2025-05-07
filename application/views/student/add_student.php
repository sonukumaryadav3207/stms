<div class="content-wrapper">
  <h3>Add New Student</h3>
  <form action="<?= base_url('student/StudentMaster/save') ?>" method="post">
    <div class="row">
      <div class="col-md-6 mb-3">
        <label>Admission Number</label>
        <input type="text" name="admission_number" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Student Name</label>
        <input type="text" name="student_name" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Roll Number</label>
        <input type="text" name="roll_number" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Class</label>
        <input type="text" name="class" class="form-control" required>
      </div>
      <div class="col-md-6 mb-3">
        <label>Section</label>
        <input type="text" name="section" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Gender</label>
        <select name="gender" class="form-control" required>
          <option value="">Select</option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label>Date of Birth</label>
        <input type="date" name="dob" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Category</label>
        <input type="text" name="category" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Religion</label>
        <input type="text" name="religion" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>House</label>
        <input type="text" name="house" class="form-control">
      </div>
      <div class="col-md-12 mb-3">
        <label>Address</label>
        <textarea name="address" class="form-control" rows="2"></textarea>
      </div>
      <div class="col-md-6 mb-3">
        <label>Father Name</label>
        <input type="text" name="father_name" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Mother Name</label>
        <input type="text" name="mother_name" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Mobile Number</label>
        <input type="text" name="mobile_number" class="form-control">
      </div>
      <div class="col-md-6 mb-3">
        <label>Status</label>
        <select name="status" class="form-control">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
      </div>
    </div>
    <button type="submit" class="btn btn-success">Save Student</button>
  </form>
</div>
