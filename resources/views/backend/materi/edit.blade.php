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
						<div class="card-title">Edit Materi <i class="fas fa-long-arrow-alt-right"></i> - {{ $materi->judul_materi }}</i></div>
                        <a href="{{ route('materi.index') }}" class="btn btn-warning btn-sm ml-auto">Kembali</a>
					</div>
				</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('materi.update', $materi->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="materi">Judul materi</label>
                            <input type="text" name="judul_materi" id="judul_materi" class="form-control" value="{{ $materi->judul_materi }}" placeholder="Masukan Kategori">
                            <small id="judul_materi" class="form-text text-muted">Silahkan masukan materi.</small>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="editor1" class="form-control"> {{ $materi->deskripsi }} </textarea>
                            <small id="deskripsi" class="form-text text-muted">Silahkan masukan deskripsi.</small>
                        </div>
                        <div class="form-group">
                            <label for="playlist_id">Playlist</label>
                            <select name="playlist_id" id="playlist_id" class="form-control">
                                @foreach ($playlist as $row)
                                @if ($row->id == $materi->playlist_id)
                                    <option value="{{ $row->id }}" selected='selected'>{{ $row->judul_playlist }}</option>
                                @else
                                    <option value="{{ $row->id }}">{{ $row->judul_playlist }}</option>
                                @endif
                                <small id="playlist_id" class="form-text text-muted">Silahkan pilih playlist.</small>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gambar_materi">Gambar materi</label>
                            <input type="file" name="gambar_materi" class="form-control" placeholder="Masukan Gambar Materi">
                            <br>
                            <small id="gambar_materi" class="form-text text-muted">Silahkan masukan/ganti gambar.</small>
                            <br>
                            <img src=" {{ asset('uploads/' . $materi->gambar_materi) }}" alt="gambar_materi" width="200">
                            <small id="gambar_materi" class="form-text text-muted">Gambar saat ini.</small>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ $materi->is_active == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $materi->is_active == '0' ? 'selected' : '' }}>Draft</option>
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