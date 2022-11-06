@extends('dashboard.layouts.main')
@section('title', 'Edit kerusakan')
@section('content')
    
    <div class="card">
        <div class="card-header text-white bg-primary">
            Edit Data kerusakan
        </div>
        <div class="card-body">
            {{$data_kerusakan}}
              <!-- form -->
              <form action="/dashboard/kerusakan/{{$data_kerusakan->id}}" method="post" enctype="multipart/form-data">
                @method('put')  
                @csrf
                 
                <div class="mb-3 row form-group">
                    <label for="kode" class="col-sm-3 col-form-label">Kode kerusakan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('kode_kerusakan') is-invalid @enderror" id="kode_kerusakan" name="kode_kerusakan" value="{{ old('kode_kerusakan', $data_kerusakan->kode_kerusakan) }}" required autofocus> 
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
                        <input type="text" class="form-control @error('nama_kerusakan') is-invalid @enderror" id="nama_kerusakan" name="nama_kerusakan" value="{{ old('nama_kerusakan', $data_kerusakan->nama_kerusakan) }}" required>
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
                        <input type="text" class="form-control @error('deskripsi_kerusakan') is-invalid @enderror" id="deskripsi_kerusakan" name="deskripsi_kerusakan"  value="{{ old('deskripsi_kerusakan', $data_kerusakan->deskripsi_kerusakan) }}" required>
                        @error('deskripsi_kerusakan')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12" align="right">
                    <input type="submit" name="simpan" value="edit Data" class="btn btn-primary">
                </div>
            </form>
            <!-- endform -->
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

@endsection