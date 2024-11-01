<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>

<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<form class="" name="f1" method="POST" action="p_post.php">
<fieldset>
</head>

<body> 
<div class="container align-items-center "> 

  <!-- Form Name -->
  <div class="form-group mb-3 text-center">
      <h2><b>Form Registrasi</b></h2> <br><br>
    </div>

    <!-- (Nama) Prepended text-->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="nama">Nama Lengkap</label>
      <div class="col-sm-4">
        <div class="input-group">
          <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
    </svg></span>
          <input id="nama" name="nama" class="form-control" placeholder="Ketikkan Nama Anda" type="text">
        </div>
        
      </div>
    </div>

    <!-- (Umur) Text input-->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="umur">Umur</label>  
      <div class="col-sm-4">
      <input id="umur" name="umur" type="text" placeholder="Ketikkan Umur Anda" class="form-control input-md">
        
      </div>
    </div>

    <!-- (Gender) Multiple Radios (inline) -->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="gender">Gender</label>
      <div class="col-sm-4"> 
        <label class="radio-inline col-sm-4" for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="Laki-laki">
          Laki-laki
        </label> 
        <label class="radio-inline col-sm-5" for="gender-1">
          <input type="radio" name="gender" id="gender-1" value="Perempuan">
          Perempuan
        </label>
      </div>
    </div>

    <!-- (Pendidikan) Select Basic -->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="pendidikan">Pendidikan</label>
      <div class="col-sm-4">
        <select class="form-select" name="pendidikan" class="form-control">
          <option value=""></option>
          <option value="S3">S3</option>
          <option value="S2">S2</option>
          <option value="S1">S1</option>
          <option value="D3">D3</option>
          <option value="D2">D2</option>
          <option value="D1">D1</option>
        </select>
      </div>
    </div>

    <!-- (Hobi) Multiple Checkboxes -->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="hobi">Hobi</label>
      <div class="col-sm-4">
      <div class="checkbox">
        <label for="hobi0">
          <input type="checkbox" name="hobi0" id="hobi" value="Membaca Buku">
          Membaca Buku
        </label>
      </div>
      <div class="checkbox">
        <label for="hobi1">
          <input type="checkbox" name="hobi1" id="hobi" value="Traveling">
          Traveling
        </label>
      </div>
      <div class="checkbox">
        <label for="hobi2">
          <input type="checkbox" name="hobi2" id="hobi" value="Olahraga">
          Olahraga
        </label>
      </div>
      <div class="checkbox">
        <label for="hobi3">
          <input type="checkbox" name="hobi3" id="hobi" value="Menonton">
          Menonton
        </label>
      </div>
      <div class="checkbox">
        <label for="hobi4">
          <input type="checkbox" name="hobi4" id="hobi" value="Hiking">
          Hiking
        </label>
      </div>
      <div class="checkbox">
        <label for="hobi5">
          <input type="checkbox" name="hobi5" id="hobi" value="Memancing">
          Memancing
        </label>
      </div>
      </div>
    </div>

    <!-- Button -->
    <div class="form-group row mb-4 justify-content-center">
      <label class="col-sm-2 control-label" for="daftar"></label>
      <div class="col-sm-4">
        <button id="daftar" name="daftar" class="btn btn-primary">Daftar</button>
      </div>
    </div>

</div>
</fieldset>
</form>

</body>
</html>