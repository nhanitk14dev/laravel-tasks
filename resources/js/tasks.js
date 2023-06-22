import DataTable from "datatables.net-dt";
import flatpickr from "flatpickr";

let table = new DataTable("#myTable", {
    responsive: true,
    searchPanes: true,
    columnDefs: [
        { orderable: false, width: "10%", targets: -1 }
     ]
});

flatpickr(".date-flatpickr", {
    defaultDate: "today",
    dateFormat: "Y-m-d",
});

$(".delete-task").on("click", function () {
    let url = $(this).attr("data-url");
    let token = $('meta[name="csrf-token"]').attr("content");
    $.ajax({
        url: url,
        method: "DELETE",
        data: { _token: token },
    })
        .done(function (res) {
            alert(res.msg);
            setTimeout(() => {
                location.reload();
            }, 1000);
        })
        .fail(function (res) {
            alert(res.res);
        });
});
