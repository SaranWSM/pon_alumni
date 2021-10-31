<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/navbar.css'); ?>">
  <style>
  body{
    background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
  }
</style>
</head>
<body>
                <div class="container">
                <center>
                    <h4 class="my-5">แก้ไขข้อมูลนักศึกษา</h4>
                </center>   
                <?php 
            date_default_timezone_set('Asia/Bangkok');
            $session = session(); ?>
            <?php $stuid = $session->get('stuid');?>
            <form action="<?= base_url('/update/'. $stuid) ?>" method="POST">
                <input type="hidden" name="_method" value="PUT" />
                <div class="row form" style="text-align: left;">
                <div class="col-3"></div>
                        <div class="col-6 card justify-content-center">
                          <h5 class="card-header">แบบฟอร์มแก้ไขข้อมูลนักศึกษา</h5>
                          <div class="card-body">
                              <form>
                            <div class="form-group">
                                <label for="id">รหัสนักศึกษา</label>
                                <input type="number" class="form-control" id="id" value="<?php echo $session->get('stuid'); ?>" disabled>
                              </div>
                              <div class="form-group">
                                <label for="name">ชื่อ</label>
                                <input type="text" class="form-control" id="name" placeholder="ระบุชื่อของร้านอาหาร" value="<?php echo $session->get('fname'); ?>">
                              </div>
                              <div class="form-group">
                                <label for="type">นามสกุล</label>
                                <input type="text" class="form-control" id="type" placeholder="ระบุประเภทของอาหาร" value="<?php echo $session->get('lname'); ?>">
                              </div>
                        </div>
                        <div class="col-3"></div>
                  <div class="pb-4">
                    <center>
                        <button type="submit" id="submit" class="btn btn-warning">อัพเดทข้อมูล</button>
                        <a href="/edit" class="btn btn-danger">ยกเลิก</a>
                    </center>
                </div>
                </form>
        </div>
</body>
</html>