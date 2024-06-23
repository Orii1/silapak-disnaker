<div class="modal fade" id="hasil_pp" tabindex="-1" aria-labelledby="hasil_ppLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="hasil_ppLabel">Upload Surat Keputusan</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/mediator/permohonan-pengesahan-pp/hasil/{{$data->id_pp}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <label class="mb-2">Hasil Pengecekan</label>
                <select class="form-select" name="hasil_pengecekan" required>
                    <option value="Dokumen Valid">Dokumen Valid</option>
                    <option value="Dokumen Tidak Valid">Dokumen Tidak Valid</option>
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
