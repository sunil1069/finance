@extends('layouts.layout')

@section('content')

<!-- Content -->


        <div class="content">        
            
            <div class="backBtn">
                <a href="#"><i class="fa fa-angle-left"></i>Back</a>
            </div>


            <div class="enStatusBar d-flex align-items-center justify-content-between mt-3">
                <div class="enStatusBarLeft">
                    <span class="color-blue fw-b">Completed</span>
                    <span class="">Enrollment Date: 01/07/2023</span>
                </div>
                <div class="enStatusBarRight">
                    <div class="form-check form-switch">
                      <label class="form-check-label" for="flexSwitchCheckChecked">Payment Reminder Email</label>
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    </div>

                    <div class="form-check form-switch">
                      <label class="form-check-label" for="flexSwitchCheckChecked1">Payment Reminder SMS</label>
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked>
                    </div>
                </div>
            </div>


            <div class="enDetailsWrap d-flex justify-content-between mt-3">
                <div class="enDetailsCont">
                    <h4>Jhonny Larochelle</h4>
                    <div class="labelCont">
                        <span>Contract ID: </span>
                        <span class="value">JHLANSD7856</span>
                    </div>
                    <div class="labelCont">
                        <span>Reference Number: </span>
                        <span class="value">388575</span>
                    </div>
                </div>

                <div class="action">
                    <select class="selectpicker">
                        <option>Action</option>
                        <option>Action2</option>
                    </select>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <div class="title">Estimated Service Amount: <span class="fw-b color-dark">$1,200.00</span></div>
                    <div class="action d-flex align-items-center">
                        <span class="badge rounded-pill bg-info">In-House Payment Plan</span>
                        <span class="badge rounded-pill bg-success ms-3">Verified</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="esaList-Wrap">
                        <div class="labelCont ">Total Projected Interest
                            <div class="color-dark fw-m">$3.50</div>
                        </div>
                        <div class="labelCont color-success">Earned Profit
                            <div class="color-dark fw-m">$3.50 <i class="fa fa-eye color-blue"></i></div>
                        </div>
                        <div class="labelCont ">Total Revenue
                            <div class="color-dark fw-m">$1,085.66</div>
                        </div>
                        <div class="labelCont ">Pending Principal Amount
                            <div class="color-dark fw-m">$0.00</div>
                        </div>
                        <div class="labelCont ">Pending Interest
                            <div class="color-dark fw-m">$0.00</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="labelCont fs-13 fw-m">Remaining Payments :
                            <span class="color-dark fw-m">0</span>
                        </div>
                        <div class="labelCont fs-13 fw-m">Total Payments :
                            <span class="color-dark fw-m">12</span>
                        </div>
                    </div>

                    <div class="progressStepWrap">
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                        <div class="progressStep full"></div>
                    </div>
                </div>
            </div>

                <div class="paccWrap" id="accordionExample">

                    @include('finance.payment_plan_detail')

                    @include('finance.payment_history')

                    @include('finance.customer_information')

                </div>

            
        </div>
        <!-- /.content -->


 @endsection       