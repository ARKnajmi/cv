<?php
include 'Lab_1_config.php';

$result = mysqli_query($conn, "SELECT * FROM cv_data WHERE id=1"); // Sesuaikan dengan id CV
$data = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="script.js"></script>
  <title>Curriculum Vitae</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top" style="background-color: #1D1E20; color: white;">
    <div class="container-fluid">
      <h1>Curriculum Vitae</h1>
      <a class="navbar-brand" href="Lab_1_form.php">Update</a>
    </div>
  </nav>

  <div class="container pt-5">
    <div class="row">
      <div class="col-4 profile borders" style="background-image: url('<?php echo $data['foto_path']; ?>')">
        <div class="divP text-center" style="margin-top: 400px;">
          <h3 class="pt-3" style="color: white; font-weight: bold;"><?php echo $data['nama']; ?></h3>
          <p class="forP"><?php echo $data['pendidikan']; ?></p>
          <p class="pt-1 forP"><?php echo $data['email']; ?></p>
          <p class="forP"><?php echo $data['telepon']; ?></p>
          <p class="pt-1 forP"><?php echo $data['alamat']; ?></p>
        </div>
      </div>
      <div class="col-8 mt-3 mb-3 borderss" style="background-color:#1D1E20">
        <div class="mt-5 marleft">
          <h4 class="text-start mt-5">Pengalaman Kerja</h4>
          <p class="mt-5" style="color: white;"><?php echo $data['pengalaman_kerja']; ?></p>
          <hr />
          <h4 class="text-start">Keterampilan</h4>
          <p class="mt-5" style="color: white;"><?php echo $data['keterampilan']; ?></</p>
          <hr />
          <h4 class="text-start">Websiteku</h4>
          <p class="mt-5" style="color: white;"><?php echo $data['web']; ?></</p>
          <hr />
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container pt-5">
  <div class="card" style="background-color:  #1D1E20;">
    <div class="p-3">
      <img src="<?php echo $data['foto_path']; ?>" alt="Foto Profil">
      <div class="card-body">
        <h1 class="card-title"><?php echo $data['nama']; ?></h1>
        <p class="card-text"><?php echo $data['alamat']; ?></p>
        <p class="card-text"><?php echo $data['telepon']; ?></p>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text"><?php echo $data['web']; ?></p>
        <h2>Pendidikan</h2>
        <p class="card-text"><?php echo $data['pendidikan']; ?></p>
        <h2>Pengalaman Kerja</h2>
        <p class="card-text"><?php echo $data['pengalaman_kerja']; ?></p>
        <h2>Keterampilan</h2>
        <p class="card-text"><?php echo $data['keterampilan']; ?></p>
      </div>
    </div>
  </div> -->
  <!-- Tampilkan komentar -->
  <!-- <nav class="navbar sticky-top bg-body-tertiary biru">
    <div class="container-fluid">
      <h1>Komentar</h1>
    </div>
  </nav>
  <div class="card">
    <div class="p-3">
      <div id="comments">
      </div>
      <label for="commentInput" class="form-label">Tambahkan Komentar</label>
      <textarea class="form-control" id="commentInput" name="comment" rows="3" placeholder="Tambahkan komentar..."></textarea>
      <button class="btn btn-primary" onclick="addComment()">Tambah Komentar</button>
    </div>
  </div> -->
  </div>
  <footer class="text-center">
        <p class="mt-5">&copy; 2023 Created By Ahmad Rafi Kannajmi</p>
    </footer>
</body>
</html>