<div class="modal fade" id="hasil_pp" tabindex="-1" aria-labelledby="hasil_ppLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_ppLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pengesahan-pp/hasil/{{$data->id_pp}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_pkb" tabindex="-1" aria-labelledby="hasil_pkbLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_pkbLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pendaftaran-pkb/hasil/{{$data->id_pkb}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_pkwt" tabindex="-1" aria-labelledby="hasil_pkwtLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_pkwtLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pendaftaran-pkwt/hasil/{{$data->id_pkwt}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_spsb" tabindex="-1" aria-labelledby="hasil_spsbLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_spsbLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pencatatan-spsb/hasil/{{$data->id_spsb}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_lks" tabindex="-1" aria-labelledby="hasil_lksLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_lksLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pendaftaran-lks/hasil/{{$data->id_lks}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_hi" tabindex="-1" aria-labelledby="hasil_hiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_hiLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pencatatan-hi/hasil/{{$data->id_hi}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>

<div class="modal fade" id="hasil_phk" tabindex="-1" aria-labelledby="hasil_phkLabel" aria-phkdden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_phkLabel">Hasil Pemeriksaan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pelaporan-phk/hasil/{{$data->id_phk}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                </select>
                <label class="mb-2 mt-3">Pesan</label>
                <input type="text" name="pesan" class="form-control">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
        </form>
      </div>
    </div>
</div>
