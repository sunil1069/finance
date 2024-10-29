@extends('layouts.layout')

@section('content')
<div class="cntTable">
                <div class="table-filter-bar">
                    <div class="custom-select">
                        <select class="selectpicker">
                            <option>All Plans</option>
                            <option>Limited</option>
                        </select>
                    </div>

                    <div class="searchWrap">
                        <input type="text" value="" placeholder="Search" name="">
                        <button><span class="ti-search"></span></button>
                    </div>
                </div>

                <div class="customTable">
                    <table class="w-100">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Customer Information</th>
                                <th>Request Date (Latest)</th>
                                <th>Date Range</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Kurt Simons</div>
                                        <div class="fs-14 fw-r code">Carehealth48@Gmail.com</div>
                                        <div class="d-inline-block">
                                            <span class="fs-14 fw-r code">+1-2622463000</span>
                                            
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">11/29/2022</div>
                                        
                                    </div>
                                </td>

                                <td>
                                  11/29/2022 to 03/02/2023
                                </td>
                                
                                
                                <td>
                                    <span class="color-red fw-m">Proposal Expired</span>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>02</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Kurt Simons</div>
                                        <div class="fs-14 fw-r code">Carehealth48@Gmail.com</div>
                                        <div class="d-inline-block">
                                            <span class="fs-14 fw-r code">+1-2622463000</span>
                                            
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">11/29/2022</div>
                                        
                                    </div>
                                </td>

                                <td>
                                  11/29/2022 to 03/02/2023
                                </td>
                                
                                
                                <td>
                                    <span class="color-red fw-m">Proposal Expired</span>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>03</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Kurt Simons</div>
                                        <div class="fs-14 fw-r code">Carehealth48@Gmail.com</div>
                                        <div class="d-inline-block">
                                            <span class="fs-14 fw-r code">+1-2622463000</span>
                                            
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">11/29/2022</div>
                                        
                                    </div>
                                </td>

                                <td>
                                  11/29/2022 to 03/02/2023
                                </td>
                                
                                
                                <td>
                                    <span class="color-red fw-m">Proposal Expired</span>
                                </td>
                                
                            </tr>

                            <tr>
                                <td>04</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Kurt Simons</div>
                                        <div class="fs-14 fw-r code">Carehealth48@Gmail.com</div>
                                        <div class="d-inline-block">
                                            <span class="fs-14 fw-r code">+1-2622463000</span>
                                            
                                        </div>
                                    </div>
                                </td>

                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">11/29/2022</div>
                                        
                                    </div>
                                </td>

                                <td>
                                  11/29/2022 to 03/02/2023
                                </td>
                                
                                
                                <td>
                                    <span class="color-red fw-m">Proposal Expired</span>
                                </td>
                                
                            </tr>
                               

                             
                        </tbody>
                    </table>
                </div>

            </div>
@endsection
@section('after-script')
@endsection