@extends('dashboard.layouts.main')
@section('title', 'Edit solusi')
@section('content')
    
    <div class="card">
        <div class="card-header text-white bg-primary">
            Edit Data solusi
        </div>
        <div class="card-body">
            {{$data_solusi}}
              <!-- form -->
              <form action="/dashboard/solusi/{{$data_solusi->id}}" method="post" enctype="multipart/form-data">
                @method('put')  
                @csrf
                 
                <div class="mb-3 row form-group">
                    <label for="kode" class="col-sm-3 col-form-label">Kode solusi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('kode_solusi') is-invalid @enderror" id="kode_solusi" name="kode_solusi" value="{{ old('kode_solusi', $data_solusi->kode_solusi) }}" required autofocus> 
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
                        <input type="text" class="form-control @error('nama_solusi') is-invalid @enderror" id="nama_solusi" name="nama_solusi" value="{{ old('nama_solusi', $data_solusi->nama_solusi) }}" required>
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
                        <input type="text" class="form-control @error('deskripsi_solusi') is-invalid @enderror" id="deskripsi_solusi" name="deskripsi_solusi"  value="{{ old('deskripsi_solusi', $data_solusi->deskripsi_solusi) }}" required>
                        @error('deskripsi_solusi')
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

@endsection