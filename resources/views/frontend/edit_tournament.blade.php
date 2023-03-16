@extends('layouts.frontend.app')
@section('content')
     <!-- Hero Section -->
    <section class="hero-section">
    <div class="hero-image">
        <img alt="banner-image" src="{{url('assets/frontend/images/add-tournament-bg.png')}}">
    </div>
    </section>
    <!-- Online Tournament Info -->
    <section class="add-tournament-page section_panel">
        <div class="container-fluid">
            <div class="add-tournament-holder">
                <div class="sidebar">
                    <div class="admin-menu-container hidden-xs hidden-sm hidden-md">
                        <div class="px-admin-menu-title">
                            <div class="icon">
                                <a href="#">
                                    <div class="px-icon minimized-header-icon">
                                        <div class="px-image icon-background">
                                            <div class="actual-image" style="background-image:url(assets/frontend/images/pro-img.png); background-size: cover;">
                                            </div>
                                            <img class="dummy-image" src="{{url('assets/frontend/images/pro-img.png')}}">
                                            <div class="animated">
                                                <i class="bfy-icon-mini-logo"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="text">
                                <a href="#">
                                    <span class="px-top-bar-title-org-name">My Special Tournament</span>
                                </a>
                                <p class="px-top-bar-title-tournament-name">Create Tournament</p>
                            </div>
                        </div>
                        <div class="px-admin-menu position-relative">
                            <div class="admin-menu absolute-stretch mb-20 mr-20 mt-20 ml-20" flex="" column="" layout="space-between stretch">
                                <div class="top-links mt-20 mb-10">
                                    <div class="top-link-section mb-40">
                                        <h2 class="link-title overflow-ellipsis text-white letter-spacing-2px mt-10 mb-10 text-20px font-600">CREATE</h2>
                                        <ul class="list-unstyled nav nav-tabs border-0">
                                            <li  class="link-item cursor-pointer">
                                                <a data-toggle="tab" href="#setup-tab" class="text-16px text-gray font-400 my-2 active">Setup</a>
                                            </li>
                                            <li  class="link-item cursor-pointer">
                                                <a data-toggle="tab" href="#brackets" class="text-16px text-gray font-400 my-2">Brackets</a>
                                            </li>
                                            <li  class="link-item cursor-pointer disabled">
                                                <a data-toggle="tab" href="#streams" class="text-16px text-gray font-400 my-2">Streams</a>
                                            </li>
                                            <li class="link-item cursor-pointer disabled">
                                                <a data-toggle="tab" href="#publish" class="text-16px text-gray font-400 my-2">Publish</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-link-section mb-40">
                                        <h2 class="link-title overflow-ellipsis text-white letter-spacing-2px mt-10 mb-10 text-20px font-600">SHARE</h2>
                                        <ul class="list-unstyled">
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Invite Players</h3>
                                            </li>
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Embed Codes</h3>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="top-link-section mb-40">
                                        <h2 class="link-title overflow-ellipsis text-white letter-spacing-2px mt-10 mb-10 text-20px font-600">MANAGE</h2>
                                        <ul class="list-unstyled">
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Participants</h3>
                                            </li>
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Email Participants</h3>
                                            </li>
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Seed Brackets</h3>
                                            </li>
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Match Dashboard</h3>
                                            </li>
                                            <li flex="" row="" layout="start center" class="link-item cursor-pointer disabled">
                                                <h3 class="text-16px text-gray font-400 my-2">Activity Feed</h3>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="bottom-links mt-20">
                                    <hr class="divider">
                                    <ul class="list-unstyled mt-20">
                                        <li flex="" row="" layout="space-between center" class="cursor-pointer disabled">
                                            <h4 class="text-gray text-16px font-400 full-width">Delete Tournament</h4>
                                            <div class="text-gray text-12px" flex="" row="" layout="end center"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tournament-details-page-switcher tab-content">
                    @include('frontend.components.tournament.setup-tab')
                    @include('frontend.components.tournament.brackets-tab')
                    @include('frontend.components.tournament.streams-tab')
                    @include('frontend.components.tournament.publish-tab')
                </div>
            </div>
        </div>
    </section>
@endsection
