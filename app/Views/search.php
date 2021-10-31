<?php $session = session();
ini_set('display_errors', 1);
?>
<!doctype html>
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
  table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>
    <div class="content">
        <br><br>
        <div class="container">
                <center>
                    <h4 class="mb-5">ค้นหาข้อมูลศิษย์เก่า</h4>
                </center>
                        <table style="width:100%; background-color:white;">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสนักศึกษา</th>
                                    <th>ชื่อ</th>
                                    <th>นามสกุล</th>
                                    <th>เพศ</th>
                                    <th>สาขาวิชา</th>
                                    <th>หมู่เรียน</th>
                                    <th>ปีการศึกษา</th>
                                    <th>ที่อยู่</th>
                                    <th>จังหวัด</th>
                                    <th>อำเภอ</th>
                                    <th>ตำบล</th>
                                    <th>รหัสไปรษณีย์</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($users): $i=1;
                                foreach($users as $row): ?>
                                <tr class="contentdata">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['stuid']; ?></td>
                                    <td><?php echo $row['fname']; ?></td>
                                    <td><?php echo $row['lname']; ?></td>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td><?php echo $row['major']; ?></td>
                                    <td><?php echo $row['stuclass']; ?></td>
                                    <td><?php echo $row['educationyear']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['province']; ?></td>
                                    <td><?php echo $row['district']; ?></td>
                                    <td><?php echo $row['subdistrict']; ?></td>
                                    <td><?php echo $row['zipcode']; ?></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
        </div>
    </div>
    </div>
    </div>
</body>
</html>