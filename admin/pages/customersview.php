<?php
include("./header.php");
?>
<!-- partial -->
<div class="page-content-wrapper">
    <div class="page-content-wrapper-inner">
        <div class="viewport-header">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb has-arrow">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">View</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer View</li>
                </ol>
            </nav>
        </div>
        <div class="content-viewport">
            <div class="row">
                <div class="col-lg-12">
                    <div class="grid">
                        <p class="grid-header">Customer View</p>
                        <div class="item-wrapper">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name & Profile</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Aadhaar</th>
                                            <th>PAN</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex align-items-center border-top-0">
                                                <img class="profile-img img-sm img-rounded mr-2" src="../image_5.png" alt="profile image">
                                                <span>Herman Beck</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-slim">
                                                    <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$23,563</td>
                                            <td>$30,000</td>
                                            <td>3454</td>
                                            <td class="text-success"> 15.67% <i class="mdi mdi-arrow-up"></i>
                                            </td>
                                            <td class="actions">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img class="profile-img img-sm img-rounded mr-2" src="../image_5.png" alt="profile image">
                                                <span>Curtis Greer</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-slim">
                                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$14,435</td>
                                            <td>$30,000</td>
                                            <td>3454</td>
                                            <td class="text-danger"> 23.05% <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td class="actions">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img class="profile-img img-sm img-rounded mr-2" src="../image_5.png" alt="profile image">
                                                <span>Lettie Phillips</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-slim">
                                                    <div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$16,745</td>
                                            <td>$30,000</td>
                                            <td>3454</td>
                                            <td class="text-success"> 23.05% <i class="mdi mdi-arrow-up"></i>
                                            </td>
                                            <td class="actions">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img class="profile-img img-sm img-rounded mr-2" src="../image_5.png" alt="profile image">
                                                <span>Rachel Garza</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-slim">
                                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$34,546</td>
                                            <td>$30,000</td>
                                            <td>3454</td>
                                            <td class="text-success"> 67.23% <i class="mdi mdi-arrow-up"></i>
                                            </td>
                                            <td class="actions">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img class="profile-img img-sm img-rounded mr-2   " src="../image_5.png" alt="profile image">
                                                <span>Estelle Guzman</span>
                                            </td>
                                            <td>
                                                <div class="progress progress-slim">
                                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td>$23,657</td>
                                            <td>$30,000</td>
                                            <td>3454</td>
                                            <td class="text-danger"> 12.45% <i class="mdi mdi-arrow-down"></i>
                                            </td>
                                            <td class="actions">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- content viewport ends -->
    <?php
    include("./footer.php");
    ?>