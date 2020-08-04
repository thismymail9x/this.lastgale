$(document).ready(function (date) {
    var bookedDays = [];
    function getBookedDayOfHouse() {
        const houseId = $("#name-house").attr("data-id");
        let origin = window.location.origin;
        $.ajax({
            type: "GET",
            url: origin + "/houses/" + houseId + "/booked-day",
            dataType: "json",
            success: function (response) {
                console.log($("#endDate").val());
                bookedDays = response;
                var today = new Date(
                    new Date().getFullYear(),
                    new Date().getMonth(),
                    new Date().getDate()
                );
                $("#startDate").datepicker({
                    uiLibrary: "bootstrap4",
                    iconsLibrary: "fontawesome",
                    format: "dd/mm/yyyy",
                    minDate: function () {
                        if ($("#endDate").val() === "") {
                            return today;
                        } else {
                            let newEndDateFormat = $("#endDate")
                                .val()
                                .split("/");
                            let endDate = new Date(
                                newEndDateFormat[2],
                                newEndDateFormat[1] - 1,
                                newEndDateFormat[0]
                            );
                            for (let i = bookedDays.length - 1; i >= 0; i--) {
                                if (
                                    endDate >
                                    new Date(
                                        bookedDays[i].split("/")[2],
                                        bookedDays[i].split("/")[1] - 1,
                                        bookedDays[i].split("/")[0]
                                    )
                                ) {
                                    return bookedDays[i];
                                }
                            }
                        }
                    },
                    maxDate: function () {
                        let newMaxDateFormat = $("#endDate").val().split("/");
                        let maxDate = new Date(
                            newMaxDateFormat[2],
                            newMaxDateFormat[1] - 1,
                            newMaxDateFormat[0]
                        );
                        return maxDate.setDate(maxDate.getDate() - 1);
                    },
                    disableDates: response,
                    showOtherMonths: false,
                });
                disableEndTime(response);
            },
        });
    }
    function disableEndTime(day) {
        let today = new Date(
            new Date().getFullYear(),
            new Date().getMonth(),
            new Date().getDate()
        );
        $("#endDate").datepicker({
            uiLibrary: "bootstrap4",
            iconsLibrary: "fontawesome",
            minDate: function () {
                if ($("#startDate").val() === "") {
                    return today;
                } else {
                    let newMinDateFormat = $("#startDate").val().split("/");
                    let minDate = new Date(
                        newMinDateFormat[2],
                        newMinDateFormat[1] - 1,
                        newMinDateFormat[0]
                    );
                    return minDate.setDate(minDate.getDate() + 1);
                }
            },
            maxDate: function () {
                let newStartDateFormat = $("#startDate").val().split("/");
                let startDate = new Date(
                    newStartDateFormat[2],
                    newStartDateFormat[1] - 1,
                    newStartDateFormat[0]
                );
                for (let i = 0; i < bookedDays.length; i++) {
                    if (
                        startDate <
                        new Date(
                            bookedDays[i].split("/")[2],
                            bookedDays[i].split("/")[1] - 1,
                            bookedDays[i].split("/")[0]
                        )
                    ) {
                        return bookedDays[i];
                    }
                }
            },
            showOtherMonths: false,
            format: "dd/mm/yyyy",
            disableDates: day,
        });
    }
    getBookedDayOfHouse();
});
