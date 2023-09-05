@extends('dashboard.layout.app')
@section('content')

    <div style="margin-top: 100px" class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->

            <div class="row row-sm">
                <div class="col-lg-12 col-12  col-md-12">
                    <div class="card custom-card overflow-hidden crypto-buysell-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title tx-18"><label class="main-content-label tx-15">Withdrawal Notice</label></h3>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <center>
                                    <div style="font-size: 20px" class="alert alert-info fade show" role="alert">
                                       Withdrawal Request Received, We will keep you updated on your withdrawal via Email
                                    </div>
                                </center>
                            </div>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection
