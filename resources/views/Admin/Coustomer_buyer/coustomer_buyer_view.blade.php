@extends('admin.layouts.layout')

@section('css')
    
@endsection

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment1 = Request::segment(1); ?>
            <?php $segment2 = Request::segment(2); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment2)); ?></strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Coustomer Profile</h5>
                        </div>
                        <div>
                            <div class="ibox-content profile-content">
                                <h4><strong>{{ $coustomer_buyer_data->company_name }}</strong></h4>
                                <p><i class="fa fa-map-marker"></i> join Date {{ Carbon::parse($coustomer_buyer_data->created_at)->format('d-m-Y') }}</p>
                                <br>
                                <h4>
                                    About Company : {{ $coustomer_buyer_data->about_company }}
                                </h4>
                                <h4>
                                    Company Description : {{ $coustomer_buyer_data->company_description }}
                                </h4>
                                <h4>
                                    Website URL : {{ $coustomer_buyer_data->website_url }}
                                </h4>
                                <h4>
                                    Cac Number : {{ $coustomer_buyer_data->cac_number }}
                                </h4>
                                <h4>
                                    Type of Business : {{ $coustomer_buyer_data->type_of_business }}
                                </h4>
                                <h4>
                                    Year of Existence : {{ $coustomer_buyer_data->year_of_existence }}
                                </h4>
                                <h4>
                                    Phone of MD/Chairman : {{ $coustomer_buyer_data->phone_of_MD_Chairman }}
                                </h4>
                                <h4>
                                    Email of MD/Chairman : {{ $coustomer_buyer_data->email_of_MD_Chairman }}
                                </h4>
                                <h4>
                                    Phone of Contact Person : {{ $coustomer_buyer_data->phone_of_contact_person }}
                                </h4>
                                <h4>
                                    Email of Contact Person : {{ $coustomer_buyer_data->email_of_contact_person }}
                                </h4>
                                <h4>
                                    Company Rating : {{ $coustomer_buyer_data->company_rating }}
                                </h4>
                                <h4>
                                    Login Email : {{ $coustomer_buyer_data->login_email }}
                                </h4>
                            </div>
                    </div>
                </div>
                    </div>
                
            </div>
        </div>
@endsection

@section('js')
    
@endsection