@extends('master')
@section('content')
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">$ 15,0000</h2>
                        <h6 class="card-text">Increased by 60%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Purchase<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">45,6334</h2>
                        <h6 class="card-text">Decreased by 10%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Adjustment<i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">95,5741</h2>
                        <h6 class="card-text">Increased by 5%</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">User<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">$ 15,0000</h2>
                        <h6 class="card-text">Increased by 60%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Collection<i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">45,6334</h2>
                        <h6 class="card-text">Decreased by 10%</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                    <div class="card-body">
                        <h4 class="font-weight-normal mb-3">Expenses<i class="mdi mdi-diamond mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">95,5741</h2>
                        <h6 class="card-text">Increased by 5%</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Product Status<hr/></h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th> Name </th>
                                    <th> Category </th>
                                    <th> Status </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> 1 </td>
                                    <td> Herman Beck </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 2 </td>
                                    <td> Messsy Adam </td>
                                    <td> Jul 01, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 3 </td>
                                    <td> John Richards </td>
                                    <td> Apr 12, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 4 </td>
                                    <td> Peter Meggik </td>
                                    <td> May 15, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> 5 </td>
                                    <td> Edward </td>
                                    <td> May 03, 2015 </td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-white">Todo</h4>
                        <div class="add-items d-flex">
                            <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
                            <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
                        </div>
                        <div class="list-wrapper">
                            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Meeting with Alisa <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked=""> Call John <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Create invoice <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Print Statements <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked=""> Prepare for presentation <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox"> Pick up kids from school <i class="input-helper"></i></label>
                                    </div>
                                    <i class="remove mdi mdi-close-circle-outline"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
