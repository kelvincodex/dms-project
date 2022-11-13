{{--todo create modal--}}

<div class="modal fade" id="addUserRole" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add User Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="error"> </div>
                <form class="row g-3" id="addUserRoleForm" action="{{route('user_role_create')}}" method="post">
                    <div class="col-md-12">
                        <label for="brand" class="form-label">Role Name</label>
                        <input type="text" name="userRoleName" class="form-control" id="userRoleName">
                    </div>
                    <div class="col-md-12">
                        <label for="brand" class="form-label">Role Description</label>
                        <textarea class="form-control" name="userRoleDescription" id="userRoleDescription"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Modal Dialog Scrollable-->

{{--todo edit modal--}}
<div class="modal fade" id="editUserRole" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit User Role</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger d-none" id="error"> </div>
                <form class="row g-3" id="updateBrandForm" action="{{route('user_role_create')}}" method="post">
                    <div class="col-md-12">
                        <label for="category" class="form-label">Brand Name</label>
                        <input type="text" id="brandName" name="brandName" class="form-control" id="brand">
                        <input type="hidden" id="brandId" name="brandId" class="form-control" id="brand">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- End Modal Dialog Scrollable-->
