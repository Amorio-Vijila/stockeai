<?php error_reporting(1);  ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.base64.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/drag_drop_index_table.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/invoice_tableManager.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<!--<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>-->
<!--<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />-->
<!-- <script type="text/javascript" src="<?php echo base_url()?>my-assets/js/tableManager.js"></script> -->
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="<?php echo base_url() ?>assets/js/dashboard.js" ></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.2.2/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>my-assets/css/style.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<!-- <script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link href="<?php echo base_url() ?>assets/css/daterangepicker.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
<style>

.btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }
.table td{
   text-align:center;
}

   .table{
   display: block;
   overflow-x: auto;
   }
   
      .logo-9 i{
    font-size:80px;
    position:absolute;
    z-index:0;
    text-align:center;
    width:100%;
    left:0;
    top:-10px;
    color:#34495e;
    -webkit-animation:ring 2s ease infinite;
    animation:ring 2s ease infinite;
}
.logo-9 h1{
    font-family: 'Lora', serif;
    font-weight:600;
    text-transform:uppercase;
    font-size:40px;
    position:relative;
    z-index:1;
    color:#e74c3c;
    text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, 3px -3px 0 #fff, -3px 3px 0 #fff;
}
   
   
  
   .logo-9{
    position:relative;
} 
   
   /*//side*/
   
.bar {
  float: left;
  width: 25px;
  height: 3px;
  border-radius: 4px;
  background-color: #4b9cdb;
}


.load-10 .bar {
  animation: loadingJ 2s cubic-bezier(0.17, 0.37, 0.43, 0.67) infinite;
}


@keyframes loadingJ {
  0%,
  100% {
    transform: translate(0, 0);
  }

  50% {
    transform: translate(80px, 0);
    background-color: #f5634a;
    width: 110px;
  }
}
</style>






<div class="content-wrapper">
   <section class="content-header">
      <div class="header-icon">
         <figure class="one">
               <img src="<?php echo base_url()  ?>asset/images/salesreport.png"  class="headshotphoto" style="height:50px;" />
      </div>
      
      
         
        
          <div class="header-title">
          <div class="logo-holder logo-9">
         <h1><?php echo $tax_n; ?></h1>
       </div>
        
        
         <small><?php //echo display('user_wise_sale_report') ?></small>
         <ol class="breadcrumb"   style=" border: 3px solid #d7d4d6;"   >
            <li><a href="<?php echo base_url()?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
            <li><a href="#"><?php echo display('report') ?></a></li>
            <li class="active" style="color:orange"><?php echo 'State Tax';?></li>
       
        <div class="load-wrapp">
       <div class="load-10">
         <div class="bar"></div>
       </div>
       </div>
       
       
       
       
         </ol>
      </div>
   </section>
   
   
   
   
   
   
   
   
   
   <script></script>
   <section class="content">
      
      <div class="row">
         <div class="col-sm-12">
      
         </div>
      </div>
      <!-- Sales report -->
      <?php  
         $commercial_invoice_number  = array();
         foreach ($sale_datas as $invoice) {
         $commercial_invoice_number [] = $invoice['customer_name'];
         }
         $unique_commercial_invoice_number = array_unique($commercial_invoice_number);
         
         
         $container_no = array();
         foreach ($sale_datas as $invoice) {
         $container_no[] = $invoice['product_name'];
         }
         $unique_container_no = array_unique($container_no);
         
         
         $customer_name = array();
         foreach ($sale_datas as $invoice) {
         $customer_name[] = $invoice['payment_due_date'];
         }
         $unique_customer_name = array_unique($customer_name);
         
         
         $payment_terms = array();
         foreach ($sale_datas as $invoice) {
         $payment_terms[] = $invoice['details'];
         }
         $unique_payment_terms = array_unique($payment_terms);
         ?>
      <?php //echo form_open('Admin_dashboard/user_sales_report', array('class' => 'form-inline', 'method' => 'get')) ?>
      <div class="row">
      <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" style='height:80px; border: 3px solid #d7d4d6;'>
                <div class='col-sm-8'>
