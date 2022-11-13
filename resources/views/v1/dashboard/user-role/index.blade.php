@extends("v1.layout.dashboard-layout")
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">User Role</h5>
                            <form class="my-auto">
                                <button type="button" class="p-2  rounded-2 btn-primary text-white  btn"
                                        data-bs-toggle="modal" data-bs-target="#addUserRole"
                                >
                                    add
                                </button>
                            </form>
                        </div>


                        <!-- Default Table -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">CreatedAt</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Clark</td>
                                <td>2016-05-25</td>
                                <td>Active</td>
                                <td>
                                    <a class="p-2 rounded-2 bg-primary text-white">edit</a>
                                    <a class="p-2 rounded-2 bg-danger text-white">delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include("v1.dashboard.user-role.modal")
@endsection
@section('scripts')
    <script>
        const addUserRoleForm = document.querySelector("#addUserRoleForm")
            addUserRoleForm.addEventListener("submit",(e)=>{
                e.preventDefault()
                let data = new FormData(addUserRoleForm)
               axios.post(addUserRoleForm.getAttribute("action"), data).then((response)=>{
                   console.log(response.data)
               })


            })
    </script>
@endsection
