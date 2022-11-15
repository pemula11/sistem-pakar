

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah rule</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
            <!-- form -->
            <form action="/dashboard/rule/tambah_gejala" method="post" enctype="multipart/form-data">
                @csrf
               
                <div class="mb-3 row form-group">
                  <label for="kerusakan-option" class="col-sm-3 col-form-label">Kerusakan</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="kerusakan-option" name="kerusakan_id">
                      @foreach ($datakerusakan as $item)
                      {{$item}}
                          <option value="{{ $item->id }}">{{ $item->kode_kerusakan }} | {{ $item->nama_kerusakan }} </option>
                      @endforeach
                    </select>
                  </div>
               </div>
               <div class="mb-3 row form-group">
                <label for="kerusakan-option" class="col-sm-3 col-form-label">Solusi</label>
                <div class="col-sm-9">
                  <select class="form-control" id="kerusakan-option" name="kerusakan_id">
                    @foreach ($datasolusi as $item)
                    {{$item}}
                        <option value="{{ $item->id }}">{{ $item->kode_solusi }} | {{ $item->nama_solusi }} </option>
                    @endforeach
                  </select>
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
        $("#kode_rule").on({
    keydown: function(e) {
    if (e.which === 32 || e.which == 222 || e.which == 221 || e.which == 219 || e.which == 220 || e.which == 187)
        return false;
    
    },
    change: function() {
        this.value = this.value.replace(/\s/g, "");   
    }
    
    });

    
  </script>

  