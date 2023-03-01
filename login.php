<div class="row mt-3">
    <div class="col-md-4 offset-md-4">
        <div class="card">
        <div class="card-header" style="background: #F8CBA6";><h5>LOGIN</h5></div>
            <div class="card-body" style="background: #FFE7CC">
                <form action="config/aksi_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                    </div>
                    
            </div>
            <div class="card-footer" style="display:flex; flex-direction:column; align-items:center; background: #FFE7CC">
                <button type="submit" name="kirim" class="btn btn-secondary">LOGIN</button>
                <p>Belum punya akun? Daftar <a href="index.php?page=registrasi">disini!</a></p>
            </div>
            </form>
        </div>
    </div>
</div>