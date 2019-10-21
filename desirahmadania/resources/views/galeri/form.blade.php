@csrf
<div class="form-group row">
    <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

        <div class="col-md-6">
            
            {!! Form::text('nama', null,['class'=>"form-control",'required','autofocus']); !!}
               
                @error('nama')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
<div class="form-group row">
    <label for="kategori_galeri_id" class="col-md-4 col-form-label text-md-right">{{ __('Kategori Galeri') }}</label>

        <div class="col-md-6">
            
            {!! Form::select('kategori_galeri_id',$kategoriGaleri,null,["class"=>"form-control","required"] ) !!}
               
                @error('kategori_galeri_id')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
<div class="form-group row">
    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('path') }}</label>

        <div class="col-md-6">
         <input id="path"type="text"class="from-control @error('path') is-invalid @enderror" name="path" value="{{ old('path') }}" required autofocus>

               
                @error('path')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>
<div class="form-group row">
    <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

        <div class="col-md-6">
            
            {!! Form::textarea('keterangan', null,['class'=>'form-control']); !!}
               
                @error('keterangan')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
</div>

{!! Form::hidden('users_id',Auth::id() ); !!}

            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan Data') }}
                                </button>
                                <a href="{!! route('kategori_artikel.index') !!}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                            </div>
                        </div>
