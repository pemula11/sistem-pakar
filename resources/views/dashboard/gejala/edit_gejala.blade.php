@extends('dashboard.layouts.main')
@section('title', 'Edit gejala')
@section('content')
    
    <div class="card">
        <div class="card-header text-white bg-primary">
            Edit Data Gejala
        </div>
        <div class="card-body">
            {{$data_gejala}}
              <!-- form -->
              <form action="/dashboard/gejala/{{$data_gejala->id}}" method="post" enctype="multipart/form-data">
                @method('put')  
                @csrf
                 
                <div class="mb-3 row form-group">
                    <label for="kode" class="col-sm-3 col-form-label">Kode Gejala</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('kode_gejala') is-invalid @enderror" id="kode_gejala" name="kode_gejala" value="{{ old('kode_gejala', $data_gejala->kode_gejala) }}" required autofocus> 
                        @error('kode_gejala')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                   
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">Nama Gejala</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('nama_gejala') is-invalid @enderror" id="nama_gejala" name="nama_gejala" value="{{ old('nama_gejala', $data_gejala->nama_gejala) }}" required>
                        @error('nama_gejala')
                        <div id="validationServer03Feedback" class="invalid-feedback">
                           {{ $message }}.
                         </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row form-group">
                    <label for="nama" class="col-sm-3 col-form-label">deskripsi Gejala</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('deskripsi_gejala') is-invalid @enderror" id="deskripsi_gejala" name="deskripsi_gejala"  value="{{ old('deskripsi_gejala', $data_gejala->deskripsi_gejala) }}" required>
                        @error('deskripsi_gejala')
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
        $("#kode_gejala").on({
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