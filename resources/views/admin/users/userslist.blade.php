@extends('admin.main')
@section('content')
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Date added</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td class="text-center">
                            <a href="{!! str_replace('{users}', $user->id, $edit_user) !!}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                            <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                        </td>
                      </tr>
                    @endforeach                                        
                    </tbody>                    
                  </table>
                  {!! $users->links() !!}
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
       @endsection