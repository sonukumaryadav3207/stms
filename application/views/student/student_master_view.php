
<div class="content-wrapper">
    <h3>Student Master</h3>
<a href="<?= base_url('student/StudentMaster/add') ?>" class="btn btn-primary mb-2">Add Student</a>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>#</th><th>Name</th><th>Roll</th><th>Class</th><th>Gender</th><th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($students as $index => $student): ?>
      <tr>
        <td><?= $index+1 ?></td>
        <td><?= $student->student_name ?></td>
        <td><?= $student->roll_number ?></td>
        <td><?= $student->class ?></td>
        <td><?= $student->gender ?></td>
        <td>
          <a href="<?= base_url('student/StudentMaster/delete/'.$student->id) ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>
