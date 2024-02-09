@extends('pages.user_info')

@section('profile')
    


<div class="tab-pane fade show active" id="step1">

    <!-- Add profile form fields here -->
    <!-- ... -->

    <form action="" method="post">

        @csrf

        <div class="d-flex">
            <div class="col-md-4 text-center">
                <i class="fa fa-user" style="font-size: 200px; margin-bottom: 10px;"></i>
                <div class="input-group mb-3">
                    <label for="photoInput" class="btn btn-secondary mx-auto w-75">
                        + Add Image
                        <input type="file" id="photoInput" name="image" style="display: none;">
                    </label>
                </div>

                <div class="input-group mt-5">
                    <label for="photoInput" class="btn btn-secondary mx-auto w-75">
                        + Documents

                        <input type="file" id="photoInput" name="image" style="display: none;">
                    </label>
                    <p style="font-size: 14px">Upload any other supporting documents</p>
                </div>
            </div>


            <div class="col-md-8">
                <h4>Profile Details</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="name" class="mb-2">Name<span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $data->username }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="mobile_no" class="mb-2">Mobile Number<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="mobile_no" name="mobile_no"
                                value="{{ $data->mobile_no }}">
                        </div>

                        <div class="form-group mb-3">
                            <label for="email" class="mb-2">Email<span
                                    class="text-danger">*</span></label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $data->email }}">
                                <span class="input-group-text" data-bs-toggle="modal"
                                    data-bs-target="#editModal">
                                    <i class="fa fa-pencil"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Edit Modal -->
                        <div class="modal fade" id="editModal" tabindex="-1"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel"> Email Change</h5>
                                        <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Edit Form Inside Modal -->
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" id="newEmail"
                                                name="email" placeholder="Enter Email">
                                        </div>
                                        <p><strong>Please Note:</strong>This will also change your login
                                            credentials</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn "
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-info"
                                            onclick="saveNewEmail()">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="city" class="mb-2">City<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="city"
                                name="city">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="dob" class="mb-2">Date of Birth<span
                                    class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="dob"
                                name="dob">
                        </div>

                        <div class="form-group mb-3">
                            <label for="tel" class="mb-2">Telephone Number</label>
                            <input type="text" class="form-control" id="tel"
                                name="tel">
                        </div>

                        <div class="form-group mb-3">
                            <label for="province" class="mb-2">Province<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="province"
                                name="province">
                        </div>

                        <div class="form-group mb-3">
                            <label for="postal" class="mb-2">Postal Code</label>
                            <input type="text" class="form-control" id="postal"
                                name="postal">
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </form>
</div>
@endsection