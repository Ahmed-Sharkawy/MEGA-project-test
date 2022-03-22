<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>QR Code Generator</title>
</head>
<body>
  <h4>QR Code Generator</h4>
  {!! QrCode::size(200)->generate('https://translate.google.com') !!}
  {!! QrCode::format('png')->size(200)->generate('https://translate.google.com', storage_path('qrcode/code.png')) !!}

</body>
</html>