<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary tambahMember" data-bs-toggle="modal"
      data-bs-target="#formModal">
        Tambah Data Member
      </button>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-lg-6">
    <form action="<?= BASEURL ?>/member/cari" method="post">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari member"
      name="keyword"
      id="keyword" aria-label="Recipient's username"
      aria-describedby="button-addon2" autocomplete="off">
      <button class="btn btn-primary" type="submit"
      id="tombolCari">Cari</button>
      </div>
    </form>
    </div>
  </div>
  
      <div class="row">
              <div class="col-lg-6">
                  <h3>Daftar Member</h3>
      
                  <ul class="list-group">
                      <?php foreach ($data["data"] as $mbr): ?>
                      <li class="list-group-item">
                          <?= $mbr["email"] ?>
                          <a href="<?= BASEURL ?>/member/hapus/<?= $mbr[
  "id"
] ?>" class="badge text-bg-danger text-decoration-none float-end ms-1"
onclick="return confirm('yakin')">hapus</a>
                          <a href="<?= BASEURL ?>/member/ubah/<?= $mbr[
  "id"
] ?>" class="badge text-bg-warning text-decoration-none float-end ms-1
tampilModelUbah"
data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mbr[
  "id"
] ?>">edit</a>
                          <a href="<?= BASEURL ?>/member/detail/<?= $mbr[
  "id"
] ?>" class="badge text-bg-primary text-decoration-none float-end ms-1">detail</a>
                      </li>
                      <?php endforeach; ?>
                  </ul>
                 
              </div>
          </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModalLabel">Tambah Data Member</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/member/tambah" method="post">
          <div class="form-group">
          <input type="hidden" name="id" id="id">
          </div>
          <div class="form-group">
          <label for="username" class="form-label">USERNAME</label>
          <input type="text" class="form-control" id="username" name="username"
          aria-describedby="userHelp" required>
          <div id="userHelp" class="form-text">Isi username user telegram anda.</div>
          </div>
          <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" id="email" name="email"
          aria-describedby="emailHelp" required>
          <div id="emailHelp" class="form-text">Isi email anda.</div>
          </div>
          <div class="form-group">
          <label for="jabatan" class="form-label">Jabatan</label>
          <input type="text" class="form-control" id="jabatan" name="jabatan"
          aria-describedby="jabatanHelp" required>
          <div id="jabatanHelp" class="form-text">Isi jabatan atau skill anda.</div>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>