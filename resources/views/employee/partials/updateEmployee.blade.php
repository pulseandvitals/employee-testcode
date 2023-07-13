<section>
    <form method="POST" action="{{ route('employee.update',$employee) }}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @METHOD('PATCH')
        <div class="row mb-3">
            <div class="col-sm-12">
                <div class="form-floating mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="employee_firstname"
                        value="{{ $employee->employee_firstname }}"
                        placeholder="Text"
                    />
                    <label for="floatingInput">First Name</label>
                    @error('employee_firstname')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input
                        class="form-control"
                        placeholder="Address"
                        value="{{ $employee->employee_lastname }}"
                        name="employee_lastname"
                    >
                    <label for="floatingTextarea">Last Name</label>
                    @error('employee_lastname')
                        <div class="text text-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>

                @if(auth()->user()->role == 'manager')
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                        <select class="form-control" name="job_position" autofocus placeholder="Select">
                            <option value="manager"> Manager </option>
                            <option value="web_developer"> Web Developer </option>
                            <option value="web_designer"> Web Designer </option>
                        </select>
                        <label for="job_position" class="col-form-label text-md-end">{{ __('Job Position') }}</label>
                        </div>
                    </div>
                </div>
                @endif
                <button type="submit" class="btn btn-success"> Update </button>
            </div>
        </div>
    </form>
</section>
