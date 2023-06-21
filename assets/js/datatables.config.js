$(function() {
    'use strict';
  
    var dt_basic_table = $('.datatables-basic');
  
    // DataTable with buttons
    // --------------------------------------------------------------------
  
    if (dt_basic_table.length) {
      var dt_basic = dt_basic_table.DataTable({
        order: [[0, 'desc']],
        dom:
          '<"d-flex justify-content-between align-items-center row"<"col-sm-12 col-md-4 justify-content-start"f><"col-2 col-md-2"l><"col-sm-12 col-md-6 dt-action-buttons text-end"B>>t<"d-flex justify-content-between row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        displayLength: 10,
        lengthMenu: [10, 25, 50, 75, 100],
        buttons: [
          {
            extend: 'collection',
            className: 'btn btn-label-primary dropdown-toggle me-2',
            text: '<i class="bx bx-show me-1"></i>Export',
            buttons: [
              {
                extend: 'print',
                text: '<i class="bx bx-printer me-1" ></i>Print',
                className: 'dropdown-item',
              },
              {
                extend: 'csv',
                text: '<i class="bx bx-file me-1" ></i>Csv',
                className: 'dropdown-item',
              },
              {
                extend: 'excel',
                text: 'Excel',
                className: 'dropdown-item',
              },
              {
                extend: 'pdf',
                text: '<i class="bx bxs-file-pdf me-1"></i>Pdf',
                className: 'dropdown-item',
              },
              {
                extend: 'copy',
                text: '<i class="bx bx-copy me-1" ></i>Copy',
                className: 'dropdown-item',
              }
            ]
          },
        ],
        language: {
            search: "",
            searchPlaceholder:"Search...",
            lengthMenu: "_MENU_"
        }, 
        scrollY: "300px",
        scrollX: !0,
        // responsive: {
        //   details: {
        //     display: $.fn.dataTable.Responsive.display.modal({
        //       header: function(row) {
        //         var data = row.data();
        //         return 'Details of ' + data['full_name'];
        //       }
        //     }),
        //     type: 'column',
        //     renderer: function(api, rowIdx, columns) {
        //       var data = $.map(columns, function(col, i) {
        //         return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
        //           ? '<tr data-dt-row="' +
        //               col.rowIndex +
        //               '" data-dt-column="' +
        //               col.columnIndex +
        //               '">' +
        //               '<td>' +
        //               col.title +
        //               ':' +
        //               '</td> ' +
        //               '<td>' +
        //               col.data +
        //               '</td>' +
        //               '</tr>'
        //           : '';
        //       }).join('');
  
        //       return data ? $('<table class="table"/><tbody />').append(data) : false;
        //     }
        //   }
        // }
      });
      $(".dataTables_filter .form-control").removeClass("form-control-sm");
      $(".dataTables_length .form-select").removeClass("form-select-sm");
    }
  });