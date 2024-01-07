<?php $this->load->view('layout/admin_header'); ?>

<!-- Sidebar -->
<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Settings
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Main content -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Admin Dashboard</h1>
    </div>

    <!-- Users Section -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Users</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><?php echo $user['Nama']; ?></td>
                            <td><?php echo $user['Email']; ?></td>
                            <td><?php echo $user['Role']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


</main>

<?php $this->load->view('layout/admin_footer'); ?>