<form id="fetch_tax" action="<?php echo base_url(); ?>Chrm/report_state_search/" method="POST">
               <table class="table" align="center" style="overflow-x: unset;position: relative; left: 150px;">
                  <tr style='text-align:center;font-weight:bold;' class="filters">
                     <!-- <td style='width:200px;'></td> -->
                     <input type='hidden' id="url_tax" name='url' value='<?php echo $tax_n; ?>'/>
                     <td class="search_dropdown" style="width: 15%; color: black;">
                      <input type="hidden" class="txt_csrfname" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <span><?php echo 'Employee'; ?></span>
                        <select id="customer-name-filter" name="employee_name" class="form-control">
                           <option value="All">All</option>
                           <?php
                              foreach ($employee_data as $emp) {
                                $emp['first_name']=trim($emp['first_name']);
                                 $emp['last_name']=trim($emp['last_name']);
                              ?>
                           <option value="<?php echo $emp['first_name']." ".$emp['last_name']; ?>"><?php echo $emp['first_name']." ".$emp['middle_name']." ".$emp['last_name']; ?></option>
                           <?php } ?>
                        </select>
                     </td>
                     
                    
                    
                     <td class="search_dropdown" style="width: 15%; color: black; position: relative; top: 4px;">
                        <div id="datepicker-container">
                           <input type="text" class="form-control daterangepicker-field getdate_reults" id="daterangepicker-field" name="daterangepicker-field" style="margin-top: 15px;padding: 5px; width: 200px; border-radius: 8px; height: 35px;" />
                        </div>
                     </td>
                     <input type="hidden" class="getcurrency" value="<?php echo $currency; ?>">
                     <td style='float: left;width:30px; position: relative; top: 4px;'>
                        <input type="submit"  name="btnSave" class="btn btnclr" style='margin-top: 15px;' value='Search'/>
                     </td>
                  </tr>
               </table>
                            
            </div>
                <div class='col-sm-2'>
                  <div class="dropdown bootcol" id="drop" style="    width: 300px;">
                     <button class="btnclr btn btn-default dropdown-toggle" type="button"  style="margin-top: 20px;
    margin-left: 120px;float:left;" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <span class="fa fa-download"></span> <?php echo display('download') ?>
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#" onclick="generate()"> <img src="<?php echo base_url() ?>assets/images/pdf.png" width="24px"> <?php echo display('PDF') ?></a></li>
                        <li class="divider"></li>
                        <li><a href="#" onclick="$('#ProfarmaInvList').tableExport({type:'excel',escape:'false'});"> <img src="<?php echo base_url() ?>assets/images/xls.png" width="24px"> <?php echo display('XLS') ?></a></li>
                     </ul>
                     &nbsp;                     &nbsp;
                     &nbsp;

                     <button type="button"   class="btnclr btn btn-default dropdown-toggle"  onclick="printDiv('printableArea')"><b class="ti-printer"></b>&nbsp;<?php echo display('print') ?></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php //echo form_close() ?>
      <!-- Manage Invoice report -->
      </form>



                <div class="row">
         <div class="col-sm-16 col-md-14">
            <div class="panel panel-bd lobidrag" id="printableArea"   style="border: 3px solid #d7d4d6;" >
               <div class="panel-body">
                   <div class="sortableTable__container">
                    <div class="sortableTable__discard">
                    </div>





                <div id='printableArea'>
                
                <table class="table table-bordered" cellspacing="0" width="100%" id="ProfarmaInvList">
    <thead class="sortableTable">
        <tr class="sortableTable__header btnclr">
            
              <th rowspan="2" class="1 value" data-col="1" style="height: 45.0114px; text-align:center; "><?php echo 'S.NO'?></th>
                        <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Employee Name'?></th>
                           <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Employee Tax'?></th>
                           <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Working State Tax'?></th>
                           <th rowspan="2" class="2 value" data-col="2" style="text-align:center; width: 300px;"><?php echo 'Living State Tax'?></th>
                        <th rowspan="2" class="3 value" data-col="3" style="text-align:center;width: 150px; "><?php echo 'TimeSheet ID'?></th>
                                      <th rowspan="2" class="3 value" data-col="3" style="text-align:center;width: 300px; "><?php echo 'Month'?></th>
                          <th colspan="2" class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Employee Contribution'?></th>  
                          
             <th colspan="2" class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Employer Contribution'?></th>  
           
           
        </tr>
        <tr class="btnclr" >
            <th  class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Working State Tax'?></th>
                            <th  class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Living State Tax'?></th>
                             <th  class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Working State Tax'?></th>
                            <th  class="3 value" data-col="3" style="text-align:center; width: 300px;"><?php echo 'Living State Tax'?></th>
        </tr>
    </thead>
<tbody id="tableBody">
       
