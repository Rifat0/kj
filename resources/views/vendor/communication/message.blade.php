@extends('vendor.layouts.layout')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-4">
            <?php $segment = Request::segment(2); ?>
            <h2><?php echo str_replace('_', ' ', ucfirst($segment)); ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/vendor/dashboard') }}">Dashboard</a>
                </li>
                <li class="active">
                    <strong><?php echo str_replace('_', ' ', ucfirst($segment)); ?></strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox chat-view">

                    <div class="ibox-title">
                        <small class="pull-right text-muted">Last message:  Mon Jan 26 2015 - 18:39:23</small>
                         Messages
                    </div>

                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-9 ">
                                <div class="chat-discussion">

                                    <div class="chat-message left">
                                        <img class="message-avatar" src="{{ asset('public/backend/img/buyer/profilePicture/a1.jpg') }}" alt="" >
                                        <div class="message">
                                            <a class="message-author" href="#"> Michael Smith </a>
                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                            <span class="message-content">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="chat-message right">
                                        <img class="message-avatar" src="{{ asset('public/backend/img/buyer/profilePicture/a4.jpg') }}" alt="" >
                                        <div class="message">
                                            <a class="message-author" href="#"> Karl Jordan </a>
                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                            <span class="message-content">
                                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="chat-users">
                                    <div class="users-list">
                                        <div class="chat-user">
                                            <span class="pull-right label label-primary">Online</span>
                                            <img class="chat-avatar" src="{{ asset('public/backend/img/buyer/profilePicture/a1.jpg') }}" alt="" >
                                            <div class="chat-user-name">
                                                <a href="#">Michael Smith</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <span class="pull-right label">Offline</span>
                                            <img class="chat-avatar" src="{{ asset('public/backend/img/buyer/profilePicture/a4.jpg') }}" alt="" >
                                            <div class="chat-user-name">
                                                <a href="#">Janet Smith</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chat-message-form">
                                    <div class="form-group">
                                        <textarea class="form-control message-input" name="message" placeholder="Enter message text"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection