<!DOCTYPE html>

<html>

<head>

    <title>Employee App</title>

    <style>

    .page-break {

        page-break-after: always;

    }

    table.table-bordered > thead > tr > th{

      border:1px solid #a1a1a1;

      padding: 4px;

    }

    table.table-bordered > tbody > tr > td{

      border:1px solid #a1a1a1;

      padding: 4px;

    }

    .table{

        width: 100%;

    }

    </style>

</head>

<body>

  

<div>

        @include('pdftable', ['data' => $employee])

</div>

   

</body>

</html>