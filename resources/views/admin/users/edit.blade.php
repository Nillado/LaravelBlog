@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить пользователя
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                {!! Form::open([
                    'route' => ['users.update', $user->id],
                    'method' => 'put',
                    'files' => true
                ]) !!}
                <div class="box-header with-border">
                    <h3 class="box-title">Изменяем пользователя</h3>
                    @include('admin.errors')
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                   value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                   value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">О себе</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="about"
                                   value="{{$user->about}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputEmail1" name="password">
                        </div>
                        <div class="form-group">
                            <img src="{{$user->getAvatar()}}" alt="" width="200" class="img-responsive">
                            <label for="exampleInputFile">Аватар</label>
                            <input type="file" id="exampleInputFile" name="avatar">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{route('users.index')}}" class="btn btn-default">Назад</a>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
                {!! Form::close() !!}
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
