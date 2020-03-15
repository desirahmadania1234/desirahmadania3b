@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>   
                             
                <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
    
                <table Border="1">
                    <tr>
                        <td>ID</td>
                        <td>Judul</td>
                        <td>Isi</td>
                        <td>Kategori Id</td>
                        <td>Users Id</td>
                        <td>Create</td>
                        <td>update</td>
                        <td>Aksi</td>
                        
                    </tr>

                        @foreach ($listArtikel as $item)

                    <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->judul !!}</td>
                        <td>{!! $item->isi !!}</td>
                        <td>{!! $item->kategori_artikel_id !!}</td>
                        <td>{!! $item->users_id!!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                       
                        <td>
                        <a href="{!! route('artikel.show' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-primary">Lihat</a>  
                                <a href="{!! route('artikel.edit' ,[$item->id]) !!}"  
                                class="btn btn-sm btn-warning">ubah</a>  

                        {!! Form::open(['route' => ['artikel.destroy', $item->id],'method'=>'delete']) !!} 

                        {!! Form::submit('Hapus',['class'=>'btn btn- sm btn-danger','onclick'=>"return confirm('apakah anda yakin ingin menghapus vidio ini?')"]); !!}

                        {!! Form::close() !!}              
                    </tr>

                                         
                    </tr>

                        @endforeach

                </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection