@extends('layouts.default')
@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
            </div>
        </div>
    </div>
</div>
<div class="page-inner mt--5">
	<div class="row">
		<div class="col-md-12">
			<div class="card full-height">
				<div class="card-header">
					<div class="card-head-row">
						<div class="card-title">Data Artikel</div>
                        <a href="{{ route('artikel.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('artikel.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="artikel">Judul Artikel</label>
                            <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukan Kategori">
                            <small id="judul" class="form-text text-muted">Silahkan masukan nama artikel.</small>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="editor1" class="form-control"></textarea>
                            <small id="body" class="form-text text-muted">Silahkan masukan body.</small>
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                @foreach ($kategori as $row)
                                <option value="{{ $row->id }}">{{ $row->nama_kategori }}</option>
                                <small id="kategori_id" class="form-text text-muted">Silahkan pilih kategori.</small>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar_artikel">Gambar Artikel</label>
                            <input type="file" name="gambar_artikel" class="form-control" placeholder="Masukan Gambar Artikel">
                            <small id="gambar_artikel" class="form-text text-muted">Silahkan masukan gambar.</small>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1">Publish</option>
                                <option value="0">Draft</option>
                            </select>
                            <small id="is_active" class="form-text text-muted">Silahkan pilih status.</small>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-sm" type="submit">Simpan</button>
                            <button class="btn btn-primary btn-sm" type="reset">Reset</button>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>    
@endsection