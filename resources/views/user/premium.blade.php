<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>premium</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('')}}CSS/premium.css" rel="stylesheet" />
        <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/transaksi" method="POST" enctype="multipart/form-data">
          @csrf
        <div class="row">
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname"><i class="fa-user"></i> Username</label>
            <input type="text" id="fname" name="username">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="profile_pic">Kirimkan Bukti Transfer</label>
    <input
      type="file"
      id="profile_pic"
      name="profile_pic"
      accept=".jpg, .jpeg, .png" />
        <button type="submit" class="btn">Payment</button>
      </form>
</div>
    </head>
</html>
