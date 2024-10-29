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
                                <th>Name</th>
                                <th>Role</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                              <tbody>
                                     <tr>
                                           <td>1</td>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                            <a href="" class="btn btn-primary"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>
                                            <a href="" class="btn btn-primary"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>
                                            <a href="" class="btn btn-primary"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>
                                            <a href="" class="btn btn-primary"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>             
                                        <tr>
                                            <td>5</td>
                                            <td>Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                              <td>
                                            <a href="" class="btn btn-primary"> Edit </a>
                                            <a href="" class="btn btn-danger"> Delete </a>
                                            </td>
                                        </tr>
                              </tbody>
                    </table>
                </div>

            </div>
@endsection 
@section('after-script')
@endsection 