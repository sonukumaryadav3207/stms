<!-- application/views/admin/house_master.php -->
<div class="content-wrapper">
    <div class="container mt-4">
        <h3 class="mb-4">Category Master</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl No.</th>
                    <th>House Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($category)) {
                    $i = 1;
                    foreach ($category as $cat) { ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $cat['Cat_Name'] ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="3">No house found.</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>