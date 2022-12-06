<html>
    <body>
        <h3>Welcome to the Horizon Tutoring Family!</h3>
        <p>We are excited to welcome you to our growing family, {{$data['name']}}. </p>
            <p>Horizon Tutoring is only just beginning, and we eagerly await February 2023 when we begin our complete operations.</p>
        <p><u>Your user details are as follows:</u>
            <li>Name: {{$data['name']}}</li>
            <li>Email: {{$data['email']}}</li>
            <li>Number of Students: {{$data['students']}}</li>
        </p>
        @if($data['marketing'] == 'on')
        <p>We will reach out to you with updates on our progress throughout the coming weeks.</p>
        @else
        <p>As you have asked to remain off of marketing material, we will only make contact with you when our services go live</p>
        @endif

        <p>Looking forward to a bright future!</p>
        <p>Regards,</p>
        <h3><b>Horizon Tutoring Executive Team</b></h3>
    </body>
</html>