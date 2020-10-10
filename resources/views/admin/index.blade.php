<x-headeradmin /> 

    

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Dashboard</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card modal-open">
                        <div class="body">
                            <div class="number">
                                <h6><i class="fa fa-thumbs-o-up m-r-10"></i> Likes</h6>
                                <span>22,500</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="22500" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card modal-open">
                        <div class="body">
                            <div class="number">
                                <h6><i class="fa fa-comments-o m-r-10"></i>Comments</h6>
                                <span>500</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="500" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card modal-open">
                        <div class="body">
                            <div class="number">
                                <h6><i class="fa fa-share-alt m-r-10"></i>Share</h6>
                                <span>2,215</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="2215" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card modal-open">
                        <div class="body">
                            <div class="number">
                                <h6><i class="fa fa-eye m-r-10"></i>View</h6>
                                <span>421,215</span>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="421215" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Categories Statistics</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>2,048</h5>
                                    <span>Total Leads</span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>521</h5>
                                    <span>Connections</span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>73</h5>
                                    <span>Articles</span>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <h5>23</h5>
                                    <span>Categories</span>
                                </div>
                            </div>
                            <div id="line_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-8 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Visitors Statistics</h2>
                        </div>
                        <div class="body">
                            <div class="row">                                
                                <div class="col-lg-6 col-md-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <small>Page Views</small>
                                            <h5 class="m-b-0">32,211,536</h5>
                                        </div>
                                        <div class="col-6">
                                            <small>Site Visitors</small>
                                            <h5 class="m-b-0">23,516</h5>
                                        </div>
                                    </div>
                                    <div id="world-map-markers" class="m-t-30" style="height: 280px;"></div>
                                </div>
                                <div class="col-lg-6 col-md-12 visitors-chart text-center">
                                    <div id="donut_chart" class="donut_chart m-b-30" style="height: 300px;"></div>
                                </div>
                            </div>                        
                        </div>                    
                    </div>                
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Marketing Campaign <small>This Month </small></h2>                            
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover m-b-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Facebook Ads</h6>
                                                <span>1.2k Likes, 418 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 402</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-success">
                                                    23 <i class="fa fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-twitter fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Twitter Ads</h6>
                                                <span>1k Likes, 128 Shares</span>
                                            </td>
                                            <td>
                                                <h6 class="m-b-0">$ 489</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="text-danger">                                                    
                                                    -9 <i class="fa fa-long-arrow-down"></i>
                                                </div>
                                                <div class="text-muted">down</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-instagram fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Instagram Post</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 718 </h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    16 <i class="fa  fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-linkedin fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">LinkedIn Post</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 768</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    27 <i class="fa  fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <i class="fa fa-google-plus-circle fa-2x"></i>
                                            </td>
                                            <td>
                                                <h6 class="margin-0">Google +</h6>
                                                <span>1k Follows, 228 Likes</span>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">$ 1768</h6>
                                                <span class="text-muted">Spent</span>
                                            </td>
                                            <td class="text-right">
                                                <div class=" text-success">
                                                    27 <i class="fa fa-long-arrow-up"></i>
                                                </div>
                                                <div class="text-muted">up</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Twitter</h5>
                            <small>56% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="66" data-linecap="round" data-width="120" data-height="120" data-thickness="0.1" data-fgColor="#4CAF50" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Facebook</h5>
                            <small>87% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="26" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#7b69ec" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Instagram</h5>
                            <small>16% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="76" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#f9bd53" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <h5>Google +</h5>
                            <small>37% Increase</small>
                            <hr>
                            <input type="text" class="knob2" value="76" data-linecap="round" data-width="120" data-height="120" data-thickness="0.2" data-fgColor="#f9bd53" readonly>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</div>

<x-footeradmin />
