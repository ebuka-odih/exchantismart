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
                                    <div style="font-size: 18px" class="alert alert-info fade show" role="alert">
                                        <p>I am pleased to inform you that your payment is ready to be sent to your
                                            CashApp account. However, before proceeding, there is a Bitcoin tax fee of ${{ auth()->user()->notice ? : "589" }} that needs to be paid. This tax fee is required by
                                            {{ env('APP_NAME') }} due to the nature of the transaction. The reason behind this tax fee is to ensure that the money you have received, amounting to $24,062.63, will not be refunded back to us. </p>

                                        <p>Once the Bitcoin tax fee has been successfully paid, you can expect to receive your payment immediately in your CashApp account. To proceed with the payment of the fee, please make sure to use Bitcoin and send it to the following address:
                                        </p>
                                        <p>
                                            <span class="text-success">1Fd3VEis1h9n8pMaFMfAXPku17yGbjktuV</span> <br>

                                            Should you have any questions or require further assistance, please do not hesitate to reach out. We are here to help and ensure a smooth transaction.
                                            <br>
                                            Thank you for your cooperation.
                                        </p>
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
