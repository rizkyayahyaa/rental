<?php $page = 'notifications'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper page-settings">

        @component('layout.partials.settingssidemenu')
        @endcomponent

        <div class="content w-100">

            @component('admin.components.settingspageheader')
                @slot('titleset')
                    Notifications
                @endslot
            @endcomponent

            <div class="row">
                <div class="col-12">
                    <div class="table-resposnive table-bottom">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>General Notifications</th>
                                    <th>Push</th>
                                    <th>Email</th>
                                    <th>SMS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="table-content">
                                            <h5>General Notifications Newsletter</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-content">
                                            <h5>Daily Updates</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-resposnive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Booking</th>
                                    <th>Push</th>
                                    <th>Email</th>
                                    <th>SMS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="table-content">
                                            <h5>Booking Request</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-content">
                                            <h5>Booking Status</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="table-content">
                                            <h5>Refund Request</h5>
                                            <h6>Lorem ipsum dolor sit amet, consectetur adipiscing</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox" checked>
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="active-switch">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="sliders round"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
