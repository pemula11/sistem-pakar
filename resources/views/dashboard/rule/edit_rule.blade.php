@extends('dashboard.layouts.main')
@section('title', 'Edit Rule')
@section('content')
    

  <!-- Modal -->
  < 
  <div class="card">
      <div class="card-header text-white bg-primary">
          Edit Data Rule
      </div>
      
      <div class="card-body">
        {{$data_rule}}
          
            <!-- form -->
            <form action="/dashboard/rule/{{$data_rule->id}}" method="post" enctype="multipart/form-data">
                @method('put')  
                @csrf
             
                <div class="mb-3 row form-group">
                  <label for="kerusakan-option" class="col-sm-3 col-form-label">Kerusakan</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="kerusakan-option" name="kerusakan_id">
                      @foreach ($datakerusakan as $item)
                      {{$item}}
                          <option value="{{ $item->id }}" @if ($data_rule->kerusakan_id == $item->id) selected="selected" @endif>
                            {{ $item->kode_kerusakan }} | {{ $item->nama_kerusakan }} </option>
                      @endforeach
                    </select>
                  </div>
               </div>
               <div class="mb-3 row form-group">
                <label for="kerusakan-option" class="col-sm-3 col-form-label">Solusi</label>
                <div class="col-sm-9">
                  <select class="form-control" id="kerusakan-option" name="solusi_id">
                    @foreach ($datasolusi as $item)
                    {{$item}}
                        <option value="{{ $item->id }}" 
                            @if ($data_rule->solusi_id == $item->id) selected="selected" @endif>
                            {{ $item->kode_solusi }} | {{ $item->nama_solusi }} </option>
                    @endforeach
                  </select>
                </div>
             </div>
             
             <div class="mb-3 row form-group">
              <label for="kerusakan-option" class="col-sm-3 col-form-label">Kategori</label>
              <div class="col-sm-9">
                <select class="form-control" id="kerusakan-option" name="kategori_id" >
                  @foreach ($datakategori as $item)
                  {{$item}}
                      <option value="{{ $item->id }}" @if ($data_rule->kategori_id == $item->id) selected="selected" @endif>
                        {{ $item->kategori }}  </option>
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