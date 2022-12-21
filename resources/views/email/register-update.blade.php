<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 30px;
  }
  .logo {
    text-align: center;
  }
  .logo img {
    width: 150px;
  }
  .content {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.10);
  }
  .content h1 {
    font-size: 20px;
    color: #333333;
    margin-bottom: 20px;
  }
  .content p {
    font-size: 16px;
    line-height: 24px;
  }
  .signup-details {
    margin-top: 20px;
  }
  .signup-details p {
    font-size: 14px;
    line-height: 20px;
  }
  .cta {
    background-color: #00b3ee;
    color: #ffffff;
    padding: 10px 15px;
    text-decoration: none;
    margin-top: 20px;
    border-radius: 5px;
  }
  .cta:hover {
    background-color: #00a2dd;
  }
  .footer {
    font-size: 12px;
    color: #999999;
    margin-top: 20px;
  }
  .social-icons img {
    width: 20px;
    margin-right: 5px;
  }
</style>
</head>
<body>
  <div class="logo">
    {{-- <img src="https://example.com/logo.png" alt="Company Logo"> --}}
    <h1>Horizon Tutoring - Coming in 2023</h1>
  </div>
  <div class="content">
    <h1>Hello again, {{$data['name']}}!</h1>
    <p>
      Thank you for updating your details with us. Your updated details are shown below. 

      <div class="signup-details" style="padding-left:20px;">
        <p><strong>Username:</strong> {{$data['name']}}</p>
        <p><strong>Email:</strong> {{$data['email']}}</p>
        <p><strong>Marketing:</strong> {{$data['marketing']}}@if($data['marketing']=="") off @endif</p>
        <p><strong>Number of Students:</strong> {{$data['students']}}</p><br>
        <a style="text-decoration: none; text-color: white;"href="mailto:info@horizontutoring.com.au" class="cta">Contact Us</a><br><br>
    </div><br>
    
    
    We look forward to a bright future with you.<br><br>
    <b>Regards,<br>
    The Horizon Tutoring Executive Team.</b></p>
  </div>
  <div class="footer">
    <p>
      @if($data['marketing'] == 'on')
      As you have slected to be updated with marketing materials, we will provide updates on our company progress in the future! You will recieve these via email.
      @else
      Keep up to date on the Horizon Tutoring website for details of when we will be going live!
      @endif
      Should you wish to update any of your details with us, please resubmit your interest with the same email address, and your details will be automatically updated.
      <br><br>
      
      Copyright Horizon Tutoring 2022 @if(date('Y')>2022)-{{ date('Y') }}@endif. All Rights Reserved.
  </p>
</div>
</body>
</html>
