<?php
include 'encabezado.php';
php?>
<!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll"></div>
      <?php include 'menu.php'; php?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Metro Lab</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Dashboard
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <!--BEGIN METRO STATES-->
                <div class="space10"></div>
                <!--END METRO STATES-->
            </div>
            <div class="row-fluid">
              <div class="span6">
                  <!-- BEGIN CHART PORTLET--><!-- END CHART PORTLET-->
                </div>
            </div>
            <div class="row-fluid">
                 <div class="span6">
                     <!-- BEGIN NOTIFICATIONS PORTLET--><!-- END NOTIFICATIONS PORTLET-->
                 </div>
            </div>
            <div class="row-fluid"></div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN VALIDATION STATES-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Advanced form Validation</h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="cmxform form-horizontal" id="signupForm" method="get" action="#">
                                <div class="control-group ">
                                    <label for="firstname" class="control-label">Firstname</label>
                                    <div class="controls">
                                        <input class="span6 " id="firstname" name="firstname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="lastname" class="control-label">Lastname</label>
                                    <div class="controls">
                                        <input class="span6 " id="lastname" name="lastname" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="username" class="control-label">Username</label>
                                    <div class="controls">
                                        <input class="span6 " id="username" name="username" type="text" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="password" class="control-label">Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="password" name="password" type="password" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="confirm_password" class="control-label">Confirm Password</label>
                                    <div class="controls">
                                        <input class="span6 " id="confirm_password" name="confirm_password" type="password" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="email" class="control-label">Email</label>
                                    <div class="controls">
                                        <input class="span6 " id="email" name="email" type="email" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="agree" class="control-label">Agree to Our Policy</label>
                                    <div class="controls">
                                        <input  type="checkbox" class="checkbox" id="agree" name="agree" />
                                    </div>
                                </div>
                                <div class="control-group ">
                                    <label for="newsletter" class="control-label">Receive the Newsletter</label>
                                    <div class="controls">
                                        <input  type="checkbox" class="checkbox" id="newsletter" name="newsletter" />
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button class="btn btn-success" type="submit">Save</button>
                                    <button class="btn" type="button">Cancel</button>
                                </div>

                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
<?php
include 'pie.php';
php?>

