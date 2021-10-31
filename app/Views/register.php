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
  .form-control {
	height: 40px;
	box-shadow: none;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 5px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #75949A;
	margin-bottom: 10px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 8px;
	margin-bottom: 15px;
	background-color: rgba(255, 255, 255, 0.466);
	padding: 20px 30px 15px 30px;
}
.signup-form .form-group {
	margin-bottom: 15px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form action="/register/save" method="post">
		<h2 class="pb-2">ลงทะเบียน</h2>
        <?php if(isset($validation)): ?>
                        <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                    <?php endif; ?>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="ชื่อ" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="นามสกุล" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="stuid" placeholder="รหัสนักศึกษา" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpassword" placeholder="ยืนยันรหัสผ่าน" required="required">
        </div>        
        <div class="form-group">
        	<input type="text" class="form-control" name="major" placeholder="สาขาวิชา" required="required">
        </div>
        <div class="form-group">
        	<input type="text" class="form-control" name="stuclass" placeholder="หมู่เรียน" required="required">
        </div>
        <div class="form-group">
			<div class="row">
                <div class="col"><input type="text" class="form-control" name="educationyear" placeholder="ปีการศึกษา พ.ศ." required="required"></div>
                <div class="col"><select name="sex" class="form-control">
                <option value="ไม่ระบุ">เลือกเพศ</option>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
                <option value="ไม่ระบุ">ไม่ระบุ</option>
                </select>
                </div>
			</div>        	
        </div>
		<p class="hint-text">กรุณากรอกข้อมูลที่อยู่ปัจจุบันของคุณลงบนแบบฟอร์มด้านล่าง</p>
        <div class="form-group">
        	<textarea type="text" class="form-control" name="address" placeholder="รายละเอียดที่อยู่" required="required"></textarea>
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="province" placeholder="จังหวัด" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="district" placeholder="อำเภอ" required="required"></div>
			</div>        	
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="subdistrict" placeholder="ตำบล" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="zipcode" placeholder="รหัสไปรษณีย์" required="required"></div>
			</div>        	
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block mt-4">ลงทะเบียน</button>
        </div>
    </form>
	<div class="text-center text-white">หากคุณลงทะเบียนไว้อยู่แล้ว โปรดเข้าสู่ระบบ <a href="login" class="text-warning">ลงชื่อเข้าใช้</a></div>
</div>
</body>
</html>