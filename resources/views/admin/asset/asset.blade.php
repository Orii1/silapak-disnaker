@extends('layout.admin')

@section('content')
<div class="pagetitle">
    <h1>Asset</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Manajemen Asset</li>
      </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alur Perizinan <a href="" title="Alur Perizinan Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="alur_perizinan" id="alur_perizinan">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Dasar Hukum <a href="" title="Dasar Hukum Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="dasar_hukum" name="dasar_hukum">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Durasi Pemrosesan <a href="" title="Durasi Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Durasi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Kontak <a href="" title="Kontak Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Telpon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Retribusi <a href="" title="Retribusi Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Maklumat <a href="" title="Maklumat Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Visi dan Misi <a href="" title="Visi dan Misi Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Motto <a href="" title="Motto Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
              <form>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
              </form>
            </div>
        </div>
       </div>

    </div>
</section>

<div class="mt-5">
    <div class="pagetitle">
        <h1>Template</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Manajemen Template</li>
          </ol>
        </nav>
    </div>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Template Permohonan Pengesahan PP <a href="" title="Motto Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
                  <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Template Surat Penyataan PP sudah dimintakan <a href="" title="Motto Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
                  <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Template Surat Penyataan belum terbentuk SP/SB <a href="" title="Motto Saat Ini"><i class="bi bi-info-square-fill"></i></a></h5>
                  <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Upload</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
