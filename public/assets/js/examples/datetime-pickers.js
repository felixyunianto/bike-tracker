"use strict";!function(o){o(function(){function t(t,e){o("#daterange-ex-4 span").html(t.format("MMMM D, YYYY")+" - "+e.format("MMMM D, YYYY"))}var e,n,a;o("#daterange-ex-1").daterangepicker(),o("#daterange-ex-2").daterangepicker({timePicker:!0,timePickerIncrement:30,locale:{format:"MM/DD/YYYY h:mm A"}}),o("#daterange-ex-3").daterangepicker({singleDatePicker:!0,showDropdowns:!0},function(t,e,n){var a=moment().diff(t,"years");alert("You are "+a+" years old.")}),e=moment().subtract(29,"days"),n=moment(),o("#daterange-ex-4").daterangepicker({startDate:e,endDate:n,ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}},t),t(e,n),o('[data-plugin="clockpicker"]').clockpicker({donetext:"Done"}),o("#clockpicker-3").clockpicker({placement:"right",align:"left",donetext:"Done"}),a=o("#single-input").clockpicker({placement:"bottom",align:"left",autoclose:!0,default:"now"}),o("#check-minutes").click(function(t){t.stopPropagation(),a.clockpicker("show").clockpicker("toggleView","minutes")})})}(jQuery);