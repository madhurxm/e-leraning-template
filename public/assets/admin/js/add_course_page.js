$(document).on("click", "#add_button", function () {
    $("#add_course_div").removeAttr("hidden");
    $("#edit_course_div").attr("hidden", "true");
});
$(document).on("click", "#edit_button", function () {
    $("#edit_course_div").removeAttr("hidden");
    $("#add_course_div").attr("hidden", "true");
});

$(document).on("click", ".delete_course", function () {
    var del_id = $(this).attr("abc");
    var btn = $(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        type: "DELETE",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
        },
        url: "/admin/course/" + del_id,
        data: { course_id: del_id },
        success: function (response) {
            if (response == "1") {
                btn.parents("form").remove();
            }
        },
    });
});

$(document).on("click", ".update_course", function (e) {
    e.preventDefault();
    var upd_id = $(this).attr("abc");
    var btn = $(this);
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    var formData = new FormData($(this).parents("form")[0]);
    $.ajax({
        type: "POST",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
        },
        url: "/admin/course" + upd_id,
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        async: false,
        success: function (response) {
            if (response == '1') {
    

                $("#massage").removeAttr("hidden");
                $("#massage").css({ 'display' : '' });
                // alert(upi_id);
            $("#massage").fadeOut("slow", function () {
                // $('#add_course_div').html($('#add_course_div').data('old-state'));
                
                // alert(upi_id);
                
                // alert(upd_id);
            });
            jQuery("[img_id="+upd_id+"]").load(location.href + " [img_id="+upd_id+"]");
            
            } else {
                $("#massage").attr("hidden","true");
                
            }
            
            // alert(response);
            // if (response == '1') {
            // $(btn).load(location.href + btn);
            // }
        },
    });
    

    // return false;
});

$("#load_another_form").click(function () {
    var clone = $("#template_form").clone();
    $(clone).removeAttr("id");
    $("#displayed_forms_div").append(clone);
});

$(document).on("click", ".remove_create_form", function () {
    $(this).parents("form").remove();
});

$("#submit_create_course_form").on("click", function (e) {
    e.preventDefault();
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    var i = 0;
    var form_count = 0;
    $("#displayed_forms_div form").each(function () {
        var formData = new FormData($(this)[0]);
        ++form_count;
        $.ajax({
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
            },
            url: "/admin/course",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            success: function (response) {
                if (response == "1") {
                    i++;
                    // jQuery("#massage").removeAttr("hidden");
                    // $("#massage").fadeOut("slow", function () {
                    //     // jQuery("#massage").attr("hidden", "true");
                    // });
                } else {
                    // jQuery("#massage").attr("hidden", "true");
                }
            },
        });
    });
    if (i == form_count) {
        jQuery("#massage").removeAttr("hidden");
        $("#massage").fadeOut(5000, function () {
            // $('#add_course_div').html($('#add_course_div').data('old-state'));
            
            
            // jQuery("#massage").attr("hidden", "true");
        });
        for (var ia = 0, len = form_count; ia <= len; ia++) {
            jQuery("form")[ia].reset();
        };
        
        $("#add_course_div").attr("hidden","true");
        // $("#add_course_div").load(location.href+" #add_course_div");
         
    } else {
        jQuery("#massage").attr("hidden", "true");
    }
});
