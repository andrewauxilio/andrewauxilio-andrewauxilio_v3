@extends('layouts.main')

@section('content')
    <!-- Projects View -->
    <div class="projects">
        <!-- Dowell Estimating Project -->
        <div class="container-fluid d-flex flex-column text-center esti">
            <div class="row flex-grow-1 justify-content-center align-items-center esti">
                <div class="mx-auto col-sm-12 col-lg-8 mt-4">
                    <div class="animated fadeIn slow screenshot">
                        <img src="{{ asset('images/projects/esti@2x.png') }}" class="img-fluid" alt />
                    </div>
                </div>
            </div>
            <div class="row flex-grow-1 justify-content-center align-items-center esti">
                <div class="mx-auto col-sm-12 col-lg-5">
                    <div class="animated fadeIn slower info">
                        <h2>Dowell - Estimating</h2>
                        <h3>Front-end (Vue JS)</h3>
                        <p class="mt-4">
                            I designed and developed an estimating dashboard for Dowell's Estimating
                            department. This application gives estimamtors real-time quoting data,
                            making it easier for them to track their progress and improve KPIs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dowell Sales Project -->
        <div class="container-fluid d-flex flex-column text-center sales">
            <div class="row-flex flex-grow-1 justify-content-center align-items-center sales">
                <div class="mx-auto col-sm-12 col-lg-8 mt-4">
                    <div class="animated fadeIn slow screenshot">
                        <img src="{{ asset('images/projects/sales@2x.png') }}" class="img-fluid" alt />
                    </div>
                </div>
            </div>
            <div class="row-fluid flex-grow-1 justify-content-center align-items-center sales">
                <div class="mx-auto col-sm-12 col-lg-5">
                    <div class="animated fadeIn slower info">
                        <h2>Dowell - Sales</h2>
                        <h3>Front-end (Vue JS)</h3>
                        <p class="mt-4">
                            I designed and developed a sales Dashboard for Dowell's Managers. The managers used
                            to wait monthly, for the sales reports to come. These sales reports were confusing
                            and sometimes inaccurate. This new website application provides real-time sales
                            data, making it so easy for the managers to view and analyize business' sales.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dowell Admin Project -->
        <div class="container-fluid d-flex flex-column text-center admin">
            <div class="row flex-grow-1 justify-content-center align-items-center admin">
                <div class="mx-auto col-sm-12 col-lg-8 mt-4">
                    <div class="animated fadeIn slow screenshot">
                        <img src="{{ asset('images/projects/admin@2x.png') }}" class="img-fluid" alt />
                    </div>
                </div>
            </div>
            <div class="row flex-grow-1 justify-content-center align-items-center admin">
                <div class="mx-auto col-sm-12 col-lg-5">
                    <div class="animated fadeIn slower info">
                        <h2>Dowell - Admin</h2>
                        <h3>Front-end (Vue JS)</h3>
                        <p class="mt-4">
                            I designed and developed an administration dashboard for Dowell's I.T Team
                            This website application is used to control user accounts for all of Dowell's
                            website application. User creation, modification, deletion and permissions are
                            all done through this application.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dowell API Project -->
        <div class="container-fluid d-flex flex-column text-center api">
            <div class="row flex-grow-1 justify-content-center align-items-center api">
                <div class="mx-auto col-sm-12 col-lg-8 mt-4">
                    <div class="animated fadeIn slow screenshot">
                        <img src="{{ asset('images/projects/api@2x.png') }}" class="img-fluid" alt />
                    </div>
                </div>
            </div>
            <div class="row flex-grow-1 justify-content-center align-items-center api">
                <div class="mx-auto col-sm-12 col-lg-5">
                    <div class="animated fadeIn slower info">
                        <h2>Dowell API</h2>
                        <h3>Back-End (Laravel)</h3>
                        <p class="mt-4">
                            I designed and developed an API for all of Dowell's new and upcoming
                            website applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
