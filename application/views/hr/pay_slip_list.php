<?php error_reporting(1);  ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
<script src="
   https://cdn.jsdelivr.net/npm/jquery-base64-js@1.0.1/jquery.base64.min.js
   "></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/html2canvas.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.plugin.autotable"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/jspdf.umd.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/vendor_tableManager.js"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script type="text/javascript" src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>my-assets/css/css.css" />
<script type="text/javascript" src="http://www.bacubacu.com/colresizable/js/colResizable-1.5.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>assets/js/drag_drop_index_table.js"></script>



<style>

.btnclr{
       background-color:<?php echo $setting_detail[0]['button_color']; ?>;
       color: white;

   }
.search_dropdown{
      color: black;
   }

</style>





<div class="content-wrapper">
<section class="content-header">
      <div class="header-icon">
            <figure class="one">
               <img src="<?php echo base_url()  ?>asset/images/payslip.png"  class="headshotphoto" style="height:50px;" />
      </div>
      
     <div class="header-title">
          <div class="logo-holder logo-9">
          <h1>Generated Pay Slips List</h1>
       </div>
 
       <small><?php echo "" ?></small>
         <ol class="breadcrumb" style="border: 3px solid #d7d4d6;">
         <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
         <li><a href="#"><?php echo display('hrm') ?></a></li>
         <li class="active" style="color:orange">Generated Pay Slips List</li>
        
            <div class="load-wrapp">
      <div class="load-10">
         <div class="bar"></div>
      </div>
    </div>
        
         </ol>
      </div>
      </section>
