@extends('vendor.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(2); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment1)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment1)); ?></strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>General Settings</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form method="get" class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Meta Title</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Meta Title">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Meta Keyword</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Meta Keyword">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Meta Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" placeholder="Enter Meta Description"></textarea>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Name</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Company Name">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Fax</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Fax">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Owner</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Company Owner">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Address">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Geocode<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Geocode">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Email<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Email">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Telephone<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Telephone">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Copyright<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Copyright">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Facebook<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Facebook">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Twitter<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Twitter">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Linkdin<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Linkdin">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Google+<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Google+">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Instagram<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Instagram">
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Pinterest<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input class="form-control" type="text" value="" placeholder="Enter Pinterest">
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Country<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option>-- Select Country --</option>
                                        <option></option>
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Language<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option>-- Select Language --</option>
                                        <option></option>
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Region/State<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option>-- Select Region/State --</option>
                                        <option></option>
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                                <label class="col-sm-2 control-label">Administration Language<font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option>-- Select Administration Language --</option>
                                        <option></option>
                                    </select>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Company Logo <font color="red">*</font></label>
                                <div class="col-sm-4">
                                    <input type="file" name="" class="form-control">
                                    <span class="help-block m-b-none">Primary Product Image: JPG or JPEG format, 40KB to 5MB.View detailed guidelines</span>
                                </div>
                                <label class="col-sm-2 control-label">Background Image</label>
                                <div class="col-sm-4">
                                    <input type="file" name="" class="form-control" multiple />
                                    <span class="help-block m-b-none">Additional Product Image: Show buyers additional view(s) of your product or its packaging (JPG or JPEG format, 40KB to 5MB). You may set image display order by dragging and dropping images. View detailed guidelines</span>
                                    <span class="help-block m-b-none"></span>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-white" type="submit">Cancel</button>
                                    <button class="btn btn-primary" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('public/backend/js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

        });

    </script>

@endsection