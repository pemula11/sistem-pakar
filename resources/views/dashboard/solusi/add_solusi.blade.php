

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah solusi</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <!-- form -->
            <form action="/dashboard/solusi" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row form-group">
                    <label for="kode" class="col-sm-3 col-form-label">Kode solusi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('kode_solusi') is-invalid @enderror" id="kode_solusi" name="kode_solusi" value="{{old('kode_solusi')}}" required autofocus > 
                        @error('kode_solusi')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                   
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">Nama solusi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama_solusi') is-invalid @enderror" id="nama_solusi" name="nama_solusi" value="{{old('nama_solusi')}}" required>
                        @error('nama_solusi')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">deskripsi solusi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('deskripsi_solusi') is-invalid @enderror" id="deskripsi_solusi" name="deskripsi_solusi" value="{{old('deskripsi_solusi')}}" required>
                        @error('deskripsi_solusi')
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
        $("#kode_solusi").on({
    keydown: function(e) {
    if (e.which === 32 || e.which == 222 || e.which == 221 || e.which == 219 || e.which == 220 || e.which == 187)
        return false;
    
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");   
    }
    
    });

    
  </script>

  