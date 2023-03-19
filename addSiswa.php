<?php 
include_once 'template/header.php';

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nama " class="col-4 col-form-label">Nama Siswa</label> 
    <div class="col-8">
      <input id="nama " name="nama " placeholder="nama siswa" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kelas" class="col-4 col-form-label">Kelas</label> 
    <div class="col-8">
      <input id="kelas" name="kelas" placeholder="kelas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuiah</label> 
    <div class="col-8">
      <input id="matkul" name="matkul" placeholder="mata kuliah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php 
include_once 'template/footer.php';

?>