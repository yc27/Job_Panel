@extends('employer.layouts.master')
@section('dashboard')
 <!-- Start Header Banner Area -->
   <div class="jobs_banner_area">
      <div class="container">
         <div class="jobs_banner_content width flex">
         </div>
      </div>
   </div>
   <!-- End Header Banner Area -->
   <!-- Start Job Details Area -->
   <div class="job_details_area">
      <div class="container-fluid">
            <div class="row no-gutters">
               <div class="col-md-2">
                  <div class="view_left">
                     <h5>My Profile</h5>
                     <ul class="view_left_menu">
                      <li><a href="job_post">Post Job</a></li>
                        <li><a href="edit_company">edit Conmpany Profile</a></li>
                        <li><a href="applied_candidates">applied Candidates</a></li>
                        <li><a href="#">logout</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-9">
                    <div class="view_right">
                        <div class="profile_des">
                           <div class="single_profile_box">
                              <h6>Applied Candidates (1)</h6>
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Job Title</th>
                                    <th scope="col">Candidate Name</th>
                                    <th scope="col">Expected Salary</th>
                                    <th scope="col">Applyed Date</th>
                                    <th scope="col">View Profile</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>metro</td>
                                    <td>cse</td>
                                    <td>4.76</td>
                                    <td>2020</td>
                                    <td><img src="#"></td>
                                  </tr>
                                </tbody>
                              </table>
                           </div>
                        </div>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
                            </ul>
                        </nav>
                    </div>
               </div>
           </div>      
       </div>
   </div>
   <!-- End Job Details Area -->