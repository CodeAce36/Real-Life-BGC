<title>{{ $title }}</title>
@include('admin-partials.header')
<style>
  .label {
    font-weight: bold;
  }
</style>
@include('admin-partials.sidebar')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Applicants</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item">Applicants</li>
          <li class="breadcrumb-item active">Applicant Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="card">
      <div class="card-body pt-3">
        <!-- Bordered Tabs -->
        <ul class="nav nav-tabs nav-tabs-bordered">

          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Personal Information</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Academic Information</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Household Information</button>
          </li>

          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Files</button>
          </li>

        </ul>
        <div class="tab-content pt-2">

          <div class="tab-pane fade show active profile-overview" id="profile-overview" style="margin-top: 20px;">

            {{-- <h5 class="card-title">Profile Details</h5> --}}

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label ">Status</div>
              <div class="col-lg-2 col-md-8 badge" style="
                @if ($status === 'New Applicant')
                  width: 12%;
                  margin-top: 2px;
                  background-color: #CFE2FF;
                  color: #052C92;
                @elseif ($status === 'Under Review')
                  width: 12%;
                  margin-top: 2px;
                  background-color: #FFF3CD;
                  color: #7A4D03;
                @elseif ($status === 'Shortlisted')
                  width: 10%;
                  margin-top: 3px;
                  background-color: #fbdcc2;
                  color: #9f6119;
                @elseif ($status === 'For Interview')
                  width: 11%;
                  margin-top: 2px;
                  background-color: #CFF4FC;
                  color: #055160;
                @elseif ($status === 'For House Visitation')
                  width: 16%;
                  margin-top: 2px;
                  background-color: #D1E7DD;
                  color: #0A3622;
                  @elseif ($status === 'Approved')
                  width: 9%;
                  margin-top: 2px;
                  background-color: #D1E7DD;
                  color: #0A3622;
                @elseif ($status === 'Declined')
                  width: 8%;
                  margin-top: 2px;
                  background-color: #F8D7DA;
                  color: #58151C;
                @endif
              ">{{ $status }}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label ">First Name</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->first_name }}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Last Name</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->last_name }}</div>
            </div>

              <div class="row mb-2">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8">{{ $email }}</div>
              </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Contact Number</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->contact}}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Birthday</div>
              <div class="col-lg-9 col-md-8">
                {{ date('F j, Y', strtotime($applicant->birthday)) }}
            </div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">House Number</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->house_number }}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Street</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->street }}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Barangay</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->barangay}}</div>
            </div>

            <div class="row mb-2">
              <div class="col-lg-3 col-md-4 label">Municipality</div>
              <div class="col-lg-9 col-md-8">{{ $applicant->municipality }}</div>
            </div>

          </div>

          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            <form>
              <div class="row mb-2">
                <div class="col-lg-4 col-md-4 label">Incoming Grade</div>
                <div class="col-lg-7 col-md-8">{{ $applicant->academicInformation->incoming_grade_year }}</div>
              </div>
              @if(!empty($applicant->academicInformation->current_course_program_grade))
              <div class="row mb-2">
                  <div class="col-lg-4 col-md-4 label">Current Course or Program</div>
                  <div class="col-lg-7 col-md-8">{{ $applicant->academicInformation->current_course_program_grade }}</div>
              </div>
          @endif

          <div class="row mb-2">
            <div class="col-lg-4 col-md-4 label">Current School</div>
            <div class="col-lg-7 col-md-8">{{ $applicant->academicInformation->current_school }}</div>
          </div>
        
          @if($applicant->choices->isNotEmpty())
            @foreach($applicant->choices as $choice)
                @if($choice->first_choice_school)
                    <div class="row mb-2">
                      <div class="col-lg-4 col-md-4 label" style="margin-top: 20px; color: #0A6E57;">SCHOOL APPLICATIONS</div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">First School Choice</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->first_choice_school }}</div>
                    </div>
                @endif
            
                @if($choice->second_choice_school)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">Second School Choice</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->second_choice_school }}</div>
                    </div>
                @endif
                
                @if($choice->third_choice_school)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">Third School Choice</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->third_choice_school }}</div>
                    </div>
                @endif
                
                @if($choice->first_choice_course)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label" style="margin-top: 20px; color: #0A6E57;">COURSE CHOICES</div>
                    </div>
                
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">First Choice Course</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->first_choice_course }}</div>
                    </div>
                @endif
                
                @if($choice->second_choice_course)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">Second Choice Course</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->second_choice_course }}</div>
                    </div>
                @endif
                
                @if($choice->third_choice_course)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">Third Choice Course</div>
                        <div class="col-lg-7 col-md-8">{{ $choice->third_choice_course }}</div>
                    </div>
                @endif
            @endforeach
         @endif

         @php $gradesExist = false; @endphp

        @foreach($applicant->grades as $grade)
            @for($i = 3; $i <= 10; $i++)
                @php
                    $gradeField = "grade_" . $i . "_gwa";
                @endphp

                @if($grade->$gradeField && !$gradesExist)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label" style="margin-top: 20px; color: #0A6E57;">GRADES</div>
                    </div>
                    @php $gradesExist = true; @endphp
                @endif

                @if($grade->$gradeField)
                    <div class="row mb-2">
                        <div class="col-lg-4 col-md-4 label">Grade {{ $i }} GWA</div>
                        <div class="col-lg-7 col-md-8">{{ $grade->$gradeField }}</div>
                    </div>
                @endif
            @endfor
        @endforeach

          {{-- G11 - 2ND YR SEM GWA--}}
          @foreach($applicant->grades as $grade)
              @php $gradeFields = [
                  'grade_11_sem1_gwa' => 'Grade 11 First Sem GWA',
                  'grade_11_sem2_gwa' => 'Grade 11 Second Sem GWA',
                  'grade_12_sem1_gwa' => 'Grade 12 First Sem GWA',
                  'grade_12_sem2_gwa' => 'Grade 12 Second Sem GWA',
                  '1st_year_sem1_gwa' => 'First Year First Sem GWA',
                  '1st_year_sem2_gwa' => 'First Year Second Sem GWA',
                  '2nd_year_sem1_gwa' => 'Second Year First Sem GWA',
                  '2nd_year_sem2_gwa' => 'Second Year Second Sem GWA',
              ]; @endphp

              @foreach($gradeFields as $field => $label)
                  @if($grade->$field)
                      @if(!$gradesExist)
                          <div class="row mb-2">
                              <div class="col-lg-4 col-md-4 label" style="margin-top: 20px; color: #0A6E57;">GRADES</div>
                          </div>
                          @php $gradesExist = true; @endphp
                      @endif
                      <div class="row mb-2">
                          <div class="col-lg-4 col-md-4 label">{{ $label }}</div>
                          <div class="col-lg-7 col-md-8">{{ $grade->$field }}</div>
                      </div>
                  @endif
              @endforeach
          @endforeach


            </form><!-- End Profile Edit Form -->

          </div>
          <div class="tab-pane fade pt-3" id="profile-settings">

            <!-- Settings Form -->
            <form>

              <div class="row mb-3">
                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                <div class="col-md-8 col-lg-9">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                    <label class="form-check-label" for="changesMade">
                      Changes made to your account
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                    <label class="form-check-label" for="newProducts">
                      Information on new products and services
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="proOffers">
                    <label class="form-check-label" for="proOffers">
                      Marketing and promo offers
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                    <label class="form-check-label" for="securityNotify">
                      Security alerts
                    </label>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form><!-- End settings Form -->

          </div>

          <div class="tab-pane fade pt-3" id="profile-change-password">
            <!-- Change Password Form -->
            <form>

              <div class="row mb-3">
                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="password" type="password" class="form-control" id="currentPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                </div>
              </div>

              <div class="row mb-3">
                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                <div class="col-md-8 col-lg-9">
                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form><!-- End Change Password Form -->

          </div>

        </div><!-- End Bordered Tabs -->
             
    {{-- <h2>{{ $applicant->first_name }} {{ $applicant->last_name }}</h2> --}}

    {{-- @if ($applicant->applicants_academic_information)
        <p><strong>Incoming Grade/Year Level:</strong> {{ $applicant->applicants_academic_information->incoming_grade_year }}</p>
        <p><strong>Current Course Program Grade:</strong> {{ $applicant->applicants_academic_information->current_course_program_grade }}</p>
        <!-- Add more attributes as needed -->
    @endif --}}

  </div>
</div>
</div>
</div>
</section>

</main><!-- End #main -->


    @include('admin-partials.footer')
    <script>

      document.addEventListener('DOMContentLoaded', function () {
          let lastTab = sessionStorage.getItem('lastTab');
          if (lastTab) {
              let tabLink = document.querySelector(`[data-bs-target="${lastTab}"]`);
              if (tabLink) {
                  let tab = new bootstrap.Tab(tabLink);
                  tab.show();
              }
          }
  
   
      let tabLinks = document.querySelectorAll('[data-bs-toggle="tab"]');
      tabLinks.forEach(function (tabLink) {
          tabLink.addEventListener('shown.bs.tab', function (event) {
              let activeTab = event.target.getAttribute('data-bs-target');
              sessionStorage.setItem('lastTab', activeTab);
              });
          });
  
      });
  
      </script>
  
</body>
</html>
