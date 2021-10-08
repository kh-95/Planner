

$(document).on('click', '.destroy', function () {
    var route = $(this).data('route');
    var token = $(this).data('token');
    $.confirm({
        icon: 'glyphicon glyphicon-floppy-remove',
        animation: 'rotateX',
        closeAnimation: 'rotateXR',
        title: 'تأكد عملية الحذف',
        autoClose: 'cancel|6000',
        text: 'هل أنت متأكد من الحذف ؟',
        confirmButtonClass: 'btn-outline',
        cancelButtonClass: 'btn-outline',
        confirmButton: 'نعم',
        cancelButton: 'لا',
        dialogClass: "modal-danger modal-dialog",
        confirm: function () {
            $.ajax({
                url: route,
                type: 'post',
                data: {_method: 'delete', _token: token},
                dataType: 'json',
                success: function (data) {
                    if (data.status == 0) {
                        //toastr.error(data.msg)
                        swal({
                            title: "خطأ!",
                            text: data.msg,
                            type: "error",
                            confirmButtonText: "حسناً"
                        });
                    } else {
                        $("#removable" + data.id).remove();
                        swal({
                            title: "نجحت العملية!",
                            text: data.msg,
                            type: "success",
                            confirmButtonText: "حسناً"
                        });
                        //toastr.success(data.msg)
                    }
                }
            });
        },
    });
});

$(document).on('click', '.only-confirm', function (e) {
    e.preventDefault();
    $.confirm({
        icon: 'glyphicon glyphicon-floppy-remove',
        animation: 'rotateX',
        closeAnimation: 'rotateXR',
        title: 'تأكد عملية الحذف',
        autoClose: 'cancel|6000',
        text: 'هل أنت متأكد من الحذف ؟',
        confirmButtonClass: 'btn-outline',
        cancelButtonClass: 'btn-outline',
        confirmButton: 'نعم',
        cancelButton: 'لا',
        dialogClass: "modal-danger modal-dialog",
        confirm: function () {
            $(".only-confirm").parent('form').submit();
        },
    });
});

var document_status = $("#document_status").val();
if (document_status == "1") {
    $("#replayshow").show();
} else {
    $("#replayshow").hide();
}

$("#document_status").change(function () {

    document_status = $("#document_status").val();
    if (document_status == "1") {
        $("#replayshow").show();
    } else {
        $("#replayshow").hide();
    }
});

$('.select2').select2({
    dir: "rtl"
});


// initialize with defaults
$(".file_upload_preview").fileinput({
    showUpload: false,
    showRemove: false,
    showCaption: false
});




$("#new_phone").click(function () {
    var tempField = $("#main_phone").clone().find(".phone_values").val("").end();
    // tempField.closest(".phone_values").empty();
    $("#phones_box").append(tempField);
    return false;
});

$("#new_email").click(function () {
    var $tempField = $("#main_email").clone().find(".email_values").val("").end();
    $("#emails_box").append($tempField);
    return false;
});


$("#new_address").click(function () {
    var tempField = $("#main_address").clone().find(".address_values").val("").end();
    $("#addresses_box").append(tempField);
});

function deleteDynamicPhone(anchor) {
    anchor.closest('.row').remove();
}

function deleteDynamicEmail(anchor) {
    anchor.closest('.row').remove();
}

function deleteDynamicAddress(anchor) {
    anchor.closest('.row').remove();
}

function loadComposeModal() {
    $("#composeModal").modal('show');
}


function collectDate(field) {
    var fieldId = field.id;
    var DateField = $("#"+fieldId);
    var DatePickerYear = $("#"+fieldId+"-year").val();
    var DatePickerMonth = $("#"+fieldId+"-month").val();
    var DatePickerDay = $("#"+fieldId+"-day").val();
    DateField.val(DatePickerYear.toString() + '-' + DatePickerMonth.toString() + '-' + DatePickerDay.toString());
}


function splitFlyNasDate(item , index) {
    var value = $("#"+item).val();
    var spiltedValues = value.split('-');
    $("#"+item+"-year").val(parseInt(spiltedValues[0]));
    $("#"+item+"-month").val(parseInt(spiltedValues[1]));
    $("#"+item+"-day").val(parseInt(spiltedValues[2]));
}