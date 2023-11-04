<?php $page = 'customer-wallet'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="content">
        <div class="container">
            <div class="row">

                @component('components.customermenu')
                @endcomponent

                <div class="col-md-8 col-lg-9">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="widget-title">
                                <h4>Wallet</h4>
                            </div>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <a href="javascript:;" class="btn btn-primary btn-wallet" data-bs-toggle="modal"
                                data-bs-target="#add-wallet"><i class="feather-plus"></i> Add Wallet</a>
                        </div>
                    </div>

                    <!-- Dashboard Widget -->
                    <div class="row row-cols-lg-3 row-cols-xl-5 justify-content-center">
                        <div class="col-md-6 d-flex">
                            <div class="dash-widget dash-wallet flex-fill">
                                <div class="dash-img">
                                    <span class="dash-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/cus-wallet.svg') }}" alt="">
                                    </span>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Balance</h6>
                                        <h5>$351.4</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="dash-widget dash-wallet flex-fill">
                                <div class="dash-img">
                                    <span class="dash-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/cus-withdraw.svg') }}" alt="">
                                    </span>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Total Credit</h6>
                                        <h5>$590.4</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="dash-widget dash-wallet flex-fill">
                                <div class="dash-img">
                                    <span class="dash-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/cus-credit-card.svg') }}" alt="">
                                    </span>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Total Debit</h6>
                                        <h5>$228.04</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="dash-widget dash-wallet flex-fill">
                                <div class="dash-img">
                                    <span class="dash-icon">
                                        <img src="{{ URL::asset('/assets/img/icons/cus-money.svg') }}" alt="">
                                    </span>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Savings</h6>
                                        <h5>$200.00</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="dash-widget dash-wallet flex-fill">
                                <div class="dash-img">
                                    <span class="dash-icon bg-light-danger">
                                        <img src="{{ URL::asset('/assets/img/icons/cus-file.svg') }}" alt="">
                                    </span>
                                </div>
                                <div class="dash-info">
                                    <div class="dash-order">
                                        <h6>Taxes</h6>
                                        <h5>$20.04</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Dashboard Widget -->

                    <!-- Wallet Transactions -->
                    <h6 class="user-title">Wallet Transactions</h6>

                    <div class="table-responsive">
                        <table class="table mb-0 custom-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Wallet Topup</td>
                                    <td class="text-light-success">+$80</td>
                                    <td class="text-body">07 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Purchase</td>
                                    <td class="text-light-danger">-$20</td>
                                    <td class="text-body">06 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-danger">Cancel</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Refund</td>
                                    <td class="text-light-success">+$20</td>
                                    <td class="text-body">06 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Wallet Topup</td>
                                    <td class="text-light-success">+$100</td>
                                    <td class="text-body">03 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Purchase</td>
                                    <td class="text-light-danger">-$20</td>
                                    <td class="text-body">06 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-danger">Cancel</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Refund</td>
                                    <td class="text-light-success">+$20</td>
                                    <td class="text-body">06 Oct 2023 11:22:51</td>
                                    <td class="text-body">Paypal</td>
                                    <td><span class="badge-success">Completed</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /Wallet Transactions -->

                </div>

            </div>

        </div>
    </div>
    @component('components.model-popup')
    @endcomponent
@endsection
