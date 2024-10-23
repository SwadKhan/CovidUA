<?php
session_start();
include ('header.php');
?>



    <div class="container" style="margin-top: 125px;">
        <div class="row">
            <div class="col-md-12">
                <main class="page" style="min-height: 100%;">
                    <section class="clean-block about-us">
                        <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col text-center">
                                <h2 class="text-info">Profile</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ_2qZWl72WiCU5Cr7ViOpacdSXzLIZRQDf34a8oxNOa1ELFzzBjCOtDnWgdMAx9TR4BQ&usqp=CAU" />
                                    <div class="card-body info">
                                        <div class="row" style="margin-top: -24px;">
                                            <div class="col-md-12" style="margin-top: 22px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>
                                                                <?php
                                                                require_once("DBconnect.php");
                                                                $uphone = $_SESSION['phone'];
                                                                $sql = "select * from users where phone='$uphone'";
                                                                $result = mysqli_query($conn, $sql);
                                                                $uname = mysqli_fetch_array($result);
                                                                echo $uname[1];
                                                                ?>
                                                            </strong></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Mobile</strong></p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="labels"><?php

                                                                            echo $uname[0];

                                                                            ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Address</strong></p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="labels"><?php
                                                                            echo $uname[3];
                                                                            ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Blood Group</strong></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><?php
                                                                            echo $uname[2];
                                                                            ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><a class="btn btn-success" role="button" href="user_admin.php"><i class="fas fa-pencil-alt"></i>Admin Login</a></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <footer class="footer-dark" style="margin-top: 0px;margin-bottom: -100px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Creator</h3>
                    <ul>
                        <li><a href="#">Khan</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>About Project</h3>
                    <p>A project to fight covid.
                </div>
                <div class="col item social"><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">CSE370_Section07_Group06_Spring2021©</p>
        </div>
    </footer>
    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);"></section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Multi-step-form-type1.js"></script>
    <script src="assets/js/Multi-step-form.js"></script>
    <script src="assets/js/Pricing-Tables-1.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/Studious-switcher.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>