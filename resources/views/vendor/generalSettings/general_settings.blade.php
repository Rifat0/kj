@extends('vendor.layouts.layout')

@section('css')
    <link href="{{ asset('public/backend/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <link href="{{ asset('public/backend/css/plugins/summernote/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/summernote/summernote-bs3.css')}}" rel="stylesheet">
    <link href="{{ asset('public/backend/css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">

    <style>
        .imgPopup {
            position: relative;
            width: 96px;
            height: 96px;
        }

        .imgPopup img {
            width: 96px;
            height: 96px;
        }

        .imgPopup .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .imgPopup .btn:hover {
            background-color: black;
        }
    </style>
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(2); ?>
            <?php $segment2 = Request::segment(3); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <?php echo str_replace('_', ' ', ucfirst($segment1)); ?>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-8">
            <div class="title-action">
                <button type="submit" form="form-generalSettings" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> </button>
                <a href="{{ url('/vendor/products') }}"class="btn btn-default btn-sm"><i class="fa fa-reply"></i></a>
            </div>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight ecommerce">
        <div class="row">
            <div class="col-lg-12">
                @if (session('status'))

                    <div class="alert alert-success">
                        <strong>{{ session('status') }}</strong>
                    </div>

                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="tabs-container">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-2"> Store</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-3"> Social</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-4"> Local</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-5"> Images</a></li>
                    </ul>
                    <form method="POST" action="{{ url('/vendor/general_settings/update_general_settings_request') }}" class="form-horizontal" id="form-generalSettings" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <input type="hidden" id="id" name="id" value="{{ $get_general_settings[0]->id }}" class="form-control">

                    <div class="tab-content">
                        <div id="tab-2" class="tab-pane active">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Company Name: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="name" class="form-control" type="text" value="{{ $get_general_settings[0]->name }}" placeholder="Enter Company Name">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Fax</label>
                                        <div class="col-sm-10">
                                            <input name="fax" class="form-control" type="text" value="{{ $get_general_settings[0]->fax }}" placeholder="Enter Fax">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Company Owner: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="owner" class="form-control" type="text" value="{{ $get_general_settings[0]->owner }}" placeholder="Enter Company Owner">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="address" class="form-control" type="text" value="{{ $get_general_settings[0]->address }}" placeholder="Enter Address">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Geocode</label>
                                        <div class="col-sm-10">
                                            <input name="geocode" class="form-control" type="text" value="{{ $get_general_settings[0]->geocode }}" placeholder="Enter Geocode">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="email" class="form-control" type="text" value="{{ $get_general_settings[0]->email }}" placeholder="Enter Email">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Telephone: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="telephone" class="form-control" type="text" value="{{ $get_general_settings[0]->telephone }}" placeholder="Enter Telephone">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Copyright: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <input name="copyright" class="form-control" type="text" value="{{ $get_general_settings[0]->copyright }}" placeholder="Enter Copyright">
                                            <span class="help-block m-b-none"></span>
                                        </div> 
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Facebook:</label>
                                        <div class="col-sm-10">
                                            <input name="facebook" class="form-control" type="text" value="{{ $get_general_settings[0]->facebook }}" placeholder="Enter Facebook">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Twitter:</label>
                                        <div class="col-sm-10">
                                            <input name="twitter" class="form-control" type="text" value="{{ $get_general_settings[0]->twitter }}" placeholder="Enter Twitter">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Linkdin:</label>
                                        <div class="col-sm-10">
                                            <input name="linkdin"class="form-control" type="text" value="{{ $get_general_settings[0]->linkdin }}" placeholder="Enter Linkdin">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Google+:</label>
                                        <div class="col-sm-10">
                                            <input name="googlePlus" class="form-control" type="text" value="{{ $get_general_settings[0]->googlePlus }}" placeholder="Enter Google+">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Instagram:</label>
                                        <div class="col-sm-10">
                                            <input name="instagram" class="form-control" type="text" value="{{ $get_general_settings[0]->instagram }}" placeholder="Enter Instagram">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Pinterest:</label>
                                        <div class="col-sm-10">
                                            <input name="pinterest" class="form-control" type="text" value="{{ $get_general_settings[0]->pinterest }}" placeholder="Enter Pinterest">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Country:</label>
                                        <div class="col-sm-10">
                                            <select name="country" class="form-control">
                                                <option>-- Select Country --</option>
                                                <option></option>
                                            </select>
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Language:</label>
                                        <div class="col-sm-10">
                                            <select name="language" class="form-control">
                                                <option>-- Select Language --</option>
                                                <option></option>
                                            </select>
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Region/State:</label>
                                        <div class="col-sm-10">
                                            <select name="state" class="form-control">
                                                <option>-- Select Region/State --</option>
                                                <option></option>
                                            </select>
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Administration Language:</label>
                                        <div class="col-sm-10">
                                            <select name="administrationLanguage" class="form-control">
                                                <option>-- Select Administration Language --</option>
                                                <option></option>
                                            </select>
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane">
                            <div class="panel-body">
                                            
                                <input type="hidden" name="previousLogo" value="{{ $get_general_settings[0]->storeLogo }}" class="form-control">
                                <input type="hidden" name="previousIcon" value="{{ $get_general_settings[0]->storeIcon }}" class="form-control">
                                            
                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Store Logo: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset('public/backend/img/vendor/system/' . $get_general_settings[0]->storeLogo) }}" class="img-lg">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <label class="btn btn-primary btn-sm" for="storeLogo">
                                                <input name="storeLogo" id="storeLogo" type="file" style="display:none;">
                                                Upload
                                            </label>
                                            <a href="{{ url('/vendor/products') }}"class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Store Icon: <font color="red">*</font></label>
                                        <div class="col-sm-10">
                                            <img src="{{ asset('public/backend/img/vendor/system/' . $get_general_settings[0]->storeIcon) }}" class="img-lg">
                                            <span class="help-block m-b-none"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <label class="btn btn-primary btn-sm" for="storeIcon">
                                                <input name="storeIcon" id="storeIcon" type="file" style="display:none;">
                                                Upload
                                            </label>
                                            <a href="{{ url('/vendor/products') }}"class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </fieldset>

                            </div>
                        </div>
                    </div>
                    </form>
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

    <!-- iCheck -->
    <script src="{{ asset('public/backend/js/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

    <!-- Tags Input -->
    <script src="{{ asset('public/backend/js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>
    
    <script>
        $(document).ready(function(){

            $('.tagsinput').tagsinput({
                tagClass: 'label label-primary'
            });

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            var elem_4 = document.querySelector('.js-switch_4');
            var switchery_4 = new Switchery(elem_4, { color: '#f8ac59' });
                switchery_4.disable();

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $('.dual_select').bootstrapDualListbox({
                selectorMinimalHeight: 160
            });


        });

        $('.chosen-select').chosen({width: "100%"});

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        var basic_slider = document.getElementById('basic_slider');

        noUiSlider.create(basic_slider, {
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        var range_slider = document.getElementById('range_slider');

        noUiSlider.create(range_slider, {
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        var drag_fixed = document.getElementById('drag-fixed');

        noUiSlider.create(drag_fixed, {
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>

    <!-- Data picker -->
    <script src="{{ asset('public/backend/js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- SUMMERNOTE -->
    <script src="{{ asset('public/backend/js/plugins/summernote/summernote.min.js') }}"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

            $('.input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

        });
    </script>
    
@endsection