@extends('dashboard.layout.app')
@section('content')


    <div style="margin-top: 100px"  class="main-container container-fluid">
        <div class="inner-body">
            <div id="mobileshow" class="see"></div>
            <div class="sees hide-mobile"></div>
            <!--Row-->
            <div class="row">
                <div class="col-lg-11 mx-auto">
                    <div class="card bg-transparent">
                        <div class="card-header">

                          <div class="content">
                              <div>
                                  <form method="post" action="{{ route('user.processPayment') }}" enctype="multipart/form-data" novalidate="novalidate">

                                      @csrf
                                      @method('PATCH')
                                      <div class="container">
                                          @if(session()->has('success'))
                                              <div class="alert alert-success">
                                                  {{ session()->get('success') }}
                                              </div>
                                          @endif
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
                                      <input type="hidden" name="deposit_id" value="{{ $deposit->id }}">

                                      <div class="col-lg-12">
                                          <div class="card">

                                              <div class="card-body">
                                                  <!-- Credit Card -->
                                                  <div id="pay-invoice">
                                                      <div class="card-body">
                                                          <div class="row">
                                                              <div class="col-12">
                                                                    <div class="alert alert-info fade show" role="alert">
                                                                        <p>• Copy the wallet address provided below(BTC, ETH, USDT, LTC etc.).</p>
                                                                        <p>• Make payment from your wallet Address. (Send the equivalent amount stated below for the preferred cryptocurrency).
                                                                        </p>
                                                                        <p>• After Making the payment, click on Payment completed.</p>
                                                                        <p>• Your account will be funded immediately we confirm your payment.</p>
                                                                    </div>
                                                              </div>
                                                          </div>

                                                          <hr class="mb-1">
                                                          <div class="row">
                                                              <div class="col-12">
                                                                  <div class="visible-print text-center">
                                                                      {!! QrCode::size(150)->generate($deposit->payment_method->value); !!}
                                                                  </div>
                                                                  <label for="x_card_code" class="control-label mb-1 mt-3">{{ $deposit->payment_method->name }} Wallet Address</label>
                                                                  <div class="input-group">
                                                                      <input id="Amount" required="" placeholder="0.00" type="text" class="form-control cc-cvc" value="{{ $deposit->payment_method->value }}">
                                                                      <div class="input-group-addon">
                                                                          <a href="#" class="btn" data-clipboard-target="#Amount">Copy</a>
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                          </div>

                                                          <div class="row">
                                                              <div class="col-12">
                                                                  <label for="Proof" class="mt-3">Proof of Payment</label>
                                                                  <div class="input-group">
                                                                      <input required="" type="file" class="form-control btn-block"  data-val="true" data-val-required="The Proof field is required." name="reference">
                                                                  </div>
                                                                  <span class="text-danger field-validation-valid" data-valmsg-for="Proof" data-valmsg-replace="true"></span>
                                                              </div>
                                                          </div>

                                                          <div class="row">
                                                              <div class="col-12">
                                                                  <div class="input-group">
                                                                      <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block mt-4">
                                                                          <i class="fa fa-database fa-lg"></i>&nbsp;
                                                                          <span >Paid</span>
                                                                      </button>
                                                                  </div>
                                                              </div>
                                                          </div>

                                                      </div>
                                                  </div>

                                              </div>
                                          </div> <!-- .card -->

                                      </div><!--/.col-->
                              </div>
                          </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- End Row -->


        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js"></script>
    <script>
        new ClipboardJS('.btn');
    </script>

@endsection
