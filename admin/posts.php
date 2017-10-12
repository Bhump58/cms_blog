<?php include "includes/admin_header.php"; ?>
<body>

    <div id="wrapper">
          <!-- navigation -->
        <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small>Author name</small>
                        </h1>

                        <div class="col-xs-6">
                          <?php insert_categories(); ?>

                          <form method="post">
                            <div class="form-group">
                              <label for="cat_title">Add Category</label>
                              <input class="form-control" type="text" name="cat_title" />
                            </div>
                            <div class="form_group">
                              <input class="btn btn-primary" type="submit" name="submit" value="Add Category" />
                            </div>
                          </form>
                          <br />

                          <?php
                          //update and include query
                          if(isset($_GET['edit'])) {
                            $cat_id = $_GET['edit'];

                            include "includes/update_categories.php";
                          }
                          ?>

                        </div>
                        <div class="col-xs-6">
                          <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Title</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <?php findAllCategories(); ?>

                                 <?php deleteQuery(); ?>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->
<?php include "includes/admin_footer.php"; ?>
