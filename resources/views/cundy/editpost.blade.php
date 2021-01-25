@include('layout.head')

@include('layout.header')
  <!-- Left side column. contains the logo and sidebar -->
@include('layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      EDIT EXISTING POSTS
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      </section>
<!-- Main content -->
    <section class="content">
 <div class="row">
        <!-- left column -->
        <div class="col-md-8 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Existing Posts</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" enctype="multipart/form-data" action="{{ route('editpost') }}">
        @csrf

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Blog title</label>
                  <input type="hidden" name="id" value="{{ $postedit->id }}" />
                  <input type="text" class="form-control" value="{{ $postedit->blog_title }}" name="blogtitle" required>
                </div> 
                 <div class="form-group">
                  <label for="exampleInputEmail1">Blog Content</label>
                 <textarea cols=10 rows=10 name="blogpost" class="form-control" required>{{ $postedit->blog_post }}</textarea>
			
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Blog Image</label>
                  <div class="col-md-7">
                   <input type="file" class="form-control" name="blogimg">
                  </div>
                 <div class="col-md-4">
                 <img src="{{ asset('storage/blog/img/'.$postedit->image) }}" width="100" height="100" />
                 </div>
                  
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
		</div>






    </section>
    <!-- /.content -->

      </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')