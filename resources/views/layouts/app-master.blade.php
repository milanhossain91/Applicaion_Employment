<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Career Form</title>

    <!-- Bootstrap core CSS -->
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! url('assets/css/custom.css') !!}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">





    <!-- Custom styles for this template -->
    <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
</head>
<body>

    @include('layouts.partials.navbar')

    <main class="container-fluid">
        @yield('content')
    </main>

    <script src="{!! url('assets/js/custom.js') !!}"></script>
    <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function is_appliedjobbefore(value)
        {
            if(value=='yes')
            {
                $( ".when" ).show( "slow" );
            }
            else
            {
                $( ".when" ).hide( "slow" );
            }
        }

        function is_anypoliticalorganization(value)
        {
            if(value=='Yes')
            {
                $( ".anypoliticalorganization" ).show( "slow" );
            }
            else
            {
                $( ".anypoliticalorganization" ).hide( "slow" );
            }
        }

        function is_married(value)
        {
            if(value=='Married')
            {
                $( ".spouse" ).show( "slow" );
            }
            else
            {
                $( ".spouse" ).hide( "slow" );
            }
        }

    // Add new row in the table
    $("#add_row").unbind('click').bind('click', function() {
        var table = $("#education_info_table");
        var count_table_tbody_tr = $("#education_info_table tbody tr").length;
        var row_id = count_table_tbody_tr + 1;
                    var html = '<tr id="row_'+row_id+'">'+
                            '<td><input type="text" name="title[]" id="title_'+row_id+'" class="form-control"></td>'+
                            '<td><input type="text" name="name[]" id="name_'+row_id+'" class="form-control"></td>'+
                            '<td><input type="text" name="from[]" id="from_'+row_id+'" class="form-control"></td>'+
                            '<td><input type="text" name="to[]" id="to_'+row_id+'" class="form-control"></td>'+
                            '<td><input type="text" name="last_salary_drawn[]" id="last_salary_drawn_'+row_id+'" class="form-control"></td>'+
                            '<td><input type="text" name="leaving_reason[]" id="leaving_reason_'+row_id+'" class="form-control"></td>'+
                            '<td><button type="button" class="btn btn-default" onclick="removeeducationRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                            '</tr>';

                        if(count_table_tbody_tr >= 1) {
                        $("#education_info_table tbody tr:last").after(html);
                    }
                    else {
                        $("#education_info_table tbody").html(html);
                    }


            return false;
        });


        function removeeducationRow(tr_id)
        {
            $("#education_info_table tbody tr#row_"+tr_id).remove();
        }

        $("#add_row_previous").unbind('click').bind('click', function() {
            var table = $("#previousem_info_table");
            var count_table_tbody_tr = $("#previousem_info_table tbody tr").length;
            var row_id = count_table_tbody_tr + 1;
                        var html = '<tr id="row_'+row_id+'">'+
                                '<td><input type="text" name="title[]" id="title_'+row_id+'" class="form-control"></td>'+
                                '<td><input type="text" name="name[]" id="name_'+row_id+'" class="form-control"></td>'+
                                '<td><input type="date" name="from[]" id="from_'+row_id+'" class="form-control"></td>'+
                                '<td><input type="date" name="to[]" id="to_'+row_id+'" class="form-control"></td>'+
                                '<td><input type="text" name="last_salary_drawn[]" id="last_salary_drawn_'+row_id+'" class="form-control"></td>'+
                                '<td><input type="text" name="leaving_reason[]" id="leaving_reason_'+row_id+'" class="form-control"></td>'+
                                '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                                '</tr>';

                            if(count_table_tbody_tr >= 1) {
                            $("#previousem_info_table tbody tr:last").after(html);
                        }
                        else {
                            $("#previousem_info_table tbody").html(html);
                        }


            return false;
        });


        function removeRow(tr_id)
        {
            $("#previousem_info_table tbody tr#row_"+tr_id).remove();
        }
    </script>



  </body>
</html>