<?php $c = 1;  foreach ($merged_reports as $time_sheet_id => $data) : ?>
    <?php foreach ($data['state_tax'] as $state_tax) : ?>
        <tr>
            <td><?php echo $c; ?></td>
            <td><?php echo $state_tax['first_name'] . ' ' .$state_tax['middle_name']." ". $state_tax['last_name']; ?></td>
            <td><?php echo $state_tax['employee_tax']; ?></td>
            <td><?php echo $state_tax['state_tx']; ?></td>
            <td><?php echo $state_tax['living_state_tax']; ?></td>
            <td><?php echo $state_tax['time_sheet_id']; ?></td>
             <td><?php echo $state_tax['month']; ?></td>
       <td><?php 
        $final_amount = '';
                          
if ( $state_tax['weekly'] > 0) {
    $final_amount = $state_tax['weekly'];
} elseif ($state_tax['biweekly'] > 0) {
    $final_amount = $state_tax['biweekly'];
} elseif ( $state_tax['monthly'] > 0) {
    $final_amount = $state_tax['monthly'];
} else {
    $final_amount = $state_tax['amount'];
}
       
       echo isset($final_amount) ? number_format($final_amount, 3) : '0.00'; ?></td>

            <td>
                <?php 
                $living_state_tax_found = false;
                foreach ($data['living_state_tax'] as $living_state_tax) {
                    if ($living_state_tax['time_sheet_id'] == $time_sheet_id) {
                        echo isset($living_state_tax['amount']) ? number_format($living_state_tax['amount'],3) : '0';
                        $living_state_tax_found = true;
                        break;
                    }
                }
                if (!$living_state_tax_found) {
                    echo '0';
                }
                ?>
            </td>
            
            <!-- Display employer contribution data -->
            <?php 
            $found_employer_state_tax = $merged_reports_employer[$time_sheet_id]['state_tax'];
            $found_employer_living_state_tax = $merged_reports_employer[$time_sheet_id]['living_state_tax'];
            
            foreach ($found_employer_state_tax as $employer_state_tax) : ?>
                <td><?php echo isset($employer_state_tax['amount']) ? $employer_state_tax['amount'] : '0'; ?></td>
            <?php endforeach; ?>
            
            <?php if(empty($found_employer_living_state_tax)) : ?>
                <td>0</td>
            <?php else : ?>
                <?php foreach ($found_employer_living_state_tax as $employer_living_state_tax) : ?>
                    <td><?php echo isset($employer_living_state_tax['amount']) ? $employer_living_state_tax['amount'] : '0'; ?></td>
                <?php endforeach; ?>
            <?php endif; ?>
        </tr>
    <?php $c++; endforeach; ?>
<?php endforeach; ?>


    </tbody>
<tfoot>
    <tr class="btnclr">
        <td colspan="7" style="text-align: end;">Total :</td>
        <?php
        // Calculate totals for each column
        $totalEmployeeContributionWorking = $totalEmployeeContributionLiving = $totalEmployerContributionWorking = $totalEmployerContributionLiving = 0;
        foreach ($merged_reports as $time_sheet_id => $data) {
            foreach ($data['state_tax'] as $state_tax) {
                $totalEmployeeContributionWorking += isset($state_tax['amount']) ? $state_tax['amount'] : 0;
            }
            foreach ($data['living_state_tax'] as $living_state_tax) {
                $totalEmployeeContributionLiving += isset($living_state_tax['amount']) ? $living_state_tax['amount'] : 0;
            }
            $found_employer_state_tax = $merged_reports_employer[$time_sheet_id]['state_tax'];
            $found_employer_living_state_tax = $merged_reports_employer[$time_sheet_id]['living_state_tax'];
            foreach ($found_employer_state_tax as $employer_state_tax) {
                $totalEmployerContributionWorking += isset($employer_state_tax['amount']) ? $employer_state_tax['amount'] : 0;
            }
            foreach ($found_employer_living_state_tax as $employer_living_state_tax) {
                $totalEmployerContributionLiving += isset($employer_living_state_tax['amount']) ? $employer_living_state_tax['amount'] : 0;
            }
        }
        ?>
        <td><?php echo number_format($totalEmployeeContributionWorking, 3); ?></td>
        <td><?php echo number_format($totalEmployeeContributionLiving, 3); ?></td>
        <td><?php echo number_format($totalEmployerContributionWorking, 3); ?></td>
        <td><?php echo number_format($totalEmployerContributionLiving, 3); ?></td>
    </tr>
</tfoot>
</table>
</div>
               </div>
   </section>
   </div>
