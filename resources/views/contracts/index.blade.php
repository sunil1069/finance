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
                    <table>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Customer Information</th>
                                <th>Payment Plan Details</th>
                                <th>Enroll Date</th>
                                <th>Interest</th>
                                <th>Pending Principle & Interest</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Johny Johny</div>
                                        <div class="fs-14 fw-r code">dkshfjkdsfhds</div>
                                        <div class="d-inline-block">
                                            <span class="fs-12 color-blue">In-House payment plan</span>
                                            <span class="fs-12 color-success">Verified</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">Estimated Payment Plan Amount <span class="color-dark fw-m">$1,200.00</span></div>
                                        <div class="labelCont ">Total Payble Ampunt <span class="color-dark fw-m">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    01/07/2023
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont fw-m"><span class="color-dark">Estimated Payment Plan Amount  $1,200.00</span></div>
                                        <div class="labelCont fw-m"><span class="color-dark">Total Payble Ampunt $0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont">Estimated Payment Plan Amount <span class="color-dark">$1,200.00</span></div>
                                        <div class="labelCont">Total Payble Ampunt <span class="color-dark">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <span class="color-blue fw-m">Completed</span>
                                </td>
                                
                            </tr>


                             <tr>
                                <td>2</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Johny Johny</div>
                                        <div class="fs-14 fw-r code">dkshfjkdsfhds</div>
                                        <div class="d-inline-block">
                                            <span class="fs-12 color-blue">In-House payment plan</span>
                                            <span class="fs-12 color-success">Verified</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">Estimated Payment Plan Amount <span class="color-dark fw-m">$1,200.00</span></div>
                                        <div class="labelCont ">Total Payble Ampunt <span class="color-dark fw-m">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    01/07/2023
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont fw-m"><span class="color-dark">Estimated Payment Plan Amount  $1,200.00</span></div>
                                        <div class="labelCont fw-m"><span class="color-dark">Total Payble Ampunt $0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont">Estimated Payment Plan Amount <span class="color-dark">$1,200.00</span></div>
                                        <div class="labelCont">Total Payble Ampunt <span class="color-dark">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <span class="color-blue fw-m">Completed</span>
                                </td>
                                
                            </tr>



                             <tr>
                                <td>3</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Johny Johny</div>
                                        <div class="fs-14 fw-r code">dkshfjkdsfhds</div>
                                        <div class="d-inline-block">
                                            <span class="fs-12 color-blue">In-House payment plan</span>
                                            <span class="fs-12 color-success">Verified</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">Estimated Payment Plan Amount <span class="color-dark fw-m">$1,200.00</span></div>
                                        <div class="labelCont ">Total Payble Ampunt <span class="color-dark fw-m">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    01/07/2023
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont fw-m"><span class="color-dark">Estimated Payment Plan Amount  $1,200.00</span></div>
                                        <div class="labelCont fw-m"><span class="color-dark">Total Payble Ampunt $0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont">Estimated Payment Plan Amount <span class="color-dark">$1,200.00</span></div>
                                        <div class="labelCont">Total Payble Ampunt <span class="color-dark">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <span class="color-blue fw-m">Completed</span>
                                </td>
                                
                            </tr>


                             <tr>
                                <td>4</td>
                                <td>
                                    <div class="divCont">
                                        <div class="fs-14 color-dark fw-m">Johny Johny</div>
                                        <div class="fs-14 fw-r code">dkshfjkdsfhds</div>
                                        <div class="d-inline-block">
                                            <span class="fs-12 color-blue">In-House payment plan</span>
                                            <span class="fs-12 color-success">Verified</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont ">Estimated Payment Plan Amount <span class="color-dark fw-m">$1,200.00</span></div>
                                        <div class="labelCont ">Total Payble Ampunt <span class="color-dark fw-m">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    01/07/2023
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont fw-m"><span class="color-dark">Estimated Payment Plan Amount  $1,200.00</span></div>
                                        <div class="labelCont fw-m"><span class="color-dark">Total Payble Ampunt $0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="divCont">
                                        <div class="labelCont">Estimated Payment Plan Amount <span class="color-dark">$1,200.00</span></div>
                                        <div class="labelCont">Total Payble Ampunt <span class="color-dark">$0,0.00</span></div>
                                    </div>
                                </td>
                                <td>
                                    <span class="color-blue fw-m">Completed</span>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
@endsection
@section('after-script')
@endsection