<section class="content">
   <!-- Alert Message -->
   <?php
      $message = $this->session->userdata('message');
      
      if (isset($message)) {
      
          ?>
   <div class="btnclr alert alert-info alert-dismissable" style="font-weight:bold;">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $message; ?>                    
   </div>
   <?php
      // $this->session->unset_userdata('message');
      
      }
      
      $error_message = $this->session->userdata('error_message');
      
      if (isset($error_message)) {
      
      ?>
   <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <?php echo $error_message ?>                    
   </div>
   <?php
      $this->session->unset_userdata('error_message');
      
      }
      
      ?>
   <script>
      $('.alert').delay(1000).fadeOut('slow');
   </script>    
   <!-- Manage Product report -->
   <div class="panel panel-bd lobidrag">
      <div class="panel-heading" style="height: 60px;border: 3px solid #D7D4D6;">
         <div class="col-sm-18">
            <div class="col-sm-6" style="display: flex; align-items: left;">
           
                <a  class="btnclr btn btn-default dropdown-toggle"  style=" height:fit-content;"  id="s_icon"><b class="fa fa-search"></b>&nbsp;Advance search  </a> 
               &nbsp;&nbsp;
                         
            </div>
             
         </div>
         <br>
         <br>
         <br>


         <div id="search_area" style="border:4px solid #004d99;border-radius:7px;">
            <table class="table">
               <thead>
                  <tr class="filters">
                     
                     <?php 
                        $supplier_name  = array();
                        foreach ($dataforpayslip as $getsup) {
                           $supplier_name[] = $getsup['first_name'] . ' ' . $getsup['middle_name'] . ' ' . $getsup['last_name'];
                        }
                        $unique_supplier_name = array_unique($supplier_name);
                        
                        
                        
                        
                        $mobile = array();
                        foreach ($dataforpayslip as $getsup) {
                        $mobile[] = $getsup['job_title'];
                        }
                        $unique_mobile = array_unique($mobile);
                        
                        
                        $primaryemail = array();
                        foreach ($dataforpayslip as $getsup) {
                        $primaryemail[] = $getsup['month'];
                        }
                        $unique_primaryemail   = array_unique($primaryemail);
                        
                        
                        $city = array();
                        foreach ($dataforpayslip as $getsup) {
                        $city[] = $getsup['total_hours'];
                        }
                        $unique_city = array_unique($city);
                        
                        
                        
                        $vendor_type = array();
                        foreach ($dataforpayslip as $getsup) {
                        $vendor_type[] = $getsup['extra_this_hour'];
                        }
                        $unique_vendor_type = array_unique($vendor_type);
                        
                        
                        
                          {  ?>
                     <?php }  ?>
                     </th>
                     <th class="search_dropdown" style="width: 22%;">
                        <span><?php echo ('Name') ?> </span>
                        <select id="pname-filter" class="form-control"  >
                           <option>Any</option>
                           <?php foreach($unique_supplier_name as $getinfo){  ?>
                           <option value="<?php echo $getinfo; ?>"><?php echo $getinfo; ?></option>
                           <?php }  ?>
                        </select>
                     </th>
                     <th class="search_dropdown" style="width: 22%;">
                        <span>Job Title </span>
                        <select id="model-filter" class="form-control">
                           <option>Any</option>
                           <?php foreach($unique_mobile as $getinfo){  ?>
                           <option value="<?php echo $getinfo; ?>"><?php echo $getinfo; ?></option>
                           <?php }  ?>
                        </select>
                     </th>
                     <th class="search_dropdown" style="width: 20%;">
                        <span>Month</span>
                        <select id="category-filter" class="form-control">
                           <option>Any</option>
                           <?php foreach($unique_primaryemail as $getinfo){  ?>
                           <option value="<?php echo $getinfo; ?>"><?php echo $getinfo; ?></option>
                           <?php }  ?>
                        </select>
                     </th>
                     <th class="search_dropdown" style="width: 310px;">
                        <span>Total Hours/ Days</span>
                        <select id="unit-filter" class="form-control">
                           <option>Any</option>
                           <?php foreach($unique_city as $getinfo){  ?>
                           <option value="<?php echo $getinfo; ?>"><?php echo $getinfo; ?></option>
                           <?php }  ?>
                        </select>
                     </th>
                     <th class="search_dropdown" style="width: 22%;">
                        <span>Over Time</span>
                        <select id="supplier-filter" class="form-control">
                           <option>Any</option>
                           <?php foreach($unique_vendor_type as $getinfo){  ?>
                           <option value="<?php echo $getinfo; ?>"><?php echo $getinfo; ?></option>
                           <?php }  ?>
                        </select>
                     </th>
                  </tr>
               </thead>
            </table>
            <table>
               <tr>
                  <td style="width:10px;"></td>
                  <td style="width:22%;">   <input type="text" class="form-control" id="myInput1" onkeyup="search()" placeholder="Search for   Name.."></td>
                  <td style="width:10px;"></td>
                  <td style="width:22%;"> <input type="text" class="form-control" id="myInput2" onkeyup="search()" placeholder="Search for Job title   .."></td>
                  <td style="width:10px;"></td>
                  <td style="width:20%;">  <input type="text" class="form-control" id="myInput3" onkeyup="search()" placeholder="Search for Month .."></td>
                  <td style="width:10px;"></td>
                  <td style="width:20%;"> <input type="text" class="form-control" id="myInput4" onkeyup="search()" placeholder="Search for Total Hours/ Days .."></td>
                  <td style="width:10px;"></td>
                  <td style="width: 240px;"> <input type="text" class="form-control" id="myInput5" onkeyup="search()" placeholder="Search for Over Time .."></td>
               </tr>
            </table>
            <br/>
            <div class="col-sm-12">
               <input id="search" type="text" class="form-control"  placeholder="Search for Name..">
               <br>
            </div>
            <br>
         </div>
      </div>
   </div>



   <!-- Manage Invoice report -->
   <div class="row">
   <div class="col-sm-12">
      <div class="panel panel-bd lobidrag">
      <div class="panel-body" style="    border: 3px solid #D7D4D6;">
               <div class="sortableTable__container">
               <div id="for_filter_by" class="for_filter_by" style="display: inline;">
                  <label for="filter_by"><?php echo display('Filter By') ?>&nbsp;&nbsp;
                  </label>
                  <select id="filterby" style="border-radius:5px;height:25px;" >
                    <option value="1"><?php echo display('sl') ?></option>
                     <option value="2"><?php echo ('Employee Name') ?></option>
                     <option value="3"><?php echo ('Job Title') ?></option>
                     <option value="4"><?php echo ('Month') ?></option>
                     <option value="5"><?php echo ('Total Hours/ Days') ?></option>
                     <option value="6"><?php echo ('Total Amount') ?></option>
                     <option value="7"><?php echo ('Over Time') ?></option>
                     <option value="8"><?php echo ('Sales Comission') ?></option>
                  </select>
                  <input id="filterinput" style="height:25px;" type="text" >
               </div>
            


               <div id="printableArea">
               <div class="sortableTable__discard">
                     </div>
                  <div id="customers">
                     <table class="table table-bordered" cellspacing="0" width="100%" id="ProfarmaInvList">
                     <thead>

<tr class="btnclr" style="height: 37px;"  >

<th  class="1 value" data-control-column="1"><?php echo display('sl') ?></th>
<th  class="2 value" data-control-column="2"  style="text-align:center;">Employee Name</th>
<th  class="3 value" data-control-column="3"  style="text-align:center;">Job Title</th>
 <th class="4 value" data-control-column="4"  style="text-align:center;">Month</th>
<th  class="5 value" data-control-column="5"  style="text-align:center;">Total Hours/ Days</th>
<th  class="6 value" data-control-column="6"  style="text-align:center;">Total Amount</th>
<th  class="7 value" data-control-column="7" style="text-align:center;">Over Time </th>
<th  class="8 value" data-control-column="8"   style="text-align:center;">Sales Commission</th>
 


<th class="text-center"><?php echo display('action') ?></th>

</tr>

</thead>

<tbody>


<?php $s = 1; foreach ($dataforpayslip as $key => $list) { ?>




<tr style="text-align:center" role="row"  class=" odd task-list-row" data-task-id="<?php echo $count; ?>"
data-pname="<?php echo isset($list['first_name']) ? $list['first_name'] . " " : "";
echo isset($list['middle_name']) ? $list['middle_name'] . " " : "";
echo isset($list['last_name']) ? $list['last_name'] : ""; ?>" 
data-model="<?php echo $list['job_title']; ?>"
data_category="<?php echo $list['month']; ?>"
data-unit="<?php echo $list['total_hours']; ?>"
data-supplier="<?php echo $list['extra_this_hour']; ?>">




    <td  data-col="1" class="1" style="text-align:center;" tabindex="0"><?php echo $s; ?></td>
   <td  data-col="2" class="2" style="text-align:center;"><?php echo isset($list['first_name']) ? $list['first_name'] . " " : "";
    echo isset($list['middle_name']) ? $list['middle_name'] . " " : "";
    echo isset($list['last_name']) ? $list['last_name'] : ""; ?></td>

    <td data-col="3" class="3"  style="text-align:center;"><?php echo $list['job_title']; ?></td>
      <td  data-col="4" class="4"  style="text-align:center;"><?php echo $list['month']; ?></td>

     <td  data-col="5" class="5"  style="text-align:center;">
<?php echo !empty($list['total_hours']) ? $list['total_hours'] : '0'; ?>
</td>




<td  data-col="6" class="6"   style="text-align:center;">
<?php
if (!empty($list['extra_this_hour'])) {
echo $list['above_extra_sum'] + $list['extra_thisrate'];
} else {
echo $list['above_extra_sum'] + 0; // Display 0 when $list['extra_this_hour'] is empty
}
?>
</td>
 
<td  data-col="7" class="7"  style="text-align:center;"><?php echo !empty($list['extra_this_hour']) ? $list['extra_this_hour'] : '0'; ?></td>
 



<td data-col="8" class="8" style="text-align:center;">
    <?php
    if ($list['choice'] == 'Yes') {
        echo $list['sales_c_amount'];
    } else {
        echo $list['sales_c_amount'];
    }
    ?>
</td>
 
     
    <td style="text-align:center;"><a href="<?php echo base_url('Chrm/time_list/'.$list['timesheet_id'] .'/'. trim($list['templ_name'])) ?>" class="btnclr btn btn-success btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="View Pay Slip"><i class="fa fa-window-restore" aria-hidden="true"></i></a>
    </td>
    <input type="hidden" value="<?php echo $list['timesheet_id']; ?>">
    <input type="hidden" value="<?php echo $list['create_by']; ?>">
</tr>

<?php $s++; } ?>


</tbody>









<tfoot>
<?php
$total_hours = 0;
$extra_this_hour = 0;
$sales_c_amount = 0;

foreach($dataforpayslip as $sum) {
$total_hours += $sum['total_hours'];
$extra_this_hour += $sum['extra_this_hour'];
$sales_c_amount += $sum['sales_c_amount'];
}
?>

<tr class="btnclr">
<td colspan="4" style="text-align:end;">Total :</td>
<td style="text-align: center;"><?php echo number_format($total_hours, 2); ?></td>

<td style="text-align:center;">
<?php
$extra_total = 0;
if (!empty($dataforpayslip)) {
foreach ($dataforpayslip as $item) {
if (!empty($item['extra_this_hour'])) {
$extra_total += $item['above_extra_sum'] + $item['extra_thisrate'];
} else {
$extra_total += $item['above_extra_sum'];
}
}
}
echo number_format($extra_total, 2);
?>
</td>

<td style="text-align: center;"><?php echo number_format($extra_this_hour, 2); ?></td>
<td style="text-align: center;"><?php echo number_format($sales_c_amount, 2); ?></td>
<td></td>

</tr>
</tfoot>

                     </table>
                  </div>
               </div>
            </div>
         </div>
     


 <!--<div id="myModal_colSwitch"  name="mysupplierName"      class="modal_colSwitch" >-->
 <!--        <div class="modal-content_colSwitch" style="width:55%;height:25%;">-->
 <!--           <span class="close_colSwitch">&times;</span>-->
 <!--           <div class="col-sm-1" ></div>-->
 <!--           <div class="col-sm-2" >-->
 <!--              <br>-->
 <!--              <div class="form-group row"  >-->
 <!--                 <br><input type="checkbox"  data-control-column="1"  class="1" value="1"/> &nbsp;<?php echo display('ID') ?><br>-->
                  <!-- <br><input type="checkbox"  data-control-column="2"  class="2" value="2"/>&nbsp;<?php echo display('Company ID') ?><br> -->
                  <!-- <br><input type="checkbox"  data-control-column="3"  class="3" value="3"/>&nbsp;<?php echo display('Name') ?><br> -->
 <!--                 <br><input type="checkbox"  data-control-column="4"  class="4" value="4"/>&nbsp;<?php echo display('Address') ?><br>-->
                  <!-- <br><input type="checkbox"  data-control-column="5"   class="5" value="5"/>&nbsp;<?php echo display('Mobile') ?><br> -->
 <!--                 <br><input type="checkbox"  data-control-column="6"  class="6" value="6"/>&nbsp;<?php echo display('Business Phone') ?><br>-->
 <!--              </div>-->
 <!--           </div>-->
 <!--           <div class="col-sm-2" >-->
 <!--              <br>-->
 <!--              <div class="form-group row"  >-->
                  <!-- <br><input type="checkbox"  data-control-column="7"  class="7" value="7"/>&nbsp;<?php echo display('Primary Email') ?> <br> -->
 <!--                 <br><input type="checkbox"  data-control-column="8"   class="8" value="8"/>&nbsp;<?php echo display('City') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="9"   class="9" value="9"/>&nbsp;<?php echo display('Country') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="10"  class="10" value="10"/>&nbsp;<?php echo display('Credit limit') ?><br>-->
                  <!-- <br><input type="checkbox"  data-control-column="22"   class="22" value="22"/>&nbsp;<?php echo ('Open Balance') ?><br> -->
 <!--              </div>-->
 <!--           </div>-->
 <!--           <div class="col-sm-2"  >-->
 <!--              <br>-->
 <!--              <div class="form-group row"  >-->
                  <!-- <br> <input type="checkbox"  data-control-column="11"   class="11" value="11"/>&nbsp;<?php echo display('Vendor Type') ?><br> -->
 <!--                 <br><input type="checkbox"  data-control-column="12"  class="12" value="12"/>&nbsp;<?php echo display('Secondary Email') ?> <br>-->
 <!--                 <br><input type="checkbox"  data-control-column="13"  class="13" value="13"/>&nbsp;<?php echo display('Contact Person') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="14"  class="14" value="14"/>&nbsp;<?php echo display('Fax') ?><br>-->
 <!--              </div>-->
 <!--           </div>-->
 <!--           <div class="col-sm-2"  >-->
 <!--              <br>-->
 <!--              <div class="form-group row"  >-->
 <!--              <br><input type="checkbox"  data-control-column="15"  class="15" value="15"/>&nbsp;<?php echo display('Tax Collected') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="16"  class="16" value="16"/>&nbsp;<?php echo display('State') ?><br>-->
 <!--                 <br> <input type="checkbox"  data-control-column="17"  class="17" value="17"/>&nbsp;<?php echo display('Zip code') ?> <br>-->
                 
 <!--              </div>-->
 <!--           </div>-->
 <!--           <div class="col-sm-2"  >-->
 <!--              <br>-->
 <!--              <div class="form-group row"  > <br><input type="checkbox"  data-control-column="18"  class="18" value="18"/>&nbsp;<?php echo display('Supplier Details') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="19"  class="19" value="19"/>&nbsp;<?php echo ('Preferredcurrency') ?><br>-->
 <!--                 <br><input type="checkbox"  data-control-column="20"  class="20" value="20"/>&nbsp;<?php echo display('Payment Terms') ?><br>-->
                  <!-- <br><input type="checkbox"  data-control-column="21"  class="21" value="21"/>&nbsp;<?php echo display('Action') ?><br> -->
 <!--              </div>-->
 <!--           </div>-->
 <!--        </div>-->
 <!--     </div>-->