<input type="hidden" value="Sale/New Sale" id="url"/>
   <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
   <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.0/knockout-debug.js'></script>
   <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>-->
    <script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
   <!-- The Modal Column Switch -->
   <div id="myModal_colSwitch" class="modal_colSwitch" >
   <div class="modal-content_colSwitch" style="width:10%;height:25%;">
   <span class="close_colSwitch">&times;</span>
   <input type="checkbox"  data-control-column="1" checked = "checked" class="1"  value="1"/>Sl.No<br>
   <input type="checkbox"  data-control-column="2" checked = "checked" class="2"  value="2"/>User Name<br>
   <input type="checkbox"  data-control-column="3" checked = "checked" class="3"   value="3"/> Total Invoice<br>
   <input type="checkbox"  data-control-column="4" checked = "checked" class="4"   value="4"/>Total Amount<br>
   </div>
   </div>
   </div>
   </div>
</div>
</div>
<input type="hidden" id="total_invoice" value="<?php echo $total_invoice;?>" name="">
<input type="hidden" id="currency" value="{currency}" name="">
</div>
</div>
</section>
<input type ="hidden" name="csrf_test_name" id="csrf_test_name" value="<?php echo $this->security->get_csrf_hash();?>">
</div>

<script>




    // Event listener for form submission
    // $(document).on('submit', '#fetch_tax', function(event) {
    //     event.preventDefault();

    //     // Check if the AJAX call is already in progress
    //     // if (!ajaxCallCompleted) {
    //     //     return; // Exit function if the call is still in progress
    //     // }

    //     var dataString = $("#fetch_tax").serialize();
    //     dataString[csrfName] = csrfHash;

       

    //     $.ajax({
    //         type: "POST",
    //         dataType: "json",
    //         url: "<?php echo base_url(); ?>Chrm/state_tax_search",
    //         data: dataString,
    //         success: function(data) {
    //         console.log(data);
    //             processAjaxResponse(data);
    //         },
    //         error: function(xhr, status, error) {
    //             console.error(xhr.responseText);
    //             // Handle error response here
    //         },
    //         complete: function() {
            
    //         }
    //     });
    // });

    // Function to process AJAX response
