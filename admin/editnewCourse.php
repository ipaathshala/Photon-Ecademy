<?php
	require_once('include/config.php');
	if(!$_SESSION['user_id']){
		require_once('logout.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Update Course</title>
    <?php require_once('include/css.php');?>
  </head>
  <body>
    <div id="wrapper">
      <?php
        require_once('include/topbar.php');
        require_once('include/sidebar.php');
        ?>
      <div class="content-page">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="page-title-box">
                  <div class="card m-b-20">
                    <div class="card-body">
                      <h4 class="mt-0 header-title">Update New Course</h4>
                      <form method="post">
                        <div class="row">
							<?php
								$sql = mysqli_query($con,"SELECT `course_id`, `course_name` FROM `master_course` WHERE `course_id`");
								while($row = mysqli_fetch_array($sql)){
							?>
                          <div class="col-lg-10">
                            <div class="form-group">
                              <input type="text" class="form-control" id="course" name="course" value="<?php echo $row['course_name'];?>" autocomplete="off" placeholder="Enter Course Title">
							  <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['course_id'];?>">
                            </div>
                          </div>
						  <?php
								}
						  ?>
                          <div class="col-lg-2">
                            <i class="fa fa-spinner fa-spin" id="loader"></i>
                            <button type="submit" name="submit" class="btn btn-success btn-lg btn-block">UPDATE COURSE</button>
                          </div>
                          <div class="col-lg-10">
                            <div class="form-group">
                              <div class="alert alert-danger bg-danger text-white" role="alert" id="invcourse"><strong>Error !</strong> field should not be empty</div>
                              <div class="alert alert-danger bg-danger text-white" role="alert" id="fail"><strong>Error !</strong> unable to proceed your request</div>
                              <div class="alert alert-success bg-success text-white" role="alert" id="savecourse"><strong>Success!</strong> record saved successfully</div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once('include/footer.php');?>
      </div>
    </div>
    <!-- jQuery  -->
    <?php require_once('include/jquery.php');?>
    <script src="plugins/custom-js/updateNewCourse.js"></script>
  </body>
</html>