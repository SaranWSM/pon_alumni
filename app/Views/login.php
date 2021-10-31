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
<?php $session = session();
$checkuserid = $session->get('userid');
if (isset($checkuserid)) {
  echo "<script type='text/javascript'>alert('คุณได้เข้าสู่ระบบแล้ว !');</script>";
  echo ("<script>window.location = '/Home';</script>");
}
?>
<div class="signup-form">
    <form action="/login/auth" method="post">
		<h2 class="pb-2">ลงชื่อเข้าใช้</h2>
        <?php if(session()->getFlashdata('msg')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                    <?php endif; ?>
        <div class="form-group">
        	<input type="text" class="form-control" name="stuid" placeholder="รหัสนักศึกษา" value="<?= set_value('stuid'); ?>" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required="required">
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block mt-4">เข้าสู่ระบบ</button>
        </div>
    </form>
	<div class="text-center text-white">หากคุณยังลงทะเบียนโปรด <a href="register" class="text-warning">ลงทะเบียน</a></div>
</div>
</body>
</html>