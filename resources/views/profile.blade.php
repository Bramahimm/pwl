<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #fff;
    }

    .profile {
      text-align: center;
    }

    .avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      border: 1px solid #555;
      background-color: #f0f0f0;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 0 auto 20px auto;
      font-size: 50px;
      color: #aaa;
    }

    .info {
      background-color: #ddd;
      margin: 10px 0;
      padding: 10px;
      border-radius: 5px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="profile">
    <!-- Avatar -->
    <div class="avatar">🧑</div>

    <!-- Data -->
    <div class="info">Nama: {{ $nama }}</div>
    <div class="info">NPM: {{ $npm }}</div>
    <div class="info">Kelas: {{ $kelas }}</div>
  </div>
</body>

</html>
