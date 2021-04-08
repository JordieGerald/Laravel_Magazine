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
						<div class="card-title">Data Materi</div>
                        <a href="{{ route('materi.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('materi.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="judul_materi">Materi Video</label>
                            <input type="text" name="judul_materi" class="form-control" id="judul_materi" placeholder="Masukan Judul Materi">
                            <small id="judul_materi" class="form-text text-muted">Silahkan masukan judul materi.</small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="editor1" class="form-control"></textarea>
                            <small id="deskripsi" class="form-text text-muted">Silahkan masukan deskripsi.</small>
                        </div>
                        <div class="form-group">
                            <label for="link">Link Video</label>
                            <input type="text" name="link" class="form-control" id="link" placeholder="Masukan Link Video">
                            <small id="link" class="form-text text-muted">Silahkan masukan link video.</small>
                        </div>
                        <div class="form-group">
                            <label for="playlist_id">Playlist</label>
                            <select name="playlist_id" id="playlist_id" class="form-control">
                                @foreach ($playlist as $row)
                                <option value="{{ $row->id }}">{{ $row->playlist_id }}</option>
                                <small id="playlist_id" class="form-text text-muted">Silahkan pilih playlist.</small>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar_materi">Gambar Materi</label>
                            <input type="file" name="gambar_materi" class="form-control" placeholder="Masukan Gambar Materi">
                            <small id="gambar_materi" class="form-text text-muted">Silahkan masukan gambar.</small>
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