@extends('layouts.layout')

@section('content')

        <!-- Content -->
        <div class="content bgLight">        
                
            <div class="cntTable">
                <div class="table-filter-bar">

                    <div class="d-flex align-items-center">
                        <div class="searchWrap">
                            <input type="text" value="" placeholder="Search" name="">
                            <button><span class="ti-search"></span></button>
                        </div>    
                        <div class="custom-select ms-2">
                            <select class="selectpicker bgSelect">
                                <option>Service Type: All</option>
                                <option>Limited</option>
                            </select>
                        </div>
                    </div>
                    

                    <div class="">
                        <a class="btn btn-primary sh-btn" href="#" data-bs-toggle="modal" data-bs-target="#add-service">+ Add Service</a>
                    </div>

                    
                </div>

                        <div class="bg-white pt-0">
                                <div class="customTable headBr-none">
                                    <table class="w-100 border-0">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Service Type</th>
                                                <th>Service Amount</th>
                                                <th>Plan Type</th>
                                                <th width="33%">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><strong>ABS</strong></td>
                                                <td>Fixed</td>
                                                <td class="color-blue fw-m">$1800.00</td>
                                                <td><strong>No Fee</strong></td>
                                                <td class="color-success fw-m">
                                                    <div class="actionBtnWrap">
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13" href="">Copy URL</a>
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13 ms-2" href="">Copy Embed Code</a>

                                                        <a class="color-blue icon-btn btn-sm ms-3" href=""><i class="fa fa-pencil"></i></a>
                                                        <a class="color-red icon-btn btn-sm ms-2" href=""><i class="fa fa-times-circle-o"></i></a>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            
                                            <tr>
                                                <td><strong>ABS</strong></td>
                                                <td>Fixed</td>
                                                <td class="color-blue fw-m">$1800.00</td>
                                                <td><strong>No Fee</strong></td>
                                                <td class="color-success fw-m">
                                                    <div class="actionBtnWrap">
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13" href="">Copy URL</a>
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13 ms-2" href="">Copy Embed Code</a>

                                                        <a class="color-blue icon-btn btn-sm ms-3" href=""><i class="fa fa-pencil"></i></a>
                                                        <a class="color-red icon-btn btn-sm ms-2" href=""><i class="fa fa-times-circle-o"></i></a>
                                                    </div>
                                                </td>
                                                
                                            </tr>

                                            <tr>
                                                <td><strong>ABS</strong></td>
                                                <td>Fixed</td>
                                                <td class="color-blue fw-m">$1800.00</td>
                                                <td><strong>No Fee</strong></td>
                                                <td class="color-success fw-m">
                                                    <div class="actionBtnWrap">
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13" href="">Copy URL</a>
                                                        <a class="btn btn-outline-secondary btn-sm color-dark fw-m fs-13 ms-2" href="">Copy Embed Code</a>

                                                        <a class="color-blue icon-btn btn-sm ms-3" href=""><i class="fa fa-pencil"></i></a>
                                                        <a class="color-red icon-btn btn-sm ms-2" href=""><i class="fa fa-times-circle-o"></i></a>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

            </div>
            
        </div>
        <!-- /.content -->

        <div class="modal fade none-border" id="add-service">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header brNone">
                    <h4 class="modal-title"><strong>Add Service </strong></h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body p24 pt-1">
                    <form>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Service Number</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Redirectional URL (Optional)</label>
                            <i class="info">i</i>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Service Amount</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Downpayment Amount</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Payment Plan Amount</label>
                        </div>

                        <div class="form-group labelUp">
                            <input class="form-control" type="text" value="" placeholder="">
                            <label>Terms  (in months)</label>
                            <i class="info">i</i>
                        </div>


                        <div class="form-group labelUp">
                            <textarea class="form-control" value="" placeholder="Service Description"></textarea>
                            <label>Terms  (in months)</label>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary save-category" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>

   @endsection     