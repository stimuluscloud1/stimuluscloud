<x-headeradmin />
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Blog Post</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Post</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Blog title" />
                            </div>
                            <select class="form-control show-tick">
                                <option>Select Category</option>
                                <option>Website</option>
                                <option>Social Media</option>
                                <option>PHP</option>
                                <option>AWS</option>
                                <option>Digital Ocean</option>
                            </select>
                            <div class="form-group m-t-20 m-b-20">
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                            <div class="summernote">
                                <h3 class="m-b-0">hi,</h3>
                                <h4 class="m-t-0">we are Summernote</h4>
                                <p></p>
                            </div>
                            <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
                        </div>
                    </div>
                </div>            
            </div>

        </div>
    </div>
    
</div>

<x-footeradmin />