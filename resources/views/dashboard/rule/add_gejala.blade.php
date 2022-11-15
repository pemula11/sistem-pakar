@extends('dashboard.layouts.main')
@section('title', 'Edit kerusakan')
@section('content')
    
<div class="card">
  <div class="card-header text-white bg-primary">
      Edit Data kerusakan
  </div>
  <div class="card-body">
              <!-- form -->
            <form action="/dashboard/rule/tambah_gejala" method="post" enctype="multipart/form-data">
                @csrf
               
                <input type="hidden" name="rule_id" value="{{$id}}" readonly >
                <div class="mb-3 row form-group">
                  <label for="kerusakan-option" class="col-sm-3 col-form-label">Kerusakan</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="kerusakan-option" name="gejala_id">
                      @foreach ($datagejala as $item)
                      {{$item}}
                          <option value="{{ $item->id }}">{{ $item->kode_gejala }} | {{ $item->nama_gejala }} </option>
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

@endsection