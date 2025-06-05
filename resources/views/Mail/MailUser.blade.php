<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <body style="background: #eee ; padding: 30px">
        <div style="width: 600px ; margin: 0 auto ; background: #fff ;
         border: 1px solid:#ccc ; padding: 20px ">
           <h1>Welcome Admin</h1>
           <p>Hope this email finds you will</p>
           <p>There is new contact us message with the folloing data</p>
           <br>
                <p><b>Name:   </b>{{ $data['name'] }}   </p>
                <p><b>Email:  </b>{{ $data['email'] }}  </p>
                <p><b>Phone:  </b>{{ $data['phone'] }}  </p>
                <p><b>Message:</b>{{ $data['message'] }}</p>
           <br>
           <p> Best Regarels </p>
        </div>
    </body>
</html>
