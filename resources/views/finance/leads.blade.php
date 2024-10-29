@extends('layouts.layout')

@section('content')

 <!-- Content -->
        <div class="content p-0">        
            
            <div class="leadBlockWrap">
                <div class="leadBlocSideBar">
                    <div class="table-filter-bar">
                        <div class="custom-select">
                            <select class="selectpicker">
                                <option>All Plans</option>
                                <option>Limited</option>
                            </select>
                        </div>    
                        <div class="text-end">
                            <a class="" href="#"><i class="fa fa-upload"></i></a>
                        </div>
                    </div>
                    <div class="searchWrap">
                        <input type="text" value="" placeholder="Search" name="">
                        <button><span class="ti-search"></span></button>
                    </div>

                    
                    <div class="leadListWrap">
                        <div class="leadWrap active">
                            <div class="name">
                                <h5>ABV LMS</h5>
                                <p>Pending</p>
                            </div>
                            <div class="date">
                                <h5>08/06/2024</h5>
                                <span>Lead Date</span>
                            </div>
                        </div>
                    </div>

                    <div class="paging">
                        <span class="num">1-1 of 1</span>
                        <div class="arrowsWrap">
                            <a href="#"><i class="fa fa-angle-left"></i></a>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="leadBlockRight">
                    <div class="leadTitle">
                        <h3>ABV LMS</h3>
                        <div class="lead-info-wrap">
                            <a href="#"><i class="fa fa-envelope"></i> himanshu@gmail.com</a>
                            <a href="#"><i class="fa fa-phone"></i> himanshu@gmail.com</a>
                        </div>
                    </div>

                    <div class="leadFollowBlock">
                        <div class="leadFollowBlockHead">
                            <h5>Lead Details</h5>
                            <a class="btn" href="#">+ Follow up</a>
                        </div>

                        <div class="leadFollowBlockBody">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="leadDetails">
                                        <label>Application ID</label>
                                        <div class="value">PAVRFY6726</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="leadDetails">
                                        <label>Lead Date</label>
                                        <div class="value">08/06/2024</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="leadDetails">
                                        <label>Best Time To Contact</label>
                                        <div class="value">22</div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="leadDetails">
                                        <label>Required Service(s)</label>
                                        <div class="value">SSS</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion" id="accordionExample">
                    <div class="leadeDetailsWrap">
                        <div class="leadeDetailsHead collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true">
                            <h5>Personal Details</h5>
                            <button class="updatedetailsBtn">Update Details</button>
                        </div>
                        <div  id="collapseOne" class="collapse" data-bs-parent="#accordionExample">
                            <div class="leadeDetailsBody">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="divCont">
                                            <div class="labelCont ">DL Number 
                                                <div class="color-dark fw-m">222222</div>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="divCont">
                                            <div class="labelCont ">Date of Birth
                                                <div class="color-dark fw-m">12/12/1990</div>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="divCont">
                                            <div class="labelCont ">SSN
                                                <div class="color-dark fw-m">*****1777</div>
                                            </div>
                                        </div>        
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="divCont">
                                            <div class="labelCont ">Gender
                                                <div class="color-dark fw-m">Male</div>
                                            </div>
                                        </div>        
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="divCont">
                                            <div class="labelCont ">Address
                                                <div class="color-dark fw-m">22, Los Angeles, Califonia, 90012, US</div>
                                            </div>
                                        </div>        
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="btn-wrap mt-4">
                    <a class="btn btn-primary" href="#">Start A Payment Plan</a>
                    <a class="btn btn-outline-danger ms-2" href="#">Delete Lead</a>
                </div>
            </div>
                
            

            
            
            </div>
        </div>
        <!-- /.content -->


  @endsection