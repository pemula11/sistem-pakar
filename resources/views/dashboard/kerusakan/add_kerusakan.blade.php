

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah kerusakan</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <!-- form -->
            <form action="/dashboard/kerusakan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row form-group">
                    <label for="kode" class="col-sm-3 col-form-label">Kode kerusakan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('kode_kerusakan') is-invalid @enderror" id="kode_kerusakan" name="kode_kerusakan" value="{{old('kode_kerusakan')}}" required autofocus > 
                        @error('kode_kerusakan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                   
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">Nama kerusakan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama_kerusakan') is-invalid @enderror" id="nama_kerusakan" name="nama_kerusakan" value="{{old('nama_kerusakan')}}" required>
                        @error('nama_kerusakan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">deskripsi kerusakan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('deskripsi_kerusakan') is-invalid @enderror" id="deskripsi_kerusakan" name="deskripsi_kerusakan" value="{{old('deskripsi_kerusakan')}}" required>
                        @error('deskripsi_kerusakan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12" align="right">
                    <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
                </div>
            </form>
            <!-- endform -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>

  <script>
        $("#kode_kerusakan").on({
    keydown: function(e) {
    if (e.which === 32 || e.which == 222 || e.which == 221 || e.which == 219 || e.which == 220 || e.which == 187)
        return false;
    
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");   
    }
    
    });

    
  </script>

  