@extends('admin.layouts.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Добавление статьи
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.post.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Название</label>
                            <input type="text" class="form-control" name="title" placeholder="Название тэга" value="{{ old('title') }}">
                            @error('title')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="content" id="summernote" cols="30" rows="10">
                            {{ old('content') }}
                            </textarea>
                            @error('content')
                            <div class="text-danger">Это поле необходимо для заполнения</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Добавить превью</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите изображение</label>

                                    @error('preview_image')
                                    <div class="text-danger">Это поле необходимо для заполнения</div>
                                    @enderror
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Добавить главное изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="main_image">
                                    <label class="custom-file-label">Выберите изображение</label>

                                    @error('main_image')
                                    <div class="text-danger">Это поле необходимо для заполнения</div>
                                    @enderror
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection