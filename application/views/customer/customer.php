<div class="content-wrapper">
    <section class="content-header">
        <div class="header-icon">
            <figure class="one">
                <img src="<?php echo base_url()  ?>asset/images/customer.png" class="headshotphoto"
                    style="height:50px;" />
        </div>
        <div class="header-title">
            <div class="logo-holder logo-9">
                <h1><strong><?php echo display('manage_customer')  ?></strong></h1>
            </div>
            <ol class="breadcrumb" style=" border: 3px solid #d7d4d6;">
                <li><a href="<?php echo base_url(); ?>"><i class="pe-7s-home"></i> <?php echo display('home') ?></a>
                </li>
                <li class="active" style="color:orange;"><?php echo display('manage_customer') ?></li>
                <div class="load-wrapp">
                    <div class="load-10">
                        <div class="bar"></div>
                    </div>
                </div>
            </ol>
        </div>
    </section>
      <?php
      $message = $this->session->userdata('message');
      if (isset($message)) {
          ?>
        <div class="alert alert-info alert-dismissable" style="background-color:#38469f;color:white;font-weight:bold;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <?php echo $message ?>
        </div>
        <?php
      $this->session->unset_userdata('message');
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
    <section class="content">
       <div class="panel panel-bd lobidrag">
            <div class="panel-heading" style="height: 60px;border: 3px solid #D7D4D6; ">
                <div class="col-sm-18">
                    <div class="col-sm-6" style="display: flex; align-items: left;">
                        <div class="col-sm-12">
                            <?php if($this->permission1->method('manage_user','read')->access()){?>
                            <a href="<?php echo base_url('Ccustomer/index?id='.$_GET['id']); ?>"
                                style="color:white;background-color:#424f5c;" class="btn btn-success m-b-5 m-r-2"><i
                                    class="ti-align-justify"> </i>Add Customer</a>
                            <?php }?>
                            <a href="<?php echo base_url('Ccustomer/index?id='.$_GET['id']); ?>"
                                style="color:white;background-color:#424f5c;" class="btn btn-success m-b-5 m-r-2"><i
                                    class="ti-align-justify"> </i>Add Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-body">
                            <div id="dataTableExample3">
                                <table class="table table-bordered" cellspacing="0" width="100%" id="customer">
                                    <thead>
                                        <tr style="background-color: #424f5c;color:#fff;">
                                            <th width="5%">S.No</th>
                                            <th width="7%">Customer Name</th>
                                            <th width="7%">Customer Type</th>
                                            <th width="10%">Address</th>
                                            <th width="7%">Mobile</th>
                                            <th width="8%">Email</th>
                                            <th width="7%">City</th>
                                            <th width="7%">State</th>
                                            <th width="7%">Zip</th>
                                            <th width="7%">Country</th>
                                            <th width="7%">Created Date</th>
                                            <th width="7%">Currency Type</th>
                                            <th width="7%">Creadit Limit</th>
                                            <th width="7%">Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            $(document).ready(function() {
                if ($.fn.DataTable.isDataTable('#customer')) {
                    $('#customer').DataTable().clear().destroy();
                }
                var csrfName = '<?php echo $this->security->get_csrf_token_name(); ?>';
                var csrfHash = '<?php echo $this->security->get_csrf_hash(); ?>';
                $('#customer').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "lengthMenu": [
                        [10, 25, 50, 100],
                        [10, 25, 50, 100]
                    ],
                    "ajax": {
                        "url": "<?php echo base_url('Ccustomer/getCustomerDatas?id='); ?>" +
                            encodeURIComponent('<?php echo $_GET['id']; ?>')+'&admin='+encodeURIComponent('<?php echo $_GET['admin']; ?>'),
                        "type": "POST",
                        "data": function(d) {
                            d['<?php echo $this->security->get_csrf_token_name(); ?>'] =
                                '<?php echo $this->security->get_csrf_hash(); ?>';
                        },
                        "dataSrc": function(json) {
                           csrfHash = json[
                                '<?php echo $this->security->get_csrf_token_name(); ?>'];
                            return json.data;
                        }
                    },
                    "columns": [{
                            "data": "customer_id"
                        },
                        {
                            "data": "customer_name"
                        },
                        {
                            "data": "customer_type"
                        },
                        {
                            "data": "billing_address"
                        },
                        {
                            "data": "customer_mobile"
                        },
                        {
                            "data": "primary_email"
                        },
                        {
                            "data": "city"
                        },
                        {
                            "data": "state"
                        },
                        {
                            "data": "zip"
                        },
                        {
                            "data": "country"
                        },
                        {
                            "data": "created_date"
                        },
                        {
                            "data": "currency_type"
                        },
                        {
                            "data": "credit_limit"
                        },
                        {
                            "data": "action"
                        },
                    ],
                    "columnDefs": [{
                        "orderable": false,
                        "targets": [0, 13],
                        searchBuilder: {
                            defaultCondition: '='
                        },
                        "initComplete": function() {
                            this.api().columns().every(function() {
                                var column = this;
                                var select = $(
                                        '<select><option value=""></option></select>'
                                    )
                                    .appendTo($(column.footer()).empty())
                                    .on('change', function() {
                                        var val = $.fn.dataTable.util
                                            .escapeRegex(
                                                $(this).val()
                                            );
                                        column.search(val ? '^' + val + '$' :
                                            '', true, false).draw();
                                    });
                                column.data().unique().sort().each(function(d, j) {
                                    select.append('<option value="' + d +
                                        '">' + d + '</option>')
                                });
                            });
                        },
                    }],
                    "pageLength": 10,
                    "colReorder": true,
                    "stateSave": true,
                    "stateSaveCallback": function(settings, data) {
                        localStorage.setItem('customer', JSON.stringify(data));
                    },
                    "stateLoadCallback": function(settings) {
                        var savedState = localStorage.getItem('customer');
                        return savedState ? JSON.parse(savedState) : null;
                    },
                    "dom": "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>" +
                        "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "buttons": [{
                            "extend": "copy",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "csv",
                            "title": "Report",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "pdf",
                            "title": "Report",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            }
                        },
                        {
                            "extend": "print",
                            "className": "btn-sm",
                            "exportOptions": {
                                "columns": ':visible'
                            },
                            "customize": function(win) {
                                $(win.document.body)
                                    .css('font-size', '10pt')
                                    .prepend(
                                        '<div style="text-align:center;"><h3>Manage company</h3></div>'
                                    )
                                    .append(
                                        '<div style="text-align:center;"><h4>amoriotech.com</h4></div>'
                                    );
                                $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                                var rows = $(win.document.body).find('table tbody tr');
                                rows.each(function() {
                                    if ($(this).find('td').length === 0) {
                                        $(this).remove();
                                    }
                                });
                                $(win.document.body).find('div:last-child')
                                    .css('page-break-after', 'auto');
                                $(win.document.body)
                                    .css('margin', '0')
                                    .css('padding', '0');
                            }
                        },
                        {
                            "extend": "colvis",
                            "className": "btn-sm"
                        }
                    ]
                });
            });
            </script>