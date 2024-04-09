    @include('partials.header')
    <body>
        @php
            $personalInfo = auth()
                ->user()
                ->personalInformation()
                ->first();
        @endphp
        <main id="main" class="main">
            <section class="section profile">
                <div class="col-xl-11 mx-auto">
                    {{-- <div class="card ">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview"
                                        style="font-size: 19px; cursor: auto;">Dashboard</button>
                                </li>

                            </ul> --}}
                            <div class="tab-content pt-1">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <br><br><br>
                                    {{-- <h5 style="font-weight: bold;"> Welcome, {{ $personalInfo->first_name ?? '' }}! </h5> --}}
                                    <h5 style="font-weight: bold; font-size: 25px;">Dashboard</h5>
                                    <br>
                                    <div class="row mb-1">
                                        <div class="col-lg-3 col-md-4 label" style="color:#151515;">Status</div>
                                        <div class="col-lg-9 col-md-8">
                                            @php
                                                $status = auth()->user()->status;
                                                $badgeStyle = '';

                                                switch ($status) {
                                                    case 'New Applicant':
                                                        $badgeStyle = 'background-color: #CFE2FF; color: #052C92;  font-family: "Poppins", sans-serif;';
                                                        break;
                                                    case 'Under Review':
                                                        $badgeStyle = 'background-color: #CFE2FF; color: #052C92;  font-family: "Poppins", sans-serif; ';
                                                        break;
                                                    case 'Declined':
                                                        $badgeStyle = 'background-color: #F8D7DA; color: #58151C;';
                                                        break;
                                                    case 'Shortlisted':
                                                        $badgeStyle = 'background-color: #CFE2FF; color: #052C92;  font-family: "Poppins", sans-serif;';
                                                        break;
                                                    case 'For Interview':
                                                        $badgeStyle = 'background-color: #CFE2FF; color: #052C92;  font-family: "Poppins", sans-serif;';
                                                        break;
                                                    case 'For House Visitation':
                                                        $badgeStyle = 'background-color: #CFE2FF; color: #052C92;  font-family: "Poppins", sans-serif;';
                                                        break;
                                                    default:
                                                        $badgeStyle = 'background-color: gray; color: black;';
                                                }
                                            @endphp
                                            <span class="badge"
                                                style="{{ $badgeStyle }}">{{ auth()->user()->status }}</span>
                                        </div>
                                    </div>

                                    <div class="row mb-1">
                                        <div class="col-lg-3 col-md-4 label" style="color:#151515;">Full Name</div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $personalInfo->first_name ?? '' }} {{ $personalInfo->last_name ?? '' }}
                                        </div>
                                    </div>

                                    <div class="row mb-1 mb-1">
                                        <div class="col-lg-3 col-md-4 label" style="color:#151515;">Email Address</div>
                                        <div class="col-lg-9 col-md-8">{{ auth()->user()->email }}</div>
                                    </div>

                                    <div class="row mb-1 mb-1">
                                        <div class="col-lg-3 col-md-4 label" style="color:#151515;">Incoming Grade</div>
                                        <div class="col-lg-9 col-md-8">{{ $academicInfoData->incoming_grade_year ?? '' }}
                                        </div>
                                    </div>

                                    <div class="row mb-1 mb-1">
                                        <div class="col-lg-3 col-md-4 label" style="color:#151515;">Current School</div>
                                        <div class="col-lg-9 col-md-8">{{ $academicInfoData->current_school ?? '' }}</div>
                                    </div>
                                    <form>
                                        <br>
                                        <br>
                                        
                                        @if (session('status'))
                                        <div class="alert alert-success">{{ session('status') }}</div>
                                    @endif
                                
                                    <h5 style="font-weight: bold;">Requirements <i class="fa fa-plus-circle clickable-icon" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#basicModal"></i></h5>
                                    <br>
                                
                                    <!-- ADD DOCUMENTS -->
                                    <div class="alert alert-success" id="successMessage" style="display: none; text-align: center;">
                                        Upload Successfully!
                                    </div>
                                    
                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                        <form id="uploadForm" action="{{ route('applicant_dashboard.requirements') }}" method="POST">
                                            @csrf
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Document</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Document Type -->
                                                        <div class="form-group">
                                                            <label for="documentType">Document Type  <span style="color: red;">*</span></label>
                                                            <select class="form-select form-select-solid form-control" id="documentType" name="documentType">
                                                                <option value="" style="color: #d60606; font-style: italic;">Select document type</option>
                                                                <option value="Signed Application Form">Signed Application Form</option>
                                                                <option value="Birth Certificate">Birth Certificate</option>
                                                                <option value="Character Evaluation Forms">Character Evaluation Forms</option>
                                                                <option value="Proof of Financial Status">Proof of Financial Status</option>
                                                                <option value="Payslip / DSWD Report / ITR">Payslip / DSWD Report / ITR</option>
                                                                <option value="Two Reference Forms">Two Reference Forms</option>
                                                                <option value="Home Visitation Form">Home Visitation Form</option>
                                                                <option value="Report Card / Grades">Report Card / Grades</option>
                                                                <option value="Prospectus">Prospectus</option>
                                                                <option value="Official Grading System">Official Grading System</option>
                                                                <option value="Tuition Projection">Tuition Projection</option>
                                                                <option value="Admission Slip">Admission Slip</option>
                                                            </select>
                                                        </div>
                                    
                                                        <div class="form-group">
                                                            <label for="notes">Notes <span style="  font-style: italic; color:#151515;">(Optional)</span></label>
                                                            <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                                        </div>
                                                                {{-- <div>
                                                                <input type="file" id="fileUpload" name="fileUpload">
                                                            </div>
                                                        </div> --}}
                                                        <div class="form-group">
                                                            <label for="fileUpload">Document Proof <span style="color: red;">*</span></label>
                                                            <div class="drag-area">
                                                                <label for="fileUpload" class="icon"><i class="fas fa-cloud-upload-alt" style="cursor: pointer;"></i></label>
                                                                <input type="file" class="form-control" id="fileUpload" name="fileUpload" style="display: none;" accept=".pdf">
                                                                <header id="fileUploadLabel">Drag and drop files here or click to upload attachment</header>
                                                            </div>
                                                        </div>
                                                        </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" id="submitForm" class="btn btn-primary" disabled>Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                        <!----DISPLAY TABLE-->
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr class="data-tables" >
                                                        <th>#</th>
                                                        <th style="font-size: 15px;">Document Type</th>
                                                        <th>Notes</th>
                                                        <th>Uploaded Document</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($reportcardData as $index => $requirement)
                                                    <tr class="data">
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $requirement->document_type }}</td>
                                                        <td>{{ $requirement->notes }}</td>
                                                        <td>  <a href="{{ Storage::url($requirement->uploaded_document) }}" download="{{ $requirement->uploaded_document }}" style="text-decoration: underline; color: #1e2482;">
                                                            {{ basename($requirement->uploaded_document) }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            @php
                                                            $status = $requirement->status;
                                                            $badgeClass = '';
                                                            
                                                            switch ($status) {
                                                                case 'Approved':
                                                                    $badgeClass = 'badge-success';
                                                                    break;
                                                                case 'Declined':
                                                                    $badgeClass = 'badge-danger';
                                                                    break;
                                                                default:
                                                                    $badgeClass = 'badge-primary';
                                                            }
                                                            @endphp
                                                        
                                                            <span class="badge {{ $badgeClass }}">{{ $status }}</span>
                                                        </td>   
                                                        <td>
                                                            <button type="button" class="btn edit-button" style="width: 85px; background-color:#71BF44;  color: white; font-size: 13px; height:30px;" data-bs-toggle="modal" data-bs-target="#editModal" data-requirement-id="{{ $requirement->id }}">Edit</button>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                        <!----EDIT MODAL-->
                                        <div class="modal fade" id="editModal" tabindex="-1">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Document</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" id="selectedDocumentType" name="selectedDocumentType">
                                                        
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="documentType">Document Type</label>
                                                                {{-- <select class="form-select form-select-solid form-control" id="documentType">
                                                                    <option value="">Select document type</option>
                                                                    <option value="1" {{ $requirement->document_type}}>Signed Application Form</option>
                                                                    <option value="2" {{ $requirement->document_type}}>Birth Certificate</option>
                                                                    <option value="3" {{ $requirement->document_type }}>Character Evaluation Forms</option>
                                                                    <option value="4" {{ $requirement->document_type }}>Proof of Financial Status</option>
                                                                    <option value="5" {{ $requirement->document_type }}>Payslip / DSWD Report / ITR</option>
                                                                    <option value="6" {{ $requirement->document_type }}>Two Reference Forms</option>
                                                                    <option value="7" {{ $requirement->document_type}}>Home Visitation Form</option>
                                                                    <option value="8" {{ $requirement->document_type}}>Report Card / Grades</option>
                                                                    <option value="9" {{ $requirement->document_type }}>Prospectus</option>
                                                                    <option value="10" {{ $requirement->document_type }}>Official Grading System</option>
                                                                    <option value="11" {{ $requirement->document_type }}>Tuition Projection</option>
                                                                    <option value="12" {{ $requirement->document_type }}>Admission Slip</option>
                                                                </select> --}}
                                                            </div>
                                                            

                                                            <div class="form-group">
                                                                <label for="notes">Notes</label>
                                                                <textarea class="form-control" id="notes" rows="3">{{ $requirement->notes }}</textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="fileUpload">Upload Requirements</label>
                                                                <div class="drag-area">
                                                                    <label for="fileUpload" class="icon"><i
                                                                            class="fas fa-cloud-upload-alt"></i></label>
                                                                    <input type="file" class="form-control" id="fileUpload"
                                                                        style="display: none;">
                                                                    <header>{{ $requirement->uploaded_document }}</header>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- End Edit Modal-->
                                    </div>
                                </div>
                            </div><!-- End Bordered Tabs -->
                        </div>
                    </section>
                </main><!-- End #main -->
        @include('partials.user-footer')
        <script src="assets/js/applicant_dashboard.js"></script>
    </body>
    </html>
