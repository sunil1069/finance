@extends('layouts.layout')

@section('content')
 <!-- Animated -->
            <div class="animated fadeIn">
                <div class="paymentBlockWrap">
                    <div class="paymentBlocLeft">
                        <div class="paymentBlochead">
                            <a class="backBtn" href="#"><i class="icon-arrow-long"></i>Finanace Customer</a>
                            <span class="lockRight"><i class="icon-unlock"></i></span>
                        </div>

                        <div class="sectitle mt-5">
                            <h3>Customer Details</h3>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="fw-m">Is Customer a Minor* ?</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ms-4">
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">No
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-block-title mt-3 mb-2">
                            Customer Details
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group labelUp">
                                    <input class="form-control" type="text" value="" placeholder="" />
                                    <label>Customer First Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group labelUp">
                                    <input class="form-control" type="text" value="" placeholder="" />
                                    <label>Customer Last Name</label>
                                </div>
                            </div>
                        </div>

                         <div class="d-flex flex1 mt-2 mb-4">
                            <label>Gender*</label>
                            <div class="form-check ms-4">
                                <div class="radio">
                                    <label for="gender1" class="form-check-label ">
                                        <input type="radio" id="gender1" name="gender" value="gender1" class="form-check-input">Male
                                    </label>
                                </div>
                            </div>
                            <div class="form-check ms-4">
                                <div class="radio">
                                    <label for="gender2" class="form-check-label ">
                                        <input type="radio" id="gender2" name="gender" value="gender2" class="form-check-input">Female
                                    </label>
                                </div>
                            </div>

                            <div class="form-check ms-4">
                                <div class="radio">
                                    <label for="gender3" class="form-check-label ">
                                        <input type="radio" id="gender3" name="gender" value="gender3" class="form-check-input">Other
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control alwaysUp" type="text" value="" placeholder="MM/DD/YYYY" />
                            <label>Customer Date of Birth</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Social Security Number</label>
                        </div>

                         <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Phone Number</label>
                        </div>


                         <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Email Address</label>
                        </div>

                         <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>DL Number</label>
                        </div>


                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Address</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Zip/Postal Code</label>
                        </div>

                         <div class="form-group labelUp">
                            <div class="row">
                                <div class="col-lg-6">

                                    <input class="form-control" type="text" value="" placeholder="" />
                                    <label>City</label>
                                </div>

                                <div class="col-lg-6">

                                    <input class="form-control" type="text" value="" placeholder="" />
                                  
                                </div>

                            </div>
                        </div>


                        <div class="form-group labelUp">
                            <div class="row">
                                <div class="col-lg-6">

                                    <input class="form-control" type="file" value="" placeholder="" />
                                    <label>Proof Id</label>
                                </div>


                            </div>
                        </div>

                     <div class="form-block-title mt-3 mb-2">
                            Employment Information
                        </div>


                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <div class="fw-m">Are you Employed?</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                <div class="form-check">
                                    <div class="radio">
                                        <label for="radio1" class="form-check-label ">
                                            <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Yes
                                        </label>
                                    </div>
                                </div>
                                <div class="form-check ms-4">
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">No
                                        </label>
                                    </div>
                                </div>

                                <div class="form-check ms-4">
                                    <div class="radio">
                                        <label for="radio2" class="form-check-label ">
                                            <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Self Employed
                                        </label>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>





                     <div class="form-group labelUp mt-4">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Employer Name</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Employer Phone Number</label>
                        </div>


                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Employer Address</label>
                        </div>

                        

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Zip/Postal Code</label>
                        </div>

                         <div class="form-group labelUp">
                            <div class="row">
                                <div class="col-lg-6">

                                    <input class="form-control" type="text" value="" placeholder="" />
                                    <label>City</label>
                                </div>

                                <div class="col-lg-6">

                                    <input class="form-control" type="text" value="" placeholder="" />
                                  
                                </div>

                            </div>
                        </div>
                         <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="" />
                            <label>Annual Income</label>
                        </div>



                    </div>
                    <div class="paymentBlocRight">
                        <div class="paymentPlanBlock">
                            <h6 class="paymentPlanTitle">Payment Plan Summary</h6>

                            <div class="paymentPlanBlockBg">
                                <div class="paymentPlanBlockTopBg"></div>

                                <div class="topPrice text-center">
                                    <h6>Estimated Payment Plan Amount</h6>
                                    <h3>$2,800.00</h3>
                                </div>
                                <div class="estimateAmt">
                                    Estimate Service Amount: $2,800.00
                                </div>

                                <div class="sr">
                                    <span>Credit Repair</span>
                                    <div class="amt">$2,800.00</div>
                                </div>

                                <div class="DpBlock">
                                    <div class="DpBlockIn">
                                        <div class="label">Down Payment</div>
                                        <div class="amt">$0.00</div>
                                    </div>
                                    <div class="DpBlockIn">
                                        <div class="label">Interest Rate</div>
                                        <div class="amt">19.90%</div>
                                    </div>

                                    <div class="DpBlockIn">
                                        <div class="label">Enrollment Fee</div>
                                        <div class="amt">$39.00</div>
                                    </div>
                                </div>

                                <div class="emiBlock">
                                    <div class="label">8 Months</div>
                                    <div class="price">$384.20/month <i class="icon-info"></i></div>
                                </div>

                                <div class="totalPrice">
                                    Total Payble Today: <span class="color-theme">$423.20</span> <i class="icon-info"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
                
            
                
                        
                <!-- /#event-modal -->
                <!-- Modal - Calendar - Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add a category </strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name"/>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
@endsection
@section('after-script')
@endsection