function processAjaxResponse(data) {
    var rows = []; // Array to store table rows
    var totals = { // Object to store totals for each column
        employeeTax: 0,
        stateTax: 0,
        livingStateTax: 0,
        timeSheetId: 0,
        month: 0,
        employeeAmount: 0,
        employerAmount: 0,
        employerLivingStateTax: 0
    };
var c=1;
    Object.keys(data).forEach(function(timesheetId) {
        var employeeData = data[timesheetId]?.employee?.state_tax;
        var employerData = data[timesheetId]?.employer?.state_tax;

        // Check if employeeData is defined and contains at least one entry
        if (employeeData && employeeData.length > 0) {
            // If there's no employer data, set it to an empty array
            if (!employerData || employerData.length === 0) {
                employerData = [{}]; // An empty object representing no employer data
            }

            // Iterate over each entry in the employee data array
            employeeData.forEach(function(employee, index) {
                var employer = employerData[index] || {}; // If employer data is not available, use an empty object
var containsAlphabets = /[a-zA-Z]/.test(employee.living_state_tax);

  totals.employeeTax += parseFloat(employee.employee_tax) || 0;
                totals.stateTax += parseFloat(employee.state_tx) || 0;
                totals.livingStateTax += parseFloat(employee.living_state_tax) || 0;
                totals.timeSheetId += parseFloat(employee.time_sheet_id) || 0;
                totals.month += parseFloat(employee.month) || 0;
                totals.employeeAmount += parseFloat(employee.amount) || 0;
                totals.employerAmount += parseFloat(employer.amount) || 0;
                totals.employerLivingStateTax += parseFloat(employer.living_state_tax) || 0;
  totals.employeeLivingStateTax += parseFloat(employee.living_state_tax) || 0;

                // Construct table row HTML
                var row = "<tr>";
                row += "<td>" + c + "</td>";
              row += "<td>" + (employee.first_name ? employee.first_name + ' ' + employee.last_name : '') + "</td>";
            row += "<td>" + (employee.employee_tax ? employee.employee_tax : '') + "</td>";
            row += "<td>" + (employee.state_tx ? employee.state_tx : '') + "</td>";
            row += "<td>" + (employee.living_state_tax ? employee.living_state_tax : '0') + "</td>";
            row += "<td>" + (employee.time_sheet_id ? employee.time_sheet_id : '') + "</td>";
            row += "<td>" + (employee.month ? employee.month : '') + "</td>";
            row += "<td>" + (employee.amount ? employee.amount : '0') + "</td>";
          row += "<td>" + (containsAlphabets ? '0' : employee.living_state_tax) + "</td>";
            row += "<td>" + (employer.amount ? employer.amount : '0') + "</td>";
             row += "<td>" + (containsAlphabets ? '0' : employer.living_state_tax) + "</td>";
          
                row += "</tr>";

                // Push the constructed row HTML to the rows array
                rows.push(row);
            
            });
        }    c++;
    });
 
    // Join all rows into a single string
    var rowsHtml = rows.join('');

    // Clear the table body before appending new rows
    $("#tableBody").empty();

    // Append all rows to the table body
    $("#tableBody").append(rowsHtml);
    removeDuplicateRows();
    var footerRow = "<tr class='btnclr'>";
    footerRow += "<td style='text-align:end;' colspan='7'><strong>Total</strong></td>";
   
    footerRow += "<td>" + totals.employeeAmount.toFixed(2) + "</td>";
  footerRow += "<td>" + (isNaN(totals.employeeLivingStateTax) ? '0.00' : totals.employeeLivingStateTax.toFixed(2)) + "</td>";

    footerRow += "<td>" + totals.employerAmount.toFixed(2) + "</td>";
      footerRow += "<td>" + (isNaN(totals.employerLivingStateTax) ? '0.00' : totals.employerLivingStateTax.toFixed(2)) + "</td>";

    footerRow += "</tr>";
      $("#ProfarmaInvList tfoot").empty();
     $("#ProfarmaInvList tfoot").append(footerRow);
}
    // Function to calculate sum of column values
    function calculateColumnSum(colIndex) {
        var sum = 0;
        $('#ProfarmaInvList tbody tr').each(function() {
            var cellText = $(this).find('td').eq(colIndex).text();
            var cellValue = parseFloat(cellText);
            if (!isNaN(cellValue)) {
                sum += cellValue;
            }
        });
        return sum;
    }

    // Function to remove duplicate rows
    function removeDuplicateRows() {
        var seen = {};
        $('#ProfarmaInvList tbody tr').each(function() {
            var txt = $(this).text();
            if (seen[txt])
                $(this).remove();
            else
                seen[txt] = true;
        });
    }

    // Function to remove duplicate footer
    function removeDuplicateFooter() {
        var footerText = ''; // Store the text content of the footer row
        var footerRows = $('#ProfarmaInvList tfoot tr'); // Get all footer rows

        // Iterate over each footer row
        footerRows.each(function() {
            var rowText = $(this).text(); // Get the text content of the current row
            // Check if the current row text is the same as the previously stored footer text
            if (rowText === footerText) {
                $(this).remove(); // Remove the duplicate row
            } else {
                footerText = rowText; // Update the footer text to the current row text
            }
        });
    }
$( function() {
      $( ".daterangepicker-field" ).daterangepicker({
        dateFormat: 'mm/dd/yy' // Setting the desired date format
      });
    });
    var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
    var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
    $(function() {
    var start = moment().startOf('isoWeek'); // Start of the current week
    var end = moment().endOf('isoWeek'); // End of the current week
    var startOfLastWeek = moment().subtract(1, 'week').startOf('week');
    var endOfLastWeek = moment().subtract(1, 'week').endOf('week').add(1, 'day');
    // Add one extra day
    function cb(start, end) {
    $('#daterangepicker-field').val(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
    }
    $('#daterangepicker-field').daterangepicker({
    startDate: start,
    endDate: end,
    ranges: {
       'Last Week Before': [moment().subtract(2,  'week').startOf('week') , moment().subtract(2, 'week').endOf('week')],
       'Last Week': [startOfLastWeek, endOfLastWeek],
       'This Week': [moment().startOf('week'), moment().endOf('week')],
       'This Month': [moment().startOf('month'), moment().endOf('month')],
       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
    }, cb);
});
</script>


<style>
th,td{
    text-align:center;
}
   .select2{display:none;}
   #pagesControllers{
   padding:20px;
   }
   .dropdown-menu{
    left: 229px !important;
   }
   .dropdown{
    position: relative;
    left: 1193px !important;
    bottom: 68px !important;
   }
</style>



<style>
   .select2{display:none;}
   #pagesControllers{
    padding:20px;
}
</style>