<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>New Customer Interest</title>
	<style>
		.footer {
			font-size: 12px;
			color: #999999;
			margin-top: 20px;
		}

		.content {
			background-color: #ffffff;
			padding: 30px;
			border-radius: 5px;
			box-shadow: 0 2px 4px 0 rgba(0,0,0,0.10);
		}
	</style>
</head>
<body style="font-family: Arial, sans-serif;">
	<div style="max-width: 600px; margin: 0 auto; padding: 20px;">
		<h1 style="color: #E27D60; font-size: 28px; margin-bottom: 20px;">New Customer Registration</h1>
		<div class="content">
		<p>Hello Executive Team,</p>
		<p>We have received a new customer registration from <strong style="color: #E27D60;">{{$data['name']}}</strong> who is interested in using our services when we open. They have indicated that they will be registering <strong style="color: #E27D60;">{{$data['students']}}</strong> students.</p>
		<br><p>Thank you,</p>
		<p>Horizon Tutoring Admin System</p>
		</div>
		<div class="footer">
			<p><i>
				This email was automatically sent by Horizon Tutoring's Admin System. Please do not reply to this email.<br><br>
				
				Copyright Horizon Tutoring 2022 @if(date('Y')>2022)-{{ date('Y') }}@endif. All Rights Reserved.
			</i></p>
		</div>
	</div>
	
</body>
</html>