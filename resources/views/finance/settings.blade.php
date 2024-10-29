@extends('layouts.layout')

@section('content')

        <!-- Content -->
        <div class="content bgLight p-0">        
                
            <div class="settingsWrap">
                <div class="settingshead">
                    <h4>Settings</h4>
                </div>
                <div class="settingBody">
                    <div class="settingLeftBar">
                        <ul class=" nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class=" active" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab"  aria-selected="true">Payment Plan Settings</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"  aria-selected="false">No Fee Payment Processing Settings</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-selected="false">Business termsand conditions</button>
                              </li>

                              <li class="nav-item" role="presentation">
                                <button class="" data-bs-toggle="tab" data-bs-target="#language" type="button" role="tab" aria-selected="false">Change Language</button>
                              </li>

                            </ul>
                    </div>    

                    <div class="settingsRightCont">
                        <div class="tab-content">
                          <div class="tab-pane fade show active" id="home" role="tabpanel">
                              <div class="secTitle">
                                  <h5>Payment Extension</h5>
                              </div>

                              <div class="custom-range ms-4">
                                  <label for="customRange1" class="form-label d-flex align-items-center">Days to Start Recurriing Payment <i class="circle-info ms-2">i</i></label>
                                  <div class="range-value">
                                    <input type="range" class="form-range" id="customRange1">
                                    <input type="text" name="range-value" class="form-control">    
                                  </div>
                              </div>

                              <div class="custom-range ms-4">
                                  <label for="customRange1" class="form-label d-flex align-items-center">Maximum Number of days a customer  can extend their recurring payment</label>
                                  <div class="range-value">
                                    <input type="range" class="form-range" id="customRange1">
                                    <input type="text" name="range-value" class="form-control">    
                                  </div>
                              </div>


                              <div class="mt-4">
                                  <a href="#" class="btn btn-primary sh-btn">Save</a>
                              </div>


                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel">
                              <div class="secTitle">
                                  <h5>No Fee Payment Processing Settings</h5>
                              </div>


                              <div class="custom-range">
                                  <label for="customRange1" class="form-label d-flex align-items-center">Current Processing  Limit</label>
                              </div>

                              <div class="mx-width600">
                                <div class="row">
                                   <div class="col-lg-6">
                                       <div class="iconTitle mt-2">
                                           <img src="images/cardd.svg" alt="" /> Card
                                       </div>

                                       <div class="lableCont mt-3">
                                           <label>Processing Limit:</label>
                                           <div class="value">Up to N.A <a href="#">(Click here enable)</a></div>
                                       </div>
                                   </div>

                                   <div class="col-lg-6">
                                       <div class="iconTitle mt-2">
                                           <img src="images/bank.svg" alt="" /> ACH
                                       </div>

                                       <div class="lableCont mt-3">
                                           <label>Processing Limit:</label>
                                           <div class="value">Up to $500</div>
                                       </div>

                                   </div>

                                </div>

                                <div class="form-check mt-5">
                                    <div class="radio">
                                        <label for="service1" class="form-check-label ">
                                            <input type="checkbox" id="service1" name="service" value="service" class="form-check-input"> Show service cost breakdown
                                        </label>
                                    </div>
                                </div>

                                <div class="form-check mt-3">
                                    <div class="radio">
                                        <label for="service2" class="form-check-label ">
                                            <input type="checkbox" id="service2" name="service" value="service" class="form-check-input"> Set default value for Transaction Fees
                                        </label>
                                    </div>
                                </div>


                                <div class="custom-range mt-4">
                                  <label for="customRange1" class="form-label d-flex align-items-center">Instant Payment Card</label>
                              </div>

                              <div class="fs-12">
                                  No Card added yet
                              </div>

                              <div class="fs-15 mt-2">
                                  <a class="color-blue text-decoration-none" href="">+ Add Card</a>
                              </div>

                              <div class="mt-3">
                                  <a class="btn btn-primary sh-btn  " href="#">Save</a>
                              </div>

                              </div>



                          </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel">
                              <div class="secTitle">
                                  <h5>Business terms and conditions</h5>
                              </div>

                              <div class="form-group mt-3">
                                  <label for="" class="form-label fs-14">Do you want to upload your business terms  & conditions?</label>
                                  <div class="d-flex align-items-center">
                                      <div class="form-check">
                                        <div class="radio">
                                            <label for="yes" class="form-check-label ">
                                                <input type="radio" id="yes" name="terms" value="yes" class="form-check-input"> Yes
                                            </label>
                                        </div>
                                     </div>

                                     <div class="form-check ms-3">
                                        <div class="radio">
                                            <label for="no" class="form-check-label ">
                                                <input type="radio" id="no" name="terms" value="no" class="form-check-input"> No
                                            </label>
                                        </div>
                                     </div>
                                  </div>
                              </div>

                              <div class="mx-width600">

                                  <div class="form-group labelUp mt-2">
                                        <input class="form-control" type="text" value="https://business.denfit.com" placeholder="">
                                        <label>Terms & Conditions Link </label>
                                    </div>

                                    <div class="mb-3">
                                        <a href="#" class="btn-primary btn sh-btn">Save</a>
                                    </div>
                                </div>
                          </div>
                          <div class="tab-pane fade" id="language" role="tabpanel">
                              <div class="secTitle">
                                  <h5>Change Language</h5>
                                  <p>Prefered communication language (Email/SMS/Notification)</p>
                              </div>

                              <div class="mx-width600">

                              <div class="form-group labelUp mt-2 customSelectWrap">
                                    <select class="form-control">
                                        <option>English</option>
                                        <option>Dutch</option>
                                    </select>
                                    <label>Select Language </label>
                              </div>

                              <div class="mb-3">
                                    <a href="#" class="btn-primary btn sh-btn">Save</a>
                                </div>

                            </div>

                          </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.content -->

  @endsection      