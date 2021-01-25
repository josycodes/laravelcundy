@include('layout.head')

@include('layout.header')
  <!-- Left side column. contains the logo and sidebar -->
@include('layout.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      ALL BLOG POSTS
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
      </section>
      
      
      <!-- Main content -->
    <section class="content">
  <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>
              
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Blog Title</th>
                  <th>Blog Post</th>
                  <th>Blog Image</th>
                  <th>Action</th>
                </tr>
                @foreach($allblogs as $allblog)
                   <tr>
                  <td>{{ $allblog->id}}</td>
                  <td>{{ substr($allblog->blog_title,0,20)}}</td>
                  <td>{{substr($allblog->blog_post, 0,50)  }}...........</td>
                  <td> <img src="{{ asset('storage/blog/img/'.$allblog['image']) }}" width="100" height="100"/></td>
                  <td><div class="btn btn-group">
                  <a class="btn btn-info" href="/editpost/{{$allblog->id}}" ><i class="fa fa-pencil"></i> </a>
                  <a class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$allblog->id}}"><i class="fa fa-trash"></i> </a>
  
<!-- The Modal -->
<div class="modal delete" id="myModal{{ $allblog->id }}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Delete Post?</h4>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <p class="text-center">Are You Sure You Want To Delete this post?</p>
               </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                
                <a class="btn btn-primary"  href="/delete/{{$allblog->id}}">
                    Delete
                </a>
            </div>
        
        </div>
    </div>
</div>
                  
                  
                  </div></td>
                </tr>
                @endforeach
               
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>









       
</section>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')