</section>
</div>

<input type="hidden" value="Vendor/Vendor" id="url"/>
<script src="<?php echo base_url()?>assets/js/jquery.bootgrid.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.0.0-alpha.1/jspdf.plugin.autotable.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css"> -->
<script type="text/javascript" src="<?php echo base_url()?>my-assets/js/profarma.js"></script>
<script>
   $(document).on('keyup', '#filterinput', function(){
    
debugger;

       var value = $(this).val().toLowerCase();
      var filter=$("#filterby").val();
      $("#ProfarmaInvList tr:not(:eq(0))").filter(function() {
          $(this).toggle($(this).find("td."+filter).text().toLowerCase().indexOf(value) > -1)
      });
   });
   
   
      var csrfName = '<?php echo $this->security->get_csrf_token_name();?>';
   var csrfHash = '<?php echo $this->security->get_csrf_hash();?>';
   $editor = $('#submit'),
    $editor.on('click', function(e) {
      if (this.checkValidity && !this.checkValidity()) return;
      e.preventDefault();
      var yourArray = [];
      //loop through all checkboxes which is checked
      $('.modal-content_colSwitch input[type=checkbox]:not(:checked)').each(function() {
        yourArray.push($(this).val());//push value in array
      });
     
      values = {
      
        extralist_text: yourArray
      
      };
      console.log(values)
      var json=values;
      var data = {
          page:$('#url').val(),
            content: yourArray
         
         };
         data[csrfName] = csrfHash;
   $.ajax({
      
      type: "POST",  
      url:'<?php echo base_url();?>Ccustomer/setting',
     
      data: data,
      dataType: "json", 
      success: function(data) {
          if(data) {
             console.log(data);
          }
      }  
   });
    });
   
    $( document ).ready(function() {
     var page=$('#url').val();
     page=page.split('/');
      var data = {
          'menu':page[0],
          'submenu':page[1]
           
         
         };
        
         data[csrfName] = csrfHash;
      $.ajax({
      
      type: "POST",  
      url:'<?php echo base_url();?>Ccustomer/get_setting',
     
      data: data,
      dataType: "json", 
      success: function(data) {
       var menu=data.menu;
       var submenu=data.submenu;
       if(menu=='Vendor' && submenu=='Vendor'){
       var s=data.setting;
   s=JSON.parse(s);
   console.log(s);
   for (var i = 0; i < s.length; i++) {
      console.log(s[i]);
      $('td.'+s[i]).hide(); // hide the column header th
      $('th.'+s[i]).hide();
   $('tr').each(function(){
       $(this).find('td:eq('+$('td.'+s[i]).index()+')').hide();
   });
      }
      for (var i = 0; i < s.length; i++) {
          if( $('.'+s[i]))
    $('.'+s[i]).prop('checked', false); //check the box from the array, note: you need to add a class to your checkbox group to only select the checkboxes, right now it selects all input elements that have the values in the array 
      }  
   }
      }
   });
   
   
   });
   
   
   
   
   $(document).ready(function() {
  // Function to toggle column visibility
  function toggleColumnVisibility(columnSelector, isChecked) {
    $(columnSelector).toggle(isChecked);
  }

  // Loop through checkboxes and initialize column visibility
  $("input:checkbox").each(function() {
    var columnValue = $(this).attr("value");
    var columnSelector = "table ." + columnValue;
    var isChecked = localStorage.getItem(columnSelector) === "true" || $(this).prop("checked");
    
    // Store checkbox state in localStorage
    localStorage.setItem(columnSelector, isChecked);

    // Toggle column visibility based on checkbox state
    toggleColumnVisibility(columnSelector, isChecked);
    
    // Set checkbox state
    $(this).prop("checked", isChecked);
  });

  // When a checkbox is clicked, update localStorage and toggle column visibility
  $("input:checkbox").click(function() {
    var columnValue = $(this).attr("value");
    var columnSelector = "table ." + columnValue;
    var isChecked = $(this).is(":checked");
    
    // Store checkbox state in localStorage
    localStorage.setItem(columnSelector, isChecked);

    // Toggle column visibility based on checkbox state
    toggleColumnVisibility(columnSelector, isChecked);
  });
});

   
 
      
   $("#search").on("keyup", function() {
   var value = $(this).val().toLowerCase();
   $("#ProfarmaInvList tr:not(:eq(0))").filter(function() {
   
   $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
   });
   });
   
   var
   filters = {
   user: null,
   status: null,
   milestone: null,
   priority: null,
   tags: null
   };
   

 

   function updateFilters() {
   $('.task-list-row').hide().filter(function() {
   var
     self = $(this),
     result = true; // not guilty until proven guilty
   
   Object.keys(filters).forEach(function (filter) {
     if (filters[filter] && (filters[filter] != 'None') && (filters[filter] != 'Any')) {
       result = result && filters[filter] == self.data(filter);
     
     }
   });
   
   return result;
   }).show();
   }
   
   function changeFilter(filterName) {
   filters[filterName] = this.value;
   updateFilters();
   }
     
   // Assigned User Dropdown Filter
   $('#pname-filter').on('change', function() {
       // alert('hi');
     changeFilter.call(this, 'pname');
   });
   
   // Task Status Dropdown Filter
   $('#model-filter').on('change', function() {
     changeFilter.call(this, 'model');
   });
   
   // Task Milestone Dropdown Filter
   $('#category-filter').on('change', function() {
     changeFilter.call(this, 'category');
   });
   
   // Task Priority Dropdown Filter
   $('#unit-filter').on('change', function() {
     changeFilter.call(this, 'unit');
   });
   
   // Task Tags Dropdown Filter
   $('#supplier-filter').on('change', function() {
     changeFilter.call(this, 'supplier');
   });
   
   
   function search() {
   var input_pname,
   input_model,
   input_category,
   input_unit,
   input_supplier,
   
   filter_pname,filter_model,filter_category,filter_unit,filter_supplier,
   table,
   tr,
   td,
   i,
   
   input_pname = document.getElementById("myInput1");
   input_model = document.getElementById("myInput2");
   input_category = document.getElementById("myInput3");
   input_unit = document.getElementById("myInput4");
   input_supplier = document.getElementById("myInput5");
   
   filter_pname = input_pname.value.toUpperCase();    
   filter_model = input_model.value.toUpperCase();
   filter_category = input_category.value.toUpperCase();    
   filter_unit = input_unit.value.toUpperCase();
   filter_supplier = input_supplier.value.toUpperCase();
   
   
   
   table = document.getElementById("ProfarmaInvList");
   tr = table.getElementsByTagName("tr");
   for (i = 0; i < tr.length; i++) {
   td = tr[i].getElementsByTagName("td")[1];
   td1 = tr[i].getElementsByTagName("td")[2];
   td2 = tr[i].getElementsByTagName("td")[3];
   td3 = tr[i].getElementsByTagName("td")[4];
   td4 = tr[i].getElementsByTagName("td")[6];
   
   if (td && td1 && td2 && td3 && td4) {
     input_pname = (td.textContent || td.innerText).toUpperCase();
     input_model = (td1.textContent || td1.innerText).toUpperCase();
     input_category = (td2.textContent || td2.innerText).toUpperCase();
     input_unit = (td3.textContent || td3.innerText).toUpperCase();
     input_supplier = (td4.textContent || td4.innerText).toUpperCase();
     if (
       input_pname.indexOf(filter_pname) > -1 &&
       input_model.indexOf(filter_model) > -1 &&
       input_category.indexOf(filter_category) > -1 &&
       input_unit.indexOf(filter_unit) > -1 &&
       input_supplier.indexOf(filter_supplier) > -1
     ) {
       tr[i].style.display = "";
     } else {
       tr[i].style.display = "none";
     }
   }
   }
   }
   
   
   
    $(document).ready(function(){
   $('#search_area').hide();
   });
   $('#s_icon').click(function(){
      $('#search_area').toggle();
   });
   
      
   function reload(){
      location.reload();
   }
   
   
   
          
          
          
      $(document).ready(function() {
      // Function to store the visibility state of rows in localStorage
      function storeVisibilityState() {
          var suppliervisibilityStates = {};
          $("#ProfarmaInvList tr").each(function(index, element) {
              var row = $(element);
              var rowID = index;
              var isVisible = row.is(':visible');
              suppliervisibilityStates[rowID] = isVisible;
          });
          // Store the visibility states in localStorage
          localStorage.setItem("suppliervisibilityStates", JSON.stringify(suppliervisibilityStates));
      }
   
      // Apply the stored visibility state on page load
      function applyVisibilityState() {
          var storedVisibilityStates = JSON.parse(localStorage.getItem("suppliervisibilityStates")) || {};
          $("#ProfarmaInvList tr").each(function(index, element) {
              var row = $(element);
              var rowID = index;
              if (storedVisibilityStates.hasOwnProperty(rowID) && !storedVisibilityStates[rowID]) {
                  row.hide();
              } else {
                  row.show();
              }
          });
      }
   
      // Event listener for row clicks to toggle row visibility
      $(".supplier-edit").on('click', function() {
          var row = $(this);
          storeVisibilityState(); // Store the updated visibility state
      });
   
      // Event listener for submitting edited data
      $(".updateVendor").on('submit', function(event) {
          event.preventDefault();
          var editedData = $("#editedData").val();
          // Store the edited data in localStorage
          localStorage.setItem("editedData", editedData);
      });
   
      // Display the stored edited data
      function displayEditedData() {
          var editedData = localStorage.getItem("editedData");
          if (editedData) {
              $("#displayEditedData").text(editedData);
          }
      }
   
      applyVisibilityState(); // Apply the stored visibility state on page load
      displayEditedData(); // Display the stored edited data on page load
   });
          
     $(document).ready(function() {
       var localStorageName = "mysupplierName"; // Set your desired localStorage name
      $("input:checkbox").each(function() {
          var columnValue = $(this).attr("value");
          var columnSelector = ".table ." + columnValue;
        //   var isChecked = localStorage.getItem(columnSelector) === "true";
                    var isChecked = localStorage.getItem(localStorageName  + columnSelector) === "true";
          // Check if the checkbox is checked or the stored state is true
          if (isChecked || $(this).prop("checked")) {
              $(columnSelector).show(); // Show the column
          } else {
              $(columnSelector).hide(); // Hide the column
          }
          $(this).prop("checked", isChecked);
      });
      // When a checkbox is clicked, update localStorage and toggle column visibility
      $("input:checkbox").click(function() {
          var columnValue = $(this).attr("value");
          var columnSelector = ".table ." + columnValue; // Corrected class name construction
          var isChecked = $(this).is(":checked");
        //   localStorage.setItem(columnSelector, isChecked); // Store checkbox state in localStorage
                    localStorage.setItem(localStorageName + columnSelector, isChecked); // Store checkbox state in localStorage
          // Toggle column visibility based on the checkbox state
          if (isChecked) {
              $(columnSelector).show(); // Show the column
          } else {
              $(columnSelector).hide(); // Hide the column
          }
      });
});     
          

</script>
<style>
   .select2-selection__rendered{
   display:none;
   }
   .ads{
   max-width: 0px !important;
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
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
    width: 130px;
  }

}
   
   
   
   
   
   
</style>